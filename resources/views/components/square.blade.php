@props(['color' => 'bg-white', 'squareSize' => '2'])

@php
    $size = "w-{$squareSize} h-{$squareSize}";
@endphp

<span class="{{ $size }} inline-block {{ $color }}"></span>
