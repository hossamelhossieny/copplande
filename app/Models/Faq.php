<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    protected $fillable = ['question_ar','question_en','answer_ar','answer_en'];
    protected $appends = ['question','answer'];

    public function getQuestionAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->question_ar : $this->question_en;
    }
    public function getAnswerAttribute()
    {
        return app()->getLocale() == 'ar' ? $this->answer_ar : $this->answer_en;
    }
}
