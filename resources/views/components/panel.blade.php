@php
    $classes = 'p-4 bg-white/10 backdrop-blur rounded-2xl border border-blue-900/10 hover:border-blue-700 group transition-colors duration-300 shadow';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>