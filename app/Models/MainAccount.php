<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    use HasFactory;
    protected $table = 'main_account';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'nik',
        'norek',
        
        'created_at',
        'updated_at',
    ];
}
