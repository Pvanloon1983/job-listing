@props(['employer', 'width' => 90])

@if (str_contains($employer->logo, 'http'))
    <img class="rounded-xl" src="{{ $employer->logo }}" alt="" width="{{ $width }}">
@else
    <img class="rounded-xl" src="{{ asset('storage/' . $employer->logo) }}" alt="" width="{{ $width }}">
@endif


