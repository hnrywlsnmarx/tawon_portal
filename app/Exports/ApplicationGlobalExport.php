<?php

namespace App\Exports;

use App\Models\ApplicantStepFiveModel;
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

class ApplicationGlobalExport extends DefaultValueBinder implements WithCustomCsvSettings, WithHeadings, FromQuery, WithCustomValueBinder
{

    public function __construct(string $from_date, string $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
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
            'Kabupaten/Kota',
            'Produk Pinjaman',
            'Jumlah Pinjaman',
            'Jangka Waktu',
            'Tujuan Pinjaman',
        ];
    }

    public function query()
    {
        return ApplicantStepFiveModel::select('nik', 'tokenreg', 'ref_no', 'kabupatenkota', 'produk_pinjaman', 'jumlah_pinjaman', 'jangka_waktu', 'tujuan_pinjaman')
            ->whereBetween('tgl_input', [$this->from_date, $this->to_date]);
    }
}
