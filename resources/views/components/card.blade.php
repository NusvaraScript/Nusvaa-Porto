@props([
'title' => '',
'description' => '',
'logo' => ''
])

<div class="p-6 border-1 border-white text-white">
    <p class="text-4xl">{{ $logo ?? '' }}</p>
    <h5 class="text-2sm mt-4 text-bold">{{ $title }}</h5>
    <p class="text-sm mt-4">{{ $description }}</p>
</div>
