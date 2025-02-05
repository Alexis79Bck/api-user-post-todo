<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        "user_id"
    ];

    /**
     * User Relationship (BelongsTo)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Comment Relationship (BelongsTo)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
