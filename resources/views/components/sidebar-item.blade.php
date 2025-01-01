@props([
    'selected' => false,
    'icon' => null,
    'title' => null,
    'route' => null,
])
@php
    $classes = 'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4';

    if ($selected) {
        $classes .= ' bg-graydark dark:bg-meta-4';
    }
@endphp
<li>
    <a class="{{ $classes }}" href="{{ route($route) }}">
        {{$icon}}

        <span>{{ $title }}</span>
    </a>
</li>
