@extends('layouts.guest')

@section('stylesheets')
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endsection

@section('isHeaderScrolled')
header-scrolled
@endsection

@section('main')
    <div class="bg-white px-2 pt-15 lg:pt-22 pb-4">
        {{-- Data Pelanggan --}}
        <div class="">
            <h1 class="w-fit translate-x-2 translate-y-3 bg-white px-1 text-xl font-medium">Data Pelanggan</h1>
            <div class="flex w-full flex-col gap-2 rounded-lg border !border-slate-400 p-2.5 pt-3 text-sm">
                <div for="gender">
                    <span class="font-medium">Jenis Kelamin</span>
                    <div class="mt-1">
                        <label class="m-0 flex items-center gap-2">
                            <input name="gender" type="radio">
                            Laki-laki
                        </label>
                        <label class="m-0 flex items-center gap-2">
                            <input name="gender" type="radio">
                            Perempuan
                        </label>
                    </div>
                </div>
                <label for="cafe">
                    <span class="font-medium">Lokasi Cafe</span>
                    <select class="mt-1 w-full rounded-md border border-slate-100 p-2" class="w-full" id="cafe"
                        name="cafe">
                        <option value="" selected disabled>Pilih Cafe yang Anda kunjungi</option>
                        <option value="Waru">Gahwa Waru</option>
                        <option value="Lorem">Gahwa Lorem</option>
                    </select>
                </label>
                <label class="flex flex-col" for="age">
                    <span class="font-medium">Umur</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="age" name="age" type="number"
                        placeholder="Masukkan umur Anda">
                </label>
                <label class="flex flex-col" for="visited_at">
                    <span class="font-medium">Tanggal Berkunjung</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="visited_at" name="visited_at"
                        type="date">
                </label>
            </div>
        </div>

        {{-- Kuesioner Pelanggan --}}
        <div class="">
            <h1 class="w-fit translate-x-2 translate-y-3 bg-white px-1 text-xl font-medium">Kuesioner Pelanggan</h1>
            <div class="flex w-full flex-col gap-2 rounded-lg border !border-slate-400 p-2.5 pt-3 text-sm">
                <label class="flex flex-col" for="age">
                    <span class="font-medium">Bagaimana kualitas cafe?</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" type="text">
                </label>
                <label class="flex flex-col" for="age">
                    <span class="font-medium">Bagaimana kualitas cafe?</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" type="text">
                </label>
                <label class="flex flex-col" for="age">
                    <span class="font-medium">Bagaimana kualitas cafe?</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" type="text">
                </label>
            </div>
        </div>
    </div>
@endsection
