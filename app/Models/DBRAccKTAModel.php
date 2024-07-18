<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBRAccKTAModel extends Model
{
    use HasFactory;
    protected $table = 'dbr_kta_acc';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'nik',
        'tokenreg',
        'ref_no',
        'namapemohon',
        'kabupatenkota',
        'pekerjaan',
        'total_installment',
        'dbr_existing',
        'angsuran_kta',
        'new_dbr',
        'dsr_kta',
        'created_by',
    ];
}
