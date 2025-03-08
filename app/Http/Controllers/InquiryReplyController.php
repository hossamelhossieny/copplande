<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\InquiryReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryReplyController extends Controller
{
    public function store(Request $request,$lang, $inquiryId)
    {
                
        $inquiry = Inquiry::findOrFail($inquiryId);        
        $validated = $request->validate([
            'reply' => 'required|string|max:255',
        ]);

        InquiryReply::create([
            'inquiry_id' => $inquiry->id,
            'reply' => $validated['reply'],
            'customer_id' => Auth::guard('customer')->id(),
            'from' => 'customer',
            'user_id' => null,
        ]);

        
        return back()->with('success', __('messages.reply_sent'));
    }
}