<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'state',
        'started_at',
        'project_id',
        'user_id'
        
    ];

    public function project(): BelongsTo {
        return $this->belongsTo(Project::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function hours(): HasMany {
        return $this->hasMany(Hour::class);
    }
}

