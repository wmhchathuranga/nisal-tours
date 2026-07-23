<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Novara Holidays payment link</title>
</head>

<body style="margin:0;padding:0;background:#eef3f6;font-family:Arial,Helvetica,sans-serif;color:#173040;">
    @php($paymentUrl = route('payments.show', $paymentLink->token))
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
        style="width:100%;background:#eef3f6;">
        <tr>
            <td align="center" style="padding:32px 14px;">
                <table role="presentation" width="620" cellpadding="0" cellspacing="0" border="0"
                    style="width:100%;max-width:620px;background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 12px 36px rgba(7,29,43,.10);">
                    <tr>
                        <td style="padding:27px 34px;background:#082737;border-bottom:4px solid #19acc0;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td>
                                        <div style="font-size:23px;font-weight:800;color:#ffffff;letter-spacing:.02em;">
                                            NOVARA <span style="color:#22b8ca;">HOLIDAYS</span>
                                        </div>
                                        <div style="margin-top:4px;font-size:10px;color:#9fc0ce;letter-spacing:.18em;text-transform:uppercase;">
                                            Travel with confidence
                                        </div>
                                    </td>
                                    <td align="right" style="font-size:11px;color:#b8d0d9;">
                                        Secure payment request
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:36px 34px 12px;">
                            <div style="margin-bottom:10px;color:#0c8d9d;font-size:11px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;">
                                Your payment link is ready
                            </div>
                            <h1 style="margin:0;color:#102b3a;font-size:27px;line-height:1.25;">
                                Dear {{ $paymentLink->customer_name }},
                            </h1>
                            <p style="margin:17px 0 0;color:#607683;font-size:15px;line-height:1.7;">
                                Thank you for choosing Novara Holidays. Following confirmation of your travel arrangements,
                                we have prepared the secure payment request below.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:18px 34px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0"
                                style="border:1px solid #dce7eb;border-radius:12px;background:#f7fafb;">
                                <tr>
                                    <td style="padding:20px 21px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td style="padding:0 0 11px;color:#718491;font-size:12px;">Package</td>
                                                <td align="right" style="padding:0 0 11px;color:#173040;font-size:13px;font-weight:700;">
                                                    {{ $paymentLink->title }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:11px 0;border-top:1px solid #e1eaee;color:#718491;font-size:12px;">
                                                    Reference
                                                </td>
                                                <td align="right"
                                                    style="padding:11px 0;border-top:1px solid #e1eaee;color:#173040;font-size:13px;font-weight:700;">
                                                    {{ $paymentLink->reference }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding:11px 0 0;border-top:1px solid #e1eaee;color:#718491;font-size:12px;">
                                                    Amount
                                                </td>
                                                <td align="right"
                                                    style="padding:11px 0 0;border-top:1px solid #e1eaee;color:#0b91a1;font-size:20px;font-weight:800;">
                                                    {{ $paymentLink->currency }} {{ number_format((float) $paymentLink->amount, 2) }}
                                                </td>
                                            </tr>
                                            @if ($paymentLink->expires_at)
                                                <tr>
                                                    <td style="padding:11px 0 0;color:#718491;font-size:12px;">Valid until</td>
                                                    <td align="right" style="padding:11px 0 0;color:#173040;font-size:12px;font-weight:700;">
                                                        {{ $paymentLink->expires_at->format('d M Y, h:i A') }}
                                                    </td>
                                                </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:8px 34px 24px;">
                            <a href="{{ $paymentUrl }}"
                                style="display:inline-block;padding:15px 27px;border-radius:9px;background:#18aabe;color:#ffffff;font-size:14px;font-weight:700;text-decoration:none;box-shadow:0 7px 18px rgba(24,170,190,.24);">
                                Pay securely with PayHere
                            </a>
                            <p style="margin:17px 0 0;color:#82939d;font-size:11px;line-height:1.55;">
                                If the button does not open, copy this secure address into your browser:<br>
                                <a href="{{ $paymentUrl }}" style="color:#0b91a1;word-break:break-all;">{{ $paymentUrl }}</a>
                            </p>
                        </td>
                    </tr>

                    @if ($paymentLink->description)
                        <tr>
                            <td style="padding:0 34px 24px;">
                                <div style="padding:16px 18px;border-left:3px solid #18aabe;background:#f2f8fa;color:#58707d;font-size:12px;line-height:1.65;">
                                    <strong style="display:block;margin-bottom:4px;color:#173040;">Package details</strong>
                                    {!! nl2br(e($paymentLink->description)) !!}
                                </div>
                            </td>
                        </tr>
                    @endif

                    <tr>
                        <td style="padding:20px 34px;background:#f5f8fa;border-top:1px solid #e1eaee;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td width="35" valign="top" style="color:#18aabe;font-size:20px;">&#128274;</td>
                                    <td style="color:#657b87;font-size:11px;line-height:1.6;">
                                        <strong style="display:block;color:#173040;font-size:12px;">Your payment is protected</strong>
                                        Novara Holidays does not receive or store your card information. Card processing is
                                        completed securely by PayHere.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:25px 30px;background:#082737;color:#a9c1cb;font-size:10px;line-height:1.7;">
                            Need assistance? Contact Novara Holidays<br>
                            <a href="mailto:info@novaraholidays.com" style="color:#ffffff;text-decoration:none;">info@novaraholidays.com</a>
                            &nbsp;&middot;&nbsp;
                            <a href="https://novaraholidays.com" style="color:#ffffff;text-decoration:none;">novaraholidays.com</a>
                            <br><br>
                            This message was sent regarding payment reference {{ $paymentLink->reference }}.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
