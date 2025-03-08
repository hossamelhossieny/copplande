<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'inquiry' => 'required|string',
            'service_id' => 'required|exists:services,id',
        ]);

        Inquiry::create([
            'inquiry' => $validated['inquiry'],
            'service_id' => $validated['service_id'],
            'customer_id' => Auth::guard('customer')->id(),
        ]);

        return back()->with('success', __('messages.inquiry_sent'));
    }
}