<?php

namespace App\Exports;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\VCustomerMonitoringModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;



class VCustomerMonitoringExport implements FromCollection, WithCustomCsvSettings, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function collection()
    {
        $branch_id = session('branch');
        $firstchar = $branch_id[0];

        if ($firstchar != 0) {
            return VCustomerMonitoringModel::where("OPN_BR_CD", "=", $branch_id)->take(1000)->get();
        } else {
            return VCustomerMonitoringModel::all()->take(1000);
        }
    }

    public function headings(): array
    {
        return [
            'CUS_NO',
            'CUS_CLASS_CD',
            'CUS_CLASS_DESC',
            'CUS_TYPE_CD',
            'CUS_TYPE_DESC',
            'CUS_NM_RPS_CD',
            'CUS_NM_RPS_DESC',
            'CUS_LNM',
            'CUS_ENM',
            'CUS_SLIK_NM',
            'NAT_CO_CD',
            'NAT_CO_CD_DESC',
            'LOC_NAT_CD',
            'LOC_NAT_CD_DESC',
            'REL_TO_BK',
            'TAX_NO',
            'RSK_FCTR',
            'DT_OF_BIR',
            'PLC_OF_BIR',
            'GENDER_TYPE',
            'GENDER_DESC',
            'JOB_CD',
            'JOB_DESC',
            'POSITION_DESC',
            'COMP_NM',
            'CUS_CD',
            'CUS_CD_DESC',
            'MARI_STS_CD',
            'MARI_STS_DESC',
            'AM_INCM_MON',
            'AM_INCM_MON_DESC',
            'EDUCATION_CD',
            'EDUCATION_DESC',
            'INDUSTRY_TYPE_CD',
            'INDUSTRY_TYPE_DESC',
            'RELIGION_CD',
            'RELIGION_DESC',
            'NET_ASET',
            'SAL_PER_YR',
            'ART_OF_ASS_NO',
            'CORP_BUILD_DT',
            'ID_TYPE',
            'CUS_ID_NO_DESC',
            'ID_NO',
            'VALID_DT',
            'ADDRESS',
            'VILLAGE',
            'DISTRICTS_SUB',
            'CITY',
            'POSTAL_CD',
            'TEL_NO',
            'EMAIL',
            'COMP_CLASS_TYPE_CD',
            'COMP_CLASS_TYPE_DESC',
            'BUSS_TYPE_CD',
            'BUSS_TYPE_DESC',
            'OWN_GRP_CD',
            'OWN_GRP_DESC',
            'BI_BK_CD',
            'BI_BK_CD_DESC',
            'LOC_CD',
            'LOC_DESC',
            'MONTHER_NM',
            'FATHER_NM',
            'WLF_Y_N',
            'BIC_CD',
            'LN_CUS_Y_N',
            'RESIDEN_OWN_TYPE_CD',
            'RESIDEN_OWN_TYPE_DESC',
            'EST_VALUE_TRN_YR',
            'PEP_Y_N',
            'WLF_BATCH_DT',
            'SOUCE_OF_FUND_CD',
            'SOUCE_OF_FUND_DESC',
            'PURPOSE_OF_FUND_CD',
            'PURPOSE_OF_FUND_DESC',
            'STS_DSCD',
            'RGS_TRN_EMP_NO',
            'RGS_TRN_DT',
            'CHG_TRN_EMP_NO',
            'CHG_TRN_DT',
            'OPN_BR_CD',
            'LOAD_DATE',
            'REPORT_DATE',
            'DATE_DOWNLOAD',
            'KODE_AKTIFITAS',
            'WARNING_DATA',
            'USER_REVIEW',
            'USER_REVIEW_NOTE',
            'DATE_REVIEW',
            'USER_APPROVED',
            'DATE_APPROVED',
            'SPV_REVIEW_NOTE',
            'SPV_FLAG',
            'WARNING_DATA2',
            'DATE_DOWNLOAD2',
            'FLAGDOWNLOAD2',
            'TGL_REVIEW_SIS',
            'FLAG_HAS_ERR',
            'FLAG_COUNT_UPD',
        ];
    }
}
