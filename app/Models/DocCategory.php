<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocCategory extends Model
{
    protected $fillable = ['product_id', 'name', 'slug', 'order'];

    /**
     * Get the product this category belongs to.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the pages within this category.
     */
    public function docPages(): HasMany
    {
        return $this->hasMany('App\Models\DocPage')->orderBy('order');
    }
}