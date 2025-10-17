<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endpoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'http_method',
        'path',
        'summary',
        'description_markdown',
        'description_html',
        'deprecated',
        'since_version_id',
        'author_id',
    ];

    // Relationships
    public function section()
    {
        return $this->belongsTo(DocSection::class, 'section_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function version()
    {
        return $this->belongsTo(ApiVersion::class, 'since_version_id');
    }

    public function parameters()
    {
        return $this->hasMany(Parameter::class);
    }

    public function requestExamples()
    {
        return $this->hasMany(RequestExample::class);
    }

    public function responseExamples()
    {
        return $this->hasMany(ResponseExample::class);
    }

    public function errorCodes()
    {
        return $this->belongsToMany(ErrorCode::class, 'endpoint_error');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'endpoint_tag');
    }
}
