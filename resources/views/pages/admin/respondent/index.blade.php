<x-admin-layout>
    @push('extend-head')
        <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    @endpush

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Responden
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">Responden</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <div
                class="rounded-sm border border-stroke bg-white px-5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                <div class="mb-6 flex items-center justify-between">
                    <h4 class="text-xl font-bold text-black dark:text-white">
                        Tabel Responden
                    </h4>
                </div>

                <div class="w-full mb-6 overflow-auto">
                    <!-- Card Item Start -->
                    <div class="flex w-full grid-cols-12 gap-3 lg:grid lg:gap-6">
                        <div
                            class="col-span-3 flex h-64 flex-col justify-between rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                            <div class="w-40 justify-between gap-4 sm:flex lg:w-auto">
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Nilai IKM
                                </h4>
                            </div>
                            <div class="mb-5">
                                <div class="flex flex-col items-center justify-center gap-5">
                                    <h1 class="text-4xl font-medium text-black-2 dark:text-white">{{ round($finalScore, 2) }}</h1>
                                    <div class="w-full text-center">
                                        <hr class="mb-3 h-0.5 bg-black-2">
                                        <span class="text-xl text-black-2 dark:text-white">
                                            @if ($finalScore < 21)
                                                (E) Sangat Tidak Layak
                                            @elseif ($finalScore >= 21 && $finalScore <= 40)
                                                (D) Tidak Layak 
                                            @elseif ($finalScore >= 41 && $finalScore <= 60)
                                                (C) Cukup
                                            @elseif ($finalScore >= 61 && $finalScore <= 81)
                                                (B) Baik
                                            @elseif ($finalScore >= 81 && $finalScore <= 100)
                                                (A) Sangat Baik
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card Item End -->

                        <!-- Card Item Start -->
                        <div
                            class="col-span-3 flex flex-col justify-between rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                            <div class="mb-3 w-40 justify-between gap-4 sm:flex lg:w-auto">
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Jumlah
                                </h4>
                            </div>
                            <div class="mt-8">
                                <div class="flex flex-col items-center justify-center gap-5">
                                    <h1 class="text-4xl font-medium text-black-2 dark:text-white">{{ $totalRespondent }} orang</h1>
                                    <hr class="mb-10 h-0.5 w-full bg-black-2">
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <!-- Card Item End -->

                        <!-- Card Item Start -->
                        <div
                            class="col-span-3 flex flex-col justify-between rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                            <div class="mb-3 w-40 justify-between gap-4 sm:flex lg:w-auto">
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Laki-laki
                                </h4>
                            </div>
                            <div class="mt-8">
                                <div class="flex flex-col items-center justify-center gap-5">
                                    <h1 class="text-4xl font-medium text-black-2 dark:text-white">{{ $maleRespondent }} orang</h1>
                                    <hr class="mb-10 h-0.5 w-full bg-black-2">
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <!-- Card Item End -->

                        <!-- Card Item Start -->
                        <div
                            class="col-span-3 flex flex-col justify-between rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                            <div class="mb-3 w-40 justify-between gap-4 sm:flex lg:w-auto">
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Perempuan
                                </h4>
                            </div>
                            <div class="mt-8">
                                <div class="flex flex-col items-center justify-center gap-5">
                                    <h1 class="text-4xl font-medium text-black-2 dark:text-white">{{ $femaleRespondent }} orang</h1>
                                    <hr class="mb-10 h-0.5 w-full bg-black-2">
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <!-- Card Item End -->
                    </div>
                </div>

                <ul class="flex flex-col gap-6">
                    @foreach ($questions as $question)
                        <li
                            class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark lg:col-span-4">
                            <div class="mb-4 justify-between gap-4 sm:flex">
                                <div>
                                    <h4 class="text-xl font-bold text-black dark:text-white">
                                        {{ $question->title }}
                                    </h4>
                                </div>
                            </div>

                            <div class="">
                                <div class="max-h-70 overflow-y-auto" id="essayAnswer">
                                    <ul class="text-sm lg:text-lg">
                                        @foreach ($question->answer as $answer)
                                            <li class="border border-stroke p-3">
                                                {{ $answer->body }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <!-- ====== Table Section End -->
    </div>

    @push('scripts')
    @endpush
</x-admin-layout>
