<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReq extends Model
{
    use HasFactory;
    protected $table = 'data_req';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'nik',
        'norek',
        'ip_address',
        'perusahaan',
        'status_emp',
        'condition',
        'collateral_year',
        'collateral_month',
        'capacity',
        // 'capacity_number',
        'capital',
        // 'capital_number',
        'character',
        'created_at',
        'updated_at',
    ];
}
