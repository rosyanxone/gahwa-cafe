<x-admin-layout>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Pertanyaan
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">Pertanyaan</li>
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
                        Tabel Pertanyaan
                    </h4>
                    <a class="inline-flex items-center justify-center rounded-md bg-primary p-2 text-center text-sm font-medium text-white hover:bg-opacity-90 lg:p-4"
                        href="{{ route('question.create') }}">
                        Tambah Pertanyaan
                    </a>
                </div>

                <table class="w-full" id="questions">
                    <thead class="bg-gray-2 uppercase dark:bg-meta-4">
                        <tr>
                            <th class="w-5 p-2.5 text-sm font-medium xsm:text-base xl:p-5">No.</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Pertanyaan</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Tipe</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-5 p-2.5 xl:p-5">1</td>
                            <td class="p-2.5 xl:p-5">Siapa nama Anda</td>
                            <td class="p-2.5 xl:p-5">Likert</td>
                            <td class="p-2.5 xl:p-5">
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-5 p-2.5 xl:p-5">2</td>
                            <td class="p-2.5 xl:p-5">Siapa nama sampean</td>
                            <td class="p-2.5 xl:p-5">Skor</td>
                            <td class="p-2.5 xl:p-5">
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-5 p-2.5 xl:p-5">3</td>
                            <td class="p-2.5 xl:p-5">Siapa nama kamu</td>
                            <td class="p-2.5 xl:p-5">Essay</td>
                            <td class="p-2.5 xl:p-5">
                                <a href="">Edit</a>
                                <a href="">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
