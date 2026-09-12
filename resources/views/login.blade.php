<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Customer login for Triple's E Daily Wear orders and delivery updates.">
  <title>Triple's E Daily Wear | Customer Login</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&amp;family=Fredoka:wght@500;600;700&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,400,0,0" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cream: "#FFF9F3",
            paper: "#FFFFFF",
            coral: "#E85D75",
            "coral-dark": "#C94460",
            blush: "#FCECF1",
            mint: "#E7F7F1",
            "mint-dark": "#64A990",
            sky: "#EAF3FF",
            butter: "#FFF5D8",
            ink: "#24303A",
            muted: "#75808A"
          },
          fontFamily: {
            display: ["Fredoka", "sans-serif"],
            body: ["DM Sans", "sans-serif"]
          },
          boxShadow: {
            card: "0 20px 55px rgba(84, 57, 64, 0.12)",
            button: "0 12px 26px rgba(232, 93, 117, 0.28)"
          }
        }
      }
    };
  </script>

  <style>
    * { box-sizing: border-box; }
    body { font-family: "DM Sans", sans-serif; }
    .dot-pattern {
      background-image: radial-gradient(rgba(232, 93, 117, .13) 1.2px, transparent 1.2px);
      background-size: 22px 22px;
    }
    .material-symbols-rounded {
      font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 24;
    }
    .float-card { animation: float 5s ease-in-out infinite; }
    .float-card:nth-child(2) { animation-delay: -1.6s; }
    .float-card:nth-child(3) { animation-delay: -3.2s; }
    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(-2deg); }
      50% { transform: translateY(-10px) rotate(2deg); }
    }
    @media (prefers-reduced-motion: reduce) {
      .float-card { animation: none; }
    }
  </style>
</head>

