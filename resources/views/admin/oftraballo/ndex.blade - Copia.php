<x-app-layout>
    <x-slot name="header">
        <div class="flow-root">
            <div class="float-left"><h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Ofertas de traballo') }}
                </h2></div>
            <div class="float-right">
                @can('oftraballo create')
                    <div class="d-print-none with-border mb-8 has-tooltip">
                        <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nova oferta</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            {{ __('Add Oferta') }}</a>


                @endcan

                <!-- search form -->

                    <form method="GET" action="{{ route('oftraballo.index') }}">
                        <div class="py-2 flex">
                            <div class="overflow-hidden flex pl-4">
                                <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- en search form -->
            </div>
        </div>
    </x-slot>

    <div class="py-2">

      {{--   <div class="flex flex-row gap-4 sm:gap-8 lg:gap-10 justify-end">
            <div class="basis-1/2">
                @can('oftraballo create')
                    <div class="d-print-none with-border mb-8 has-tooltip">
                        <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nova oferta</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            {{ __('Add Oferta') }}</a>

                    </div>
                @endcan
            </div>

            <div class="basis-1/2">
                <!-- search form -->

                <form method="GET" action="{{ route('oftraballo.index') }}">
                    <div class="py-2 flex">
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
        </div> --}}
        <div class="flow-root">
            <div class="float-left">Welcome to GeeksforGeeks</div>
            <div class="float-right">
            <div class="basis-1/2">
                @can('oftraballo create')
                    <div class="d-print-none with-border mb-8 has-tooltip">
                        <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nova oferta</span>
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            {{ __('Add Oferta') }}</a>

                    </div>
                @endcan
            </div>

            <div class="basis-1/2">
                <!-- search form -->

                <form method="GET" action="{{ route('oftraballo.index') }}">
                    <div class="py-2 flex">
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
            </p>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="flex justify-end">
                <div class="ml-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-left">
                        {{ __('Ofertas de traballo') }}
                    </h2>
                </div>
                <div> @can('oftraballo create')
                        <div class="d-print-none with-border mb-8 has-tooltip">
                            <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nova oferta</span>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                {{-- __('Add Oferta') --}}</a>

                        </div>
                    @endcan</div>
                <div>
                    <!-- search form -->

                    <form method="GET" action="{{ route('oftraballo.index') }}">
                        <div class="py-2 flex">
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


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-8">
                       {{-- @can('oftraballo create')
                            <div class="d-print-none with-border mb-8 has-tooltip">
                                <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
<span class='tooltip rounded shadow-lg p-1 bg-gray-100 text-red-500 -mt-8'>Nova oferta</span>
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
{{ __('Add Oferta') }}</a>
       
                     </div>
                        @endcan  --}}
                    <div class="py-2">
                            @if(session()->has('message'))
                                <div class="mb-8 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                <!-- search form -->

                                <form method="GET" action="{{ route('oftraballo.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                            <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                                {{ __('Search') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- en search form -->

                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                                        </th>
                                        @canany(['oftraballo edit', 'oftraballo delete'])
                                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                                {{ __('Actions') }}
                                            </th>
                                        @endcanany
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white dark:bg-slate-800">
                                    @foreach($oftraballos as $oftraballo)
                                        <tr>
                                            <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('oftraballo.show', $oftraballo->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $oftraballo->name }}</a>
                                                </div>
                                            </td>
                                            @canany(['oftraballo edit', 'oftraballo delete'])
                                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                                    <form action="{{ route('oftraballo.destroy', $oftraballo->id) }}" method="POST">
                                                        @can('oftraballo edit')
                                                            <a href="{{route('oftraballo.edit', $oftraballo->id)}}" class="px-4 py-2 text-white mr-4 bg-blue-600">
                                                                {{ __('Edit') }}
                                                            </a>
                                                        @endcan
                                                        @can('oftraballo delete')
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="px-4 py-2 text-white bg-red-600" onclick="deleteConfirm(oftraballo)">
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
                                {{-- $oftraballos->links() --}}
                                {{ $oftraballos->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>