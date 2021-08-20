@props(['name' => '/'])
<li {{ request()->routeIs($name) ? 'class=active' : '' }} {{ $attributes }}>
    <a href="{{ route($name) }}">
        <x-layout.sidebar.svg :name="$name" />
        <span> {{ ucwords($name) }} </span>
    </a>
</li>