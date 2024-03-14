<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function contents()
    {
        return $this->hasMany(ContentCourse::class);
    }
}
