<x-admin-layout>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Buat Pertanyaan
            </h2>

            <nav>
                <ol class="flex items-center gap-2">
                    <li>
                        <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                    </li>
                    <li class="font-medium text-primary">
                        <a href="{{ route('question.index') }}">Pertanyaan</a>
                    </li>
                </ol>
            </nav>
        </div>
        <!-- Breadcrumb End -->


        <!-- Create Form End -->
        <div class="flex flex-col gap-10">
            <div
                class="space-y-4 rounded-sm border border-stroke bg-white px-5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
                <a class="inline-flex items-center justify-center bg-primary px-4 py-3 text-center text-sm font-medium text-white hover:bg-opacity-90"
                    href="{{ route('question.index') }}" title="Kembali">
                    <svg class="w-2 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                        <path
                            d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z" />
                    </svg>
                </a>
                <div>
                    <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                        <span class="lg:text-lg">
                            Pertanyaan ke-1
                        </span>
                        <div class="flex items-center gap-2">
                            <div class="relative z-20 bg-white text-xs dark:bg-form-input" x-data="{ isOptionSelected: false }">
                                <select
                                    class="relative z-20 w-18 appearance-none rounded-md border border-stroke bg-transparent p-1 pr-7 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                    :class="isOptionSelected && 'text-black dark:text-white'"
                                    @change="isOptionSelected = true">
                                    <option class="text-body" value="">Likert</option>
                                    <option class="text-body" value="">Essay</option>
                                    <option class="text-body" value="">Skor</option>
                                </select>
                                <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                fill="#637381"></path>
                                        </g>
                                    </svg>
                                </span>
                            </div>

                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                                </svg>
                            </a>
                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </a>
                        </div>
                    </label>
                    <div class="flex">
                        <input
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            type="text" placeholder="Default Input" />
                    </div>
                </div>
                <div>
                    <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                        <span class="lg:text-lg">
                            Pertanyaan ke-2
                        </span>
                        <div class="flex items-center gap-2">
                            <div class="relative z-20 bg-white text-xs dark:bg-form-input" x-data="{ isOptionSelected: false }">
                                <select
                                    class="relative z-20 w-18 appearance-none rounded-md border border-stroke bg-transparent p-1 pr-7 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                    :class="isOptionSelected && 'text-black dark:text-white'"
                                    @change="isOptionSelected = true">
                                    <option class="text-body" value="">Likert</option>
                                    <option class="text-body" value="">Essay</option>
                                    <option class="text-body" value="">Skor</option>
                                </select>
                                <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                fill="#637381"></path>
                                        </g>
                                    </svg>
                                </span>
                            </div>

                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                                </svg>
                            </a>
                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </a>
                        </div>
                    </label>
                    <div class="flex">
                        <input
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            type="text" placeholder="Default Input" />
                    </div>
                </div>
                <div>
                    <label class="mb-3 flex justify-between text-sm font-medium text-black dark:text-white">
                        <span class="lg:text-lg">
                            Pertanyaan ke-3
                        </span>
                        <div class="flex items-center gap-2">
                            <div class="relative z-20 bg-white text-xs dark:bg-form-input" x-data="{ isOptionSelected: false }">
                                <select
                                    class="relative z-20 w-18 appearance-none rounded-md border border-stroke bg-transparent p-1 pr-7 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input"
                                    :class="isOptionSelected && 'text-black dark:text-white'"
                                    @change="isOptionSelected = true">
                                    <option class="text-body" value="">Likert</option>
                                    <option class="text-body" value="">Essay</option>
                                    <option class="text-body" value="">Skor</option>
                                </select>
                                <span class="absolute right-1 top-1/2 z-10 -translate-y-1/2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                fill="#637381"></path>
                                        </g>
                                    </svg>
                                </span>
                            </div>

                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
                                </svg>
                            </a>
                            <a class="group inline-flex items-center justify-center rounded-md border border-primary p-1 text-center font-medium text-primary hover:bg-primary hover:bg-opacity-90"
                                href="#">
                                <svg class="w-3 fill-primary group-hover:fill-white"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path
                                        d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                                </svg>
                            </a>
                        </div>
                    </label>
                    <div class="flex">
                        <input
                            class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                            type="text" placeholder="Default Input" />
                    </div>
                </div>
                <a class="inline-flex w-full items-center justify-center rounded-full border border-primary px-10 py-2 text-center font-medium text-primary hover:bg-opacity-90 lg:px-8 xl:px-10"
                    href="#">
                    Tambah Pertanyaan
                </a>
                <a class="inline-flex w-full items-center justify-center bg-primary px-10 py-4 text-center font-medium text-white hover:bg-opacity-90 lg:px-8 xl:px-10"
                    href="#">
                    Simpan
                </a>
            </div>
        </div>
        <!-- Create Form End -->
    </div>
</x-admin-layout>
