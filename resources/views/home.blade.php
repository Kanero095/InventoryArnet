<x-template>
    <title>Home</title>

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <p class="text-black dark:text-white mb-7 text-2xl font-bold capitalize">
                Hallo, {{ Auth::user()->name }} 👋
            </p>
            <div
                class="grid grid-cols-3 justify-center h-48 mb-4 rounded bg-gradient-to-r from-[#FFC3E2C9] to-[#F452A56D]">
                <div class="h-full item-center w-full border-r-2 border-black dark:border-white">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-16">
                        Data Perangkat
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $toju }}
                    </p>
                </div>
                <div class="h-full w-full border-r-2 border-black dark:border-white">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-16">
                        Perangkat Terpakai
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $topi }}
                    </p>
                </div>
                <div class="h-full w-full">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-16">
                        Perangkat Tidak Terpakai
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $totiter }}
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="items-center justify-center rounded bg-[#C1B2F4] h-28">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-9 md:mt-7">
                        METRO-E
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $tome }}
                    </p>
                    {{-- <p class="text-xs text-black text-end mr-7 font-bold">
                        Lihat Data
                    </p> --}}
                </div>
                <div class="items-center justify-center rounded bg-[#9BC7AF] h-28">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-9 md:mt-7">
                        DWDM
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $todwdm }}
                    </p>
                </div>
                <div class="items-center justify-center rounded bg-[#798DF8] h-28">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-9 md:mt-7">
                        N-TERA
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $tontera }}
                    </p>
                </div>
                <div class="items-center justify-center rounded bg-[#C7B39B] h-28">
                    <p class="text-sm md:text-lg text-black text-center font-bold mt-9 md:mt-7">
                        OTN
                    </p>
                    <p class="text-sm md:text-lg text-black text-center font-bold">
                        {{ $tootn }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-template>
