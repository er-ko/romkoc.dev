<x-public-layout>

    <x-slot name="meta_desc">{{ 'romkoc online development' }}</x-slot>
    <x-slot name="meta_keywords">{{ 'romkoc, roman, kocian, dev, development, php, laravel, css, jquery, ajax, tailwindcss' }}</x-slot>

    <div class="grid gap-8 grid-cols-1 lg:grid-cols-2">
        <div>@include('welcome.partials.skills')</div>
        <div class="flex flex-col items-center justify-center">@include('welcome.partials.projects')</div>
    </div>
</x-public-layout>