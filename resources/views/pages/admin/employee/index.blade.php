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
                        href="{{ route('employee.create') }}">
                        Tambah Karyawan
                    </a>
                </div>

                <table class="w-full" id="employees">
                    <thead class="bg-gray-2 uppercase dark:bg-meta-4">
                        <tr>
                            <th class="w-5 p-2.5 text-sm font-medium xsm:text-base xl:p-5">No.</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Name</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Email</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Nomor Hp</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Umur</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Jenis Kelamin</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Agama</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Alamat</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Posisi</th>
                            <th class="p-2.5 text-sm font-medium xsm:text-base xl:p-5">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="text-nowrap">
                                <td class="w-5 p-2.5 xl:p-5">{{ $loop->iteration }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->name }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->email }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->phone_number }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->age }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->religion }}</td>
                                <td class="p-2.5 xl:p-5">{{ Str::limit($employee->address, 20, '...') }}</td>
                                <td class="p-2.5 xl:p-5">{{ $employee->position }}</td>
                                <td class="p-2.5 xl:p-5">
                                    <a class="text-red-500 underline hover:no-underline"
                                        href="{{ route('employee.destroy', ['user' => $employee->id]) }}">Hapus</a>
                                    <a class="text-amber-500 underline hover:no-underline"
                                        href="{{ route('employee.edit', ['user' => $employee->id]) }}">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Table Section End -->
    </div>

    @push('scripts')
        <script>
            new DataTable('#employees', {
                scrollX: true,
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
