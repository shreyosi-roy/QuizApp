<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    
    public $table = "quiz";
    public $fillable =['Question','Option_one','Option_two','Option_three','Option_four','correct_answer'];
    use HasFactory;
}
