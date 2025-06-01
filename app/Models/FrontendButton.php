<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FrontendButton extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'link', 'frontend_content_id'];

    public function frontendContent(): BelongsTo
    {
        return $this->belongsTo(FrontendContent::class);
    }
}