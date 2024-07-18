<?php

namespace App\Exports;

use App\Models\ApplicantStepFiveModel;
use App\Models\ApprovalModel;
use App\Models\KTAAdjustmentModel;
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

class AdjustmentBranchExport extends DefaultValueBinder implements WithCustomCsvSettings, WithHeadings, FromQuery, WithCustomValueBinder
{
    public function __construct(string $from_date, string $to_date, string $city)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
        $this->city = $city;
        // $this->middleware('auth');
        // $this->middleware('role:administrator');
        // dd($from_date);

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
            'Adjustment Pinjaman',
            'Angsuran Setelah Adjustment',
            'Cabang yang Ditunjuk',
            'Adjusted By',
        ];
    }

    public function query()
    {
        return KTAAdjustmentModel::select('nik', 'tokenreg', 'ref_no', 'produkkta', 'namapemohon', 'kabupatenkota', 'adjustment_pinjaman', 'angsuran_adjustment', 'desired_branch', 'created_by')
            ->where('kabupatenkota', 'like', '%' . $this->city . '%')
            ->whereBetween(DB::raw('DATE(created_at)'), array($this->from_date, $this->to_date));
    }
}
