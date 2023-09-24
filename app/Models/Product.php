<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category;
use App\Models\Currency;
use App\Models\Sale;
use App\Models\Tax;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Currency::class);
    }

    public function sales(): BelongsToMany
    {
        return $this->belongsToMany(Sale::class);
    }

    public function taxes(): BelongsToMany
    {
        return $this->belongsToMany(Tax::class);
    }
}