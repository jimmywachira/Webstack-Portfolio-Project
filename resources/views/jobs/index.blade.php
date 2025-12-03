<x-layout>
    <div class="flex flex-col justify-center space-y-5">

        <!-- Hero Header with Background -->
        @auth
        <header class="hero-bg py-4 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 flex justify-end relative z-5 ">
                <a href="/jobs/create" class="bg-gradient-to-r from-blue-600 to-blue-800 hover:bg-white/15 px-4 py-3 rounded-lg shadow-xl transition-all duration-300 transform hover:scale-105">
                    <ion-icon name="add-circle" class="inline-block mr-2 text-xl"></ion-icon>
                    Post a Job
                </a>
            </div>
        </header>
        @endauth

        <section class="text-center">
            <section class="text-center">
                <h1 class="font-bold text-4xl">lets find your next job</h1>
                <form action="">
                    <input type="text" wire:model.live="search" placeholder="search for jobs, companies, tags..." class="w-full max-w-xl bg-white/10 rounded-lg px-10 py-3 mt-6 focus:outline-none focus:ring-2 focus:ring-blue-800 transition-colors duration-300">
                </form>
            </section>

            <section class="m-5">
                <x-section-heading>
                    featured jobs
                </x-section-heading>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-6 gap-4">
                    @foreach ($featuredJobs as $job)
                    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                        <x-job-card :$job />
                    </a>
                    @endforeach
                </div>
            </section>

            <section>
                <x-section-heading>
                    Tags
                </x-section-heading>

                <div class="mt-6 space-x-1">

                    @foreach($tags as $tag)
                    <x-tag :$tag />
                    @endforeach
                </div>
            </section>

            <section>
                <x-section-heading>
                    recent jobs
                </x-section-heading>

                <div class="mt-6 space-y-6">
                    @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                    @endforeach
                </div>
            </section>

            {{-- <div>
                {{ $jobs->links() }}
    </div> --}}
    </section>
    </div>
</x-layout>
