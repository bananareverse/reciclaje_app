<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'image_url', 'points_required', 'stock'
    ];

    // Una recompensa puede ser canjeada por muchos usuarios
    public function redemptions(): HasMany
    {
        return $this->hasMany(Redemption::class);
    }
}
