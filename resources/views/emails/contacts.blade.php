{{-- resources/views/emails/contact-notification.blade.php --}}
<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f5f5; padding:20px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height:1.6; color:#333;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.06);">

        <!-- Header -->
        <tr>
          <td style="background:#04469F; color:#ffffff; padding:22px 20px; text-align:center;">
            <h1 style="margin:0; font-size:20px; font-weight:600;">📩 New Contact Message</h1>
            <p style="margin:6px 0 0 0; opacity:0.9; font-size:13px;">{{ now()->format('F j, Y - g:i A') }}</p>
          </td>
        </tr>

        <!-- Body -->
        <tr>
          <td style="padding:22px 26px;">

            <!-- Contact Information -->
            <p style="font-size:15px; font-weight:600; color:#04469F; margin:0 0 10px 0;">👤 Contact Information</p>
            <table width="100%" cellpadding="4" cellspacing="0" style="margin-bottom:12px;">
              <tr>
                <td style="font-weight:600; width:140px; color:#666; vertical-align:top;">Name:</td>
                <td style="vertical-align:top;"><strong>{{ $data['name'] ?? '-' }}</strong></td>
              </tr>
              <tr>
                <td style="font-weight:600; color:#666; vertical-align:top;">Email:</td>
                <td style="vertical-align:top;">{{ $data['email'] ?? '-' }}</td>
              </tr>
              <tr>
                <td style="font-weight:600; color:#666; vertical-align:top;">Phone:</td>
                <td style="vertical-align:top;">{{ $data['phone'] ?? '-' }}</td>
              </tr>
            </table>

            <!-- Message Details -->
            <p style="font-size:15px; font-weight:600; color:#04469F; margin:16px 0 10px 0;">📋 Message Details</p>
            <table width="100%" cellpadding="4" cellspacing="0" style="margin-bottom:12px;">
              <tr>
                <td style="font-weight:600; width:140px; color:#666; vertical-align:top;">Service:</td>
                <td style="vertical-align:top;">{{ isset($data['service']) ? ucfirst($data['service']) : '-' }}</td>
              </tr>
              <tr>
                <td style="font-weight:600; color:#666; vertical-align:top;">Subject:</td>
                <td style="vertical-align:top;">{{ $data['subject'] ?? '-' }}</td>
              </tr>
            </table>

            <!-- Message Body -->
            <p style="font-size:15px; font-weight:600; color:#04469F; margin:16px 0 10px 0;">💬 Message</p>
            <div style="background:#fafafa; padding:14px; border-radius:6px; border:1px solid #eee;">
              <p style="margin:0; white-space:pre-line; color:#333;">{{ $data['message'] ?? '-' }}</p>
            </div>

            <!-- CTA -->
            <p style="text-align:center; margin:22px 0 0 0;">
              <a href="mailto:{{ $data['email'] ?? '' }}" style="display:inline-block; padding:11px 26px; background:#04469F; color:#ffffff; text-decoration:none; border-radius:6px; font-weight:600;">
                📧 Reply to {{ $data['name'] ?? 'Sender' }}
              </a>
            </p>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="background:#fbfbfb; text-align:center; padding:14px 18px; color:#777; font-size:12px;">
            <div style="font-weight:600; color:#333; margin-bottom:4px;">Munene & Sons Transporters</div>
            <div>This is an automated message from your website contact form.</div>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>
