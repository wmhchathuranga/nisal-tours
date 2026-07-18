# PayHere payment-link setup

## Business flow

1. The customer contacts Novara Holidays and agrees on the package and final price.
2. An authenticated admin opens `/admin/payment-links`, creates a payment link, and sends its `/pay/{token}` URL to the customer.
3. The customer reviews the stored package, amount, and customer details, then continues to PayHere.
4. PayHere posts the result to `/payments/payhere/notify`. Only a correctly signed callback with the stored amount and currency can change the payment status.
5. The admin monitors the result from `/admin/payment-links`.

## Sandbox configuration

Add these values to `.env` (never commit the real secret):

```dotenv
APP_URL=https://your-public-test-domain.example
PAYHERE_MERCHANT_ID=your_sandbox_merchant_id
PAYHERE_MERCHANT_SECRET=your_sandbox_merchant_secret
PAYHERE_SANDBOX=true
```

Then run:

```sh
php artisan migrate
php artisan optimize:clear
```

PayHere's notification endpoint must be publicly reachable; localhost cannot receive PayHere callbacks. For sandbox testing, use a public HTTPS staging domain or tunnel and make sure `APP_URL` uses that exact public origin before creating/using a payment link.

The Merchant Secret is specific to the domain/app registered in the PayHere portal. Use sandbox credentials with sandbox mode. When going live, register the production domain, use its live credentials, set `PAYHERE_SANDBOX=false`, set the production `APP_URL`, and clear Laravel's configuration cache.

## Security behavior

- The amount and currency are loaded from `payment_links`; customer requests cannot override them.
- The checkout hash is generated only on the Laravel server.
- The callback verifies merchant ID and PayHere signature with constant-time comparison.
- A signed callback is also rejected when its amount or currency differs from the stored record.
- Return/cancel browser redirects never mark a payment paid; the verified server callback does.
- Duplicate or delayed callbacks cannot downgrade an already paid record.
- Card data is entered on PayHere and is never collected by this application.

## Sandbox test checklist

1. Log in with an admin account (`users.role = admin`).
2. Create a small LKR payment link and open it in a private browser session.
3. Confirm that package, customer, currency, and amount match the agreed quotation.
4. Complete a PayHere sandbox payment and wait for the return page.
5. Confirm the admin list changes to `Paid` and `paid_at`/gateway response are persisted.
6. Repeat with cancel and failed sandbox scenarios and confirm they never become paid.
7. Run `php artisan test --filter=PayHerePaymentTest`.
