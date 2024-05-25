<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Timeline extends Model
{
    use HasFactory;

    public function headline(): BelongsTo
    {
        return $this->belongsTo(Headline::class);
    }

    public function stories(): HasMany
    {
        return $this->hasMany(Story::class);
    }
}
