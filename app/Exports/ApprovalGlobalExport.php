<?php

namespace App\Exports;

use App\Models\ApprovalModel;
use App\Models\PemohonModel;
use App\Models\SubmittedData;
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

class ApprovalGlobalExport extends DefaultValueBinder implements WithCustomCsvSettings, WithHeadings, FromQuery, WithCustomValueBinder
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
            'Request Code',
            'Username',
            'Host',
            'Request Data',
            'Response Data',
            'Service Name',
            'Insert Date',
        ];
    }

    public function query()
    {
        return SubmittedData::select('tbl_log_request.request_code', 'username', 'host', 'param', 'data', 'tbl_log_request.service_name', 'tbl_log_request.insert_date')
            ->join('tbl_log_request', 'tbl_log_response.request_code', '=', 'tbl_log_request.request_code')
            ->whereBetween(DB::raw('DATE(tbl_log_response.insert_date)'), array($this->from_date, $this->to_date));
    }
}
