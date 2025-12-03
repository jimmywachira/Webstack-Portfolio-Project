<x-layout>
    <div class="max-w-2xl mx-auto mt-10">
        <x-panel class="p-8 flex flex-col gap-6">
            <div class="flex items-center gap-4 mb-4">
                <x-employer-logo :employer="$job->employer" :width="56" />
                <div>
                    <div class="text-blue-400 font-semibold text-sm">{{ $job->employer->name }}</div>
                    <h2 class="font-extrabold text-3xl mt-1 mb-2 text-white">{{ $job->title }}</h2>
                </div>
            </div>
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
                @endforeach
            </div>
            <div class="text-lg text-blue-100 mb-2">
                <ion-icon name="cash-outline" class="inline-block align-middle text-xl mr-1"></ion-icon>
                <span class="font-bold">Salary:</span> {{ $job->salary }} <span class="text-sm text-blue-300">/ year</span>
            </div>
            <div class="text-gray-200 p-6 mb-6">
                {{ $job->description ?? 'Apply to this job now ' . $job->title . ' job paying ' . $job->salary . ' per year.' }}
            </div>
            <div class="flex gap-4">
                @can('edit', $job)
                <a href="/jobs/{{ $job->id }}/edit" class="bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 px-6 py-2 rounded-lg shadow text-white font-bold transition">Edit Job</a>
                @endcan
                <a href="/" class="bg-blue-800 hover:bg-blue-900 px-6 py-2 rounded-lg text-blue-200 font-semibold transition">Back to Jobs</a>
                <a href="/jobs/{{ $job->id }}/apply" class="bg-gradient-to-r from-green-600 to-green-800 hover:from-green-700 hover:to-green-900 px-6 py-2 rounded-lg shadow text-white font-bold transition">Apply Now</a>
            </div>
        </x-panel>
    </div>
</x-layout>
