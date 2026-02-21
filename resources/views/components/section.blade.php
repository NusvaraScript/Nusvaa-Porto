@props([
'section' => '',
'title' => '',
'description' => '',
'class' => ''
])

<section class="py-6 my-6">
    <div class="{{ $class ?? '' }}">
        <p class="text-sm text-gray-400 uppercase">{{ $section }}</p>
        <h1 class="text-3xl text-bold mt-2">{{ $title }}</h1>
        <p class="text-sm my-4">{{ $description }}</p>
    </div>
    {{ $slot }}
</section>
