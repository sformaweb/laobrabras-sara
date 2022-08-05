<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Axenda') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col mt-8">
                        @can('calendar create')
                            <div class="d-print-none with-border mb-8">
                                <a href="{{ route('calendar.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ __('Add Cita') }}</a>
                            </div>
                        @endcan
                        <div class="py-2">
                            @if(session()->has('message'))
                                <div class="mb-8 text-green-400 font-bold">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="min-w-full border-b border-gray-200 shadow">

                                <!-- search form -->

                                <form method="GET" action="{{ route('calendar.index') }}">
                                    <div class="py-2 flex">
                                        <div class="overflow-hidden flex pl-4">
                                            <input type="search" name="search" value="{{ request()->input('search') }}" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Search">
                                            <button type='submit' class='ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150'>
                                                {{ __('Search') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <!-- end search form -->

                                <table class="border-collapse table-auto w-full text-sm">
                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Name') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Name', 'attribute' => 'name'])
                                        </th>
<th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Email') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Email', 'attribute' => 'email'])
                                        </th>
<th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light text-left">
                                            {{-- __('Mobil') --}}
                                            @include('admin.includes.sort-link', ['label' => 'Móbil', 'attribute' => 'email'])
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
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->name }}</a>
                                                </div>
                                            </td>
<td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->email }}</a>
                                                </div>
                                            </td>
<td class="border-b border-slate-100 dark:border-slate-700 p-1 pl-8 text-slate-500 dark:text-slate-400">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{route('cidadan.show', $cidadan->id)}}" class="no-underline hover:underline text-cyan-600 dark:text-cyan-400">{{ $cidadan->created_at }}</a>
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


    <!doctype html>
    <html>
    <head>
        <title>FullCalndar example</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    </head>
    <body>
    <div class="container">
        <div class="row m-3">
            <h1>FullCalndar example</h1>
            <hr>
            <div class="col-12">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            // pass _token in all ajax
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // initialize calendar in all events
            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: "{{ route('calendar.index') }}",
                displayEventTime: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var event_name = prompt('Event Name:');
                    if (event_name) {
                        var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
                        $.ajax({
                            url: "{{ route('calendar.create') }}",
                            data: {
                                title: event_name,
                                start: start,
                                end: end
                            },
                            type: 'post',
                            success: function (data) {
                                iziToast.success({
                                    position: 'topRight',
                                    message: 'Event created successfully.',
                                });

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: event_name,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                }, true);
                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD HH:mm:ss");

                    $.ajax({
                        url: "{{ route('calendar.edit') }}",
                        data: {
                            title: event.event_name,
                            start: start,
                            end: end,
                            id: event.id,
                        },
                        type: "POST",
                        success: function (response) {
                            iziToast.success({
                                position: 'topRight',
                                message: 'Event updated successfully.',
                            });
                        }
                    });
                },
                eventClick: function (event) {
                    var eventDelete = confirm('Are you sure to remove event?');
                    if (eventDelete) {
                        $.ajax({
                            type: "post",
                            url: "{{ route('calendar.destroy') }}",
                            data: {
                                id: event.id,
                                _method: 'delete',
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                iziToast.success({
                                    position: 'topRight',
                                    message: 'Event removed successfully.',
                                });
                            }
                        });
                    }
                }
            });
        });
    </script>
    </body>
    </html>


</x-app-layout>