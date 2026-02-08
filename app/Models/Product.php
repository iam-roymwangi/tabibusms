<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'icon'];

    /**
     * Get the categories associated with this product.
     */
    public function docCategories(): HasMany
    {
        return $this->hasMany(DocCategory::class)->orderBy('order');
    }

    /**
     * Helper to find a product by its slug.
     */
    public static function findBySlug(string $slug): ?self
    {
        return self::where('slug', $slug)->firstOrFail();
    }
}