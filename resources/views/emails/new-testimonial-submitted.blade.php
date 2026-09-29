<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New testimonial awaiting review</title>
</head>
<body style="margin:0;padding:24px;background:#f3f7fa;font-family:Arial,sans-serif;color:#142536;">
    <div style="max-width:620px;margin:0 auto;background:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #dce8ef;">
        <div style="padding:24px;background:#082536;color:#ffffff;">
            <div style="font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:#58d0e5;">Novara Holidays</div>
            <h1 style="margin:8px 0 0;font-size:24px;">New testimonial awaiting review</h1>
        </div>

        <div style="padding:26px;">
            <p style="margin:0 0 20px;line-height:1.6;">A visitor has submitted a new testimonial. It remains hidden from the public website until an administrator approves it.</p>

            <table role="presentation" style="width:100%;border-collapse:collapse;margin-bottom:20px;">
                <tr><td style="padding:8px 0;color:#607384;width:110px;">Name</td><td style="padding:8px 0;font-weight:700;">{{ $testimonial->full_name }}</td></tr>
                <tr><td style="padding:8px 0;color:#607384;">Country</td><td style="padding:8px 0;">{{ $testimonial->country }}</td></tr>
                <tr><td style="padding:8px 0;color:#607384;">Rating</td><td style="padding:8px 0;color:#e9a400;">{{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', max(0, 5 - $testimonial->rating)) }}</td></tr>
                <tr><td style="padding:8px 0;color:#607384;vertical-align:top;">Testimonial</td><td style="padding:8px 0;line-height:1.55;">{{ html_entity_decode($testimonial->experience) }}</td></tr>
            </table>

            <a href="{{ route('admin.testimonials.index') }}" style="display:inline-block;padding:13px 20px;background:#20afd0;color:#ffffff;text-decoration:none;border-radius:8px;font-weight:700;">Review testimonial</a>
        </div>
    </div>
</body>
</html>
