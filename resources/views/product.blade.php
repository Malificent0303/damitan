<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>{{ $product['name'] }} | Triple's E Daily Wear</title>
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

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
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
<a class="hover:text-coral transition-colors" href="#">Kids</a>
<a class="hover:text-coral transition-colors" href="#">Adults</a>
<a class="hover:text-coral transition-colors" href="#">Contact</a>
</div>
<div class="flex items-center gap-3">
<button class="grid size-11 place-items-center rounded-full bg-mint/70 text-cocoa hover:bg-mint transition-colors" aria-label="Cart">
<span class="material-symbols-outlined">shopping_bag</span>
</button>
<button class="grid size-11 place-items-center rounded-full bg-peach/75 text-cocoa hover:bg-peach transition-colors" aria-label="Account">
<span class="material-symbols-outlined">person</span>
</button>
</div>
</div>
</nav>
<main class="mx-auto max-w-7xl px-5 pb-16 pt-32 lg:px-8">
<section class="grid grid-cols-1 gap-8 lg:grid-cols-12 lg:gap-12">
<div class="lg:col-span-7">
<div class="relative overflow-hidden rounded-[2.75rem] clothes-pattern p-6 shadow-soft sm:p-8">
<span class="absolute left-8 top-8 rounded-full bg-coral px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-white shadow-card">
{{ $product['badge'] }}
</span>
<div class="grid min-h-[560px] place-items-center rounded-[2.25rem] bg-white/70 p-8 backdrop-blur">
<div class="text-center">
<span class="material-symbols-outlined text-[11rem] text-coral sm:text-[14rem]">{{ $product['icon'] }}</span>
<p class="mt-4 font-headline text-4xl font-extrabold text-cocoa">{{ $product['name'] }}</p>
<p class="mt-2 text-softText">Soft daily top for kids and adults</p>
</div>
</div>
</div>
<div class="mt-5 grid grid-cols-3 gap-4">
<button class="grid aspect-square place-items-center rounded-[1.75rem] bg-white shadow-card">
<span class="material-symbols-outlined text-5xl text-coral">checkroom</span>
</button>
<button class="grid aspect-square place-items-center rounded-[1.75rem] bg-mint/70 shadow-card">
<span class="material-symbols-outlined text-5xl text-mintDark">styler</span>
</button>
<button class="grid aspect-square place-items-center rounded-[1.75rem] bg-butter/70 shadow-card">
<span class="material-symbols-outlined text-5xl text-cocoa">laundry</span>
</button>
</div>
</div>
<div class="lg:col-span-5 lg:flex lg:items-center">
<article class="rounded-[2.5rem] bg-white/84 p-6 shadow-soft sm:p-8">
<header>
<div class="mb-4 flex items-center gap-4">
<span class="rounded-full bg-mint/80 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-cocoa">Daily basics</span>
<div class="h-px flex-1 bg-peach"></div>
</div>
<h1 class="font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl">{{ $product['name'] }}</h1>
<div class="mt-5 flex items-baseline gap-4">
<p class="font-headline text-4xl font-extrabold text-coralDark">₱{{ number_format($product['price']) }}</p>
<span class="text-lg font-bold text-softText line-through">₱{{ number_format($product['original_price']) }}</span>
</div>
</header>
<p class="mt-6 text-lg leading-8 text-softText">
{{ $product['description'] }}
</p>
<section class="mt-8">
<div class="mb-4 flex items-center justify-between">
<label class="text-sm font-black uppercase tracking-[0.16em] text-softText">Select Size</label>
<button type="button" class="text-sm font-extrabold text-coralDark hover:text-coral" data-tab-target="sizing">Size Guide</button>
</div>
<div class="grid grid-cols-4 gap-3">
<button type="button" class="size-option rounded-[1.25rem] border-2 border-peach bg-cream py-4 text-sm font-extrabold text-cocoa hover:border-coral" data-size="S">S</button>
<button type="button" class="size-option rounded-[1.25rem] border-2 border-peach bg-cream py-4 text-sm font-extrabold text-cocoa hover:border-coral" data-size="M">M</button>
<button type="button" class="size-option rounded-[1.25rem] border-2 border-peach bg-cream py-4 text-sm font-extrabold text-cocoa hover:border-coral" data-size="L">L</button>
<button type="button" class="size-option rounded-[1.25rem] border-2 border-peach bg-cream py-4 text-sm font-extrabold text-cocoa hover:border-coral" data-size="XL">XL</button>
</div>
</section>
<section class="mt-8">
<label class="mb-4 block text-sm font-black uppercase tracking-[0.16em] text-softText">Color</label>
<div class="flex gap-3">
<button class="size-11 rounded-full border-4 border-white bg-coral shadow-card ring-2 ring-coral" aria-label="Coral"></button>
<button class="size-11 rounded-full border-4 border-white bg-mint shadow-card" aria-label="Mint"></button>
<button class="size-11 rounded-full border-4 border-white bg-butter shadow-card" aria-label="Butter"></button>
<button class="size-11 rounded-full border-4 border-white bg-cocoa shadow-card" aria-label="Cocoa"></button>
</div>
</section>
<div class="mt-9 space-y-4">
<form method="POST" action="{{ route('cart.add', $slug) }}">
@csrf
<button class="flex w-full items-center justify-center gap-3 rounded-full bg-coral px-6 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-white shadow-card transition-all hover:-translate-y-0.5 hover:bg-coralDark active:translate-y-0">
Add to Cart
<span class="material-symbols-outlined">shopping_bag</span>
</button>
</form>
<a href="{{ route('checkout') }}" class="flex w-full items-center justify-center gap-3 rounded-full border-2 border-coral bg-white px-6 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-coralDark transition-all hover:bg-blush">
Buy Now
<span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<section class="mt-9 border-t border-peach/70 pt-7">
<div class="no-scrollbar mb-5 flex gap-6 overflow-x-auto">
<button type="button" class="product-tab whitespace-nowrap text-sm font-black uppercase tracking-[0.16em] text-coralDark" data-tab="description">Description</button>
<button type="button" class="product-tab whitespace-nowrap text-sm font-black uppercase tracking-[0.16em] text-softText hover:text-coral" data-tab="materials">Materials</button>
<button type="button" class="product-tab whitespace-nowrap text-sm font-black uppercase tracking-[0.16em] text-softText hover:text-coral" data-tab="sizing">Sizing Guide</button>
</div>
<div id="description" class="product-tab-content space-y-4 text-sm leading-7 text-softText">
<p>{{ $product['description'] }}</p>
<ul class="space-y-3">
<li class="flex items-center gap-3">
<span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>
Pre-shrunk for a consistent fit
</li>
<li class="flex items-center gap-3">
<span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>
Soft cotton feel for daily comfort
</li>
<li class="flex items-center gap-3">
<span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>
Available for kids and adults
</li>
</ul>
</div>
<div id="materials" class="product-tab-content hidden space-y-4 text-sm leading-7 text-softText">
<p>Made with a soft, breathable everyday fabric selected for comfortable movement and easy repeat wear.</p>
<ul class="space-y-3">
<li class="flex items-center gap-3"><span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>Soft-touch fabric</li>
<li class="flex items-center gap-3"><span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>Easy-care and machine washable</li>
<li class="flex items-center gap-3"><span class="grid size-6 place-items-center rounded-full bg-mint text-xs text-cocoa">✓</span>Made for comfortable daily use</li>
</ul>
</div>
<div id="sizing" class="product-tab-content hidden space-y-4 text-sm leading-7 text-softText">
<p>Choose the size that gives you a relaxed, comfortable fit. If you prefer a looser fit, choose one size up.</p>
<div class="overflow-hidden rounded-2xl border border-peach/70">
<div class="grid grid-cols-3 bg-blush px-4 py-3 text-xs font-black uppercase tracking-[0.12em] text-coralDark"><span>Size</span><span>Chest</span><span>Length</span></div>
<div class="grid grid-cols-3 border-t border-peach/50 px-4 py-3"><span class="font-bold">S</span><span>34–36 in</span><span>25 in</span></div>
<div class="grid grid-cols-3 border-t border-peach/50 px-4 py-3"><span class="font-bold">M</span><span>37–39 in</span><span>26 in</span></div>
<div class="grid grid-cols-3 border-t border-peach/50 px-4 py-3"><span class="font-bold">L</span><span>40–42 in</span><span>27 in</span></div>
<div class="grid grid-cols-3 border-t border-peach/50 px-4 py-3"><span class="font-bold">XL</span><span>43–45 in</span><span>28 in</span></div>
</div>
</div>
</section>
</article>
</div>
</section>
<section class="mt-16">
<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
<div>
<p class="font-headline text-xl font-extrabold text-coralDark">Complete the look</p>
<h2 class="font-headline text-5xl font-extrabold leading-none text-cocoa md:text-6xl">You may also like</h2>
</div>
<a class="inline-flex items-center gap-2 font-extrabold text-coralDark hover:text-coral" href="{{ route('shop') }}">
View Full Collection
<span class="material-symbols-outlined text-base">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 gap-5 md:grid-cols-3">
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'playday-cotton-tee') }}" aria-label="View Playday Cotton Tee"></a>
<div class="grid aspect-[4/3] place-items-center bg-blush">
<span class="material-symbols-outlined text-8xl text-coral transition-transform group-hover:scale-110">child_care</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Kids Wear</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold text-cocoa">Playday Cotton Tee</h3>
<p class="mt-3 font-headline text-2xl font-extrabold text-coralDark">₱299.00</p>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'soft-lounge-top') }}" aria-label="View Soft Lounge Top"></a>
<div class="grid aspect-[4/3] place-items-center bg-mint/55">
<span class="material-symbols-outlined text-8xl text-mintDark transition-transform group-hover:scale-110">styler</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Adult Wear</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold text-cocoa">Soft Lounge Top</h3>
<p class="mt-3 font-headline text-2xl font-extrabold text-coralDark">₱449.00</p>
</div>
</article>
<article class="group relative overflow-hidden rounded-[2.25rem] bg-white shadow-card">
<a class="absolute inset-0 z-10" href="{{ route('product.show', 'matchy-daily-set') }}" aria-label="View Matchy Daily Set"></a>
<div class="grid aspect-[4/3] place-items-center bg-butter/65">
<span class="material-symbols-outlined text-8xl text-cocoa transition-transform group-hover:scale-110">family_restroom</span>
</div>
<div class="p-6">
<p class="text-xs font-black uppercase tracking-[0.18em] text-coralDark">Family Set</p>
<h3 class="mt-2 font-headline text-3xl font-extrabold text-cocoa">Matchy Daily Set</h3>
<p class="mt-3 font-headline text-2xl font-extrabold text-coralDark">₱699.00</p>
</div>
</article>
</div>
</section>
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
const sizeOptions = document.querySelectorAll('.size-option');
sizeOptions.forEach((option) => option.addEventListener('click', () => {
  sizeOptions.forEach((item) => item.classList.remove('border-coral', 'bg-[#ffc7ce]', 'text-coralDark'));
  option.classList.add('border-coral', 'bg-[#ffc7ce]', 'text-coralDark');
}));

const productTabs = document.querySelectorAll('.product-tab');
const productContents = document.querySelectorAll('.product-tab-content');
function openProductTab(tabName) {
  productContents.forEach((content) => content.classList.toggle('hidden', content.id !== tabName));
  productTabs.forEach((tab) => {
    const active = tab.dataset.tab === tabName;
    tab.classList.toggle('text-coralDark', active);
    tab.classList.toggle('text-softText', !active);
  });
}
productTabs.forEach((tab) => tab.addEventListener('click', () => openProductTab(tab.dataset.tab)));
document.querySelectorAll('[data-tab-target]').forEach((button) => {
  button.addEventListener('click', () => openProductTab(button.dataset.tabTarget));
});
</script>
</body>
</html>
