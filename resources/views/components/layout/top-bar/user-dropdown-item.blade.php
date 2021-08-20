@props(['name'])
<a href="{{ $name }}">
    <x-layout.top-bar.svg name="{{ $name }}"/>
    {{ $slot }}
</a>