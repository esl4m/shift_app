<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'email',
        'question_id',
        'answer',
        'is_correct',
    ];

    // Answer relation to users table
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    // Answer relation to questions table
    public function question()
    {
        return $this->belongsTo('App\Models\Questions', 'question_id', 'id');
    }
}
