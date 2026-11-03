<x-admin.layout>
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Daftar Mata Pelajaran (Subjects)</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Nama Mata Pelajaran</th>
                    <th scope="col" class="px-6 py-3">Guru Pengajar</th>
                    <th scope="col" class="px-6 py-3">Dibuat Pada</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $subject->id }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $subject->name }}</td>
                        <td class="px-6 py-4">
                            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300">
                                {{ $subject->teacher->name ?? '-' }}
                            </span>
                        </td>
                        <td class="px-6 py-4">{{ $subject->created_at ? $subject->created_at->format('d M Y') : '-' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
