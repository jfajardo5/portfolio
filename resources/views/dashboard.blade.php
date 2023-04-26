<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto px-6 md:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-gray-800">
                    <div class="p-6 shadow-sm sm:rounded-md border-gray-200 text-center">
                        <h3 class="text-xl md:text-3xl font-bold">Something to meditate on</h3>
                        <p class="italic text-md md:text-xl p-5">{{ strip_tags($inspire) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
