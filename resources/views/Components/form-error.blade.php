@props(['name'])

@error($name)
    <p class="text-xs text-red-600 semi-bold mt-1">{{ $message }}</p>
@enderror