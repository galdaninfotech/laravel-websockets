<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function numbers(): BelongsToMany
    {
        return $this->belongsToMany(Number::class);
    }

    public function prizes(): BelongsToMany
    {
        return $this->belongsToMany(Prize::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
