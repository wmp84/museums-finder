<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <x-form :action="route('museums.store')">
            <x-slot name="title">
                {{ __('Crear un nuevo museo') }}
            </x-slot>

            <x-slot name="description">
                {{ __('Registra nueva información del museo encontrado') }}
            </x-slot>

            <x-slot name="form">
                <div class="col-span-6 sm:col-span-4">
                    <x-label for="name" value="{{ __('Nombre') }}"/>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                             autofocus autocomplete="name"/>

                    <x-input-error for="name" class="mt-2"/>
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-label for="description" value="{{ __('Descripción') }}"/>
                    <x-textarea id="description" class="block mt-1 w-full" type="textarea" name="description"
                                :value="old('description')" required autocomplete="description"/>
                    <x-input-error for="description" class="mt-2"/>
                </div>

            </x-slot>
            <x-slot name="actions">
                <x-button>
                    {{ __('Guardar') }}
                </x-button>
            </x-slot>
        </x-form>
    </div>
</x-app-layout>
