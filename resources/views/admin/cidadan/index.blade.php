<x-app-layout>
    <x-slot name="header">

                <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
                    {{ __('Cidadans') }}
        </h2>
</div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    @can('cidadan create')
                            <div class="d-print-none with-border mt-2 p-0">
                                <a href="{{ route('cidadan.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
<abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; + Cidadan">
<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
{{-- __('Add Cidadan') --}}</abbr></a>
                            </div>
                        @endcan
                </div>

            </div>
            <div class="w-1/3 p-2 text-right">
                            <!-- search form -->

                                <form method="GET" action="{{ route('cidadan.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                            <button type='submit' class='ml-2 inline-flex items-center px-2 py-2 bg-tranparent border border-transparent rounded-md font-semibold text-xs  tracking-widest hover:bg-blue-200 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> {{--  __('Search')  --}}
                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- end search form -->
            </div>
        </div>

    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-8">
                        {{-- @can('cidadan create')
                            <div class="d-print-none with-border mb-8 has-tooltip">
                                <a href="{{ route('cidadan.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nov@ cidadan</span>
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
{{ __('Add Cidadan') }}
</a>
                            </div>
                        @endcan--}}
                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="mb-8 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                    

                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Nome', 'attribute' => 'nome'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Email') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Apelido', 'attribute' => 'apel1'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Email') --}}
                                            @include('admin.includes.sort-link', ['label' => 'NIF', 'attribute' => 'nif'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Mobil') --}}
                                            @include('admin.includes.sort-link', ['label' => 'CP', 'attribute' => 'codpostal'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Email') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Email', 'attribute' => 'email'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Mobil') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Móbil', 'attribute' => 'tfnomovil'])
                                        </th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Mobil') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Activo', 'attribute' => 'updated_at'])
                                        </th>
                                        @canany(['cidadan edit', 'cidadan delete'])
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-slate-800">
                                    @foreach($cidadans as $cidadan)
                                        <tr>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->nome }}</a>
                                                </div>
                                            </td>
<td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->apel1 }}</a>
                                                </div>
                                            </td>
<td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->nif }}</a>
                                                </div>
                                            </td>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->codpostal }}</a>
                                                </div>
                                            </td>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->email }}</a>
                                                </div>
                                            </td>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->tel1 }}</a>
                                                </div>
                                            </td>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->gruposbusca }}</a>
                                                </div>
                                            </td>
                                            @canany(['cidadan edit', 'cidadan delete'])
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">


                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">
                                                        <!-- compoñente tooltip -->
                                                        <div class="relative flex inline-flex flex-col items-center group">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                            <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                                <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg">{{__('View') }}</span>
                                                                <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                            </div>
                                                        </div>
                                                        <!-- end tooltip -->
                                                    </a>




                                                    <form action="{{ route('cidadan.destroy', $cidadan->id) }}" method="POST" class="flex inline-flex">
                                                        @can('permission edit')
                                                            <a href="{{route('cidadan.edit', $cidadan->id)}}" class="px-2 py-2 text-cyan-600">
                                                                <!-- compoñente tooltip -->
                                                                <div class="relative flex inline-flex flex-col items-center group">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                    </svg> {{-- __('Edit') --}}
                                                                    <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                                        <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Edit') }}</span>
                                                                        <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                    </div>
                                                                </div>
                                                                <!-- end tooltip -->
                                                            </a>
                                                        @endcan
                                                        @can('cidadan delete')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-2 py-2">
                                                                <!-- compoñente tooltip -->
                                                                <div class="relative flex inline-flex flex-col items-center group text-red-600">
                                                                {{-- __('Delete') --}}
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                                    <path fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" clip-rule="evenodd" />
                                                                </svg>
                                                                <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                                                                    <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Delete') }}</span>
                                                                    <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
                                                                </div>
                                                                </div>
                                                            </button>
                                                        @endcan
                                                    </form>
                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="py-8">
                                {{-- $cidadans->links() --}}
                                {{ $cidadans->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>