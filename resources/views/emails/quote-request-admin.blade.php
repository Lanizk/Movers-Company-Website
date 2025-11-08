<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #04469F 0%, #0369d4 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }
        .section {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        .section:last-child {
            border-bottom: none;
        }
        .section-title {
            color: #04469F;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        .info-row {
            display: flex;
            margin-bottom: 10px;
        }
        .info-label {
            font-weight: 600;
            width: 180px;
            color: #666;
        }
        .info-value {
            flex: 1;
            color: #333;
        }
        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        .badge-success {
            background: #d4edda;
            color: #155724;
        }
        .badge-warning {
            background: #fff3cd;
            color: #856404;
        }
        .services-list {
            list-style: none;
            padding: 0;
        }
        .services-list li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
        }
        .services-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            color: #666;
            font-size: 14px;
        }
        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background: #04469F;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: 600;
        }
        .highlight {
            background: #fff9e6;
            padding: 15px;
            border-left: 4px solid #ffc107;
            margin: 15px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🚚 New Quote Request Received</h1>
        <p style="margin: 5px 0 0 0; opacity: 0.9;">{{ $quoteRequest->created_at->format('F j, Y - g:i A') }}</p>
    </div>

    <div class="content">
        <!-- Contact Information -->
        <div class="section">
            <div class="section-title">📋 Contact Information</div>
            <div class="info-row">
                <span class="info-label">Name:</span>
                <span class="info-value"><strong>{{ $quoteRequest->full_name }}</strong></span>
            </div>
            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value">{{ $quoteRequest->email }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Phone:</span>
                <span class="info-value">{{ $quoteRequest->phone }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Preferred Contact:</span>
                <span class="info-value">
                    <span class="badge badge-success">{{ ucfirst($quoteRequest->preferred_contact) }}</span>
                </span>
            </div>
        </div>

        <!-- Move Details -->
        <div class="section">
            <div class="section-title">📍 Move Details</div>
            <div class="info-row">
                <span class="info-label">From:</span>
                <span class="info-value">{{ $quoteRequest->origin_address }}, {{ $quoteRequest->origin_city }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">To:</span>
                <span class="info-value">{{ $quoteRequest->destination_address }}, {{ $quoteRequest->destination_city }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Preferred Date:</span>
                <span class="info-value">
                    {{ $quoteRequest->preferred_date->format('F j, Y') }}
                    @if($quoteRequest->date_flexible)
                        <span class="badge badge-warning">Flexible</span>
                    @endif
                </span>
            </div>
        </div>

        <!-- Property Details -->
        <div class="section">
            <div class="section-title">🏠 Property Details</div>
            <div class="info-row">
                <span class="info-label">Move Type:</span>
                <span class="info-value"><strong>{{ ucfirst($quoteRequest->move_type) }}</strong></span>
            </div>
            @if($quoteRequest->property_size)
            <div class="info-row">
                <span class="info-label">Property Size:</span>
                <span class="info-value">{{ str_replace('_', ' ', ucwords($quoteRequest->property_size, '_')) }}</span>
            </div>
            @endif
            @if($quoteRequest->access_type)
            <div class="info-row">
                <span class="info-label">Access Type:</span>
                <span class="info-value">{{ str_replace('_', ' ', ucwords($quoteRequest->access_type, '_')) }}</span>
            </div>
            @endif
            @if($quoteRequest->inventory_list)
            <div class="info-row">
                <span class="info-label">Inventory:</span>
                <span class="info-value">{{ $quoteRequest->inventory_list }}</span>
            </div>
            @endif
        </div>

        <!-- Additional Services -->
        <div class="section">
            <div class="section-title">✨ Additional Services Requested</div>
            <ul class="services-list">
                @if($quoteRequest->packing_service)
                    <li>Professional Packing Service</li>
                @endif
                @if($quoteRequest->unpacking_service)
                    <li>Unpacking Service</li>
                @endif
                @if($quoteRequest->storage_required)
                    <li>Storage Services</li>
                @endif
                @if($quoteRequest->assembly_required)
                    <li>Furniture Assembly/Disassembly</li>
                @endif
                @if($quoteRequest->fragile_items)
                    <li>Handling of Fragile Items</li>
                @endif
                @if($quoteRequest->heavy_items)
                    <li>Heavy Items Transportation</li>
                @endif
                @if($quoteRequest->insurance_required)
                    <li>Comprehensive Insurance Coverage</li>
                @endif
            </ul>
        </div>

        <!-- Special Instructions -->
        @if($quoteRequest->special_instructions)
        <div class="section">
            <div class="section-title">💬 Special Instructions</div>
            <p>{{ $quoteRequest->special_instructions }}</p>
        </div>
        @endif

        <!-- Budget -->
        @if($quoteRequest->estimated_budget)
        <div class="highlight">
            <strong>Client's Estimated Budget:</strong> KES {{ number_format($quoteRequest->estimated_budget, 2) }}
        </div>
        @endif

        <!-- Action Required -->
        <div style="text-align: center; margin-top: 30px;">
            <p><strong>⚡ Action Required:</strong> Please respond to this quote request within 24 hours.</p>
            <a href="{{ config('app.url') }}/admin/quotes" class="cta-button">View in Dashboard</a>
        </div>
    </div>

    <div class="footer">
        <p><strong>Munene and Sons Moving Services</strong></p>
        <p>This is an automated notification from your quote request system.</p>
    </div>
</body>
</html>