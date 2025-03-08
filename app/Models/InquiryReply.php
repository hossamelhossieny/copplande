<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryReply extends Model
{
    //
    protected $fillable = ['inquiry_id', 'reply', 'user_id', 'customer_id', 'from'];

    public function inquiry()
    {
        return $this->belongsTo('App\Models\Inquiry');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    
}
