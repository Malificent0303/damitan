<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Triple's E Daily Wear | Checkout</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&amp;family=Nunito:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          cream: "#FFF8EA",
          vanilla: "#FFFDF6",
          peach: "#FFD9C7",
          coral: "#FF7F73",
          coralDark: "#E95F57",
          mint: "#BFEEDC",
          mintDark: "#67BFA1",
          butter: "#FFE8A3",
          cocoa: "#563F35",
          softText: "#7A6258",
          blush: "#FFF0F2"
        },
        borderRadius: {
          DEFAULT: "1.25rem",
          lg: "1.75rem",
          xl: "2.25rem",
          full: "999px"
        },
        boxShadow: {
          soft: "0 24px 70px rgba(120, 72, 48, 0.14)",
          card: "0 18px 45px rgba(233, 95, 87, 0.12)"
        },
        fontFamily: {
          headline: ["Baloo 2", "cursive"],
          body: ["Nunito", "sans-serif"]
        }
      }
    }
  }
</script>
<style>
  body {
    font-family: 'Nunito', sans-serif;
    background:
      radial-gradient(circle at top left, rgba(255, 217, 199, 0.72), transparent 34rem),
      radial-gradient(circle at bottom right, rgba(191, 238, 220, 0.82), transparent 38rem),
      #FFF8EA;
  }

  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 500, 'GRAD' 0, 'opsz' 24;
  }

  input:focus, select:focus {
    box-shadow: 0 0 0 4px rgba(255, 127, 115, 0.18);
  }

  .shipping-option.selected {
    background-color: #ffc7ce;
    border-color: #ff7f73;
  }

  .payment-option.selected {
    background-color: #ffc7ce;
    border-color: #ff7f73;
  }
