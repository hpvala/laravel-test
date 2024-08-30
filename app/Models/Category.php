<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Scope a query to only fetch active categories.
     *
     * @return Builder
     */
    public function scopeActive(): Builder
    {
        return $this->where('status', 'Active');
    }
}
