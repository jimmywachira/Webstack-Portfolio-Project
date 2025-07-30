@props(['active' => false])

<a class="{{ $active ? 'bg-blue-900 text-white py-2 px-4' : 'text-white/50 hover:bg-blue-700 hover:text-white'}} rounded-md px-3 py-2" aria-current="{{ $active ? 'page': 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>
