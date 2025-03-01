<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    protected $fillable = ['title_en', 'title_ar', 'description_en', 'description_ar'];

    public function getTitleAttribute() : String {
        return $this['title_' . app()->getLocale()];
    }

    public function getDescAttribute() : String {
        return $this['desc_' . app()->getLocale()];
    }
}
