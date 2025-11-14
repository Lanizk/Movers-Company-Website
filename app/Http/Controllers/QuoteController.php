<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuoteRequestReceived;
use App\Mail\QuoteRequestConfirmation;

class QuoteController extends Controller
{
    /**
     * Display the quote request form
     */
    public function create()
    {
        return view('quote');
    }

    /**
     * Store a newly created quote request
     */
    public function store(Request $request)
    {
      
      
        $request->merge([
        'packing_service' => $request->has('packing_service'),
        'storage_required' => $request->has('storage_required'),
        'fragile_items' => $request->has('fragile_items'),
        'heavy_items' => $request->has('heavy_items'),
        'assembly_required' => $request->has('assembly_required'),
        'insurance_required' => $request->has('insurance_required'),
        'unpacking_service' => $request->has('unpacking_service'),
        'date_flexible' => $request->has('date_flexible'),
         ]);
    
    
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'preferred_contact' => 'required|in:phone,email,whatsapp',
            
            'origin_address' => 'required|string|max:255',
            'origin_city' => 'required|string|max:100',
            'destination_address' => 'required|string|max:255',
            'destination_city' => 'required|string|max:100',
            'preferred_date' => 'required|date|after:today',
            'date_flexible' => 'boolean',
            
            'move_type' => 'required|in:residential,commercial,office,warehouse',
            'property_size' => 'nullable|string',
            'inventory_list' => 'nullable|string',
            
            'packing_service' => 'boolean',
            'storage_required' => 'boolean',
            'fragile_items' => 'boolean',
            'heavy_items' => 'boolean',
            'assembly_required' => 'boolean',
            'access_type' => 'nullable|in:ground_floor,elevator,stairs,long_carry',
            
            'insurance_required' => 'boolean',
            'unpacking_service' => 'boolean',
            'special_instructions' => 'nullable|string|max:1000',
            'estimated_budget' => 'nullable|numeric|min:0',
        ]);
        

        // Create the quote request
        $quoteRequest = QuoteRequest::create($validated);

        // Send email to admin
        Mail::to(config('mail.from.address'))
            ->send(new QuoteRequestReceived($quoteRequest));

        // Send confirmation email to customer
        Mail::to($validated['email'])
            ->send(new QuoteRequestConfirmation($quoteRequest));

        // Return success response
        return redirect()->back()->with('success', 'Your quote request has been submitted successfully! We will contact you within 24 hours.');
    }
}