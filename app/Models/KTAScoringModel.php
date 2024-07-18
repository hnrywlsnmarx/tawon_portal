<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KTAScoringModel extends Model
{
    use HasFactory;
    protected $table = 'kta_scoring';
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
        'flag_disbursement',
        'flag_approval',
        'created_by',
        
    ];
}
