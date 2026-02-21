@props([
'section' => '',
'title' => '',
'description' => '',
'description2' => '',
'class' => ''
])

<section class="py-6">
    <div class="{{ $class ?? '' }}">
        <p class="text-sm text-gray-400 uppercase">{{ $section }}</p>
        <h1 class="text-3xl text-bold mt-2">{{ $title }}</h1>
        <p class="text-sm my-4">{{ $description }}</p>
        <p class="text-sm my-4">{{ $description2 }}</p>
    </div>
    {{ $slot }}
</section>
