<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursPaye extends Model
{
    use HasFactory;
    public function isCoursePaid($userId, $courseId)
{
    return CoursPaye::where('user_id', $userId)
                    ->where('cours_id', $courseId)
                    ->where('is_payed', true)
                    ->exists();
}
}
