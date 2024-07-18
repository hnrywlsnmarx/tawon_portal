<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PemohonModel extends Model
{

    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'nik',
        'tokenreg',
        'name',
        'email',
        'kabupatenkota',
        'no_hp',
        'ip_address',
    ];
}
