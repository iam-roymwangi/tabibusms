<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;

    protected $fillable = [
        'endpoint_id',
        'name',
        'location',
        'type',
        'required',
        'default_value',
        'description',
    ];

    public function endpoint()
    {
        return $this->belongsTo(Endpoint::class);
    }
}
