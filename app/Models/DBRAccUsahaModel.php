<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBRAccUsahaModel extends Model
{
    use HasFactory;
    protected $table = 'dbr_usaha_acc';
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
        'bidang_usaha',
        'total_installment',
        'dbr_existing',
        'angsuran_kta',
        'new_dbr',
        'dsr_kta',
        'created_by',
    ];
}
