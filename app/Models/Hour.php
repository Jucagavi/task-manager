<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = [
        'entry_hours',
        'description',
        'task_id',
        'user_id'        
    ];

    public function task(): BelongsTo {
        return $this->belongsTo(Task::class);
    }
}
