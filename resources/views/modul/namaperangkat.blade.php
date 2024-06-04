<x-template>
    <title>Nama Perangkat</title>

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-16 bg-[#D9D9D933]">
            <form action="{{ route('namaperangkat') }}" method="POST">
                @csrf
                {{-- header --}}
                <div>
                    <h1 class="text-black dark:text-white font-bold text-2xl">
                        Tambah Nama Perangkat
                    </h1>
                </div>

                <input type="text" name="user" id="user" hidden value="{{ Auth::user()->name }}">

                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <input type="text" name="namaperangkat" id="namaperangkat"
                        class="block py-2.5 px-0 w-full md:w-[50%] text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="namaperangkat"
                        class="peer-focus:font-medium absolute text-base text-black dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        Masukkan Nama Perangkat Baru
                    </label>
                </div>

                {{-- button --}}
                <div class="flex flex-row-reverse pb-6">
                    <button type="reset"
                        class="button bg-white hover:bg-[#FC5113] text-[#FC5113] hover:text-white rounded px-2 py-1 mr-10">Batal</button>
                    <button type="submit"
                        class="button bg-[#FC5113] hover:bg-white text-white hover:text-[#FC5113] rounded px-2 py-1 mr-3">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</x-template>
