@php
    $classes = 'p-4 bg-white/5 rounded-xl border hover:border-blue-600 border-transparent group transition-colors duration-300';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>