<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.head')
    </head>
    <body class="font-sans antialiased">
        @isset($search)
            {{ $search }}
        @endisset
        <div id="wrapper" class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900">
            <div class="w-full min-h-screen max-w-2xl px-6 lg:max-w-3xl flex flex-col">
                <div class="absolute top-6 right-6 flex items-center justify-center">
                    <button id="theme-toggle" type="button" class="py-2.5 px-3 text-sm duration-300 bg-white hover:bg-gray-200 dark:bg-black dark:hover:bg-gray-800 rounded-full">
                        <svg id="theme-toggle-dark-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 hidden text-blue-300">
                            <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z" clip-rule="evenodd" />
                        </svg>
                        <svg id="theme-toggle-light-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 hidden dark:text-yellow-300/75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                    </button>
                </div>

                <header class="mb-auto block h-[69px]"></header>

                <main class="mb-auto mt-4 lg:mt-0">
                    {{ $slot }}
                </main>

                <footer class="flex items-center justify-between mt-12 py-6 text-center text-sm border-t border-dashed text-black border-gray-200 dark:border-slate-700">
                    <small class="text-gray-600 dark:text-slate-500">
                        &copy; {{ date('Y') }}
                        <span class="ms-2 ps-2 border-l text-gray-400 border-gray-300 dark:text-slate-500 dark:border-slate-700">romkoc.dev</span>
                        <a href="https://github.com/er-ko" class="ms-2 ps-2 border-l text-gray-400 border-gray-300 dark:text-slate-500 dark:border-slate-700" target="_blank">
                            github
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 float-right relative top-0.5 ml-1">
                                <path fill-rule="evenodd" d="M14.447 3.026a.75.75 0 0 1 .527.921l-4.5 16.5a.75.75 0 0 1-1.448-.394l4.5-16.5a.75.75 0 0 1 .921-.527ZM16.72 6.22a.75.75 0 0 1 1.06 0l5.25 5.25a.75.75 0 0 1 0 1.06l-5.25 5.25a.75.75 0 1 1-1.06-1.06L21.44 12l-4.72-4.72a.75.75 0 0 1 0-1.06Zm-9.44 0a.75.75 0 0 1 0 1.06L2.56 12l4.72 4.72a.75.75 0 0 1-1.06 1.06L.97 12.53a.75.75 0 0 1 0-1.06l5.25-5.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </small>
                    <ul class="flex text-xs text-gray-400 dark:text-slate-500">
                        <li class="px-1"><a href="/locale/en" class="{{ app()->getLocale() == 'en' ? 'text-gray-800 dark:text-slate-400' : '' }}">en</a></li>
                    </ul>
                </footer>
            </div>
        </div>
        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
        <script src="{{ asset('js/darkmode.js') }}"></script>
    </body>
</html>
