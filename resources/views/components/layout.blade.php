<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>

    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body 
    class="h-full antialiased capitalize font-bold bg-black text-white pb-10" 
    style="font-family:Quicksand"
    >

    <div class="px-5">
     <nav class="bg-black flex justify-between items-center py-4 ">
            <div>
                <ion-icon name="logo-ionic" class="text-white text-3xl"></ion-icon>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
             </div>

            <div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @guest
                                <x-nav-link href="/register" :active="request()->is('register')">SignUp</x-nav-link>
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

        <div>
            <header class="bg-black shadow">
            @auth
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                    <x-forms.button href="/jobs/create">Create Job</x-forms.button>
                </div>
            @endauth
        </header>
        </div>

        <main class="mt-10 max-w-7xl mx-auto">
            {{ $slot }}
        </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html> 