</style>
</head>
<body class="min-h-screen overflow-x-hidden bg-cream text-cocoa font-body selection:bg-coral selection:text-white">
<header class="fixed top-0 inset-x-0 z-50 px-5 py-4 md:px-10">
<nav class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/80 bg-vanilla/85 px-5 py-3 shadow-card backdrop-blur-xl">
<a class="flex items-center gap-3" href="{{ route('home') }}">
<span class="grid size-11 place-items-center rounded-full bg-coral text-white shadow-card">
<span class="material-symbols-outlined">checkroom</span>
</span>
<span>
<span class="block font-headline text-2xl font-extrabold leading-none text-cocoa">Triple's E</span>
<span class="block text-[11px] font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</span>
</span>
</a>
<div class="hidden items-center gap-8 text-sm font-extrabold text-softText md:flex">
<a class="hover:text-coral transition-colors" href="{{ route('shop') }}">Shop</a>
<a class="hover:text-coral transition-colors" href="#">Kids</a>
<a class="hover:text-coral transition-colors" href="#">Adults</a>
<a class="hover:text-coral transition-colors" href="#">Contact</a>
</div>
<div class="flex items-center gap-3">
<a href="{{ route('cart') }}" class="grid size-11 place-items-center rounded-full bg-mint/70 text-cocoa hover:bg-mint transition-colors" aria-label="Cart">
<span class="material-symbols-outlined">shopping_bag</span>
</a>
<a href="{{ auth()->check() ? route('dashboard') : route('login') }}" class="grid size-11 place-items-center rounded-full bg-peach/75 text-cocoa hover:bg-peach transition-colors" aria-label="Customer account">
<span class="material-symbols-outlined">person</span>
</a>
</div>
</nav>
</header>
<main class="mx-auto max-w-7xl px-5 pb-16 pt-32 lg:px-8">
<form method="POST" action="{{ route('checkout.submit') }}">
@csrf
<div class="grid grid-cols-1 gap-8 lg:grid-cols-[1fr_420px]">
<section class="space-y-8">
<div class="rounded-[2.75rem] bg-white/78 p-7 shadow-soft sm:p-10">
<p class="inline-flex rounded-full bg-mint/80 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cocoa">Secure checkout</p>
<h1 class="mt-5 font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl md:text-7xl">Checkout</h1>
<p class="mt-4 max-w-2xl text-base leading-7 text-softText sm:text-lg">Complete your order for comfy Triple’s E Daily Wear pieces.</p>
</div>
<section class="rounded-[2.5rem] bg-white/84 p-6 shadow-card sm:p-8">
<div class="mb-7 flex items-center gap-4 border-b border-peach/70 pb-5">
<span class="grid size-12 place-items-center rounded-full bg-coral text-white font-headline text-xl font-extrabold">1</span>
<h2 class="font-headline text-3xl font-extrabold text-cocoa">Shipping Address</h2>
</div>
@if(auth()->check() && auth()->user()->address && auth()->user()->city && auth()->user()->zip_code && auth()->user()->phone)
@php($savedName = explode(' ', trim(auth()->user()->name), 2))
<div class="rounded-[1.75rem] bg-mint/60 p-5">
<p class="font-headline text-2xl font-extrabold text-cocoa">Using your saved details</p>
<p class="mt-2 text-sm font-bold leading-6 text-softText">We found your customer account, so your shipping information is already filled in. You can update it anytime from your dashboard.</p>
</div>
<input type="hidden" name="first_name" value="{{ $savedName[0] ?? auth()->user()->name }}">
<input type="hidden" name="last_name" value="{{ $savedName[1] ?? '-' }}">
<input type="hidden" name="street_address" value="{{ auth()->user()->address }}">
<input type="hidden" name="city" value="{{ auth()->user()->city }}">
<input type="hidden" name="zip_code" value="{{ auth()->user()->zip_code }}">
<input type="hidden" name="phone" value="{{ auth()->user()->phone }}">
<input type="hidden" name="email" value="{{ auth()->user()->email }}">
@else
<div class="grid grid-cols-1 gap-5 md:grid-cols-2">
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">First Name</label>
<input required name="first_name" autocomplete="given-name" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Juan" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Last Name</label>
<input required name="last_name" autocomplete="family-name" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Dela Cruz" type="text">
</div>
<div class="md:col-span-2">
<label class="mb-2 block text-sm font-extrabold text-softText">Street Address</label>
<input required name="street_address" autocomplete="street-address" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="House no., street, barangay" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">City</label>
<input required name="city" autocomplete="address-level2" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Metro Manila" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Zip Code</label>
<input required name="zip_code" autocomplete="postal-code" pattern="[0-9A-Za-z -]{3,20}" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="1200" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Phone Number</label>
<input required name="phone" autocomplete="tel" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="+63 900 000 0000" type="tel">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Email Address</label>
<input name="email" autocomplete="email" oninvalid="this.setCustomValidity('Please enter a valid email address.')" oninput="this.setCustomValidity('')" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="you@example.com (optional)" type="email">
</div>
</div>
@endif
</section>
<section class="rounded-[2.5rem] bg-white/84 p-6 shadow-card sm:p-8">
<div class="mb-7 flex items-center gap-4 border-b border-peach/70 pb-5">
<span class="grid size-12 place-items-center rounded-full bg-coral text-white font-headline text-xl font-extrabold">2</span>
<h2 class="font-headline text-3xl font-extrabold text-cocoa">Shipping Method</h2>
</div>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2">
<label class="shipping-option group relative cursor-pointer rounded-[2rem] border-2 border-peach bg-cream p-6 shadow-card transition-all hover:border-coral">
<input required class="sr-only peer" name="shipping" type="radio" value="jnt">
<div class="flex items-center justify-between gap-4">
<div>
<span class="block font-headline text-2xl font-extrabold text-cocoa">J&amp;T Express</span>
<span class="text-sm font-bold text-softText">3–5 business days</span>
</div>
<span class="font-headline text-2xl font-extrabold text-coralDark">₱100</span>
</div>
</label>
<label class="shipping-option group relative cursor-pointer rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="sr-only peer" name="shipping" type="radio" value="lalamove">
<div class="flex items-center justify-between gap-4">
<div>
<span class="block font-headline text-2xl font-extrabold text-cocoa">Lalamove</span>
<span class="text-sm font-bold text-softText">Same-day delivery</span>
</div>
<span class="font-headline text-2xl font-extrabold text-coralDark">₱300</span>
</div>
</label>
<label class="shipping-option group relative cursor-pointer rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="sr-only peer" name="shipping" type="radio" value="lbc">
<div class="flex items-center justify-between gap-4">
<div>
<span class="block font-headline text-2xl font-extrabold text-cocoa">LBC</span>
<span class="text-sm font-bold text-softText">3–7 business days</span>
</div>
<span class="font-headline text-2xl font-extrabold text-coralDark">₱150</span>
</div>
</label>
<label class="shipping-option group relative cursor-pointer rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="sr-only peer" name="shipping" type="radio" value="other">
<div class="flex items-center justify-between gap-4">
<div>
<span class="block font-headline text-2xl font-extrabold text-cocoa">Other Services</span>
<span class="text-sm font-bold text-softText">Courier of your choice</span>
</div>
<span class="font-headline text-2xl font-extrabold text-coralDark">₱200</span>
</div>
</label>
</div>
</section>
<section class="rounded-[2.5rem] bg-white/84 p-6 shadow-card sm:p-8">
<div class="mb-7 flex items-center gap-4 border-b border-peach/70 pb-5">
<span class="grid size-12 place-items-center rounded-full bg-coral text-white font-headline text-xl font-extrabold">3</span>
<h2 class="font-headline text-3xl font-extrabold text-cocoa">Payment Method</h2>
</div>
<div class="space-y-5">
<div class="payment-option rounded-[2rem] border-2 border-peach/70 bg-cream p-6">
<label class="flex cursor-pointer items-center gap-4">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="card">
<span class="font-headline text-2xl font-extrabold text-cocoa">Credit / Debit Card</span>
</label>
<div class="mt-6 grid grid-cols-1 gap-5">
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Card Number</label>
<input id="card-number" name="card_number" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-white px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="0000 0000 0000 0000" type="text">
</div>
<div class="grid grid-cols-2 gap-5">
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Expiry Date</label>
<input id="expiry-date" name="expiry_date" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-white px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="MM/YY" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">CVV</label>
<input id="cvv" name="cvv" class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-white px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="***" type="text">
</div>
</div>
</div>
</div>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="cod">
<div>
<span class="block font-headline text-2xl font-extrabold text-cocoa">Cash on Delivery</span>
<span class="text-sm font-bold text-softText">Pay when your package arrives.</span>
</div>
<span class="material-symbols-outlined ml-auto text-mintDark">payments</span>
</label>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="gcash">
<div><span class="block font-headline text-2xl font-extrabold text-cocoa">GCash</span><span class="text-sm font-bold text-softText">Pay using your GCash wallet.</span></div>
<span class="material-symbols-outlined ml-auto text-coralDark">account_balance_wallet</span>
</label>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="bank">
<div><span class="block font-headline text-2xl font-extrabold text-cocoa">Bank Transfer</span><span class="text-sm font-bold text-softText">Pay directly through your bank.</span></div>
<span class="material-symbols-outlined ml-auto text-coralDark">account_balance</span>
</label>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="maya">
<div><span class="block font-headline text-2xl font-extrabold text-cocoa">Maya</span><span class="text-sm font-bold text-softText">Pay securely with Maya.</span></div>
<span class="material-symbols-outlined ml-auto text-coralDark">payments</span>
</label>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="maribank">
<div><span class="block font-headline text-2xl font-extrabold text-cocoa">MariBank</span><span class="text-sm font-bold text-softText">Pay through MariBank.</span></div>
<span class="material-symbols-outlined ml-auto text-coralDark">account_balance</span>
</label>
<label class="payment-option flex cursor-pointer items-center gap-4 rounded-[2rem] border-2 border-peach bg-cream p-6 transition-all hover:border-coral">
<input required class="size-5 border-2 border-coral text-coral focus:ring-coral" name="payment" type="radio" value="gotyme">
<div><span class="block font-headline text-2xl font-extrabold text-cocoa">GoTyme</span><span class="text-sm font-bold text-softText">Pay through GoTyme Bank.</span></div>
<span class="material-symbols-outlined ml-auto text-coralDark">account_balance</span>
</label>
</div>
</section>
<div id="payment-qr" class="hidden rounded-[2.5rem] bg-white/84 p-6 text-center shadow-card sm:p-8">
<h3 class="font-headline text-3xl font-extrabold text-cocoa">Scan to Pay</h3>
<p class="mt-2 text-sm font-bold text-softText">Use the QR code below to complete your payment.</p>
<img id="payment-qr-image" class="mx-auto mt-5 max-h-72 rounded-2xl border-4 border-mint bg-white p-3" alt="Payment QR code">
</div>
</section>
<aside class="lg:sticky lg:top-32 lg:self-start">
<div class="rounded-[2.5rem] bg-white/88 p-6 shadow-soft sm:p-8">
<h2 class="font-headline text-4xl font-extrabold text-cocoa">Summary</h2>
<div class="mt-7 border-b border-peach/70 pb-7">
<div class="flex gap-5">
<div class="grid h-32 w-24 flex-shrink-0 place-items-center rounded-[1.5rem] bg-blush">
<span class="material-symbols-outlined text-6xl text-coral">checkroom</span>
</div>
<div class="flex flex-1 flex-col justify-between">
<div>
<h3 class="font-headline text-2xl font-extrabold leading-none text-cocoa">Comfy Everyday Shirt</h3>
<p class="mt-2 text-sm font-bold text-softText">Size: M · Qty: 1</p>
</div>
<span class="font-headline text-2xl font-extrabold text-coralDark">₱399</span>
</div>
</div>
</div>
<div class="mt-7 space-y-5 text-sm font-extrabold">
<div class="flex justify-between">
<span class="text-softText">Subtotal</span>
<span class="text-cocoa">₱399</span>
</div>
<div class="flex justify-between">
<span class="text-softText">Shipping</span>
<span class="text-cocoa">₱100</span>
</div>
<div class="flex items-center justify-between border-t border-peach/70 pt-6">
<span class="font-headline text-2xl font-extrabold text-cocoa">Total</span>
<span class="font-headline text-4xl font-extrabold text-coralDark">₱499</span>
</div>
</div>
<button type="submit" class="mt-8 flex w-full items-center justify-center gap-3 rounded-full bg-coral px-6 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-white shadow-card transition-all hover:-translate-y-0.5 hover:bg-coralDark active:translate-y-0">
Complete Purchase
<span class="material-symbols-outlined">arrow_forward</span>
</button>
<div class="mt-6 flex items-center justify-center gap-3 rounded-[1.5rem] bg-mint/60 px-4 py-4 text-sm font-bold text-softText">
<span class="material-symbols-outlined text-mintDark">lock</span>
Secure checkout for your order
</div>
</div>
</aside>
</div>
</div>
</form>
</main>
<footer class="mx-auto flex max-w-7xl flex-col gap-6 px-5 pb-10 pt-4 text-center md:flex-row md:items-center md:justify-between md:text-left">
<div>
<p class="font-headline text-3xl font-extrabold text-cocoa">Triple's E</p>
<p class="text-xs font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</p>
</div>
<div class="flex flex-wrap justify-center gap-5 text-xs font-extrabold uppercase tracking-[0.18em] text-softText">
<a class="hover:text-coral" href="#">Privacy</a>
<a class="hover:text-coral" href="#">Terms</a>
<a class="hover:text-coral" href="#">Shipping</a>
<a class="hover:text-coral" href="#">Returns</a>
</div>
<p class="text-xs font-extrabold uppercase tracking-[0.18em] text-softText/70">© 2024 Triple's E Daily Wear</p>
</footer>
<script>
const paymentOptions = document.querySelectorAll('input[name="payment"]');
const paymentCards = document.querySelectorAll('.payment-option');
const shippingOptions = document.querySelectorAll('.shipping-option');
const paymentQrBox = document.getElementById('payment-qr');
const paymentQrImage = document.getElementById('payment-qr-image');
const cardFields = [
  document.getElementById('card-number'),
  document.getElementById('expiry-date'),
  document.getElementById('cvv')
];

