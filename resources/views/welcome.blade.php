<x-layout>
    <div class="space-y-20">
        <section class="text-center py-16">
            <h1 class="font-extrabold text-5xl md:text-6xl mb-6 text-blue-400 drop-shadow">Find Your Next <span class="text-blue-600">Job</span></h1>
            <form action="" class="max-w-xl mx-auto">
                <input type="text" placeholder="Search for jobs, companies, tags..." class="w-full bg-white/20 rounded-xl px-8 py-5 mt-8 text-lg focus:outline-none focus:ring-2 focus:ring-blue-600 transition-colors duration-300 placeholder:text-gray-300 shadow-lg">
            </form>
        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid mt-10 lg:grid-cols-3 gap-10">
                @foreach ($jobs as $job)
                    <x-job-card :$job/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-8 flex flex-wrap gap-3 justify-center">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag"/>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-10 flex flex-col gap-8">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layout>