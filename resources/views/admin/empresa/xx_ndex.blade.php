<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empresas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="flex justify-end max-w-7xl pt-4 mx-auto">
                    <div class="w-1/2 h-12 p-6">
                        <div class="flex flex-col">
                        @can('empresa create')
                            <div class="d-print-none with-border mb-8 has-tooltip">
                                <a href="{{ route('empresa.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
{{-- __('Add Empresa') --}}</a>
                            </div>
                        @endcan
                        </div>
                    </div>
                    <div class="w-1/2 h-12 p-6">
                        <div class="flex flex-col">
                        <!-- search form -->
                        <form method="GET" action="{{ route('empresa.index') }}">
                            <div class="flex items-end">
                                <div class="overflow-hidden flex pl-4">
                                    <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                    <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                        {{ __('Search') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- en search form -->
                        </div>

                    </div>
                </div>

                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-8">
                       {{-- @can('empresa create')
                            <div class="d-print-none with-border mb-8">
                                <a href="{{ route('empresa.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-5'>Nov@ empresa</span>
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
{{-- __('Add Empresa') --}}</a>
                            </div>
                        @endcan --}}
                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="mb-8 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                {{--   <!-- search form -->

                                   <form method="GET" action="{{ route('empresa.index') }}">
                                       <div class="py-2 flex">
                                           <div class="overflow-hidden flex pl-4">
                                               <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                               <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                                   {{ __('Search') }}
                                               </button>
                                           </div>
                                       </div>
                                   </form>

                                   <!-- en search form --> --}}

                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                                        </th>
                                        @canany(['empresa edit', 'empresa delete'])
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-slate-800">
                                    @foreach($empresas as $empresa)
                                        <tr>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('empresa.show', $empresa->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $empresa->name }}</a>
                                                </div>
                                            </td>
                                            @canany(['empresa edit', 'empresa delete'])
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                    <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST">
                                                        @can('empresa edit')
                                                            <a href="{{route('empresa.edit', $empresa->id)}}" class="px-4 py-2 text-white mr-4 bg-blue-600">
                                                                {{ __('Edit') }}
                                                            </a>
                                                        @endcan
                                                        @can('empresa delete')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-4 py-2 text-white bg-red-600" onclick="deleteConfirm(empresa)">
                                                                {{ __('Delete') }}
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
                                {{-- $empresas->links() --}}
                                {{ $empresas->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>