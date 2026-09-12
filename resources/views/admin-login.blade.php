<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Triple's E Daily Wear Admin | Login</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 500, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background:
                radial-gradient(circle at top left, rgba(255, 217, 199, 0.72), transparent 33rem),
                radial-gradient(circle at bottom right, rgba(191, 238, 220, 0.82), transparent 36rem),
                #FFF8EA;
        }

        .clothing-pattern {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.70), rgba(255, 255, 255, 0.70)),
                url("data:image/svg+xml,%3Csvg width='128' height='128' viewBox='0 0 128 128' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23FF9E94' stroke-width='3' stroke-linecap='round' stroke-linejoin='round' opacity='.45'%3E%3Cpath d='M31 39l13-9 11 12h18l11-12 13 9-10 20-9-4v43H50V55l-9 4-10-20z'/%3E%3Cpath d='M18 94h28M82 94h28M25 104h15M88 104h18'/%3E%3Ccircle cx='95' cy='25' r='7' fill='%23BFEEDC' stroke='none'/%3E%3Ccircle cx='29' cy='25' r='6' fill='%23FFE8A3' stroke='none'/%3E%3C/g%3E%3C/svg%3E");
        }

        input:focus {
            box-shadow: 0 0 0 4px rgba(255, 127, 115, 0.18);
        }
    </style>
