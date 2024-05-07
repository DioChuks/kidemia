<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'subject_id',
        'topics_id',
        'user_id',
        'status',
        'comment',
        'score',
        'time_taken',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'topics_id' => 'json',
    ];

    /**
     * Get the user associated with the test.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the subject associated with the test.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
