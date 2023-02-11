<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="noto antialiased bg-gray-900">
    <!-- header -->
    <header class="sticky top-0 bg-gray-900-op">
        <nav class=" flex justify-between px-10 items-center py-6">
            <div class="flex items-center space-x-2">
                <!-- hamburger-menu -->
                <nav x-data="{ open: false }">
                    <button class="text-white w-10 h-10 relative focus:outline-none rounded-full hover:bg-gray-500 duration-500" @click="open = !open">
                        <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                            <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                            <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="absolute z-full mt-3 transform px-2 sm:px-0 bg-gray-900-op">
                        <div class="overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative text-white grid gap-6  px-5 py-6 sm:gap-8 sm:p-8">
                                <!-- login -->
                                <a href="#" class="-m-3 flex items-start p-3">
                                    <svg class="h-6 w-6 flex-shrink-0 text-template-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium">Login</p>
                                    </div>
                                </a>
                                <!-- logout -->
                                <a href="#" class="-m-3 flex items-start p-3">
                                    <svg class="h-6 w-6 flex-shrink-0 text-template-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium">Register</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- app.name -->
                <h1 class="text-white font-bold text-3xl allura cursor-pointer">{{ $title }}</h1>
            </div>
            <div class="flex items-center font-bold text-white">
                <!-- dropdown-menu -->
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = ! open" type="button" class="text-white group px-4 pt-4 pb-2 inline-flex items-center text-base font-medium" aria-expanded="false">
                        @auth
                        <span class="cursor-pointer text-lg">{{ Auth::user->name }}</span>
                        @endauth
                        @guest
                        <span class="cursor-pointer text-lg">guest</span>
                        @endguest
                        <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-gray-400 ml-2 h-5 w-5 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="absolute z-full mt-3 -translate-x-1/4 -translate-y-2 transform px-2 sm:px-0 bg-gray-900-op">
                        <div class="overflow-hidden rounded-lg ring-1 ring-black ring-opacity-5">
                            <div class="relative grid gap-6  px-5 py-6 sm:gap-8 sm:p-8">
                                <!-- login -->
                                <a href="#" class="-m-3 flex items-start p-3">
                                    <svg class="h-6 w-6 flex-shrink-0 text-template-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-white">Login</p>
                                    </div>
                                </a>
                                <!-- logout -->
                                <a href="#" class="-m-3 flex items-start p-3">
                                    <svg class="h-6 w-6 flex-shrink-0 text-template-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                                    </svg>
                                    <div class="ml-4">
                                        <p class="text-base font-medium text-white">Register</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- content -->
    <main class="text-white">
        {{ $slot }}
    </main>
    <!-- footer -->
    <footer class="footer footer-center  w-full p-4  text-white">
        <div class="text-center">
            <p>
                Copyright © 2023 -
                <a class="font-semibold" href="">GRS</a>
            </p>
        </div>
    </footer>
</body>

</html>