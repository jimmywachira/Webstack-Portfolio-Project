@props(['active' => false])
<a class="{{ $active ? 'bg-gradient-to-r from-blue-600 to-blue-800 text-white py-2 px-4 shadow-xl' : 'text-white/50 hover:bg-blue-700 hover:text-white'}} rounded-md px-4 py-2" aria-current="{{ $active ? 'page': 'false' }}" {{ $attributes }}>
    {{ $slot }}
</a>
