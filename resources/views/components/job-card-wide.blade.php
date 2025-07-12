@props(['job'])
<x-panel class="flex gap-x-8 items-center bg-white/10 backdrop-blur rounded-2xl shadow-xl hover:shadow-2xl transition-shadow duration-300 p-8 group border border-blue-900/10">
    <x-employer-logo :width="64" class="flex-shrink-0"/>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-blue-400 font-semibold mb-1 text-sm tracking-wide">{{$job->employer->name}}</a>
        <h3 class="text-2xl font-extrabold mt-1 group-hover:text-blue-500 transition-colors duration-300">{{$job->title}}</h3>
        <p class="text-base text-gray-200 mt-2">{{$job->salary}}</p>
    </div>
    <div class="flex flex-wrap gap-2">
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small"/>
        @endforeach
    </div>
</x-panel>