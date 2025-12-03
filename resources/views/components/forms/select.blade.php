@props(['label', 'name'])

@php
$defaults = [
'id' => $name,
'name' => $name,
'class' => 'rounded bg-white/10 border border-white/10 px-2 py-3 w-3/4'
];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>
