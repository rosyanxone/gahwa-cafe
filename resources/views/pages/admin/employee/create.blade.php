<x-admin-layout>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Buat Karyawan
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">
                        <a href="{{ route('employee.index') }}">Karyawan</a>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- Create Form End -->
        <div class="flex flex-col gap-10">
            <div
                class="space-y-4 rounded-sm border border-stroke bg-white px-5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                <a class="inline-flex items-center justify-center rounded-lg bg-primary px-4 py-3 text-center text-sm font-medium text-white hover:bg-opacity-90"
                    href="{{ route('employee.index') }}" title="Kembali">
                    <svg class="w-2 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                        <path
                            d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z" />
                    </svg>
                </a>
                <form class="space-y-5" id="employee" action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="text-red-500">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div id="name">
                        <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                            <span class="lg:text-lg">
                                Nama
                            </span>
                        </label>
                        <div class="flex">
                            <input
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="name" type="text" value="{{ old('name') ?? null }}" placeholder="John Doe"
                                required />
                        </div>
                    </div>
                    <div id="email">
                        <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                            <span class="lg:text-lg">
                                Email
                            </span>
                        </label>
                        <div class="flex">
                            <input
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="email" type="text" value="{{ old('email') ?? null }}"
                                placeholder="johndoe@gmail.com" required />
                        </div>
                    </div>
                    <div id="phone-number">
                        <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                            <span class="lg:text-lg">
                                Nomor Hp
                            </span>
                        </label>
                        <div class="flex">
                            <input
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="phone_number" type="text" value="{{ old('phone_number') ?? null }}"
                                placeholder="081234567890" required />
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div class="w-full" id="age">
                            <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                                <span class="lg:text-lg">
                                    Age
                                </span>
                            </label>
                            <div class="flex">
                                <input
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                    name="age" type="number" value="{{ old('age') ?? null }}" min="1"
                                    placeholder="2x" required />
                            </div>
                        </div>
                        <div class="w-full" id="gender">
                            <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                                <span class="lg:text-lg">
                                    Jenis Kelamin
                                </span>
                            </label>
                            <div class="flex">
                                <select
                                    class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                    id="gender" name="gender" required>
                                    <option value="L" @selected(old('gender') == 'L')>Laki-laki</option>
                                    <option value="P" @selected(old('gender') == 'P')>Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <div class="flex w-full flex-col gap-5">
                            <div class="w-full" id="position">
                                <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                                    <span class="lg:text-lg">
                                        Posisi
                                    </span>
                                </label>
                                <div class="flex">
                                    <input
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                        name="position" type="text" value="Karyawan"
                                        value="{{ old('position') ?? null }}" placeholder="Karyawan" required />
                                </div>
                            </div>
                            <div class="w-full" id="religion">
                                <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                                    <span class="lg:text-lg">
                                        Agama
                                    </span>
                                </label>
                                <div class="flex">
                                    <select
                                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                        id="religion" name="religion" required>
                                        <option value="Islam" @selected(old('religion') == 'Islam')>Islam</option>
                                        <option value="Kristen" @selected(old('religion') == 'Kristen')>Kristen</option>
                                        <option value="Katolik" @selected(old('religion') == 'Katolik')>Katolik</option>
                                        <option value="Hindu" @selected(old('religion') == 'Hindu')>Hindu</option>
                                        <option value="Budha" @selected(old('religion') == 'Budha')>Budha</option>
                                        <option value="Konghucu" @selected(old('religion') == 'Konghucu')>Konghucu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-full" id="address">
                            <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                <span class="lg:text-lg">
                                    Alamat
                                </span>
                            </label>
                            <textarea
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="address" rows="5" placeholder="Samarinda">{{ old('address') ?? null }}</textarea>
                        </div>
                    </div>
                    <div id="password">
                        <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                            <span class="lg:text-lg">
                                Password Akun
                            </span>
                        </label>
                        <div class="flex">
                            <input
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="password" type="password" placeholder="********" required />
                        </div>
                    </div>
                    <div id="confirm-password">
                        <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                            <span class="lg:text-lg">
                                Konfirmasi Password
                            </span>
                        </label>
                        <div class="flex">
                            <input
                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                                name="password_confirmation" type="password" placeholder="********" required />
                        </div>
                    </div>
                    <button
                        class="inline-flex w-full items-center justify-center rounded-lg bg-primary px-10 py-4 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                        type="submit">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
        <!-- Create Form End -->
    </div>
</x-admin-layout>
