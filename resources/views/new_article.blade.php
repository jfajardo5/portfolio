<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl max-h-screen mx-auto px-6 md:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-gray-200 text-gray-800">
                    <div class="p-6 shadow-sm sm:rounded-md text-center">
                        <h3 class="text-xl md:text-3xl font-bold">Write something amazing.</h3>
                    </div>
                    <x-forms.article>
                        <div class="flex flex-col items-end w-full max-w-full p-2">
                            <input type="submit" class="mt-8 mb-7 w-36 font-bold border border-green-400 bg-green-400 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline" value="Add Article">
                        </div>
                    </x-forms.article>
                </div>
            </div>
        </div>
    </div>
    
</x-admin-layout>