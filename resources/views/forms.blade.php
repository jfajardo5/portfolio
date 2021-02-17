<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Submissions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mx-auto p-6 bg-white border-b border-gray-200">
                    <div id="forms-grid" class="mx-auto max-w-full ag-theme-material" style="height: 40rem"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gridOptions = {
            columnDefs: [
                { headerName: 'IP Address', field: 'ip_address', sortable:true, resizable: true },
                { headerName: 'Name', field: 'name', sortable:true, resizable: true },
                { headerName: 'Email', field: 'email', sortable:true, resizable: true },
                { headerName: 'Message', field: 'message', sortable:true, resizable: true },
                { headerName: 'Timestamp', field: 'created_at', sortable:true, resizable: true },
            ],
            rowData: [
                @foreach($forms as $entry)
                { 
                    ip_address: '{{ $entry->ip_address }}',
                    name: '{{ $entry->name }}',
                    email: '{{ $entry->email }}',
                    message: '@json($entry->message)',
                    created_at: '{{ $entry->created_at }}',
                },
                @endforeach
            ]
        };
        document.addEventListener('DOMContentLoaded', function() {
            var gridDiv = document.querySelector('#forms-grid');
            new agGrid.Grid(gridDiv, gridOptions).gridOptions.api.sizeColumnsToFit();
        });
    </script>
</x-admin-layout>
