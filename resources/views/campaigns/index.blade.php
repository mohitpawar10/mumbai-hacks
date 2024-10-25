<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Campaigns') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @foreach ($campaigns as $campaign)
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items">
                        <div class="ml-4">
                            <div class="text-lg font-semibold text-gray-900">{{ $campaign->name }}</div>
                            <div class="text-md text-gray-500">{{ $campaign->description }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
