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
                    <div id="visitors-grid" class="mx-auto max-w-full ag-theme-material" style="height: 40rem"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gridOptions = {
            columnDefs: [
                { headerName: 'IP Address', field: 'ip_address', sortable:true, resizable: true },
                { headerName: 'Request URI', field: 'request_uri', sortable:true, resizable: true },
                { headerName: 'Referring URL', field: 'referring_url', sortable:true, resizable: true },
                { headerName: 'User Agent', field: 'user_agent', sortable:true, resizable: true },
                { headerName: 'Hostname', field: 'hostname', sortable:true, resizable: true },
                { headerName: 'Timestamp', field: 'created_at', sortable:true, resizable: true }
            ],
            rowData: [
                @foreach($visitors as $visitor)
                { 
                    ip_address: '{{ $visitor->ip_address }}',
                    request_uri: '{{ $visitor->request_uri }}',
                    referring_url: '{{ $visitor->referring_url }}',
                    user_agent: '{{ $visitor->user_agent }}',
                    hostname: '{{ $visitor->hostname }}',
                    created_at: '{{ $visitor->created_at }}',
                },
                @endforeach
            ]
        };
        document.addEventListener('DOMContentLoaded', function() {
            var gridDiv = document.querySelector('#visitors-grid');
            new agGrid.Grid(gridDiv, gridOptions).gridOptions.api.sizeColumnsToFit();
        });
    </script>
</x-admin-layout>
