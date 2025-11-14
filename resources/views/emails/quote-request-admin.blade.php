<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f5f5; padding:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; color:#333;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1);">
                
                <!-- Header -->
                <tr>
                    <td style="background: linear-gradient(135deg, #04469F 0%, #0369d4 100%); color:#ffffff; padding:30px; text-align:center;">
                        <h1 style="margin:0; font-size:24px;">🚚 New Quote Request Received</h1>
                        <p style="margin:5px 0 0 0; opacity:0.9; font-size:14px;">{{ $quoteRequest->created_at->format('F j, Y - g:i A') }}</p>
                    </td>
                </tr>

                <!-- Content -->
                <tr>
                    <td style="padding:30px;">

                        <!-- Contact Information -->
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin-bottom:15px;">📋 Contact Information</p>
                        <table width="100%" cellpadding="5" cellspacing="0">
                            <tr>
                                <td style="font-weight:600; width:150px; color:#666;">Name:</td>
                                <td><strong>{{ $quoteRequest->full_name }}</strong></td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">Email:</td>
                                <td>{{ $quoteRequest->email }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">Phone:</td>
                                <td>{{ $quoteRequest->phone }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">Preferred Contact:</td>
                                <td>
                                    <span style="display:inline-block; padding:5px 12px; border-radius:20px; font-size:12px; font-weight:600; background:#d4edda; color:#155724;">
                                        {{ ucfirst($quoteRequest->preferred_contact) }}
                                    </span>
                                </td>
                            </tr>
                        </table>

                        <!-- Move Details -->
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin:25px 0 15px 0;">📍 Move Details</p>
                        <table width="100%" cellpadding="5" cellspacing="0">
                            <tr>
                                <td style="font-weight:600; width:150px; color:#666;">From:</td>
                                <td>{{ $quoteRequest->origin_address }}, {{ $quoteRequest->origin_city }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">To:</td>
                                <td>{{ $quoteRequest->destination_address }}, {{ $quoteRequest->destination_city }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">Preferred Date:</td>
                                <td>
                                    {{ $quoteRequest->preferred_date->format('F j, Y') }}
                                    @if($quoteRequest->date_flexible)
                                        <span style="display:inline-block; padding:5px 12px; border-radius:20px; font-size:12px; font-weight:600; background:#fff3cd; color:#856404;">Flexible</span>
                                    @endif
                                </td>
                            </tr>
                        </table>

                        <!-- Property Details -->
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin:25px 0 15px 0;">🏠 Property Details</p>
                        <table width="100%" cellpadding="5" cellspacing="0">
                            <tr>
                                <td style="font-weight:600; width:150px; color:#666;">Move Type:</td>
                                <td><strong>{{ ucfirst($quoteRequest->move_type) }}</strong></td>
                            </tr>
                            @if($quoteRequest->property_size)
                            <tr>
                                <td style="font-weight:600; color:#666;">Property Size:</td>
                                <td>{{ str_replace('_', ' ', ucwords($quoteRequest->property_size, '_')) }}</td>
                            </tr>
                            @endif
                            @if($quoteRequest->access_type)
                            <tr>
                                <td style="font-weight:600; color:#666;">Access Type:</td>
                                <td>{{ str_replace('_', ' ', ucwords($quoteRequest->access_type, '_')) }}</td>
                            </tr>
                            @endif
                            @if($quoteRequest->inventory_list)
                            <tr>
                                <td style="font-weight:600; color:#666;">Inventory:</td>
                                <td>{{ $quoteRequest->inventory_list }}</td>
                            </tr>
                            @endif
                        </table>

                        <!-- Additional Services -->
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin:25px 0 15px 0;">✨ Additional Services Requested</p>
                        <ul style="list-style:none; padding-left:0; margin:0;">
                            @if($quoteRequest->packing_service)
                                <li style="padding-left:20px; position:relative;">✓ Professional Packing Service</li>
                            @endif
                            @if($quoteRequest->unpacking_service)
                                <li style="padding-left:20px; position:relative;">✓ Unpacking Service</li>
                            @endif
                            @if($quoteRequest->storage_required)
                                <li style="padding-left:20px; position:relative;">✓ Storage Services</li>
                            @endif
                            @if($quoteRequest->assembly_required)
                                <li style="padding-left:20px; position:relative;">✓ Furniture Assembly/Disassembly</li>
                            @endif
                            @if($quoteRequest->fragile_items)
                                <li style="padding-left:20px; position:relative;">✓ Handling of Fragile Items</li>
                            @endif
                            @if($quoteRequest->heavy_items)
                                <li style="padding-left:20px; position:relative;">✓ Heavy Items Transportation</li>
                            @endif
                            @if($quoteRequest->insurance_required)
                                <li style="padding-left:20px; position:relative;">✓ Comprehensive Insurance Coverage</li>
                            @endif
                        </ul>

                        <!-- Special Instructions -->
                        @if($quoteRequest->special_instructions)
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin:25px 0 15px 0;">💬 Special Instructions</p>
                        <p>{{ $quoteRequest->special_instructions }}</p>
                        @endif

                        <!-- Estimated Budget -->
                        @if($quoteRequest->estimated_budget)
                        <div style="background:#fff9e6; border-left:4px solid #ffc107; padding:15px; margin:15px 0;">
                            <strong>Client's Estimated Budget:</strong> KES {{ number_format($quoteRequest->estimated_budget, 2) }}
                        </div>
                        @endif

                        <!-- Action Required -->
                        <p style="text-align:center; margin-top:30px;">
                            <strong>⚡ Action Required:</strong> Please respond to this quote request within 24 hours.
                        </p>

                        <!-- CTA Button -->
                        <p style="text-align:center; margin:20px 0;">
                            <a href="mailto:{{ $quoteRequest->email }}" style="display:inline-block; padding:12px 30px; background:#04469F; color:#fff; text-decoration:none; border-radius:5px; font-weight:600;">📧 Reply to Client</a>
                        </p>

                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background:#f8f9fa; text-align:center; padding:20px; border-radius:0 0 10px 10px; color:#666; font-size:14px;">
                        <p><strong>Munene & Sons Moving Services</strong></p>
                        <p>This is an automated notification from your quote request system.</p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
