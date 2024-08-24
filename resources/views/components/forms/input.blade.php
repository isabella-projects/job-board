@props(['label', 'name', 'placeholder' => ''])

@php
    $defaults = [
        'type' => 'text',
        'id' => $name,
        'name' => $name,
        'placeholder' => $placeholder,
        'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full focus:bg-white/20',
        'value' => old($name),
    ];
@endphp

<x-forms.field
    :$label
    :$name
    :$placeholder
>
    <input {{ $attributes($defaults) }}>
</x-forms.field>
