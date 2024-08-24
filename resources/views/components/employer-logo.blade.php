@props(['employer', 'width' => 90])

@php
    $logoUrl = Str::startsWith($employer->logo, 'http') ? $employer->logo : asset('storage/' . $employer->logo);
@endphp

<img
    src="{{ $logoUrl }}"
    alt="{{ $employer->name . ' Logo' }}"
    class="rounded-xl"
    width="{{ $width }}"
>
