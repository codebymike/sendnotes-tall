<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;


class Note extends Model
{
    use HasFactory,HasUuids;

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
