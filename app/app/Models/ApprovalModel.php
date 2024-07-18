<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class ApprovalModel extends Model
{
    use HasFactory;
    protected $table = 'applicant_approval_status';
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
        'status_by_ho',
        'created_by_ho',
        'status_by_cabang',
        'comment_by_cabang',
        'created_by_cabang',
    ];
}
