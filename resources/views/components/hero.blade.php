@props([
'title' => ''
])

<div class="text-white py-6">
    <div>
        <h1 class="text-5xl text-bold">{{ $title }}</h1>
        <p class="text-lg mt-4">{{ $slot }}</p>
    </div>
</div>
