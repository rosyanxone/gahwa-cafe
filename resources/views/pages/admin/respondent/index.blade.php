<x-admin-layout>
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
                class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                <div class="mb-6 flex items-center justify-between">
                    <h4 class="text-xl font-bold text-black dark:text-white">
                        Tabel Responden
                    </h4>
                    <a class="inline-flex items-center justify-center rounded-md bg-primary p-2 text-center text-sm font-medium text-white hover:bg-opacity-90 lg:p-4"
                        href="{{ route('question.create') }}">
                        Tambah Responden
                    </a>
                </div>

                <ul class="flex flex-col gap-6">
                    <li
                        class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
                        <div class="mb-4 justify-between gap-4 sm:flex">
                            <div>
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Bagaimana pendapat Anda mengenai...?
                                </h4>
                            </div>
                        </div>

                        <div>
                            <div class="-mb-9 -ml-5" id="chartLikert"></div>
                        </div>
                    </li>

                    <li
                        class="col-span-12 rounded-sm border border-stroke bg-white p-7.5 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
                        <div class="mb-4 justify-between gap-4 sm:flex">
                            <div>
                                <h4 class="text-xl font-bold text-black dark:text-white">
                                    Bagaimana pendapat Anda mengenai...?
                                </h4>
                            </div>
                        </div>

                        <div class="">
                            <div class="max-h-70 overflow-y-auto" id="essayAnswer">
                                <ul class="text-sm lg:text-lg">
                                    <li class="p-3 border border-stroke">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam fugit dolorum accusantium temporibus eum ducimus maxime sit id ipsa amet illo suscipit rerum eos perspiciatis at modi aspernatur autem, voluptatum nostrum fugiat. Magni vitae ipsum amet voluptatem magnam, iure, eos nam, eligendi blanditiis debitis ducimus quod soluta praesentium labore quia. Explicabo expedita placeat soluta corrupti quisquam iste possimus ex neque sed maxime, vitae harum eum. Minus eius explicabo pariatur, placeat esse laborum velit, sint asperiores unde veniam consectetur nisi harum soluta sequi ut obcaecati repellat expedita quis recusandae amet exercitationem voluptatibus mollitia? Corrupti, consequatur? Labore culpa quae cumque voluptatibus facilis?</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                    <li class="p-3 border border-stroke">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, omnis!</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!-- ====== Table Section End -->
    </div>

    @push('scripts')
        <script>
            new DataTable('#questions', {
                responsive: true,
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                columnDefs: [{
                    targets: 0,
                    className: 'dt-body-left dt-head-left'
                }]
            });
        </script>
    @endpush
</x-admin-layout>
