<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Brand
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8">
                    <form class="w-full max-w-lg" action="{{ route('brands.store') }}" method="POST">
                        @csrf

                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                        <input id="name" type="text" name="name"
                               class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Enter brand name" required>

                        <label for="mission" class="block mb-2 mt-2 text-sm font-medium text-gray-900">Mission Of the Brand</label>
                        <input id="mission" type="text"
                               class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Enter Mission of the Brand" required name="mission"></input>

                        <label for="vision" class="block mb-2 mt-2 text-sm font-medium text-gray-900">Vision Of the Brand</label>
                        <input id="vision" type="text"
                               class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Enter Color Palate Details" required name="vision">

                        <label for="values" class="block mt-2 mb-2 text-sm font-medium text-gray-900">Values Of the Brand</label>
                        <input id="values" type="text" name="values"
                               class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Enter values of the Brand" required>

                        <label for="logo" class="block mb-2 mt-2 text-sm font-medium text-gray-900">Logo</label>
                        <input id="name" type="text" name="logo"
                               class="block w-full p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="Enter Logo URL" required>


                        <label for="color_palate" class="block mb-2 mt-2 text-sm font-medium text-gray-900">Color
                            Palate</label>
                        <input id="color_palate" type="text"
                                  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                  placeholder="Enter Color Palate Details" required name="color_palate"></input>


                        @if($errors->count() > 0)
                            @foreach($errors->all() as $error)
                                <div style="color: red">{{ $error }}</div>
                            @endforeach
                        @endif

                        @if(session()->has('success'))
                            <div style="color: green">{{ session()->get('success') }}</div>
                        @endif

                        <button type="submit"
                                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 my-3 border border-gray-400 rounded">
                            Submit
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
