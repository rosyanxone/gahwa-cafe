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
    <div class="h-16 w-full lg:h-22" style="background: url('{{ asset('img/header-bg.jpg') }}')"></div>
    <form class="flex-col bg-white px-2 pb-4 lg:mx-auto lg:flex lg:max-w-[1024px]" action="{{ route('questioner.store') }}"
        method="POST">
        @csrf
        {{-- Data Pelanggan --}}
        <div class="">
            <h1 class="w-fit translate-x-2 translate-y-3 bg-white px-1 text-xl font-medium">Data Pelanggan</h1>
            <div class="flex w-full flex-col gap-2 rounded-lg border !border-slate-400 p-2.5 pt-3 text-sm">
                <label class="flex flex-col" for="name">
                    <span class="font-medium">Nama</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="name" name="name" type="text"
                        placeholder="Masukkan nama Anda" required>
                </label>
                <label class="flex flex-col" for="email">
                    <span class="font-medium">Email</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="email" name="email" type="text"
                        placeholder="Masukkan email Anda" required>
                </label>
                <div for="gender">
                    <span class="font-medium">Jenis Kelamin</span>
                    <div class="mt-1">
                        <label class="m-0 flex items-center gap-2">
                            <input name="gender" type="radio" value="L" required>
                            Laki-laki
                        </label>
                        <label class="m-0 flex items-center gap-2">
                            <input name="gender" type="radio" value="P" required>
                            Perempuan
                        </label>
                    </div>
                </div>
                <label for="cafe">
                    <span class="font-medium">Lokasi Cafe</span>
                    <select class="mt-1 w-full rounded-md border border-slate-100 p-2" class="w-full" id="cafe"
                        name="cafe" required>
                        <option value="" selected disabled>Pilih Cafe yang Anda kunjungi</option>
                        <option value="Gahwa Waru">Gahwa Waru</option>
                        <option value="Gahwa Silkar">Gahwa Silkar</option>
                    </select>
                </label>
                <label class="flex flex-col" for="age">
                    <span class="font-medium">Umur</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="age" name="age" type="number"
                        placeholder="Masukkan umur Anda" required>
                </label>
                <label class="flex flex-col" for="visited_at">
                    <span class="font-medium">Tanggal Berkunjung</span>
                    <input class="mt-1 rounded-md border border-slate-100 p-2" id="visited_at" name="visited_at"
                        type="date" required>
                </label>
            </div>
        </div>

        {{-- Kuesioner Pelanggan --}}
        <div class="">
            <h1 class="w-fit translate-x-2 translate-y-3 bg-white px-1 text-xl font-medium">Kuesioner Pelanggan</h1>
            <div class="flex w-full flex-col gap-2 rounded-lg border !border-slate-400 p-2.5 pt-3 text-sm">
                @foreach ($questions as $question)
                    <label class="flex flex-col" for="question-{{ $loop->iteration }}">
                        <span class="font-medium">{{ $question->title }}</span>
                        @if ($question->type == 'essay')
                            <textarea class="over mt-1 h-full max-h-40 resize-none whitespace-pre-wrap rounded-md border border-slate-100 p-2"
                                id="question-{{ $loop->iteration }}" name="answer-{{ $loop->iteration }}" style="word-wrap: break-word;"
                                placeholder="Berikan jawaban Anda..." required></textarea>
                        @else
                            <label class="m-0">
                                <input name="answer-{{ $loop->iteration }}" type="radio" value="5" required>
                                Sangat Puas
                            </label>
                            <label class="m-0">
                                <input name="answer-{{ $loop->iteration }}" type="radio" value="4" required>
                                Puas
                            </label>
                            <label class="m-0">
                                <input name="answer-{{ $loop->iteration }}" type="radio" value="3" required>
                                Netral
                            </label>
                            <label class="m-0">
                                <input name="answer-{{ $loop->iteration }}" type="radio" value="2" required>
                                Tidak Puas
                            </label>
                            <label class="m-0">
                                <input name="answer-{{ $loop->iteration }}" type="radio" value="1" required>
                                Sangat Tidak Puas
                            </label>
                        @endif
                    </label>
                @endforeach
                <button
                    class="mt-3 inline-flex w-full items-center justify-center rounded-lg bg-primary py-2 text-center text-lg font-medium text-white hover:bg-opacity-90"
                    type="submit">
                    Kirim
                </button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('textarea').forEach(textarea => {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });
        });
    </script>
@endsection
