<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'desc_en',
        'title_ar',
        'desc_ar',
        'image',
        'banner',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
