<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskMeeting extends Model
{
    /** @use HasFactory<\Database\Factories\TaskMeetingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'task_id',
        'meeting_id',
        'user_id',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function meeting()
    {
        return $this->belongsTo(Meeting::class, 'meeting_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