<body class="min-h-screen overflow-x-hidden bg-cream text-ink antialiased selection:bg-coral selection:text-white">
  <main class="relative min-h-screen lg:grid lg:grid-cols-[1.08fr_.92fr]">
    <section class="relative hidden min-h-screen overflow-hidden bg-mint lg:flex lg:flex-col lg:justify-between lg:p-14 xl:p-20">
      <div class="dot-pattern absolute inset-0 opacity-70"></div>
      <div class="absolute -left-24 top-28 h-72 w-72 rounded-full bg-butter/80 blur-2xl"></div>
      <div class="absolute -right-24 bottom-12 h-80 w-80 rounded-full bg-blush blur-2xl"></div>

      <header class="relative z-10 flex items-center gap-3">
        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-coral text-white shadow-button">
          <span class="material-symbols-rounded text-[27px]">checkroom</span>
        </div>
        <div>
          <p class="font-display text-xl font-bold leading-none text-coral">Triple's E</p>
          <p class="mt-1 text-xs font-semibold uppercase tracking-[.18em] text-ink/55">Daily Wear</p>
        </div>
      </header>

      <div class="relative z-10 max-w-2xl py-12">
        <span class="inline-flex items-center gap-2 rounded-full bg-white/80 px-4 py-2 text-sm font-bold text-coral shadow-sm backdrop-blur">
          <span class="material-symbols-rounded text-lg">favorite</span>
          Kids &amp; Adult Clothing
        </span>

        <h1 class="mt-7 max-w-xl font-display text-5xl font-bold leading-[1.02] tracking-tight text-ink xl:text-7xl">
          Manage every little detail with care.
        </h1>
        <p class="mt-6 max-w-lg text-lg leading-8 text-ink/65">
          Keep products, orders, deliveries, and customers organized in one cheerful workspace.
        </p>

        <div class="mt-12 flex items-end gap-4" aria-hidden="true">
          <div class="float-card grid h-36 w-32 place-items-center rounded-[2rem] bg-blush shadow-card">
            <span class="material-symbols-rounded text-[70px] text-coral">apparel</span>
          </div>
          <div class="float-card grid h-44 w-36 place-items-center rounded-[2rem] bg-sky shadow-card">
            <span class="material-symbols-rounded text-[78px] text-[#5885C8]">checkroom</span>
          </div>
          <div class="float-card grid h-32 w-28 place-items-center rounded-[2rem] bg-butter shadow-card">
            <span class="material-symbols-rounded text-[62px] text-[#D89C2F]">styler</span>
          </div>
        </div>
      </div>

      <footer class="relative z-10 flex items-center justify-between text-xs font-semibold text-ink/45">
        <span>© 2026 Triple's E Daily Wear</span>
        <span class="flex items-center gap-2"><span class="h-2 w-2 rounded-full bg-mint-dark"></span>Store system online</span>
      </footer>
    </section>

    <section class="relative flex min-h-screen items-center justify-center overflow-hidden px-5 py-12 sm:px-8 lg:px-12">
      <div class="dot-pattern absolute inset-0 opacity-40 lg:hidden"></div>
      <div class="absolute -right-24 -top-24 h-64 w-64 rounded-full bg-blush blur-2xl"></div>
      <div class="absolute -bottom-28 -left-20 h-72 w-72 rounded-full bg-mint blur-2xl"></div>

      <div class="relative z-10 w-full max-w-[460px]">
        <header class="mb-8 flex items-center gap-3 lg:hidden">
          <div class="grid h-11 w-11 place-items-center rounded-2xl bg-coral text-white shadow-button">
            <span class="material-symbols-rounded">checkroom</span>
          </div>
          <div>
            <p class="font-display text-lg font-bold leading-none text-coral">Triple's E</p>
            <p class="mt-1 text-[11px] font-semibold uppercase tracking-[.15em] text-ink/50">Daily Wear</p>
          </div>
        </header>

        <div class="rounded-[2rem] border border-coral/10 bg-white/95 p-7 shadow-card backdrop-blur sm:p-10">
          <div class="mb-8">
            <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-blush text-coral">
              <span class="material-symbols-rounded">admin_panel_settings</span>
            </span>
            <h2 class="mt-5 font-display text-3xl font-bold tracking-tight sm:text-4xl">Welcome back!</h2>
            <p class="mt-2 text-base text-muted">Sign in to view your orders and delivery updates.</p>
          </div>

          <form action="{{ route('login.submit') }}" method="POST" class="space-y-5" id="login-form">
            @csrf
            <div>
              <label for="email" class="mb-2 block text-sm font-bold text-ink/75">Email address</label>
              <div class="group relative">
                <span class="material-symbols-rounded pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-xl text-ink/35 group-focus-within:text-coral">mail</span>
                <input id="email" name="email" type="email" autocomplete="email" required placeholder="you@example.com" class="w-full rounded-2xl border border-ink/10 bg-cream py-4 pl-12 pr-4 text-base text-ink outline-none transition placeholder:text-ink/30 focus:border-coral focus:ring-4 focus:ring-coral/10">
              </div>
            </div>

            <div>
              <div class="mb-2 flex items-center justify-between gap-4">
                <label for="password" class="text-sm font-bold text-ink/75">Password</label>
                <a href="#" class="text-sm font-bold text-coral transition hover:text-coral-dark">Forgot password?</a>
              </div>
              <div class="group relative">
                <span class="material-symbols-rounded pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-xl text-ink/35 group-focus-within:text-coral">lock</span>
                <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="Enter your password" class="w-full rounded-2xl border border-ink/10 bg-cream py-4 pl-12 pr-12 text-base text-ink outline-none transition placeholder:text-ink/30 focus:border-coral focus:ring-4 focus:ring-coral/10">
                <button type="button" id="toggle-password" class="absolute right-3 top-1/2 grid h-9 w-9 -translate-y-1/2 place-items-center rounded-xl text-ink/40 transition hover:bg-blush hover:text-coral" aria-label="Show password" aria-pressed="false">
                  <span class="material-symbols-rounded text-xl">visibility</span>
                </button>
              </div>
            </div>

            <label class="flex cursor-pointer items-center gap-3 text-sm text-muted">
              <input type="checkbox" name="remember" class="h-5 w-5 rounded-md border-ink/15 text-coral focus:ring-coral/30">
              Keep me signed in
            </label>

            <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-2xl bg-coral px-5 py-4 font-display text-base font-bold text-white shadow-button transition hover:-translate-y-0.5 hover:bg-coral-dark focus:outline-none focus:ring-4 focus:ring-coral/25 active:translate-y-0">
              Login to Dashboard
              <span class="material-symbols-rounded text-xl">arrow_forward</span>
            </button>
          </form>

          <div class="mt-8 border-t border-ink/10 pt-6 text-center">
            <p class="text-sm text-muted">New customer? <a href="{{ route('register') }}" class="font-bold text-coral hover:text-coral-dark">Create an account</a></p>
          </div>
        </div>

        <div class="mt-6 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-xs font-semibold text-ink/40">
          <a href="#" class="hover:text-coral">Help &amp; Support</a>
          <a href="#" class="hover:text-coral">Privacy</a>
          <span>Secure customer access</span>
        </div>
      </div>
    </section>
  </main>

  <script>
    const toggleButton = document.getElementById("toggle-password");
    const passwordInput = document.getElementById("password");

    toggleButton.addEventListener("click", () => {
      const isHidden = passwordInput.type === "password";
      passwordInput.type = isHidden ? "text" : "password";
      toggleButton.setAttribute("aria-label", isHidden ? "Hide password" : "Show password");
      toggleButton.setAttribute("aria-pressed", String(isHidden));
      toggleButton.querySelector("span").textContent = isHidden ? "visibility_off" : "visibility";
    });
  </script>
</body>
</html>
