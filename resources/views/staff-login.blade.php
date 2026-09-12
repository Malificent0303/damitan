<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Staff Login | Triple's E</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
<script>tailwind.config={theme:{extend:{colors:{cream:"#FFF8EA",peach:"#FFD9C7",coral:"#FF7F73",coralDark:"#E95F57",mint:"#BFEEDC",cocoa:"#563F35",softText:"#7A6258",blush:"#FFF0F2"},fontFamily:{headline:["Baloo 2","cursive"],body:["Nunito","sans-serif"]},boxShadow:{card:"0 18px 45px rgba(233,95,87,.12)",soft:"0 24px 70px rgba(120,72,48,.14)"}}}}</script>
</head>
<body class="min-h-screen bg-cream font-body text-cocoa">
<main class="mx-auto flex min-h-screen max-w-xl items-center px-5 py-10">
<section class="w-full rounded-[2.5rem] bg-white/90 p-7 shadow-soft sm:p-10">
<div class="mb-8 text-center"><span class="mx-auto grid size-16 place-items-center rounded-2xl bg-coral text-white shadow-card"><span class="text-3xl">⚙</span></span><p class="mt-5 text-xs font-black uppercase tracking-[.18em] text-coralDark">Staff portal</p><h1 class="mt-2 font-headline text-5xl font-extrabold">Team login</h1><p class="mt-3 font-bold text-softText">Manage inventory and customer orders while the owner is away.</p></div>
@if($errors->any())<div class="mb-5 rounded-2xl bg-blush px-5 py-4 font-bold text-coralDark">{{ $errors->first() }}</div>@endif
<form method="POST" action="{{ route('staff.login.submit') }}" class="space-y-5">@csrf
<label class="block text-sm font-extrabold text-softText">Staff email<input class="mt-2 w-full rounded-2xl border-2 border-peach bg-cream px-4 py-4 font-bold outline-none focus:border-coral" type="email" name="email" value="{{ old('email') }}" placeholder="staff@example.com" required></label>
<label class="block text-sm font-extrabold text-softText">Password<input class="mt-2 w-full rounded-2xl border-2 border-peach bg-cream px-4 py-4 font-bold outline-none focus:border-coral" type="password" name="password" placeholder="Your password" required></label>
<button class="w-full rounded-full bg-coral px-6 py-4 font-headline font-extrabold uppercase tracking-[.12em] text-white shadow-card hover:bg-coralDark" type="submit">Login to Staff Portal</button>
</form>
<a class="mt-6 block text-center font-bold text-coralDark hover:text-coral" href="{{ route('home') }}">Back to store</a>
</section>
</main>
</body>
</html>
