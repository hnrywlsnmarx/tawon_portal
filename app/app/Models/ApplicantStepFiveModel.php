<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantStepFiveModel extends Model
{
    use HasFactory;
    protected $table = 'decrypted_activity';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'norek',
        'ip_address',
        'data',
        'score',
        'stdCd',
        'decision',
        'created_at',
        'updated_at',
    ];
}
