@props(['job'])

<x-panel class="flex flex-col items-center text-center backdrop-blur rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 p-8 group border border-blue-900/10">
    <x-employer-logo :width="56" class="mb-4" />
    <div class="self-center text-black font-semibold m-2 text-sm tracking-wide">{{$job->employer->name}}</div>
    <a href="/jobs/{{ $job->id }}" class="group-hover:text-blue-500 text-2xl font-extrabold transition-colors duration-300 mb-2">
        <h3>{{$job->title}}</h3>
    </a>
    <p class="text-lg text-gray-200 font-medium mb-4">{{$job->salary}}</p>

    <div class="flex flex-wrap gap-2 justify-center mt-auto">
        @foreach ($job->tags as $tag)
        <x-tag :$tag size="small" />
        @endforeach
    </div>

</x-panel>
