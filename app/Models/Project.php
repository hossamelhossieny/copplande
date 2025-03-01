<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Project extends Model implements HasMedia
{
    use InteractsWithMedia;

    use HasFactory;

    protected $fillable = [
        'service_id',
        'title_en',
        'desc_en',
        'title_ar',
        'desc_ar',
        'client',
        'delivery_date',
        'delivery_duration',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en;
    }

    public function getDescAttribute()
    {
        return app()->isLocale('ar') ? $this->desc_ar : $this->desc_en;
    }
}
