<x-layout>
    <div class="flex flex-col justify-center space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">lets find your next job</h1>

            <form action="">
                <input type="text" placeholder="search for jobs, companies, tags . . ." class="w-full max-w-xl bg-white/10 rounded-lg px-10 py-3 mt-6 focus:outline-none focus:ring-2 focus:ring-blue-800 transition-colors duration-300">
            </form>
        </section>

        <section>
        <x-section-heading> 
            featured jobs
        </x-section-heading>

        <div class="grid mt-6 lg:grid-cols-3 gap-8">
            @foreach ($featuredJobs as $job)
                <x-job-card :$job/>
            @endforeach
        </div>
    </section>

    <section>
        <x-section-heading>
            Tags
        </x-section-heading>

                <div class="mt-6 space-x-1">
                        
               @foreach($tags as $tag)
                        <x-tag :$tag/>
                @endforeach

        </div>
    </section>

    <section>
        <x-section-heading>
            recent jobs
        </x-section-heading>

       <div class="mt-6 space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        </div>

    </section>
    </div>
</x-layout>