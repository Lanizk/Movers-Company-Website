<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Request Confirmed</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .email-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #04469F 0%, #0369d4 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0 0 10px 0;
            font-size: 28px;
        }
        .header p {
            margin: 0;
            opacity: 0.9;
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #04469F;
        }
        .confirmation-box {
            background: #e8f5e9;
            border-left: 4px solid #28a745;
            padding: 20px;
            margin: 25px 0;
            border-radius: 5px;
        }
        .confirmation-box h3 {
            margin: 0 0 10px 0;
            color: #155724;
        }
        .section {
            margin: 25px 0;
        }
        .section-title {
            color: #04469F;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
        }
        .info-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #f5f5f5;
        }
        .info-label {
            font-weight: 600;
            width: 150px;
            color: #666;
        }
        .info-value {
            flex: 1;
            color: #333;
        }
        .timeline {
            margin: 30px 0;
        }
        .timeline-item {
            display: flex;
            margin-bottom: 20px;
            align-items: start;
        }
        .timeline-number {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #04469F;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 15px;
            flex-shrink: 0;
        }
        .timeline-content h4 {
            margin: 0 0 5px 0;
            color: #04469F;
        }
        .timeline-content p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }
        .contact-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
        }
        .contact-box h4 {
            margin: 0 0 15px 0;
            color: #04469F;
        }
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .contact-icon {
            width: 30px;
            height: 30px;
            background: #04469F;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }
        .cta-button {
            display: inline-block;
            padding: 15px 35px;
            background: #04469F;
            color: white !important;
            text-decoration: none;
            border-radius: 8px;
            margin: 15px 0;
            font-weight: 600;
            text-align: center;
        }
        .footer {
            background: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #666;
        }
        .social-links {
            margin: 20px 0;
        }
        .social-links a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: #04469F;
            color: white;
            border-radius: 50%;
            margin: 0 5px;
            text-decoration: none;
            line-height: 35px;
        }
        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            background: #fff3cd;
            color: #856404;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>✅ Quote Request Received!</h1>
            <p>Your moving quote is being prepared</p>
        </div>

        <div class="content">
            <div class="greeting">
                Hello <strong>{{ $quoteRequest->full_name }}</strong>,
            </div>

            <p>Thank you for choosing Munene and Sons for your upcoming move! We've successfully received your quote request and our team is already reviewing your details.</p>

            <div class="confirmation-box">
                <h3>✓ Request Confirmed</h3>
                <p><strong>Reference Number:</strong> QUOTE-{{ str_pad($quoteRequest->id, 6, '0', STR_PAD_LEFT) }}</p>
                <p><strong>Submitted:</strong> {{ $quoteRequest->created_at->format('F j, Y \a\t g:i A') }}</p>
            </div>

            <!-- Move Summary -->
            <div class="section">
                <div class="section-title">📋 Your Move Summary</div>
                <div class="info-row">
                    <span class="info-label">Move Type:</span>
                    <span class="info-value"><strong>{{ ucfirst($quoteRequest->move_type) }} Move</strong></span>
                </div>
                <div class="info-row">
                    <span class="info-label">From:</span>
                    <span class="info-value">{{ $quoteRequest->origin_city }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">To:</span>
                    <span class="info-value">{{ $quoteRequest->destination_city }}</span>
                </div>
                <div class="info-row">
                    <span class="info-label">Move Date:</span>
                    <span class="info-value">
                        {{ $quoteRequest->preferred_date->format('F j, Y') }}
                        @if($quoteRequest->date_flexible)
                            <span class="badge">Flexible</span>
                        @endif
                    </span>
                </div>
            </div>

            <!-- What Happens Next -->
            <div class="section">
                <div class="section-title">🚀 What Happens Next?</div>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-number">1</div>
                        <div class="timeline-content">
                            <h4>Review (Within 2 hours)</h4>
                            <p>Our team reviews your request and may call for additional details</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">2</div>
                        <div class="timeline-content">
                            <h4>Quote Preparation (Within 24 hours)</h4>
                            <p>We'll prepare a detailed, transparent quote tailored to your needs</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">3</div>
                        <div class="timeline-content">
                            <h4>Delivery</h4>
                            <p>You'll receive your quote via {{ ucfirst($quoteRequest->preferred_contact) }}</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-number">4</div>
                        <div class="timeline-content">
                            <h4>Consultation (Optional)</h4>
                            <p>We're happy to discuss the quote and answer any questions</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="section">
                <div class="section-title">⭐ Why You Made the Right Choice</div>
                <table style="width: 100%; margin: 15px 0;">
                    <tr>
                        <td style="padding: 10px; text-align: center;">
                            <div style="font-size: 30px; color: #04469F;">🏆</div>
                            <strong>10+ Years</strong><br>
                            <span style="color: #666; font-size: 14px;">Experience</span>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <div style="font-size: 30px; color: #04469F;">🚚</div>
                            <strong>500+</strong><br>
                            <span style="color: #666; font-size: 14px;">Successful Moves</span>
                        </td>
                        <td style="padding: 10px; text-align: center;">
                            <div style="font-size: 30px; color: #04469F;">⭐</div>
                            <strong>97%</strong><br>
                            <span style="color: #666; font-size: 14px;">Satisfaction Rate</span>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- Contact Information -->
            <div class="contact-box">
                <h4>📞 Need to Reach Us?</h4>
                <p style="color: #666; margin-bottom: 15px;">Our team is ready to help with any questions</p>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div>
                        <strong>Phone:</strong> +254 712 345 678<br>
                        <small style="color: #666;">Monday - Saturday, 8am - 6pm</small>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div>
                        <strong>Email:</strong> info@muneneandsons.co.ke
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div>
                        <strong>WhatsApp:</strong> +254 712 345 678
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <p><strong>Want to discuss your move right away?</strong></p>
                <a href="tel:+254712345678" class="cta-button">📞 Call Us Now</a>
            </div>
        </div>

        <div class="footer">
            <h3 style="color: #04469F; margin: 0 0 10px 0;">Munene and Sons</h3>
            <p style="margin: 5px 0;">Professional Moving Services</p>
            <p style="margin: 5px 0; font-size: 14px;">Making your relocation seamless, safe, and stress-free</p>
            
            <div class="social-links">
                <a href="#">f</a>
                <a href="#">in</a>
                <a href="#">📷</a>
                <a href="#">✉</a>
            </div>

            <p style="font-size: 12px; color: #999; margin-top: 20px;">
                This email was sent because you requested a quote at muneneandsons.co.ke<br>
                © 2025 Munene and Sons. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>