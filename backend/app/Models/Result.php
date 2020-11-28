<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
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
        'answer_id',
        'result',
    ];

    // Result relation to users table
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    // Result relation to questions table
    public function question()
    {
        return $this->hasMany('App\Models\Questions', 'question_id', 'id');
    }

    // Result relation to answers table
    public function answer()
    {
        return $this->hasMany('App\Models\Answer', 'answer_id', 'id');
    }
}
