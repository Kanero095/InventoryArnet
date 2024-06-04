<x-template>

    <title>Spare - Read </title>



    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-16 relative overflow-x-auto shadow-md">
            <div class="mb-3">
                <a href="/read-spare" class="button rounded-md bg-white px-4 py-1">
                    Back
                </a>
            </div>

            <table class="table-auto">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-3 md:px-8 py-3">No</th>
                        <th scope="col" class="px-4 md:px-8 py-3">Nama Modul</th>
                        <th scope="col" class="px-4 md:px-8 py-6">Tanggal Penggunaan</th>
                        <th scope="col" class="px-4 md:px-8 py-3">Jumlah Terpakai</th>
                        <th scope="col" class="px-2 md:px-8 py-3">Penggunaan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dt)
                        {{-- data --}}
                        <tr
                            class="odd:bg-[#EA82B7] text-white even:bg-[#85B6FF] border-b dark:border-gray-700 text-xs md:text-base text-center">
                            <td class="px-3 py-3">
                                {{ $dt->id }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $dt->namamodul }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $dt->tanggalpenggunaan }}
                            </td>
                            <td class="px-6 py-3">
                                {{ $dt->jumlahpengunaan }} Pcs
                            </td>
                            <td class="px-6 py-3">
                                {{ $dt->penggunaan }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-template>
