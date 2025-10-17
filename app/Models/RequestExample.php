<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestExample extends Model
{
    use HasFactory;

    protected $fillable = [
        'endpoint_id',
        'title',
        'content',
        'content_type',
        'description',
    ];

    public function endpoint()
    {
        return $this->belongsTo(Endpoint::class);
    }
}
