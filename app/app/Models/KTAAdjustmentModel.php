<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTAAdjustmentModel extends Model
{
    use HasFactory;
    protected $table = 'kta_adjustment';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'nik',
        'tokenreg',
        'ref_no',
        'produkkta',
        'namapemohon',
        'kabupatenkota',
        'adjustment_pinjaman',
        'adjustment_pinjaman_number',
        'angsuran_adjustment',
        'angsuran_adjustment_number',
        'desired_branch',
        'flag_disbursement',
        'flag_approval',
        'created_by',
        
    ];
}
