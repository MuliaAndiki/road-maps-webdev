<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FullstackButton extends Model
{
    use HasFactory;
    protected $fillable = ['label', 'link', 'fullstack_content_id'];

    public function fullstackContent(): BelongsTo
    {
        return $this->belongsTo(FullstackContent::class);
    }
    //
}
