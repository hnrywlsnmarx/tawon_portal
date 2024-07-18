<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBRKTAModel extends Model
{
    use HasFactory;
    protected $table = 'dbr_kta';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'nik',
        'tokenreg',
        'tgl_input',
        'ref_no',
        'namapemohon',
        'kabupatenkota',
        'pekerjaan',
        'status_bi_checking',
        'last_slik',
        'last_slik_hid',
        'nama_bank',
        'limit',
        'limit_number',
        'balance',
        'balance_number',
        'credit_facility',
        'rate',
        'maturity',
        'maturity_hid',
        'installment',
        'installment_number',
        'created_by',
    ];
}
