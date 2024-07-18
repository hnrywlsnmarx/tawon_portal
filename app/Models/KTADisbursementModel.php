<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTADisbursementModel extends Model
{
    use HasFactory;
    protected $table = 'kta_disbursement';
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
        'totalscore',
        'created_by',
        'updated_by'
        
    ];
}
