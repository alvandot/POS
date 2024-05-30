@props(['src', 'class' => ''])

<img src="{{ asset($src) }}" {{ $attributes->merge(['class' => $class]) }}>
