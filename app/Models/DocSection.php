<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'version_id',
        'parent_section_id',
        'slug',
        'title',
        'order_index',
        'content_markdown',
        'content_html',
        'author_id',
    ];

    // Relationships
    public function version()
    {
        return $this->belongsTo(ApiVersion::class, 'version_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function parent()
    {
        return $this->belongsTo(DocSection::class, 'parent_section_id');
    }

    public function children()
    {
        return $this->hasMany(DocSection::class, 'parent_section_id');
    }

    public function endpoints()
    {
        return $this->hasMany(Endpoint::class, 'section_id');
    }
}
