<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
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
     * Post Relationship (HasOne)
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comments(): HasOne
    {
        return $this->hasOne(Post::class);
    }
}
