<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $fillable = ['customer_id', 'service_id', 'inquiry'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\InquiryReply');
    }
}
