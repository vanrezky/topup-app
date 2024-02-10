<a href="{{ route('home.detail', $product->slug) }}" wire:navigate class="bg-gradient-to-br from-white to-gray-300 px-4 py-2 rounded-xl shadow-md flex items-start justify-between">
    <div class="flex gap-2">
        <img class="w-20 h-15 rounded-xl shadow-sm border border-gray-200 overflow-hidden" src="{{ asset($product->image) }}" alt="">
        <div>
            <p class="uppercase font-bold">{{ $product->name }}</p>
            <span class="text-sm">{{ $product->type }}</span>
        </div>
    </div>

    <button type="button" class="text-gray-500 hover:text-white border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-xl font-xs px-2 py-1 text-center me-2 mb-2 uppercase text-nowrap text-xs">Top
        up</button>
</a>
