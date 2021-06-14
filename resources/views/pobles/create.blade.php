<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' Afegir Poble') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('pobles.store')}}" method="post" >
                        @csrf
                        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                            <div class="mt-4">
                                <x-label for="nom" :value="__('Nom')" />

                                <x-input id="nom" class="block w-full mt-1" type="text" name="nom"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="poblacio" :value="__('Població')" />

                                <x-input id="poblacio" class="block w-full mt-1" type="text" name="poblacio"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="superficie" :value="__('Superficie')" />

                                <x-input id="superficie" class="block w-full mt-1" type="text" name="superficie"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="densitat" :value="__('Densitat')" />
                                <x-input id="densitat" class="block w-full mt-1" type="text" name="densitat"  />

                            </div>


                        <div class="mt-4">
                            <x-label for="altura" :value="__('Altura')" />
                            <x-input id="altura" class="block w-full mt-1" type="text" name="altura"  />

                        </div>
                        <div class="mt-4">
                            <x-label for="longitut" :value="__('Longitut')" />
                            <x-input id="longitut" class="block w-full mt-1" type="text" name="longitut"  />

                        </div>
                        <div class="mt-4">
                            <x-label for="latitut" :value="__('Latitut')" />
                            <x-input id="latitut" class="block w-full mt-1" type="text" name="latitut"  />

                        </div>

                    </div>
                    <x-button class="mt-5 ml-4">
                        {{ __('Crea') }}
                    </x-button>
                       </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
