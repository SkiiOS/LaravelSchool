<x-admin.layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white mb-4">{{ $title }}</h1>

        <div class="overflow-x-auto bg-gray-800 rounded-lg shadow p-4">
            <table class="w-full text-left text-sm text-gray-300">
                <tbody class="divide-y divide-gray-700">
                    <tr class="hover:bg-gray-700/50">
                        <th class="py-3 px-4 font-semibold text-white w-1/4">Nama</th>
                        <td class="py-3 px-4">{{ $content[0] }}</td>
                    </tr>
                    <tr class="hover:bg-gray-700/50">
                        <th class="py-3 px-4 font-semibold text-white">Hobi</th>
                        <td class="py-3 px-4">{{ $content[1] }}</td>
                    </tr>
                    <tr class="hover:bg-gray-700/50">
                        <th class="py-3 px-4 font-semibold text-white">Github</th>
                        <td class="py-3 px-4">
                            <a href="{{ $content[2] }}" target="_blank" class="text-blue-400 hover:underline">
                                {{ $content[2] }}
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin.layout>
