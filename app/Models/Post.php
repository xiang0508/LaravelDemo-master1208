<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'content'
    ];

/**
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */

public function subject()
{
    return $this->belongsTo(Subject::class);
} 
}
