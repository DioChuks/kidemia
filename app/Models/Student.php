<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'user_id', 'guardian_email', 'category_status'];

    public function category()
    {
        return $this->belongsTo(Category::class); // Define relationship with Category model
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Define relationship with User model
    }
}
