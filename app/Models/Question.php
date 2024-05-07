<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'uuid',
        'options',
        'subject_id',
        'topic_id',
        'correct_answer',
    ];

    protected $casts = [
        'options' => 'json',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class); // Define relationship with Subject model
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class); // Define relationship with Topic model
    }
}
