@props(['variant' => 'default'])

<button {{ $attributes->merge(['class' => 'px-4 py-1 border font-mono transition-all duration-200 ' .
    ($variant == 'default' ? 'border-green-500 text-green-500 hover:bg-green-500 hover:text-black' : 'border-gray-500
    text-gray-500 hover:bg-gray-500 hover:text-white')]) }}>
    ./{{ $slot }}
</button>
