<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    //
    protected $fillable = ['label_en','label_ar','count'];

    protected $appends = ['label'];

    public function getLabelAttribute(){
        return $this['label_'.app()->getLocale()];
    }
}
