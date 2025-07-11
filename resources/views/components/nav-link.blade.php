@props(['active' => false])

<a class="{{ $active ? '
bg-blue-800 rounded py-2 px-6': 'text-gray-300 hover:bg-blue-700 hover:text-white'}} rounded-md px-3 py-2 "
   aria-current="{{ $active ? 'page': 'false' }}"
   {{ $attributes }}
>{{ $slot }}</a>