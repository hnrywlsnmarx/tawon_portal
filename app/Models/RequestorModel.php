<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestorModel extends Model
{
    use HasFactory;
    protected $table = 'kta_requestor';
    protected $primaryKey = 'nik';
    protected $keyType = 'string';
    protected $fillable = [
        'nik',
        'tokenreg',
        'nama',
        'kabupatenkota',
        'email',
        'no_hp',
        'ip_address'
    ];
}
