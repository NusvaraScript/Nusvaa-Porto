<div {{ $attributes->merge(['class' => 'border border-gray-700 rounded-lg overflow-hidden bg-[#0d1117]']) }}>
    <div class="bg-[#21262d] px-4 py-2 flex items-center gap-2 border-b border-gray-700">
        <div class="flex gap-1.5">
            <span class="w-3 h-3 rounded-full bg-red-500"></span>
            <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
            <span class="w-3 h-3 rounded-full bg-green-500"></span>
        </div>
        <span class="text-xs text-gray-400 ml-2 font-mono">{{ $title ?? 'bash' }}</span>
    </div>
    <div class="p-4">
        {{ $slot }}
    </div>
</div>
