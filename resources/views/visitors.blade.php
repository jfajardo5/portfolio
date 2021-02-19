<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visitors') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mx-auto p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full table-auto divide-y divide-gray-200 mb-4">
                        <thead class="bg-gray-50"">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Request URI</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Referring URL</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Agent</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hostname</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($visitors as $visitor)
                                <tr class="text-sm text-gray-500 hover:bg-green-200 font-bold transition">
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $visitor->ip_address }}</td>
                                    <td class="px-6 py-4 whitespace-wrap">{{ $visitor->request_uri }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $visitor->referring_url }}</td>
                                    <td class="px-6 py-4 whitespace-wrap">{{ $visitor->user_agent }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $visitor->hostname }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $visitor->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $visitors->links() }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
