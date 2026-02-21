@props([
'title' => '',
'description' => '',
'logo' => ''
])

<div
    class="max-w-7xl md:w-3xl lg:w-5xl my-4 p-6 rounded-lg border border-gray-500 hover:border-white transition text-white">
    <p class="text-4xl">{{ $logo ?? '' }}</p>
    <h1 class="text-lg mt-4 text-bold">{{ $title }}</h1><br>
    <p class="text-sm mt-4 mb-4">{{ $description }}</p>
</div>
