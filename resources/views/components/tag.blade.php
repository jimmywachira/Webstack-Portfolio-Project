@props(['tag','size' => 'base'])

@php
    $classes = "inline-block bg-blue-900/30 text-blue-200 hover:bg-blue-700 hover:text-white transition-colors duration-200 font-semibold rounded-full";
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-sm';
    }
    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ ucwords($tag->name) }}</a>