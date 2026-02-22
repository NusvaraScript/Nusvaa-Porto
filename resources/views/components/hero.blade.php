@props([
'title' => ''
])

<div class="text-white py-6">
    <div>
        <h1 class="text-5xl font-bold">{{ $title }}</h1>
        <div class="text-lg mt-4">{{ $slot }}</div>
    </div>
</div>
