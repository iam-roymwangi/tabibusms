<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiVersion extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_string',
        'display_name',
        'is_current',
        'released_at',
        'description',
    ];

    // Relationships
    public function sections()
    {
        return $this->hasMany(DocSection::class, 'version_id');
    }

    public function endpoints()
    {
        return $this->hasMany(Endpoint::class, 'since_version_id');
    }
}
