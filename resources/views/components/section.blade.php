@props([
'section' => '',
'image' => '',
'title' => '',
'description' => '',
'class' => '',
'reverse' => false,
'border' => true
])
<section
    class="{{ $border ? 'border-t border-white/10' : '' }} {{ $image ? 'grid grid-cols-1 md:grid-cols-2 gap-4 items-stretch' : '' }} py-12 px-2">
    @if ($image && !$reverse)
    <div class="relative flex items-center justify-center">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-auto max-h-80 object-cover rounded-3xl">
    </div>
    @endif
    <div class="mb-6">
        <div class="{{ $class }}">
            <p
                class="{{ $image && !$reverse ? 'sm:mt-4' : '' }} text-xs md:text-sm text-blue-500 uppercase tracking-widest">
                > {{ $section }}</p>
            <h1 class="text-3xl sm:text-4xl font-bold mt-2">{{ $title }}</h1>
            <p class="text-sm sm:text-base my-4 text-gray-300 leading-relaxed text-center">{{ $description }}</p>
        </div>
        {{ $slot }}
    </div>
    @if ($reverse)
    <div class="mt-4 relative flex items-center justify-center">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-auto max-h-80 object-cover rounded-3xl">
    </div>
    @endif
</section>
