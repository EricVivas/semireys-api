<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;
use App\Models\Currency;
use App\Models\Product;

class Sale extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('amount');
    }

    public function scopeDateBetween($query, $date_start, $date_end)
    {
        return $query->whereBetween('created_at', [$date_start, $date_end]);
    }

    public function scopeDateStart($query, $date_start)
    {
        return $query->where('created_at', '>=', $date_start);
    }

    public function scopeDateEnd($query, $date_end)
    {
        return $query->where('created_at', '<=', $date_end);
    }
}