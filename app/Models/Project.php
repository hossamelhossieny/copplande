<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title_en',
        'desc_en',
        'title_ar',
        'desc_ar',
        'image',
        'client',
        'delivery_date',
        'delivery_duration',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}
