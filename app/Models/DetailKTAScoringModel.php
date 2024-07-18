<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKTAScoringModel extends Model
{
    use HasFactory;
    protected $table = 'detail_kta_scoring';
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
        'scoreusia',
        'scoremarital',
        'scoretanggungan',
        'scorehousing',
        'scorelos',
        'scoreregion',
        'scorehubungan',
        'scorepekerjaan',
        'scorejabatan',
        'scorelamabekerja',
        'scorepenghasilan',
        'scorecreditcard',
        'scorelamakepemilikan',
        'scorejumlahpinjaman',
        'scorejangkawaktu',
        'scoredhbi',
        'scoreslik',
        'scoredbr',
        'scorereferensi',
        'scoreteldeb',
        'scoretelkel',
        'scoretelper',
        'created_by',
        
    ];
}
