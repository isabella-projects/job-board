@props(['width' => 90])

<img
    src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}"
    alt="Placeholder"
    class="rounded-xl"
>
