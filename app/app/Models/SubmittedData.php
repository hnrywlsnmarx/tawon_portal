<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedData extends Model
{
    use HasFactory;
    protected $table = 'submitted_data';
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
