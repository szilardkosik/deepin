<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    /**
     * Retrieve order items
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mixes()
    {
        return $this->hasMany(Mix::class);
    }

    public function artists()
    {
        return Artist::whereHas('mixes', fn($query) => $query->where('episode_id', $this->id));
    }

    public function getFormatedDateAttribute() {
        return str_replace("-", ".", $this->attributes['date']);
    }
}