function updateCardValidation() {
  const cardSelected = document.querySelector('input[name="payment"]:checked')?.value === 'card';
  cardFields.forEach((field) => {
    field.required = cardSelected;
  });
}

function updatePaymentQr() {
  const method = document.querySelector('input[name="payment"]:checked')?.value;
  const qrMethods = ['gcash', 'bank', 'maya', 'maribank', 'gotyme'];
  if (!qrMethods.includes(method)) {
    paymentQrBox.classList.add('hidden');
    return;
  }
  paymentQrImage.onload = () => paymentQrBox.classList.remove('hidden');
  paymentQrImage.onerror = () => paymentQrBox.classList.add('hidden');
  paymentQrImage.src = '/payment-qr/' + method + '?v=' + Date.now();
}

function updatePaymentSelection() {
  paymentCards.forEach((card) => card.classList.remove('selected'));
  const selected = document.querySelector('input[name="payment"]:checked');
  selected?.closest('.payment-option')?.classList.add('selected');
}

paymentOptions.forEach((option) => option.addEventListener('change', () => {
  updateCardValidation();
  updatePaymentQr();
  updatePaymentSelection();
}));
shippingOptions.forEach((option) => {
  const radio = option.querySelector('input[name="shipping"]');
  option.addEventListener('click', () => {
    radio.checked = true;
    shippingOptions.forEach((item) => item.classList.remove('selected'));
    option.classList.add('selected');
  });
});
updateCardValidation();
updatePaymentQr();
updatePaymentSelection();
</script>
</body>
</html>
