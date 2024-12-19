<x-admin-layout>
    @push('extend-head')
        <script src="{{ asset('js/apexcharts.min.js') }}"></script>
        <script src="{{ asset('js/main/chart-likert.js') }}"></script>
        <script>
            function renderChartLikert(elementId, yValue) {
                const yValueArray = Array.from({
                    length: 5
                }, (_, i) => JSON.parse(yValue)[i + 1] || 0);

                chartLikert(`#${elementId}`, yValueArray);
            }
        </script>
    @endpush

    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Chart
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="index.html">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">Chart</li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 lg:gap-7.5 2xl:mt-7.5">
            <!-- ====== Chart One Start -->
            <div
                class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 lg:col-span-8">
                <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">
                    <div class="flex w-full flex-wrap gap-3 sm:gap-5">
                        <div class="flex min-w-47.5">
                            <span
                                class="mr-2 mt-1 flex h-4 w-full max-w-4 items-center justify-center rounded-full border border-primary">
                                <span class="block h-2.5 w-full max-w-2.5 rounded-full bg-primary"></span>
                            </span>
                            <div class="w-full">
                                <p class="font-semibold text-primary">Total Respondent</p>
                                <p class="text-sm font-medium">{{ $totalRespondent }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-ml-5" id="chartSpike"></div>
                </div>
            </div>
            <!-- ====== Chart One End -->

            <!-- ====== Chart Two Start -->
            <ul class="col-span-12 max-h-[450px] overflow-y-auto bg-white lg:col-span-4">
                @foreach ($questionCollections as $i => $question)
                    {{-- @dump($question->groupedAnswer($question->id)->first()) --}}
                    <li>
                        <div
                            class="rounded-sm border border-stroke bg-white p-6 shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div class="mb-4 justify-between gap-4 sm:flex">
                                <div>
                                    <h4 class="text-lg font-bold text-black dark:text-white">
                                        {{ $question->title }}
                                    </h4>
                                </div>
                            </div>

                            <div>
                                <div class="-mb-9 -ml-5" id="chartLikert-{{ $i }}"></div>
                            </div>
                        </div>

                        <script>
                            renderChartLikert('chartLikert-{{ $i }}', '{!! json_encode($question->groupedAnswer($question->id)->first()['scores']) !!}');
                        </script>
                    </li>
                @endforeach
            </ul>
            <!-- ====== Chart Two End -->

            <div class="col-span-12 overflow-auto">
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
                                <h1 class="text-4xl font-medium text-black-2 dark:text-white">76.50</h1>
                                <div class="w-full text-center">
                                    <hr class="mb-3 h-0.5 bg-black-2">
                                    <span class="text-xl text-black-2 dark:text-white">B (Baik)</span>
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
                                <h1 class="text-4xl font-medium text-black-2 dark:text-white">64 orang</h1>
                                <hr class="h-0.5 mb-10 w-full bg-black-2">
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
                                <h1 class="text-4xl font-medium text-black-2 dark:text-white">42 orang</h1>
                                <hr class="h-0.5 mb-10 w-full bg-black-2">
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
                                <h1 class="text-4xl font-medium text-black-2 dark:text-white">22 orang</h1>
                                <hr class="h-0.5 mb-10 w-full bg-black-2">
                            </div>
                        </div>
                        <div></div>
                    </div>
                    <!-- Card Item End -->
                </div>
            </div>

            <!-- ====== Table One Start -->
            <div class="col-span-12 xl:col-span-12">
                @include('partials.table-01')
            </div>
            <!-- ====== Table One End -->

            <!-- ====== Chat Card Start -->
            <div
                class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
                <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                    Chats
                </h4>

                <div>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-03.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium text-black dark:text-white">
                                    Devid Heilo
                                </h5>
                                <p>
                                    <span class="text-sm font-medium text-black dark:text-white">Hello, how
                                        are you?</span>
                                    <span class="text-xs"> . 12 min</span>
                                </p>
                            </div>
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                                <span class="text-sm font-medium text-white">3</span>
                            </div>
                        </div>
                    </a>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-04.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium">Henry Fisher</h5>
                                <p>
                                    <span class="text-sm font-medium">I am waiting for you</span>
                                    <span class="text-xs"> . 5:54 PM</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-05.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium">Wilium Smith</h5>
                                <p>
                                    <span class="text-sm font-medium">Where are you now?</span>
                                    <span class="text-xs"> . 10:12 PM</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-01.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-3"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium text-black dark:text-white">
                                    Henry Deco
                                </h5>
                                <p>
                                    <span class="text-sm font-medium text-black dark:text-white">Thank you
                                        so much!</span>
                                    <span class="text-xs"> . Sun</span>
                                </p>
                            </div>
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                                <span class="text-sm font-medium text-white">2</span>
                            </div>
                        </div>
                    </a>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-02.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-7"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium">Jubin Jack</h5>
                                <p>
                                    <span class="text-sm font-medium">I really love that!</span>
                                    <span class="text-xs"> . Oct 23</span>
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4"
                        href="messages.html">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="{{ asset('./img/user/user-05.png') }}" alt="User" />
                            <span
                                class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-6"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium">Wilium Smith</h5>
                                <p>
                                    <span class="text-sm font-medium">Where are you now?</span>
                                    <span class="text-xs"> . Sep 20</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- ====== Chat Card End -->
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('js/main/spike-likert.js') }}"></script>
        <script>
            const questionsArray = Object.values({!! json_encode($questions) !!});
            const questionsAvgArray = {!! json_encode($questionsAvg) !!}.map(obj => Object.values(obj)[1]);;

            spikeLikert("#chartSpike", questionsArray, questionsAvgArray);
        </script>
    @endpush
</x-admin-layout>
