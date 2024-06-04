<x-template>
    <title>Input Spare</title>

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-16 bg-[#D9D9D933]">
            <form action="{{ route('inputspare') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- header --}}
                <div>
                    <h1 class="text-black dark:text-white font-bold text-2xl">
                        INPUT SPARE MODUL
                    </h1>
                </div>

                <input type="text" name="user" id="user" hidden value="{{ Auth::user()->name }}">

                {{-- nama perangkat --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="namaperangkat" class="text-black text-base dark:text-white">
                        1. Nama Perangkat
                    </label>
                    <select name="namaperangkat" id="namaperangkat"
                        class="rounded ml-[5.55rem] w-[12rem] md:ml-[8.2rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300"
                        required>
                        <option value="" class="bg-white dark:bg-black">Silahkan Pilih Perangkat</option>
                        @foreach ($nape as $dt)
                            <option value="{{ $dt->namaperangkat }}" class="bg-white dark:bg-black">
                                {{ $dt->namaperangkat }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- jenis modul --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="jenismodul" class="text-black text-base dark:text-white">
                        2. Jenis Modul
                    </label>
                    <select name="jenismodul" id="jenismodul"
                        class="rounded ml-[7.6rem] w-[12rem] md:ml-[10.2rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300"
                        required>
                        <option value="" class="bg-white dark:bg-black">Silahkan Pilih Modul</option>
                        @foreach ($jemo as $dt)
                            <option value="{{ $dt->jenismodul }}" class="bg-white dark:bg-black">
                                {{ $dt->jenismodul }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- nama modul --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="namamodul" class="text-black text-base dark:text-white">
                        3. Nama Modul
                    </label>
                    <select name="namamodul" id="namamodul"
                        class="rounded ml-[7.1rem] w-[12rem] md:ml-[9.7rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300"
                        required>
                        <option value="" class="bg-white dark:bg-black">Silahkan Pilih</option>
                        @foreach ($namo as $dt)
                            <option value="{{ $dt->namamodul }}" class="bg-white dark:bg-black">
                                {{ $dt->namamodul }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- type --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="tipe" class="text-black text-base dark:text-white">
                        4. Type
                    </label>
                    <select name="tipe" id="tipe"
                        class="rounded ml-[10.8rem] w-[12rem] md:ml-[13.4rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300"
                        required>
                        <option value="" class="bg-white dark:bg-black">Silahkan Pilih</option>
                        @foreach ($type as $dt)
                            <option value="{{ $dt->tipe }}" class="bg-white dark:bg-black">
                                {{ $dt->tipe }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- nomor seri --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <input type="text" name="nomorseri" id="nomorseri"
                        class="block py-2.5 px-0 w-full md:w-[50%] text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="nomorseri"
                        class="peer-focus:font-medium absolute text-base text-black dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        5. Nomor Seri
                    </label>
                </div>

                {{-- lokasi penyimpanan --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="lokasipenyimpanan" class="text-black text-base dark:text-white">
                        6. Lokasi Penyimpanan
                    </label>
                    <select name="lokasipenyimpanan" id="lokasipenyimpanan"
                        class="rounded ml-[3.94rem] w-[12rem] md:ml-[6.5rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300"
                        required>
                        <option value="" class="bg-white dark:bg-black">Silahkan Pilih</option>
                        @foreach ($lope as $dt)
                            <option value="{{ $dt->lokasipenyimpanan }}" class="bg-white dark:bg-black">
                                {{ $dt->lokasipenyimpanan }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- tanggal penyimpanan --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <label for="tanggalpenyimpanan" class="text-black text-base dark:text-white">
                        7. Tanggal Penyimpanan
                    </label>
                    <input type="date" name="tanggalpenyimpanan" id="tanggalpenyimpanan" required
                        class="rounded ml-[3.25rem] w-[12rem] md:ml-[5.8rem] md:w-[13.3rem] bg-[#D9D9D933] text-black border-solid border-2 border-black dark:text-gray-300 dark:border-gray-300">
                </div>

                {{-- jumlah --}}
                <div class="relative z-0 w-full mb-5 mt-5 group">
                    <input type="number" name="jumlah" id="jumlah"
                        class="block py-2.5 px-0 w-full md:w-[50%] text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="jumlah"
                        class="peer-focus:font-medium absolute text-base text-black dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        8. Jumlah
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
