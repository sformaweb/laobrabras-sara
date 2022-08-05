<x-app-layout>
    <x-slot name="header">

        <div class="flex">
            <div class="w-1/2 p-2 text-left">
                <h2 class="font-semibold text-xl pt-4 leading-tight">
                    {{ __('Ofertas de traballo') }}
                </h2>
            </div>
            <div class="w-1/6 p-2 justify-end">
                <div class="p-2 w-22 h-22 flex justify-end items-center">
                    @can('oftraballo create')
                        <div class="d-print-none with-border mt-2 p-0">
                            <a href="{{ route('oftraballo.create') }}" class="text-blue-900 hover:bg-grey-200 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 justify-center">
                                <abbr class="tooltip tooltip--bottom" data-tooltip="&nbsp; Nova oferta">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
       {{-- __('Add Oferta') --}}</abbr></a>

                        </div>
                    @endcan
                </div>

            </div>
            <div class="w-1/3 p-2 text-right">
                <!-- search form -->

                <form method="GET" action="{{ route('oftraballo.index') }}">
                    <div class="py-2 flex">
                        <div class="overflow-hidden flex pl-4">
                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                            <button type='submit' class='ml-2 inline-flex items-center px-2 py-2 bg-tranparent border border-transparent rounded-md font-semibold text-xs  tracking-widest hover:bg-blue-200 active:bg-gray-200 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg> {{--  __('Search')  --}}
                            </button>


                        </div>
                    </div>
                </form>

                <!-- en search form -->
            </div>
        </div>

    </x-slot>
    <div class="py-2">


        <!-- Responsive Classes
        <div class="container mx-auto mt-10">
            <div class="relative bg-white p-10 rounded-lg shadow-lg">-->

                <!-- Colors as Responsive
                <h2 class="text-6xl text-black md:text-red-600">Mobile First</h2>

                <h2 class="text-3xl md:text-4xl lg:text-6xl">Different Sizes Per Device</h2>-->

                <!-- Stacking vs. Side-By-Side
                <div class="md:flex md:space-x-8">
                    <div class="md:w-1/2 p-10 bg-blue-200 mt-10">
                        <abbr class="tooltip tooltip--top" data-tooltip="HyperText Markup Language">HTML (top)</abbr>
                    </div>
                    <div class="md:w-1/2 p-10 bg-blue-200 mt-10">
                        on desktop, we are side by side
                    </div>
                </div>
            </div>
        </div> -->



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 p-t-4 border-b border-gray-200">
                    <div class="flex flex-col mt-8">

                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="ml-5 mb-6 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">



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