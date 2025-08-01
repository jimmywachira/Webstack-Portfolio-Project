<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jobsLink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Outfit">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="antialiased font-bold bg-gradient-to-br from-blue-900 to-blue-600 to-blue-300 text-black" style="font-family:Outfit">
    <div class="flex flex-col">
        <nav class="sticky top-0 backdrop-blur-lg shadow border-blue-900/30">
            <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
                <div class="flex items-center gap-3">
                    <ion-icon name="rocket-outline" class="text-blue-500 text-3xl"></ion-icon>
                    <span class="text-2xl font-extrabold tracking-tight text-white">JobsLink</span>
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
                        <x-forms.button>Log Out</x-forms.button>
                    </form>
                    @endauth
                </div>
            </div>
        </nav>
    </div>

    <div class="flex justify-end p-2 m-2">
        @if(session('success'))
        <div class="max-w-7xl mx-auto px-4 py-2 text-white">
            {{ session('success') }}
        </div>
        @endif
    </div>

    @auth
    <header class="py-2">
        <div class="max-w-7xl mx-auto px-4 flex justify-end">
            <a href="/jobs/create" class="bg-blue-600 hover:text-white px-3 py-2 shadow-xl">Post a Job</a>
        </div>
    </header>
    @endauth

    <main class="flex-1 mt-10 max-w-7xl mx-auto px-4 pb-8">
        {{ $slot }}
    </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <x-footer />

</body>
</html>
