<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow,noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Traveller Details | Novara Holidays</title>
    <link rel="icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <style>
        :root{--navy:#071827;--text:#173346;--muted:#6f8290;--border:#dfe8ed;--cyan:#20afd0;--teal:#12a89d;--bg:#f3f7f9;--danger:#b93e3a}
        *{box-sizing:border-box}body{margin:0;background:var(--bg);color:var(--text);font-family:Arial,sans-serif;line-height:1.5}.td-header{background:var(--navy);padding:22px 24px}.td-header img{display:block;width:190px;height:60px;object-fit:contain}.td-wrap{width:min(980px,calc(100% - 32px));margin:34px auto 70px}.td-hero,.td-card{background:#fff;border:1px solid var(--border);border-radius:18px;box-shadow:0 10px 35px rgba(17,48,67,.06)}.td-hero{padding:30px;margin-bottom:20px}.td-eyebrow{color:var(--teal);font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:1.2px}.td-hero h1{margin:6px 0 8px;color:var(--navy);font-size:30px}.td-hero p{margin:0;color:var(--muted)}.td-reference{display:inline-flex;margin-top:16px;padding:7px 11px;border-radius:30px;background:#eaf8fb;color:#087d98;font-size:12px;font-weight:800}.td-section{padding:26px;border-bottom:1px solid var(--border)}.td-section:last-child{border-bottom:0}.td-section h2{margin:0 0 6px;font-size:19px;color:var(--navy)}.td-section-intro{margin:0 0 20px;color:var(--muted);font-size:14px}.td-grid{display:grid;grid-template-columns:1fr 1fr;gap:17px}.td-field.full{grid-column:1/-1}.td-field label{display:block;font-weight:700;font-size:13px;margin-bottom:7px}.td-input,.td-textarea{width:100%;border:1px solid var(--border);border-radius:11px;padding:13px 14px;color:var(--text);background:#fff;font:inherit;outline:none}.td-input:focus,.td-textarea:focus{border-color:var(--cyan);box-shadow:0 0 0 3px rgba(32,175,208,.12)}.td-traveller{border:1px solid var(--border);border-radius:14px;padding:20px;margin-top:16px;background:#fbfcfd}.td-traveller h3{margin:0 0 16px;font-size:16px}.td-check{display:flex;align-items:flex-start;gap:10px;color:var(--muted);font-size:13px}.td-check input{margin-top:4px}.td-actions{display:flex;align-items:center;justify-content:space-between;gap:18px;flex-wrap:wrap}.td-btn{border:0;border-radius:11px;padding:13px 20px;background:linear-gradient(135deg,var(--cyan),var(--teal));color:#fff;font-weight:800;font-size:14px;cursor:pointer}.td-note{font-size:12px;color:var(--muted)}.td-alert{padding:14px 16px;border-radius:11px;margin-bottom:18px}.td-alert.error{background:#fff0ef;color:var(--danger)}.td-alert.success{background:#e9f8f2;color:#086c50}.td-alert ul{margin:7px 0 0;padding-left:20px}.td-state{text-align:center;padding:60px 25px}.td-state-icon{width:66px;height:66px;border-radius:50%;display:grid;place-items:center;background:#e9f8f2;color:#087a58;font-size:28px;margin:0 auto 18px}.td-state h2{font-size:24px;margin:0 0 8px}.td-state p{color:var(--muted);margin:0}.td-footer{text-align:center;color:var(--muted);font-size:12px;margin-top:20px}.td-footer a{color:var(--teal)}
        @media(max-width:680px){.td-grid{grid-template-columns:1fr}.td-field.full{grid-column:auto}.td-header{padding:16px}.td-header img{width:160px}.td-wrap{margin-top:20px}.td-hero,.td-section{padding:21px}.td-hero h1{font-size:25px}.td-btn{width:100%}}
    </style>
</head>
<body>
    <header class="td-header"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-white.svg') }}" alt="Novara Holidays"></a></header>
    <main class="td-wrap">
        <section class="td-hero">
            <span class="td-eyebrow">Private group form</span>
            <h1>Traveller details</h1>
            <p>Please provide the essential information Novara Holidays needs to prepare your group arrangements.</p>
            <span class="td-reference">Reference: {{ $detailRequest->reference }}</span>
        </section>

        @if(session('success') || $detailRequest->status === 'completed')
            <section class="td-card td-state"><div class="td-state-icon">✓</div><h2>Details received securely</h2><p>Thank you. Novara Holidays has received the information for {{ $detailRequest->expected_travellers }} {{ Str::plural('traveller', $detailRequest->expected_travellers) }}.</p></section>
        @elseif(!$detailRequest->isAvailable())
            <section class="td-card td-state"><div class="td-state-icon" style="background:#fff7df;color:#a97600">!</div><h2>This link is no longer available</h2><p>Please contact Novara Holidays if you need a new traveller details link.</p></section>
        @else
            @if($errors->any())
                <div class="td-alert error"><strong>Please check the highlighted information.</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif
            <form class="td-card" method="POST" action="{{ route('traveller-details.store', $detailRequest->access_token) }}">@csrf
                <section class="td-section">
                    <h2>Group leader</h2><p class="td-section-intro">We will use these details only to coordinate this booking.</p>
                    <div class="td-grid">
                        <div class="td-field"><label for="leader_name">Full name</label><input class="td-input" id="leader_name" name="leader_name" value="{{ old('leader_name') }}" maxlength="255" autocomplete="name" required></div>
                        <div class="td-field"><label for="leader_email">Email</label><input class="td-input" id="leader_email" name="leader_email" type="email" value="{{ old('leader_email') }}" maxlength="255" autocomplete="email" required></div>
                        <div class="td-field"><label for="leader_phone">WhatsApp / contact number</label><input class="td-input" id="leader_phone" name="leader_phone" value="{{ old('leader_phone') }}" maxlength="40" autocomplete="tel" required></div>
                        <div class="td-field"><label for="leader_country">Country</label><input class="td-input" id="leader_country" name="leader_country" value="{{ old('leader_country') }}" maxlength="100" autocomplete="country-name" required></div>
                        <div class="td-field"><label for="emergency_contact_name">Emergency contact name</label><input class="td-input" id="emergency_contact_name" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}" maxlength="255" required></div>
                        <div class="td-field"><label for="emergency_contact_phone">Emergency contact number</label><input class="td-input" id="emergency_contact_phone" name="emergency_contact_phone" value="{{ old('emergency_contact_phone') }}" maxlength="40" required></div>
                    </div>
                </section>
                <section class="td-section">
                    <h2>Group members</h2><p class="td-section-intro">Add the requested details for all {{ $detailRequest->expected_travellers }} travellers. Exact dates of birth and passport details are not required.</p>
                    @for($index = 0; $index < $detailRequest->expected_travellers; $index++)
                        <div class="td-traveller">
                            <h3>Traveller {{ $index + 1 }}</h3>
                            <div class="td-grid">
                                <div class="td-field full"><label for="traveller_{{ $index }}_name">Full name</label><input class="td-input" id="traveller_{{ $index }}_name" name="travellers[{{ $index }}][full_name]" value="{{ old("travellers.$index.full_name") }}" maxlength="255" required></div>
                                <div class="td-field"><label for="traveller_{{ $index }}_age">Age</label><input class="td-input" id="traveller_{{ $index }}_age" name="travellers[{{ $index }}][age]" type="number" min="0" max="120" value="{{ old("travellers.$index.age") }}" required></div>
                                <div class="td-field"><label for="traveller_{{ $index }}_nationality">Nationality</label><input class="td-input" id="traveller_{{ $index }}_nationality" name="travellers[{{ $index }}][nationality]" value="{{ old("travellers.$index.nationality") }}" maxlength="100" required></div>
                                <div class="td-field full"><label for="traveller_{{ $index }}_dietary">Dietary requirements (optional)</label><textarea class="td-textarea" id="traveller_{{ $index }}_dietary" name="travellers[{{ $index }}][dietary_requirements]" rows="2" maxlength="1000">{{ old("travellers.$index.dietary_requirements") }}</textarea></div>
                                <div class="td-field full"><label for="traveller_{{ $index }}_accessibility">Accessibility requirements (optional)</label><textarea class="td-textarea" id="traveller_{{ $index }}_accessibility" name="travellers[{{ $index }}][accessibility_requirements]" rows="2" maxlength="1000">{{ old("travellers.$index.accessibility_requirements") }}</textarea></div>
                                <div class="td-field full"><label for="traveller_{{ $index }}_medical">Important medical information relevant to the tour (optional)</label><textarea class="td-textarea" id="traveller_{{ $index }}_medical" name="travellers[{{ $index }}][medical_notes]" rows="2" maxlength="1000">{{ old("travellers.$index.medical_notes") }}</textarea></div>
                            </div>
                        </div>
                    @endfor
                </section>
                <section class="td-section">
                    <div class="td-actions">
                        <label class="td-check"><input type="checkbox" name="consent" value="1" @checked(old('consent')) required><span>I confirm that the travellers have agreed to share these details with Novara Holidays for arranging this booking.</span></label>
                        <button class="td-btn" type="submit">Submit details securely</button>
                    </div>
                    <p class="td-note">Please do not enter passport numbers or upload identity documents. See our <a href="{{ route('privacy-policy') }}" target="_blank" rel="noopener">privacy policy</a>.</p>
                </section>
            </form>
        @endif
        <footer class="td-footer">This is a private Novara Holidays form. Do not forward this URL outside your travelling group.</footer>
    </main>
</body>
</html>
