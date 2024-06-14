<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected string $prefix_url = 'remont';

    public function getUrlAttribute($value)
    {
        return "{$this->prefix_url}_{$value}";
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
