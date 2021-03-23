<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>{{$title}}</h1>
                <h2>Nim:{{$data['mahasiswa']['nim']}}</h2>
                <h2>Nama:{{$data['mahasiswa']['nama']}}</h2>
                <h2>kelas:{{$data['mahasiswa']['kelas']}}</h2>
            </div>
        </div>
    </div>
</x-template-layout>