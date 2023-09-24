<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Currency;

class Change extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function currencyChange(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency_change_id');
    }
}