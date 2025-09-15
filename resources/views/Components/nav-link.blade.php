<a href="/" class=" {{ request()->is(patterns: '/') ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ request()->is(patterns: '/') ? 'page' : 'false' }}"
>{{ $slot }}</a>
