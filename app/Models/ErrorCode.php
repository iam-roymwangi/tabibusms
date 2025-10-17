<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErrorCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'http_status',
        'message',
        'description',
    ];

    public function endpoints()
    {
        return $this->belongsToMany(Endpoint::class, 'endpoint_error');
    }
}
