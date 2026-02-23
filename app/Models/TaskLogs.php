<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskLogs extends Model
{
    /** @use HasFactory<\Database\Factories\TaskLogsFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'task_id',
        'user_id',
        'message',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
