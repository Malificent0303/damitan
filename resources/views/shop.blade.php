<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Triple's E Daily Wear | Shop Collection</title>
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

        select:focus, input:focus {
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
<div class="hidden items-center gap-8 text-sm font-extrabold text-softText md:flex">
<a class="hover:text-coral transition-colors" href="{{ route('home') }}">Home</a>
<a class="text-coralDark" href="{{ route('shop') }}">Shop</a>
<a class="hover:text-coral transition-colors" href="{{ route('shop.kids') }}">Kids</a>
<a class="hover:text-coral transition-colors" href="{{ route('shop.adults') }}">Adults</a>
<a class="hover:text-coral transition-colors" href="{{ route('contact') }}">Contact</a>
</div>
<div class="flex items-center gap-3">
<button class="grid size-11 place-items-center rounded-full bg-mint/70 text-cocoa hover:bg-mint transition-colors" aria-label="Search" type="button" onclick="document.getElementById('productSearch').focus()">
<span class="material-symbols-outlined">search</span>
</button>
<a class="grid size-11 place-items-center rounded-full bg-peach/75 text-cocoa hover:bg-peach transition-colors" aria-label="Shopping bag" href="{{ route('cart') }}">
<span class="material-symbols-outlined">shopping_bag</span>
</a>
</div>
</div>
</nav>
<main class="pt-32 pb-14">
<header class="mx-auto max-w-7xl px-5 md:px-8">
<section class="relative overflow-hidden rounded-[2.75rem] clothes-pattern px-7 py-14 shadow-soft sm:px-10 md:px-14 md:py-18">
<div class="absolute right-8 top-8 hidden rotate-6 rounded-[2rem] bg-butter p-5 shadow-card sm:block">
<span class="material-symbols-outlined text-5xl text-cocoa">styler</span>
</div>
<div class="relative max-w-3xl rounded-[2rem] border border-white/80 bg-white/76 p-7 shadow-card backdrop-blur sm:p-9">
<p class="inline-flex rounded-full bg-mint/80 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cocoa">
Shop collection
</p>
<h1 class="mt-5 font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl md:text-7xl">
Cute daily wear<br>
for kids & adults
</h1>
<p class="mt-5 max-w-2xl text-base leading-7 text-softText sm:text-lg">
Explore soft tees, comfy sets, shorts, and family bundles made for everyday comfort and easy styling.
</p>
</div>
</section>
</header>
<section class="relative z-30 mt-8 px-5 md:px-8 lg:sticky lg:top-24">
<div class="mx-auto flex max-w-7xl flex-col gap-4 overflow-visible rounded-[2rem] border border-white/80 bg-white/95 p-4 shadow-card backdrop-blur md:flex-row md:items-center md:justify-between">
<div class="flex flex-wrap gap-3">
<a href="{{ route('shop') }}" class="rounded-full bg-coral px-6 py-3 text-xs font-black uppercase tracking-[0.14em] text-white shadow-card">All</a>
<a href="{{ route('shop.kids') }}" class="rounded-full bg-cream px-6 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText hover:text-coral">Kids</a>
<a href="{{ route('shop.adults') }}" class="rounded-full bg-cream px-6 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText hover:text-coral">Adults</a>
<a href="{{ route('shop.family') }}" class="rounded-full bg-cream px-6 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText hover:text-coral">Family Set</a>
<a href="{{ route('shop.new') }}" class="rounded-full bg-cream px-6 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText hover:text-coral">New</a>
</div>
<form class="flex w-full flex-col gap-3 sm:flex-row sm:items-center md:w-auto" method="GET" action="{{ route('shop') }}">
<label class="flex items-center gap-2 rounded-full bg-blush px-4 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText"><span class="material-symbols-outlined text-base">search</span><input id="productSearch" class="w-full border-none bg-transparent p-0 text-sm font-bold text-cocoa outline-none placeholder:text-softText/70 focus:ring-0 sm:w-40" type="search" name="q" value="{{ $search ?? '' }}" placeholder="Search products"></label>
<label class="flex items-center justify-between gap-2 whitespace-nowrap rounded-full bg-blush px-4 py-3 text-xs font-black uppercase tracking-[0.14em] text-softText">Sort By:<select name="sort" onchange="this.form.submit()" class="max-w-full border-none bg-transparent p-0 text-xs font-black text-cocoa focus:ring-0"><option value="newest" @selected(($sort ?? 'newest') === 'newest')>Newest First</option><option value="price_asc" @selected(($sort ?? '') === 'price_asc')>Price: Low to High</option><option value="price_desc" @selected(($sort ?? '') === 'price_desc')>Price: High to Low</option><option value="name" @selected(($sort ?? '') === 'name')>Name</option></select></label>
<button class="rounded-full bg-coral px-5 py-3 text-xs font-black uppercase tracking-[0.14em] text-white" type="submit">Search</button>
</form>
</div>
</section>
<section class="hidden mx-auto max-w-7xl px-5 py-14 md:px-8">
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'playday-cotton-tee') }}" aria-label="View Playday Cotton Tee"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-blush">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Kids</span>
<span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">checkroom</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Soft cotton</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Playday Cotton Tee</h3>
<p class="mt-3 text-sm leading-6 text-softText">Easy shirt for school, play, and weekend errands.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱299.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'comfy-everyday-shirt') }}" aria-label="View Comfy Everyday Shirt"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-mint/55">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Adults</span>
<span class="material-symbols-outlined text-8xl text-mintDark transition-transform group-hover:scale-110">styler</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Everyday basic</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Comfy Everyday Shirt</h3>
<p class="mt-3 text-sm leading-6 text-softText">Simple top for daily errands, lounging, and casual days.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱399.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'matchy-daily-set') }}" aria-label="View Matchy Daily Set"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-butter/65">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Bundle</span>
<span class="material-symbols-outlined text-8xl text-cocoa transition-transform group-hover:scale-110">family_restroom</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Family match</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Matchy Daily Set</h3>
<p class="mt-3 text-sm leading-6 text-softText">Coordinated pieces for cute family OOTD moments.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱699.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'little-explorer-shorts') }}" aria-label="View Little Explorer Shorts"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-peach/65">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Kids</span>
<span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">child_care</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Play-ready</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Little Explorer Shorts</h3>
<p class="mt-3 text-sm leading-6 text-softText">Light shorts for active kids and warm days.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱249.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'soft-lounge-top') }}" aria-label="View Soft Lounge Top"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-cream">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Adults</span>
<span class="material-symbols-outlined text-8xl text-mintDark transition-transform group-hover:scale-110">dry_cleaning</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Soft lounge</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Soft Lounge Top</h3>
<p class="mt-3 text-sm leading-6 text-softText">A relaxed top made for comfort without looking plain.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱449.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'weekend-wear-pack') }}" aria-label="View Weekend Wear Pack"></a>
<div class="relative grid aspect-[4/3] place-items-center bg-blush">
<span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">Bundle</span>
<span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">redeem</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Value pack</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">Weekend Wear Pack</h3>
<p class="mt-3 text-sm leading-6 text-softText">A practical bundle for repeat weekly outfits.</p>
<div class="mt-5 flex items-center justify-between gap-3">
<span class="font-headline text-2xl font-extrabold text-coralDark">₱899.00</span>
<button class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa hover:bg-mintDark hover:text-white">Add to Cart</button>
</div>
</div>
</article>
</div>
</section>
<section class="mx-auto max-w-7xl px-5 py-10 md:px-8">
<div class="grid grid-cols-1 gap-5 rounded-[2.5rem] bg-white/78 p-6 shadow-card md:grid-cols-3">
<div class="flex items-center gap-5 rounded-[1.75rem] bg-mint/65 p-5">
<span class="grid size-12 place-items-center rounded-full bg-white/80 text-cocoa">
<span class="material-symbols-outlined">local_shipping</span>
</span>
<div>
<h4 class="font-headline text-2xl font-extrabold text-cocoa">Nationwide Delivery</h4>
<p class="text-sm font-bold text-softText">Ship to your location</p>
</div>
</div>
<div class="flex items-center gap-5 rounded-[1.75rem] bg-peach/65 p-5">
<span class="grid size-12 place-items-center rounded-full bg-white/80 text-cocoa">
<span class="material-symbols-outlined">verified</span>
</span>
<div>
<h4 class="font-headline text-2xl font-extrabold text-cocoa">Comfy Quality</h4>
<p class="text-sm font-bold text-softText">Soft everyday fabric</p>
</div>
</div>
<div class="flex items-center gap-5 rounded-[1.75rem] bg-butter/65 p-5">
<span class="grid size-12 place-items-center rounded-full bg-white/80 text-cocoa">
<span class="material-symbols-outlined">undo</span>
</span>
<div>
<h4 class="font-headline text-2xl font-extrabold text-cocoa">Easy Returns</h4>
<p class="text-sm font-bold text-softText">Support for exchanges</p>
</div>
</div>
</div>
</section>
<section class="mx-auto max-w-4xl px-5 py-16 text-center md:px-8">
<div class="rounded-[2.75rem] bg-coral p-8 text-white shadow-soft sm:p-12">
<p class="font-headline text-xl font-extrabold">Get updates and offers</p>
<h2 class="mt-2 font-headline text-5xl font-extrabold leading-none md:text-6xl">Join the Triple's E list</h2>
<p class="mx-auto mt-5 max-w-2xl text-lg leading-8 text-white/90">Receive new arrivals, sale alerts, and comfy outfit ideas for kids and adults.</p>
<form class="mx-auto mt-8 flex max-w-xl flex-col gap-3 sm:flex-row">
<input class="min-w-0 flex-grow rounded-full border-none bg-white px-6 py-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none" placeholder="Enter your email" type="email">
<button class="rounded-full bg-mint px-8 py-4 font-headline text-base font-extrabold uppercase tracking-[0.12em] text-cocoa hover:bg-butter" type="submit">Subscribe</button>
</form>
</div>
</section>
<section class="mx-auto max-w-7xl px-5 py-14 md:px-8"><div class="mb-8 rounded-[2.5rem] bg-white/80 p-7 shadow-card"><p class="font-headline text-xl font-extrabold text-coralDark">Live shop collection</p><h2 class="mt-2 font-headline text-5xl font-extrabold">Updated products</h2><p class="mt-2 font-bold text-softText">Names, prices, descriptions, and stock are synced from admin inventory.</p></div><div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">@forelse($products as $product)<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card"><a class="absolute inset-0 z-10" href="{{ route('product.show', $product->slug) }}" aria-label="View {{ $product->name }}"></a><div class="relative grid aspect-[4/3] place-items-center bg-blush"><span class="absolute left-5 top-5 rounded-full bg-white px-3 py-1 text-xs font-black text-coralDark">{{ $product->badge ?: $product->category }}</span><span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">{{ $product->icon }}</span></div><div class="p-6"><p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">{{ $product->category }}</p><h3 class="mt-2 font-headline text-3xl font-extrabold leading-none text-cocoa">{{ $product->name }}</h3><p class="mt-3 text-sm leading-6 text-softText">{{ $product->description }}</p><div class="mt-5 flex items-center justify-between gap-3"><span class="font-headline text-2xl font-extrabold text-coralDark">₱{{ number_format($product->price, 2) }}</span><span class="rounded-full bg-mint px-4 py-2 text-sm font-extrabold text-cocoa">{{ $product->stock }} left</span></div></div></article>@empty<div class="rounded-2xl bg-white p-8 font-bold text-softText">No products available.</div>@endforelse</div></section>
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
<a class="hover:text-coral" href="#">Contact</a>
</div>
<p class="text-xs font-extrabold uppercase tracking-[0.18em] text-softText/70">© 2024 Triple's E Daily Wear</p>
</footer>
</body>
</html>
