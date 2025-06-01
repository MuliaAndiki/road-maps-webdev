<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BackendButton extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'link', 'backend_content_id'];

    public function backendContent(): BelongsTo
    {
        return $this->belongsTo(BackendContent::class);
    }
}