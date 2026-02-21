@props([
'route' => '',
'text' => '',
'variant' => 'solid' // solid, outline
])

@php
switch ($variant) {
case 'solid':
$button = 'px-4 py-2 bg-white text-black rounded-lg hover:bg-gray-300 transition';
break;
case 'outline':
$button = 'px-4 py-2 bg-[#0d1117] rounded-lg border-1 border-white hover:bg-black transition';
break;
}
@endphp

<a href="{{ $route }}" class="{{ $button }}">
    {{ $text }}
</a>
