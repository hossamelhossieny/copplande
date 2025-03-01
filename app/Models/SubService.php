<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    protected $fillable = ['service_id', 'title_en', 'desc_en', 'title_ar', 'desc_ar', 'image'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
