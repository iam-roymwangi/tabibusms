<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DocCategory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocPage extends Model
{
    protected $fillable = [
        'doc_category_id', 
        'title', 
        'slug', 
        'http_method', 
        'endpoint_url', 
        'content', 
        'sample_code', 
        'order'
    ];

    /**
     * Cast JSON attributes to arrays automatically.
     */
    protected $casts = [
        'sample_code' => 'array',
    ];

    /**
     * Get the category this page belongs to.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(DocCategory::class, 'doc_category_id');
    }
}
