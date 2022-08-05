<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
                    {{ __('Empresas') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end"></div>
            <div class="w-1/3 p-2 text-right"></div>
        </div>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 pt-4">
                    <h2
                        class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-4 pl-6  block sm:inline-block flex">
                        {{ __('Actualizar empresa') }}</h2>
                    <a href="{{ route('empresa.index') }}"
                        class="mt-4 inline-block no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                        <abbr class="tooltip tooltip--right" data-tooltip="&nbsp; Volver">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            {{-- __('<< Back to all empresa') --}}</abbr>
                    </a>
                    @if ($errors->any())
                        <ul class="mt-3 list-none list-inside text-sm text-red-400">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="w-full px-6 py-4 bg-white overflow-hidden">
                    <form method="POST" action="{{ route('empresa.update', $empresa->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="py-2">
                            <label for="nome"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('nome') ? ' text-red-400' : '' }}">{{ __('Nome') }}</label>
                            <input id="nome"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('nome') ? ' border-red-400' : '' }}"
                                type="text" name="nome" value="{{ old('nome', $empresa->nome) }}" />
                        </div>

                        <div class="py-2">
                            <label for="email"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('email') ? ' text-red-400' : '' }}">{{ __('Email') }}</label>
                            <input id="email"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('email') ? ' border-red-400' : '' }}"
                                type="email" name="email" value="{{ old('email', $empresa->email) }}" />
                        </div>
                        <div class="py-2">
                            <label for="localidade"
                                class="block font-medium text-sm text-gray-700 {{ $errors->has('localidade') ? ' text-red-400' : '' }}">{{ __('Localidade') }}</label>
                            <input id="localidade"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('localidade') ? ' border-red-400' : '' }}"
                                type="text" name="localidade"
                                value="{{ old('localidade', $empresa->localidade) }}" />
                        </div>
                        {{-- <div class="py-2">
                            <label for="poboacion"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('poboacion') ? ' text-red-400' : '' }}">{{ __('Poboación') }}</label>
                            <input id="poboacion"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('poboacion') ? ' border-red-400' : '' }}"
                                type="text" name="poboacion" value="{{ old('poboacion') }}" />
                        </div> --}}
                        <div class="py-2">
                            <label for="actividade_id"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('actividade') ? ' text-red-400' : '' }}">{{ __('Actividade') }}</label>
                            <input id="actividade"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('actividade') ? ' border-red-400' : '' }}"
                                type="text" name="actividade" value="{{ old('actividade_id', $empresa->actividade_id) }}" />
                        </div>
                        <div class="py-2">
                            <label for="tfnofijo"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('telefono') ? ' text-red-400' : '' }}">{{ __('Teléfono fijo') }}</label>
                            <input id="telefono"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('telefono') ? ' border-red-400' : '' }}"
                                type="text" name="telefono" value="{{ old('tfnofijo', $empresa->tfnofijo) }}" />
                        </div>
                        <div class="py-2">
                            <label for="tfnomovil"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('telefono') ? ' text-red-400' : '' }}">{{ __('Teléfono móbil') }}</label>
                            <input id="telefono"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('telefono') ? ' border-red-400' : '' }}"
                                type="text" name="telefono" value="{{ old('tfnomovil', $empresa->tfnomovil) }}" />
                        </div>
                        <div class="py-2">
                            <label for="persoa_contacto"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('persoa_contacto') ? ' text-red-400' : '' }}">{{ __('Persoa de contacto') }}</label>
                            <input id="persoa_contacto"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('persoa_contacto') ? ' border-red-400' : '' }}"
                                type="text" name="persoa_contacto" value="{{ old('persoa_contacto') }}" />
                        </div>
                        <div class="py-2">
                            <label for="ofertas_contratacion"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('ofertas_contratacion') ? ' text-red-400' : '' }}">{{ __('Ofertas de contratación') }}</label>
                            <input id="ofertas_contratacion"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('ofertas_contratacion') ? ' border-red-400' : '' }}"
                                type="text" name="ofertas_contratacion" value="{{ old('ofertas_contratacion') }}" />
                        </div>
                        <div class="py-2">
                            <label for="ofertas_formacion"
                                class="block font-medium text-sm text-gray-700{{ $errors->has('ofertas_formacion') ? ' text-red-400' : '' }}">{{ __('Ofertas de formación') }}</label>
                            <input id="ofertas_formacion"
                                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('ofertas_formacion') ? ' border-red-400' : '' }}"
                                type="text" name="ofertas_formacion" value="{{ old('ofertas_formacion') }}" />
                        </div>
                        <label for="notas"
                            class="block font-medium text-sm text-gray-700{{ $errors->has('notas') ? ' text-red-400' : '' }}">{{ __('Notas') }}</label>
                        <input id="notas"
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full{{ $errors->has('notas') ? ' border-red-400' : '' }}"
                            type="text" name="notas" value="{{ old('notas') }}" />
                </div>


                {{-- Botón actualizar --}}
                <div class="flex justify-end mt-4">
                    <button type='submit'
                        class='inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                        {{ __('Actualizar') }}
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
