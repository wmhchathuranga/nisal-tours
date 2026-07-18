<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Redirecting to PayHere</title></head>
<body>
<p>Redirecting you to PayHere securely…</p>
<form id="payhere-checkout" method="POST" action="{{ $checkoutUrl }}">
    @foreach($payload as $name => $value)
        <input type="hidden" name="{{ $name }}" value="{{ $value }}">
    @endforeach
    <noscript><button type="submit">Continue to PayHere</button></noscript>
</form>
<script>document.getElementById('payhere-checkout').submit();</script>
</body></html>
