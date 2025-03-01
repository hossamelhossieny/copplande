<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Team extends Model implements HasMedia
{

    use InteractsWithMedia;


    //table name
    protected $table = 'team';

    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en;
    }
    public function getPositionAttribute()
    {
        return app()->isLocale('ar') ? $this->position_ar : $this->position_en;
    }
}
