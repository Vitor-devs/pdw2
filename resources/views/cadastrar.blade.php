
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="POST">
                        @csrf
            
            <!-- Modelo -->
            <div>
                <x-input-label for="modelo" :value="__('Modelo')" />
                <x-text-input id="modelo" class="block mt-1 w-full" type="text" name="modelo" :value="old('modelo')" required autofocus autocomplete="modelo" />
                <x-input-error :messages="$errors->get('modelo')" class="mt-2" />
            </div>

            <!-- Marca -->
            <div class="mt-4">
                <x-input-label for="marca" :value="__('Marca')" />
                <x-text-input id="marca" class="block mt-1 w-full" type="text" name="marca" :value="old('marca')" required autocomplete="marca" />
                <x-input-error :messages="$errors->get('marca')" class="mt-2" />
            </div>

            <!-- Processador -->
            <div class="mt-4">
                <x-input-label for="processador" :value="__('Processador')" />
                <x-text-input id="processador" class="block mt-1 w-full" type="text" name="processador" :value="old('processador')" required autocomplete="processador" />
                <x-input-error :messages="$errors->get('processador')" class="mt-2" />
            </div>

            <!-- RAM -->
            <div class="mt-4">
                <x-input-label for="ram" :value="__('RAM (GB)')" />
                <x-text-input id="ram" class="block mt-1 w-full" type="number" name="ram" :value="old('ram')" required autocomplete="ram" />
                <x-input-error :messages="$errors->get('ram')" class="mt-2" />
            </div>

            <!-- Preço -->
            <div class="mt-4">
                <x-input-label for="preco" :value="__('Preço')" />
                <x-text-input id="preco" class="block mt-1 w-full" type="number" step="0.01" name="preco" :value="old('preco')" required autocomplete="preco" />
                <x-input-error :messages="$errors->get('preco')" class="mt-2" />
            </div>       

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Cadastrar') }}
                </x-primary-button>
            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
