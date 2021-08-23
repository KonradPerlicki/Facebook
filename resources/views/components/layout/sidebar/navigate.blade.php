@props(['name' => '/'])
<li {{ request()->routeIs($name) ? 'class=active' : '' }} {{ $attributes }}>
    <a href="{{ '/'.$name }}">
        <x-layout.sidebar.svg :name="$name" />
        <span> {{ ucwords($name) }} </span>
    </a>
</li>