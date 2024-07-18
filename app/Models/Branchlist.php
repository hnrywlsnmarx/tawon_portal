<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branchlist extends Model
{
    use HasFactory;
    protected $table = 'branchlist';
    protected $primaryKey = 'branch_code';
    //public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    protected $fillable = [
        'branch_code',
        'branch_name',
        'parent_branch'
    ];


    public function user()
    {
        return $this->hasMany(User::class);
    }
}
