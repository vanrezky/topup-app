<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'category', 'type', 'active'];

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }
}
