<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visitors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                        <thead>
                            <tr class="text-left">
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">IP Address</th>
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Referring URL</th>
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Request URI</th>
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">User Agent</th>
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Hostname</th>
                                <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($visitors as $visitor)
                                <tr class="text-center">
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->ip_address }}</td>
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->referring_url }}</td>
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->request_uri }}</td>
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->user_agent }}</td>
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->hostname }}</td>
                                    <td class="border-dashed border-t border-gray-200">{{ $visitor->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
