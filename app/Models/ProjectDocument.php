<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectDocument extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectDocumentFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'project_id',
        'document_id',
        'user_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
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
