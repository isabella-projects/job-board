@props(['employer', 'width' => 90])

<img
    src="{{ asset($employer->logo) }}"
    alt="Placeholder"
    class="rounded-xl"
    width="{{ $width }}"
>
