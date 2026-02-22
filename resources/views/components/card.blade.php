@props([
'title' => '',
'description' => '',
'logo' => ''
])

<div class="p-6 rounded-lg border border-gray-500 hover:border-white transition text-white">
    <i class="{{ $logo }}" style="font-size: 50px"></i>
    <h1 class="text-lg mt-4 font-bold">{{ $title }}</h1><br>
    <p class="text-sm">{{ $description }}</p>
</div>
