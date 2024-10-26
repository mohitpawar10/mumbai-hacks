<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('campaigns.create') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded">
                Create Campaign
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white">
                    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8">
                        <div
                            class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                            @foreach($campaigns as $campaign)
                                <a href="{{ route('campaigns.edit', ['id', $campaign->id]) }}" class="group">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img
                                            src="{{ $campaign->banner_image }}"
                                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-1 text-lg font-medium text-gray-900">{{ $campaign->name }}</h3>
                                    <p class=" mt-4 text-sm text-gray-700">{{ $campaign->prompt }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
