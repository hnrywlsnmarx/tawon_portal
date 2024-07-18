<?php

namespace App\Exports;

use App\Models\ApplicantStepFiveModel;
use App\Models\ApprovalModel;
use App\Models\KTADisbursementModel;
use App\Models\PemohonModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class DisbursementGlobalExport extends DefaultValueBinder implements WithCustomCsvSettings, WithHeadings, FromQuery, WithCustomValueBinder
{
    public function __construct(string $from_date, string $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);
            return true;
        }

        // $value = DataType::TYPE_STRING;
        // return true;
        return parent::bindValue($cell, $value);
    }

    public function headings(): array
    {
        return [
            'NIK',
            'Token Registrasi',
            'Reference Number',
            'Produk KTA',
            'Nama Nasabah',
            'Area Domisili',
            'Total Score',
            'Created By HO',
            'Disbursed By',
        ];
    }

    public function query()
    {
        return KTADisbursementModel::select('nik', 'tokenreg', 'ref_no', 'produkkta', 'namapemohon', 'kabupatenkota', 'totalscore', 'created_by', 'updated_by')
            ->whereBetween(DB::raw('DATE(created_at)'), array($this->from_date, $this->to_date));
    }
}
