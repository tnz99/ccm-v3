<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Timeline extends Model
{
    use HasFactory;

    public function headline(): BelongsTo
    {
        return $this->belongsTo(Headline::class);
    }
}
