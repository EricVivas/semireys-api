<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Change;

class Currency extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function changes(): HasMany
    {
        return $this->hasMany(Change::class);
    }
}