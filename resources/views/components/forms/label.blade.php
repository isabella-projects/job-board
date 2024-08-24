@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <x-square color="bg-blue-400" />
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
