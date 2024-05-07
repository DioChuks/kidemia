<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'subject_id',
    ];

    /**
     * Get the subject associated with the topic.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
