<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="/cadastrar">
                        @csrf

                        <!-- Nome -->
                        <div>
                            <x-input-label for="nome" :value="__('Nome')" />
                            <x-text-input id="nome" class="block mt-1 w-full"
                                type="text" name="nome"
                                :value="old('nome')"
                                required autofocus maxlength="60" />
                            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                        </div>

                        <!-- Área -->
                        <div class="mt-4">
                            <x-input-label for="area" :value="__('Área')" />
                            <x-text-input id="area" class="block mt-1 w-full"
                                type="text" name="area"
                                :value="old('area')"
                                required maxlength="20" />
                            <x-input-error :messages="$errors->get('area')" class="mt-2" />
                        </div>

                        <!-- Ramal -->
                        <div class="mt-4">
                            <x-input-label for="ramal" :value="__('Ramal')" />
                            <x-text-input id="ramal" class="block mt-1 w-full"
                                type="number" name="ramal"
                                :value="old('ramal')" />
                            <x-input-error :messages="$errors->get('ramal')" class="mt-2" />
                        </div>

                        <!-- Andar -->
                        <div class="mt-4">
                            <x-input-label for="andar" :value="__('Andar')" />
                            <x-text-input id="andar" class="block mt-1 w-full"
                                type="number" name="andar"
                                :value="old('andar')"
                                min="0" max="255" />
                            <x-input-error :messages="$errors->get('andar')" class="mt-2" />
                        </div>

                        <!-- Email -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full"
                                type="email" name="email"
                                :value="old('email')"
                                maxlength="60" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Botão -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Cadastrar') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
