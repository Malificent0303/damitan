<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Triple's E Daily Wear | Contact & Support</title>
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

  .clothes-pattern {
    background-image:
      linear-gradient(rgba(255, 255, 255, 0.72), rgba(255, 255, 255, 0.72)),
      url("data:image/svg+xml,%3Csvg width='128' height='128' viewBox='0 0 128 128' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23FF9E94' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' opacity='.42'%3E%3Cpath d='M31 39l13-9 11 12h18l11-12 13 9-10 20-9-4v43H50V55l-9 4-10-20z'/%3E%3Cpath d='M18 94h28M82 94h28M25 104h15M88 104h18'/%3E%3Ccircle cx='95' cy='25' r='7' fill='%23BFEEDC' stroke='none'/%3E%3Ccircle cx='29' cy='25' r='6' fill='%23FFE8A3' stroke='none'/%3E%3C/g%3E%3C/svg%3E");
  }

  input:focus, textarea:focus, select:focus {
    box-shadow: 0 0 0 4px rgba(255, 127, 115, 0.18);
  }
</style>
</head>
<body class="min-h-screen overflow-x-hidden bg-cream text-cocoa font-body selection:bg-coral selection:text-white">
<nav class="fixed top-0 inset-x-0 z-50 px-5 py-4 md:px-10">
<div class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/80 bg-vanilla/85 px-5 py-3 shadow-card backdrop-blur-xl">
<a class="flex items-center gap-3" href="{{ route('home') }}">
<span class="grid size-11 place-items-center rounded-full bg-coral text-white shadow-card">
<span class="material-symbols-outlined">checkroom</span>
</span>
<span>
<span class="block font-headline text-2xl font-extrabold leading-none text-cocoa">Triple's E</span>
<span class="block text-[11px] font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</span>
</span>
</a>
<div class="hidden items-center gap-8 text-sm font-extrabold text-softText lg:flex">
<a class="hover:text-coral transition-colors" href="{{ route('shop') }}">Shop</a>
<a class="hover:text-coral transition-colors" href="{{ route('shop.new') }}">New Arrivals</a>
<a class="hover:text-coral transition-colors" href="{{ route('shop.kids') }}">Kids</a>
<a class="hover:text-coral transition-colors" href="{{ route('shop.adults') }}">Adults</a>
<a class="text-coralDark" href="{{ route('contact') }}">Contact</a>
</div>
<div class="flex items-center gap-3">
<button class="grid size-11 place-items-center rounded-full bg-mint/70 text-cocoa hover:bg-mint transition-colors" aria-label="Search">
<span class="material-symbols-outlined">search</span>
</button>
<button class="grid size-11 place-items-center rounded-full bg-peach/75 text-cocoa hover:bg-peach transition-colors" aria-label="Cart">
<span class="material-symbols-outlined">shopping_bag</span>
</button>
</div>
</div>
</nav>
<main class="mx-auto max-w-7xl px-5 pb-16 pt-32 md:px-8">
<header class="relative overflow-hidden rounded-[2.5rem] clothes-pattern px-7 py-12 shadow-soft sm:px-10 md:px-14 md:py-16">
<div class="absolute right-8 top-8 hidden rotate-6 rounded-[2rem] bg-butter p-5 shadow-card sm:block">
<span class="material-symbols-outlined text-5xl text-cocoa">support_agent</span>
</div>
<div class="absolute bottom-8 right-20 hidden -rotate-6 rounded-[2rem] bg-mint p-5 shadow-card md:block">
<span class="material-symbols-outlined text-5xl text-cocoa">local_shipping</span>
</div>
<div class="relative max-w-3xl rounded-[2rem] border border-white/80 bg-white/74 p-7 shadow-card backdrop-blur sm:p-9">
<p class="mb-4 inline-flex rounded-full bg-mint/80 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cocoa">
Customer care
</p>
<h1 class="font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl md:text-7xl">
How can we<br>
help you today?
</h1>
<p class="mt-5 max-w-2xl text-base leading-7 text-softText sm:text-lg">
Need help with an order, size, delivery, or return? Send us a message and our Triple's E team will assist you.
</p>
</div>
</header>
<section class="mt-10 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
<article class="rounded-[2rem] bg-white/82 p-6 shadow-card">
<span class="grid size-12 place-items-center rounded-full bg-mint text-cocoa">
<span class="material-symbols-outlined">local_shipping</span>
</span>
<h3 class="mt-5 font-headline text-2xl font-extrabold text-cocoa">Track Order</h3>
<p class="mt-2 text-sm leading-6 text-softText">Check updates for your kids and adult clothing purchases.</p>
<a class="mt-5 inline-flex items-center gap-2 font-extrabold text-coralDark hover:text-coral" href="#">View Status <span class="material-symbols-outlined text-base">arrow_forward</span></a>
</article>
<article class="rounded-[2rem] bg-white/82 p-6 shadow-card">
<span class="grid size-12 place-items-center rounded-full bg-peach text-cocoa">
<span class="material-symbols-outlined">replay</span>
</span>
<h3 class="mt-5 font-headline text-2xl font-extrabold text-cocoa">Return Item</h3>
<p class="mt-2 text-sm leading-6 text-softText">Request a return or exchange for eligible daily wear items.</p>
<a class="mt-5 inline-flex items-center gap-2 font-extrabold text-coralDark hover:text-coral" href="#">Return Portal <span class="material-symbols-outlined text-base">arrow_forward</span></a>
</article>
<article class="rounded-[2rem] bg-white/82 p-6 shadow-card">
<span class="grid size-12 place-items-center rounded-full bg-butter text-cocoa">
<span class="material-symbols-outlined">straighten</span>
</span>
<h3 class="mt-5 font-headline text-2xl font-extrabold text-cocoa">Size Guide</h3>
<p class="mt-2 text-sm leading-6 text-softText">Find the right fit for kids, teens, and adults.</p>
<a class="mt-5 inline-flex items-center gap-2 font-extrabold text-coralDark hover:text-coral" href="#">Open Guide <span class="material-symbols-outlined text-base">arrow_forward</span></a>
</article>
<article class="rounded-[2rem] bg-white/82 p-6 shadow-card">
<span class="grid size-12 place-items-center rounded-full bg-blush text-cocoa">
<span class="material-symbols-outlined">payments</span>
</span>
<h3 class="mt-5 font-headline text-2xl font-extrabold text-cocoa">Payment Help</h3>
<p class="mt-2 text-sm leading-6 text-softText">Ask about payment options, refunds, and checkout concerns.</p>
<a class="mt-5 inline-flex items-center gap-2 font-extrabold text-coralDark hover:text-coral" href="#">Learn More <span class="material-symbols-outlined text-base">arrow_forward</span></a>
</article>
</section>
<div class="mt-14 grid grid-cols-1 gap-8 lg:grid-cols-12">
<aside class="space-y-6 lg:col-span-4">
<section class="rounded-[2.25rem] bg-white/82 p-7 shadow-card">
<p class="font-headline text-3xl font-extrabold text-cocoa">Customer Care</p>
<div class="mt-6 space-y-5">
<div>
<p class="text-sm font-extrabold uppercase tracking-[0.16em] text-coralDark">Email</p>
<p class="mt-1 text-lg font-extrabold text-cocoa">support@triplese.com</p>
</div>
<div>
<p class="text-sm font-extrabold uppercase tracking-[0.16em] text-coralDark">Support Hours</p>
<p class="mt-1 leading-7 text-softText">Monday - Saturday<br>9:00 AM - 6:00 PM</p>
</div>
<div>
<p class="text-sm font-extrabold uppercase tracking-[0.16em] text-coralDark">Response Time</p>
<p class="mt-1 font-extrabold text-mintDark">Within 24 hours</p>
</div>
</div>
</section>
<section class="rounded-[2.25rem] bg-mint/70 p-7 shadow-card">
<div class="flex items-center gap-3">
<span class="grid size-12 place-items-center rounded-full bg-white/80 text-cocoa">
<span class="material-symbols-outlined">info</span>
</span>
<h3 class="font-headline text-2xl font-extrabold text-cocoa">Order Support</h3>
</div>
<p class="mt-4 leading-7 text-softText">
For faster help, include your order number, delivery option, and the item name or size you need assistance with.
</p>
</section>
<section class="overflow-hidden rounded-[2.25rem] bg-white/82 shadow-card">
<div class="clothes-pattern min-h-72 p-7 flex items-end">
<div class="rounded-[1.7rem] bg-white/78 p-5 shadow-card backdrop-blur">
<p class="font-headline text-3xl font-extrabold leading-none text-cocoa">Cute, comfy help for every order.</p>
<p class="mt-3 text-sm leading-6 text-softText">We’re here for delivery, sizing, returns, and product questions.</p>
</div>
</div>
</section>
</aside>
<section class="rounded-[2.5rem] bg-white/86 p-6 shadow-soft sm:p-8 lg:col-span-8">
<div class="mb-7">
<p class="font-headline text-xl font-extrabold text-coralDark">Send a message</p>
<h2 class="mt-2 font-headline text-4xl font-extrabold text-cocoa">Tell us what you need</h2>
</div>
<form action="#" class="space-y-5">
<div class="grid grid-cols-1 gap-5 md:grid-cols-2">
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Full Name *</label>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Juan Dela Cruz" required type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Email Address *</label>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="you@example.com" required type="email">
</div>
</div>
<div class="grid grid-cols-1 gap-5 md:grid-cols-2">
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Order Number</label>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="#TE-000123" type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Topic *</label>
<select class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa outline-none transition-all focus:border-coral" required>
<option disabled selected value="">Select a topic...</option>
<option value="order_status">Order Status</option>
<option value="delivery">Delivery</option>
<option value="return">Return / Exchange</option>
<option value="refund">Refund</option>
<option value="size_fit">Size / Fit</option>
<option value="payment">Payment</option>
<option value="product">Product Question</option>
<option value="account">Account</option>
<option value="other">Other</option>
</select>
</div>
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Subject *</label>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Brief description of your concern" required type="text">
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Message *</label>
<textarea class="w-full resize-none rounded-[1.35rem] border-2 border-peach/70 bg-cream px-5 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" placeholder="Please include size, color, item name, delivery option, or order number if available..." required rows="6"></textarea>
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText">Attachment</label>
<label class="flex cursor-pointer items-center justify-center gap-3 rounded-[1.35rem] border-2 border-dashed border-coral/35 bg-blush px-5 py-5 text-sm font-extrabold text-softText transition-colors hover:bg-peach/50">
<span class="material-symbols-outlined text-coral">upload_file</span>
Click to upload file or screenshot
<input class="sr-only" type="file">
</label>
</div>
<button class="group flex w-full items-center justify-center gap-3 rounded-full bg-coral px-6 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-white shadow-card transition-all hover:-translate-y-0.5 hover:bg-coralDark active:translate-y-0" type="submit">
Send Message
<span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</form>
</section>
</div>
<section class="mt-16 rounded-[2.5rem] bg-white/72 p-6 shadow-card sm:p-8">
<div class="mb-8">
<p class="font-headline text-xl font-extrabold text-coralDark">Quick answers</p>
<h2 class="font-headline text-4xl font-extrabold text-cocoa">Frequently Asked Questions</h2>
<p class="mt-3 max-w-2xl leading-7 text-softText">Helpful answers about orders, sizing, shipping, and returns.</p>
</div>
<div class="grid grid-cols-1 gap-4 md:grid-cols-2">
<details class="group rounded-[1.7rem] bg-cream p-5">
<summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-headline text-xl font-extrabold text-cocoa">
Where is my order?
<span class="material-symbols-outlined text-coral transition-transform group-open:rotate-45">add</span>
</summary>
<p class="mt-3 leading-7 text-softText">Once your order ships, you can track it using the delivery details sent to your email or account.</p>
</details>
<details class="group rounded-[1.7rem] bg-cream p-5">
<summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-headline text-xl font-extrabold text-cocoa">
How long is delivery?
<span class="material-symbols-outlined text-coral transition-transform group-open:rotate-45">add</span>
</summary>
<p class="mt-3 leading-7 text-softText">Delivery time depends on the selected courier and location. We’ll send updates once your order is packed.</p>
</details>
<details class="group rounded-[1.7rem] bg-cream p-5">
<summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-headline text-xl font-extrabold text-cocoa">
Can I exchange sizes?
<span class="material-symbols-outlined text-coral transition-transform group-open:rotate-45">add</span>
</summary>
<p class="mt-3 leading-7 text-softText">Yes, eligible items may be exchanged if unused, unwashed, and still in good condition with tags.</p>
</details>
<details class="group rounded-[1.7rem] bg-cream p-5">
<summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-headline text-xl font-extrabold text-cocoa">
Do you have kids and adult sizes?
<span class="material-symbols-outlined text-coral transition-transform group-open:rotate-45">add</span>
</summary>
<p class="mt-3 leading-7 text-softText">Yes, Triple’s E Daily Wear offers comfy daily clothing options for kids and adults.</p>
</details>
</div>
</section>
</main>
<footer class="mx-auto flex max-w-7xl flex-col gap-6 px-5 pb-10 pt-2 text-center md:flex-row md:items-center md:justify-between md:text-left">
<div>
<p class="font-headline text-3xl font-extrabold text-cocoa">Triple's E</p>
<p class="text-xs font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</p>
</div>
<div class="flex flex-wrap justify-center gap-5 text-xs font-extrabold uppercase tracking-[0.18em] text-softText">
<a class="hover:text-coral" href="#">Shop</a>
<a class="hover:text-coral" href="#">About</a>
<a class="hover:text-coral" href="#">Contact</a>
<a class="hover:text-coral" href="#">Privacy</a>
<a class="hover:text-coral" href="#">Returns</a>
</div>
<p class="text-xs font-extrabold uppercase tracking-[0.18em] text-softText/70">© 2024 Triple's E Daily Wear</p>
</footer>
</body>
</html>
