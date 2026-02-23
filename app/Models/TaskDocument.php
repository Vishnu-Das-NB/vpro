<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskDocument extends Model
{
    /** @use HasFactory<\Database\Factories\TaskDocumentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'task_id',
        'document_id',
        'user_id',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