</head>
<body class="min-h-screen overflow-x-hidden bg-cream text-cocoa font-body selection:bg-coral selection:text-white">
<main class="min-h-screen grid grid-cols-1 lg:grid-cols-[1.08fr_.92fr] p-4 sm:p-6 lg:p-8">
<section class="relative overflow-hidden rounded-[2.5rem] clothing-pattern p-7 sm:p-10 lg:p-16 flex min-h-[480px] items-end shadow-soft">
<div class="absolute left-7 top-7 flex items-center gap-3 rounded-full border border-white/80 bg-white/75 px-4 py-3 shadow-card backdrop-blur">
<span class="grid size-10 place-items-center rounded-full bg-coral text-white">
<span class="material-symbols-outlined">checkroom</span>
</span>
<div>
<p class="font-headline text-2xl font-extrabold leading-none text-cocoa">Triple's E</p>
<p class="text-[11px] font-extrabold uppercase tracking-[0.22em] text-coralDark">Daily Wear</p>
</div>
</div>
<div class="absolute right-8 top-24 hidden rotate-6 rounded-[2rem] bg-butter p-6 text-cocoa shadow-card sm:block">
<span class="material-symbols-outlined text-5xl">styler</span>
</div>
<div class="absolute right-12 bottom-12 hidden -rotate-6 rounded-[2rem] bg-mint p-6 text-cocoa shadow-card md:block">
<span class="material-symbols-outlined text-6xl">child_care</span>
</div>
<div class="relative max-w-2xl rounded-[2rem] border border-white/80 bg-white/75 p-7 sm:p-9 shadow-card backdrop-blur">
<span class="inline-flex rounded-full bg-mint/80 px-4 py-2 text-xs font-black uppercase tracking-[0.18em] text-cocoa">
Admin dashboard
</span>
<h1 class="mt-5 font-headline text-5xl font-extrabold leading-[0.9] text-cocoa sm:text-6xl lg:text-7xl">
Manage your<br>
daily wear store
</h1>
<p class="mt-5 max-w-lg text-base leading-7 text-softText sm:text-lg">
Track orders, update kids and adult clothing items, monitor deliveries, and keep Triple's E running smoothly.
</p>
<div class="mt-8 grid grid-cols-2 gap-3">
<div class="rounded-[1.5rem] bg-blush p-4">
<span class="material-symbols-outlined text-coral">inventory_2</span>
<p class="mt-2 font-headline text-2xl font-extrabold text-cocoa">120+</p>
<p class="text-sm font-bold text-softText">Products managed</p>
</div>
<div class="rounded-[1.5rem] bg-mint/55 p-4">
<span class="material-symbols-outlined text-mintDark">local_shipping</span>
<p class="mt-2 font-headline text-2xl font-extrabold text-cocoa">Fast</p>
<p class="text-sm font-bold text-softText">Delivery updates</p>
</div>
</div>
</div>
</section>
<section class="relative flex items-center justify-center p-5 sm:p-9 lg:p-14">
<div class="absolute right-8 top-8 size-48 rounded-full bg-peach/45 blur-3xl"></div>
<div class="absolute left-2 bottom-8 size-56 rounded-full bg-mint/45 blur-3xl"></div>
<div class="relative w-full max-w-md rounded-[2.25rem] border border-white/90 bg-white/82 p-6 shadow-soft backdrop-blur sm:p-8">
<div class="mb-8">
<p class="font-headline text-xl font-extrabold text-coralDark">Welcome back</p>
<h2 class="mt-2 font-headline text-4xl font-extrabold leading-tight text-cocoa sm:text-5xl">Admin Login</h2>
<p class="mt-3 text-base leading-7 text-softText">Access the Triple's E dashboard and manage your clothing shop.</p>
</div>
<form action="{{ route('admin.login.submit') }}" class="space-y-5" method="POST">
@csrf
<div>
<label class="mb-2 block text-sm font-extrabold text-softText" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-coral">mail</span>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream py-4 pl-12 pr-4 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" id="email" name="email" placeholder="admin@triplese.com" required type="email">
</div>
</div>
<div>
<label class="mb-2 block text-sm font-extrabold text-softText" for="password">Password</label>
<div class="relative">
<span class="material-symbols-outlined pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-coral">lock</span>
<input class="w-full rounded-[1.35rem] border-2 border-peach/70 bg-cream py-4 pl-12 pr-14 text-base font-bold text-cocoa placeholder:text-softText/45 outline-none transition-all focus:border-coral" id="password" name="password" placeholder="••••••••••••" required type="password">
<button aria-label="Show password" class="absolute right-4 top-1/2 -translate-y-1/2 text-mintDark" id="togglePassword" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>
<div class="flex items-center justify-between py-2">
<label class="flex cursor-pointer items-center gap-3">
<input class="size-5 rounded-md border-2 border-coral/40 text-coral focus:ring-coral" type="checkbox">
<span class="text-sm font-bold text-softText">Remember me</span>
</label>
<a class="text-sm font-extrabold text-coralDark hover:text-coral" href="#">Forgot Password?</a>
</div>
<button class="group flex w-full items-center justify-center gap-3 rounded-full bg-coral px-6 py-5 font-headline text-base font-extrabold uppercase tracking-[0.14em] text-white shadow-card transition-all hover:-translate-y-0.5 hover:bg-coralDark active:translate-y-0" type="submit">
Login
<span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_forward</span>
</button>
</form>
<div class="mt-8 border-t border-peach/50 pt-7 text-center">
<p class="text-sm font-bold text-softText">
Don't have an account?
<a class="font-extrabold text-coralDark hover:text-coral" href="{{ route('admin.login') }}">Admin Login</a>
</p>
</div>
<div class="mt-7 grid grid-cols-2 gap-3 text-xs font-extrabold text-softText">
<span class="inline-flex items-center justify-center gap-2 rounded-full bg-cream px-3 py-2">
<span class="material-symbols-outlined text-base text-coral">security</span>
Secure
</span>
<span class="inline-flex items-center justify-center gap-2 rounded-full bg-cream px-3 py-2">
<span class="material-symbols-outlined text-base text-mintDark">support_agent</span>
Support
</span>
</div>
</div>
</section>
</main>
<footer class="px-6 pb-8 text-center text-xs font-extrabold uppercase tracking-[0.22em] text-softText/70">
© 2024 Triple's E Daily Wear. Kids and adult clothing essentials.
</footer>
<script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            const isHidden = password.type === 'password';
            password.type = isHidden ? 'text' : 'password';
            togglePassword.innerHTML = isHidden
                ? '<span class="material-symbols-outlined">visibility_off</span>'
                : '<span class="material-symbols-outlined">visibility</span>';
            togglePassword.setAttribute('aria-label', isHidden ? 'Hide password' : 'Show password');
        });
    </script>
</body>
</html>
