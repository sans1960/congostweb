<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __(' Afegir Imatge') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('images.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="grid grid-cols-3 gap-4 ">
                            <div class="mt-4">
                                <x-label for="nom" :value="__('Nom')" />

                                <x-input id="nom" class="block w-full mt-1" type="text" name="nom"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="modelo_id" :value="__('Model ID')" />

                                <x-input id="modelo_id" class="block w-full mt-1" type="text" name="modelo_id"  />

                            </div>
                            <div class="mt-4">
                                <x-label for="modelo_type" :value="__('Model Type')" />

                                <x-input id="modelo_type" class="block w-full mt-1" type="text" name="modelo_type"  />

                            </div>
                        </div>
                            <div class="mt-4">
                                <x-label for="archivo" :value="__('Imatge')" />
                                <x-input id="archivo" class="block w-full mt-1" type="file" name="archivo"  />

                            </div>


                        <div class="mt-4">
                            <x-label for="descripcion" :value="__('Descripció')" />
                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="block w-full mt-1"></textarea>

                        </div>



                    <x-button class="mt-5 ml-4">
                        {{ __('Crea') }}
                    </x-button>
                       </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script>
           ClassicEditor
        .create( document.querySelector( '#descripcion' ) )
        .catch( error => {
            console.error( error );
        } );

    </script>
</x-app-layout>
