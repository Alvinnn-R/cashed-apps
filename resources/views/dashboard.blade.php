<x-layout>
    <x-slot:title>
        Dashboard
    </x-slot:title>
    {{-- <h1>Dashboard</h1> --}}
    <h1>{{ request()->user()->name }}</h1>
</x-layout>
