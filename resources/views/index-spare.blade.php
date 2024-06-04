<x-template>
    <title>Index Spare</title>

    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-16 relative overflow-x-auto shadow-md">
            <table class="table-auto">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama Perangkat</th>
                        <th scope="col" class="px-6 py-3">Jenis Modul</th>
                        <th scope="col" class="px-8 py-3">Nama Modul</th>
                        <th scope="col" class="px-8 py-3">Type</th>
                        <th scope="col" class="px-6 py-3">Nomor Seri</th>
                        <th scope="col" class="px-8 py-6">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Lokasi Penyimpanan</th>
                        <th scope="col" class="px-10 py-3">Stok</th>
                        <th scope="col" class="px-6 py-3" colspan="3">{{-- --}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($DataSpare as $data)
                        {{-- data --}}
                        <tr
                            class="odd:bg-white even:bg-gray-300 border-b dark:border-gray-700 text-[10px] md:text-xs text-center">
                            <td class="px-6 py-3">
                                {{ $data->id }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->namaperangkat }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->jenismodul }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->namamodul }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->tipe }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->nomorseri }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->tanggalpenyimpanan }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->lokasipenyimpanan }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $data->jumlah }} Pcs
                            </td>
                            {{-- icon baca --}}
                            <td class="px-1 py-3">
                                <a href="{{ route('pinjam.read', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                            </td>
                            {{-- icon hapus --}}
                            <form action="{{ route('spare.destroy', $data->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <td class="px-1 py-3">
                                    <button type="submit" onclick="return confirm('apakah yakin ingin dihapus?')"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </td>
                            </form>
                            {{-- ikon edit --}}
                            <td class="px-1 py-3">
                                <a href="{{ route('pinjam.edit', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-template>
