<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmittedData extends Model
{
    use HasFactory;
    protected $table = 'tbl_log_response';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $fillable =
    [
        'request_code',
        'response_code',
        'response_message',
        'data',
        'insert_date',
    ];
}
