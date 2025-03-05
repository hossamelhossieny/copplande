<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    //
    protected $fillable = [
        'contact_email',
        'contact_phone',
        'contact_address_en',
        'contact_address_ar',
        'contact_desc_en',
        'contact_desc_ar',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
    ];

    protected $appends = ['contact_address', 'contact_desc'];

    public function getContactAddressAttribute($value)
    {
        return app()->getLocale() == 'en' ? $this->contact_address_en : $this->contact_address_ar;
    }

    public function getContactDescAttribute($value)
    {
        return app()->getLocale() == 'en' ? $this->contact_desc_en : $this->contact_desc_ar;
    }
}
