<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Triple's E Daily Wear</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
<script>tailwind.config={theme:{extend:{colors:{cream:'#FFF8EA',peach:'#FFD9C7',coral:'#FF7F73',coralDark:'#E95F57',mint:'#BFEEDC',mintDark:'#67BFA1',blush:'#FFF0F2',cocoa:'#563F35',softText:'#7A6258'},fontFamily:{headline:['Baloo 2','cursive'],body:['Nunito','sans-serif']},boxShadow:{card:'0 18px 45px rgba(233,95,87,.12)'}}}}</script>
<style>body{font-family:Nunito,sans-serif;background:#FFF8EA}.material-symbols-outlined{font-variation-settings:'FILL' 0,'wght' 500,'GRAD' 0,'opsz' 24}</style>
</head>
<body class="min-h-screen bg-cream text-cocoa">
<nav class="px-5 py-4 md:px-10">
<div class="mx-auto flex max-w-7xl items-center justify-between rounded-full border border-white/80 bg-white/85 px-5 py-3 shadow-card backdrop-blur-xl">
<a class="flex items-center gap-3" href="{{ route('home') }}"><span class="grid size-11 place-items-center rounded-full bg-coral text-white shadow-card"><span class="material-symbols-outlined">checkroom</span></span><span><span class="block font-headline text-2xl font-extrabold leading-none text-cocoa">Triple's E</span><span class="block text-[11px] font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</span></span></a>
<div class="hidden items-center gap-8 text-sm font-extrabold text-softText md:flex"><a class="text-coralDark hover:text-coral" href="{{ route('home') }}">Home</a><a class="hover:text-coral" href="{{ route('shop.kids') }}">Kids</a><a class="hover:text-coral" href="{{ route('shop.adults') }}">Adults</a><a class="hover:text-coral" href="{{ route('shop.new') }}">New Arrivals</a></div>
<div class="flex items-center gap-3">
<a class="grid size-11 place-items-center rounded-full bg-peach/75 text-cocoa transition-colors hover:bg-peach" href="{{ auth()->check() ? route('dashboard') : route('login') }}" aria-label="Account details">
<span class="material-symbols-outlined">person</span>
</a>
<a class="grid size-11 place-items-center rounded-full bg-mint/70 text-cocoa transition-colors hover:bg-mint" href="{{ route('cart') }}" aria-label="Shopping bag"><span class="material-symbols-outlined">shopping_bag</span></a>
</div>
</div>
</nav>
<main class="mx-auto min-h-screen max-w-5xl px-5 py-8 sm:px-8 lg:px-10">
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
@forelse($products as $product)
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card transition-transform hover:-translate-y-1">
<a class="absolute inset-0 z-10" href="{{ route('product.show', $product->slug) }}" aria-label="View {{ $product->name }}"></a>
<div class="grid aspect-[4/3] place-items-center bg-blush"><span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">{{ $product->icon }}</span></div>
<div class="p-4 sm:p-5"><p class="text-[10px] font-black uppercase tracking-[0.18em] text-coralDark">{{ $product->category }}</p><h2 class="mt-2 min-h-[2.5rem] font-headline text-2xl font-extrabold leading-tight text-cocoa">{{ $product->name }}</h2><div class="mt-3 flex items-center justify-between gap-2"><span class="font-headline text-xl font-extrabold text-coralDark">₱{{ number_format($product->price, 2) }}</span><span class="rounded-full bg-mint px-3 py-1 text-[11px] font-extrabold text-cocoa">{{ $product->stock }} left</span></div></div>
</article>
@empty
<p class="col-span-full rounded-2xl bg-white p-8 text-center font-bold text-softText">No products available.</p>
@endforelse
</div>
<section class="mt-14">
<div class="grid grid-cols-1 gap-3 md:grid-cols-3">
<div class="flex items-center gap-4 rounded-[1.75rem] bg-mint/80 px-5 py-4 shadow-card"><span class="grid size-10 flex-shrink-0 place-items-center rounded-full bg-white text-cocoa"><span class="material-symbols-outlined">local_shipping</span></span><div><h3 class="font-headline text-xl font-extrabold leading-none text-cocoa">Nationwide Delivery</h3><p class="mt-1 text-xs font-bold text-softText">Ship to your location</p></div></div>
<div class="flex items-center gap-4 rounded-[1.75rem] bg-peach/80 px-5 py-4 shadow-card"><span class="grid size-10 flex-shrink-0 place-items-center rounded-full bg-white text-cocoa"><span class="material-symbols-outlined">verified</span></span><div><h3 class="font-headline text-xl font-extrabold leading-none text-cocoa">Comfy Quality</h3><p class="mt-1 text-xs font-bold text-softText">Soft everyday fabric</p></div></div>
<div class="flex items-center gap-4 rounded-[1.75rem] bg-butter/80 px-5 py-4 shadow-card"><span class="grid size-10 flex-shrink-0 place-items-center rounded-full bg-white text-cocoa"><span class="material-symbols-outlined">undo</span></span><div><h3 class="font-headline text-xl font-extrabold leading-none text-cocoa">Easy Returns</h3><p class="mt-1 text-xs font-bold text-softText">Support for exchanges</p></div></div>
</div>
<div class="mx-auto mt-14 max-w-3xl rounded-[2.5rem] bg-coral px-6 py-10 text-center text-white shadow-soft sm:px-10">
<p class="text-sm font-extrabold">Get updates and offers</p>
<h2 class="mt-2 font-headline text-4xl font-extrabold leading-tight sm:text-5xl">Join the Triple's E list</h2>
<p class="mx-auto mt-3 max-w-xl text-sm font-bold text-white/90">Receive new arrivals, sale alerts, and comfy outfit ideas for kids and adults.</p>
<div class="mx-auto mt-6 flex max-w-lg flex-col gap-3 sm:flex-row"><input class="min-w-0 flex-1 rounded-full border-0 bg-white px-5 py-4 text-sm font-bold text-cocoa outline-none placeholder:text-softText/60 focus:ring-4 focus:ring-white/30" type="email" placeholder="Enter your email" aria-label="Email for updates"><button class="rounded-full bg-mint px-6 py-4 text-sm font-black uppercase tracking-[.12em] text-cocoa transition hover:bg-white" type="button">Subscribe</button></div>
</div>
</section>
</main>
</body>
</html>
