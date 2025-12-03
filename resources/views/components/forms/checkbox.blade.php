@props(['label', 'name'])

@php
$defaults = [
'type' => 'checkbox',
'id' => $name,
'name' => $name,
'value' => old($name)
];
@endphp

<x-forms.field :$label :$name>
    <div class="rounded bg-white/10 border border-white/10 px-3 py-2 w-3/4">
        <input {{ $attributes($defaults) }}>
        <span class="pl-1">{{ $label }}</span>
    </div>
</x-forms.field>
