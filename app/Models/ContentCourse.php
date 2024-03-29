<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentCourse extends Model
{
    use HasFactory;
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
