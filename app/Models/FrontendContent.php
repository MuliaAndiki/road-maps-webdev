<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FrontendContent extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'item_1', 'item_2', 'cta_label', 'cta_link'];

    public function buttons(): HasMany
    {
        return $this->hasMany(FrontendButton::class);
    }
}