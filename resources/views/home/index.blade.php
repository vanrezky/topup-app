<x-home-layout>
    <header class="text-gray-200 flex items-center justify-between py-5">
        <div>
            <h2 class="text-4xl font-extrabold">{{ config('app.name') }}</h2>
            <p class="text-lg">Discover PC & Mobile Game</p>
        </div>
        <div>
            <a href="#" title="Cart" class="text-gray-200 hover:text-white">
                <i class="bi bi-bag text-xl"></i>
            </a>
        </div>
    </header>
    <section class="mt-5 flex flex-col gap-4">
        <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cari</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 focus:ring-gray-700 focus:border-gray-500 " placeholder="Cari aplikasi & game" required>
            </div>
        </form>
        <div class="flex items-center justify-between">
            <button type="button" class="px-2 py-1.5 text-xs font-semibold text-center inline-flex items-center text-black bg-white rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-none">
                <i class="bi bi-filter-circle-fill text-medium me-1"></i>
                Filter
            </button>
        </div>

    </section>
    <div class="mt-2 flex flex-col gap-2">
        @foreach ($products as $product)
            <x-card-games :product="$product" />
        @endforeach
    </div>
</x-home-layout>
