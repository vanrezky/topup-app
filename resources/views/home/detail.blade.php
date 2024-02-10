<x-home-layout :title="$title">
    <header class="text-gray-200 grid grid-cols-3 py-5">
        <a href="{{ route('home.index') }}" wire:navigate class="">
            <i class="bi bi-arrow-left-short text-3xl"></i>
        </a>
        <p class="text-xl font-semibold text-center">Top Up</p>
    </header>
    <div>
        <div class="flex gap-2">
            <img src="{{ asset($product->image) }}" class="min-h-20 m-w-20 shadow-sm border border-gray-700 rounded-2xl overflow-hidden" alt="{{ $product->name }}">
            <div class="">
                <p class="uppercase font-extrabold text-xl text-white">{{ $product->name }}</p>
                <span class="border-2 stroke-white text-white rounded-2xl px-2 font-semibold">{{ $product->type }}</span>
            </div>
        </div>
        <div class="mt-10 flex flex-col gap-3">
            <div class="bg-white shadow rounded-lg p-4">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Masukkan UID dan Pilih Server</h2>
                </div>
                <div class="mt-4">
                    <label for="uid" class="block text-gray-800 font-bold">Masukkan UID</label>
                    <input type="text" id="uid" class="w-full border rounded-lg p-2 mt-2" placeholder="Masukkan UID Anda disini">
                </div>
                <div class="mt-4">
                    <label for="server" class="block text-gray-800 font-bold">Pilih Server</label>
                    <select id="server" class="w-full border rounded-lg p-2 mt-2">
                        <option value="">-- Pilih Server --</option> <!-- Tambahkan opsi server sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Pilih Minimal Top Up</h2>
                </div>
                <div class="mt-4">
                    <label for="uid" class="block text-gray-800 font-bold">Masukkan UID</label>
                    <input type="text" id="uid" class="w-full border rounded-lg p-2 mt-2" placeholder="Masukkan UID Anda disini">
                </div>
                <div class="mt-4">
                    <label for="server" class="block text-gray-800 font-bold">Pilih Server</label>
                    <select id="server" class="w-full border rounded-lg p-2 mt-2">
                        <option value="">-- Pilih Server --</option> <!-- Tambahkan opsi server sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Pilih Pembayaran</h2>
                </div>
                <div class="mt-4">
                    <label for="uid" class="block text-gray-800 font-bold">Masukkan UID</label>
                    <input type="text" id="uid" class="w-full border rounded-lg p-2 mt-2" placeholder="Masukkan UID Anda disini">
                </div>
                <div class="mt-4">
                    <label for="server" class="block text-gray-800 font-bold">Pilih Server</label>
                    <select id="server" class="w-full border rounded-lg p-2 mt-2">
                        <option value="">-- Pilih Server --</option> <!-- Tambahkan opsi server sesuai kebutuhan -->
                    </select>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-4">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-gray-800">Ringkasan</h2>
                </div>
                <div class="mt-4">
                    <label for="uid" class="block text-gray-800 font-bold">Masukkan UID</label>
                    <input type="text" id="uid" class="w-full border rounded-lg p-2 mt-2" placeholder="Masukkan UID Anda disini">
                </div>
                <div class="mt-4">
                    <label for="server" class="block text-gray-800 font-bold">Pilih Server</label>
                    <select id="server" class="w-full border rounded-lg p-2 mt-2">
                        <option value="">-- Pilih Server --</option> <!-- Tambahkan opsi server sesuai kebutuhan -->
                    </select>
                </div>
            </div>
        </div>


    </div>


</x-home-layout>
