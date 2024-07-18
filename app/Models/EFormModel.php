<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EFormModel extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'simulasi';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable = [
        'nik',
        'nama',
        'email',
        'no_hp',
        'kabupatenkota',
        'ip_address'
    ];
}
