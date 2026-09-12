<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Triple's E Daily Wear | Order Success</title>
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
    font-variation-settings: 'FILL' 1, 'wght' 500, 'GRAD' 0, 'opsz' 24;
  }

  .clothes-pattern {
    background-image:
      linear-gradient(rgba(255, 255, 255, 0.72), rgba(255, 255, 255, 0.72)),
      url("data:image/svg+xml,%3Csvg width='128' height='128' viewBox='0 0 128 128' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23FF9E94' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' opacity='.42'%3E%3Cpath d='M31 39l13-9 11 12h18l11-12 13 9-10 20-9-4v43H50V55l-9 4-10-20z'/%3E%3Cpath d='M18 94h28M82 94h28M25 104h15M88 104h18'/%3E%3Ccircle cx='95' cy='25' r='7' fill='%23BFEEDC' stroke='none'/%3E%3Ccircle cx='29' cy='25' r='6' fill='%23FFE8A3' stroke='none'/%3E%3C/g%3E%3C/svg%3E");
  }
</style>
</head>
<body class="min-h-screen overflow-x-hidden bg-cream text-cocoa font-body selection:bg-coral selection:text-white">
<main class="relative min-h-screen px-5 py-8">
<section class="mx-auto flex min-h-[calc(100vh-4rem)] max-w-5xl items-center justify-center overflow-hidden rounded-[2.75rem] clothes-pattern p-6 shadow-soft sm:p-10">
<div class="relative w-full max-w-3xl rounded-[2.5rem] border border-white/80 bg-white/82 p-7 text-center shadow-soft backdrop-blur sm:p-10 md:p-14">
<div class="mx-auto mb-8 grid size-28 place-items-center rounded-[2rem] bg-mint text-cocoa shadow-card rotate-6">
<span class="material-symbols-outlined -rotate-6 text-6xl text-mintDark">check_circle</span>
</div>
<p class="mx-auto mb-4 inline-flex rounded-full bg-blush px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-coralDark">
Order confirmed
</p>
<h1 class="font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl md:text-7xl">
Your order has been placed successfully
</h1>
<p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-softText sm:text-lg">
Thank you for shopping at Triple’s E Daily Wear. We’ll prepare your comfy kids and adult clothing pieces soon.
</p>
<div class="mt-10 grid grid-cols-1 gap-4 md:grid-cols-3">
<div class="rounded-[1.75rem] bg-cream p-5 text-left shadow-card">
<span class="text-sm font-black uppercase tracking-[0.16em] text-softText">Reference</span>
<p class="mt-2 font-headline text-2xl font-extrabold text-cocoa">{{ $order?->reference ?? 'Order confirmed' }}</p>
</div>
<div class="rounded-[1.75rem] bg-blush p-5 text-left shadow-card">
<span class="text-sm font-black uppercase tracking-[0.16em] text-softText">Total Amount</span>
<p class="mt-2 font-headline text-2xl font-extrabold text-coralDark">₱{{ number_format($order?->total ?? 0, 2) }}</p>
</div>
<div class="rounded-[1.75rem] bg-mint/65 p-5 text-left shadow-card">
<span class="text-sm font-black uppercase tracking-[0.16em] text-softText">Method</span>
<p class="mt-2 font-headline text-2xl font-extrabold text-cocoa">{{ $order ? ucfirst(str_replace('_', ' ', $order->payment_method)) : 'Payment received' }}</p>
</div>
</div>
<div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
<a class="inline-flex w-full items-center justify-center gap-3 rounded-full bg-coral px-8 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-white shadow-card transition-all hover:-translate-y-0.5 hover:bg-coralDark sm:w-auto" href="{{ route('home') }}">
Continue Shopping
<span class="material-symbols-outlined">arrow_forward</span>
</a>
<a class="inline-flex w-full items-center justify-center rounded-full border-2 border-coral bg-white px-8 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-coralDark transition-all hover:bg-blush sm:w-auto" href="{{ route('cart') }}">
Back to Cart
</a>
</div>
<div class="mx-auto mt-12 flex max-w-md items-center justify-center gap-3 rounded-[1.5rem] bg-butter/70 px-5 py-4 text-sm font-bold text-softText">
<span class="material-symbols-outlined text-coral">local_shipping</span>
You’ll receive delivery updates once your order is packed.
</div>
<p class="mt-6 text-sm font-extrabold text-coralDark">
Returning to the home page in <span id="redirectCountdown">4</span> seconds...
</p>
</div>
</section>
</main>
<footer class="mx-auto flex max-w-7xl flex-col gap-6 px-5 pb-10 pt-4 text-center md:flex-row md:items-center md:justify-between md:text-left">
<div>
<p class="font-headline text-3xl font-extrabold text-cocoa">Triple's E</p>
<p class="text-xs font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</p>
</div>
<div class="flex flex-wrap justify-center gap-5 text-xs font-extrabold uppercase tracking-[0.18em] text-softText">
<a class="hover:text-coral" href="#">Terms</a>
<a class="hover:text-coral" href="#">Privacy</a>
<a class="hover:text-coral" href="#">Shipping</a>
<a class="hover:text-coral" href="#">Returns</a>
<a class="hover:text-coral" href="#">Contact</a>
</div>
<p class="text-xs font-extrabold uppercase tracking-[0.18em] text-softText/70">© 2024 Triple's E Daily Wear</p>
</footer>
<script>
  let seconds = 4;
  const countdown = document.getElementById('redirectCountdown');

  const redirectTimer = setInterval(() => {
    seconds -= 1;
    countdown.textContent = seconds;

    if (seconds <= 0) {
      clearInterval(redirectTimer);
      window.location.href = @json(route('home'));
    }
  }, 1000);
</script>
</body>
</html>
