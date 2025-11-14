<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f5f5; padding:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; color:#333;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1);">
                
                <!-- Header -->
                <tr>
                    <td style="background: linear-gradient(135deg, #04469F 0%, #0369d4 100%); color:#ffffff; padding:40px 30px; text-align:center;">
                        <h1 style="margin:0 0 10px 0; font-size:28px;">✅ Quote Request Received!</h1>
                        <p style="margin:0; opacity:0.9; font-size:16px;">Your moving quote is being prepared</p>
                    </td>
                </tr>
                
                <!-- Content -->
                <tr>
                    <td style="padding:40px 30px;">
                        
                        <!-- Greeting -->
                        <p style="font-size:18px; color:#04469F; margin-bottom:20px;">Hello <strong>{{ $quoteRequest->full_name }}</strong>,</p>
                        <p>Thank you for choosing Munene & Sons for your upcoming move! We've successfully received your quote request and our team is reviewing your details.</p>
                        
                        <!-- Confirmation Box -->
                        <table width="100%" cellpadding="10" cellspacing="0" style="background-color:#e8f5e9; border-left:4px solid #28a745; border-radius:5px; margin:25px 0;">
                            <tr>
                                <td>
                                    <h3 style="margin:0 0 10px 0; color:#155724;">✓ Request Confirmed</h3>
                                    <p style="margin:0;"><strong>Reference Number:</strong> QUOTE-{{ str_pad($quoteRequest->id, 6, '0', STR_PAD_LEFT) }}</p>
                                    <p style="margin:0;"><strong>Submitted:</strong> {{ $quoteRequest->created_at->format('F j, Y \a\t g:i A') }}</p>
                                </td>
                            </tr>
                        </table>

                        <!-- Move Summary -->
                        <table width="100%" cellpadding="0" cellspacing="0" style="margin:25px 0;">
                            <tr>
                                <td style="font-size:18px; font-weight:600; color:#04469F; border-bottom:2px solid #e0e0e0; padding-bottom:10px;">📋 Your Move Summary</td>
                            </tr>
                        </table>
                        <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
                            <tr>
                                <td style="font-weight:600; width:150px; color:#666;">Move Type:</td>
                                <td><strong>{{ ucfirst($quoteRequest->move_type) }} Move</strong></td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">From:</td>
                                <td>{{ $quoteRequest->origin_city }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">To:</td>
                                <td>{{ $quoteRequest->destination_city }}</td>
                            </tr>
                            <tr>
                                <td style="font-weight:600; color:#666;">Move Date:</td>
                                <td>
                                    {{ $quoteRequest->preferred_date->format('F j, Y') }}
                                    @if($quoteRequest->date_flexible)
                                        <span style="display:inline-block; padding:5px 12px; border-radius:20px; font-size:12px; font-weight:600; background:#fff3cd; color:#856404;">Flexible</span>
                                    @endif
                                </td>
                            </tr>
                        </table>

                        <!-- What Happens Next -->
                        <p style="font-size:18px; font-weight:600; color:#04469F; margin:30px 0 15px 0;">🚀 What Happens Next?</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:30px;">
    @foreach([
        1 => ['Review (Within 2 hours)', 'Our team reviews your request and may call for additional details'],
        2 => ['Quote Preparation (Within 24 hours)', "We'll prepare a detailed, transparent quote tailored to your needs"],
        3 => ['Delivery', "You'll receive your quote via ".ucfirst($quoteRequest->preferred_contact)],
        4 => ['Consultation (Optional)', "We're happy to discuss the quote and answer any questions"]
    ] as $num => $step)
    <tr>
        <td valign="top" style="padding-right:15px;">
            <span style="
                display:inline-block;
                min-width:28px;
                height:28px;
                line-height:28px;
                text-align:center;
                border-radius:50%;
                background:#04469F;
                color:#fff;
                font-weight:bold;
                font-size:14px;
                ">
                {{ $num }}
            </span>
        </td>
        <td style="padding-left:10px; color:#666; vertical-align:top;">
            <strong style="color:#04469F;">{{ $step[0] }}</strong><br>
            <span style="font-size:14px;">{{ $step[1] }}</span>
        </td>
    </tr>
    <tr><td colspan="2" style="height:12px;"></td></tr>
    @endforeach
</table>


                        <!-- CTA -->
                        <p style="text-align:center; margin:30px 0;">
                            <a href="tel:+254768002702" style="display:inline-block; padding:15px 35px; background:#04469F; color:#fff; text-decoration:none; border-radius:8px; font-weight:600;">📞 Call Us Now</a>
                        </p>

                        <!-- Footer -->
                        <p style="text-align:center; font-size:12px; color:#999; margin-top:20px;">
                            This email was sent because you requested a quote at muneneandsonsandtransporters.co.ke<br>
                            © 2025 Munene & Sons. All rights reserved.
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>
