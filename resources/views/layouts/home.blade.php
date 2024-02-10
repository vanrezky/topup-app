<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<style>
    /* .background-app {
        background: url('{{ asset('assets/images/bg2.png') }}') left top no-repeat, url('{{ asset('assets/images/bg1.png') }}') left top repeat;
        padding: 15px;
        background-size: auto, auto;

    } */
    .background-app {
        background: url('{{ asset('assets/images/bg1.png') }}') left top repeat;
    }
</style>

@stack('styles')

<body>
    <main class="bg-cover background-app my-0 mx-auto min-h-full max-w-lg">
        <div class="my-0  max-auto min-h-screen overflow-x-hidden">
            <div class="px-6 md:px-10">
                {{ $slot }}
            </div>
            <footer class="bg-gray-800 rounded-lg shadow mt-4 text pb-[66px]">
                <div class="w-full mx-auto p-4 text-center flex flex-col gap-5">
                    <ul class="flex justify-center items-center mt-3 text-sm font-medium text-gray-200 sm:mt-0">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Tentang</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">FAQ</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                    <span class="text-sm text-gray-200 sm:text-center">© {{ date('Y') }} <a href="{{ route('home.index') }}" class="hover:underline">{{ config('app.name') }}</a>. All Rights Reserved.
                    </span>
                </div>
            </footer>
        </div>
        <div class=" text-gray-900 antialiased">
            <div class="fixed bottom-0 z-50 w-full max-w-lg h-16 max-auto bg-white border-gray-200">
                <div class="grid h-full max-w-lg grid-cols-3 mx-auto font-medium">
                    <a href="{{ route('home.index') }}" wire:navigate class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <i class="bi bi-house text-xl"></i>
                        <span class="text-sm text-gray-500 group-hover:text-black">Home</span>
                    </a>
                    <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <i class="bi bi-search text-xl"></i>
                        <span class="text-sm text-gray-500 group-hover:text-black">Cek Pesanan</span>
                    </a>
                    <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <i class="bi bi-person-circle text-xl"></i>
                        <span class="text-sm text-gray-500 group-hover:text-black">Profile</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    @livewireScripts
    @stack('scripts')
</body>

</html>
