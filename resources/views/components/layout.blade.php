<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobsLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google Sans Code">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="antialiased font-semibold bg-blue-900 text-white min-h-screen" style="font-family:Google Sans Code">
    <!-- Floating Background Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="flex flex-col min-h-screen relative">
        <!-- Glassmorphism Navigation -->
        <nav class="sticky top-0 z-50 glass-effect shadow-xl">
            <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
                <div class="flex items-center gap-3">
                    <ion-icon name="rocket-outline" class="text-blue-300 text-3xl drop-shadow-lg"></ion-icon>
                    <span class="text-2xl font-extrabold tracking-tight text-white drop-shadow-lg">JobsLink</span>
                </div>

                <div class="hidden md:flex gap-1">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                </div>

                <div class="flex items-center gap-1">
                    @guest
                    <x-nav-link href="/register" :active="request()->is('register')">Sign Up</x-nav-link>
                    <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                    @endguest

                    @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <x-forms.button class="glass-effect hover:bg-white/15 transition-all duration-300">Log Out</x-forms.button>
                    </form>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Success Message with Glass Effect -->
        @if(session('success'))
        <div class="flex justify-center p-2 m-2">
            <div class="glass-effect px-6 py-3 rounded-lg text-white shadow-lg">
                <ion-icon name="checkmark-circle" class="inline-block mr-2 text-green-400"></ion-icon>
                {{ session('success') }}
            </div>
        </div>
        @endif

        <!-- Hero Header with Background -->
        @auth
        <header class="hero-bg py-8 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/60 to-blue-900/40"></div>
            <div class="max-w-7xl mx-auto px-4 flex justify-end relative z-10">
                <a href="/jobs/create" class="glass-effect hover:bg-white/15 px-6 py-3 rounded-lg shadow-xl transition-all duration-300 transform hover:scale-105">
                    <ion-icon name="add-circle" class="inline-block mr-2 text-xl"></ion-icon>
                    Post a Job
                </a>
            </div>
        </header>
        @endauth

        <!-- Main Content Area -->
        <main class="flex-1 mt-10 max-w-7xl mx-auto px-4 pb-8 relative z-10">
            <div class="glass-effect rounded-2xl p-8 shadow-2xl backdrop-blur-xl">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <x-footer />
</body>
</html>
