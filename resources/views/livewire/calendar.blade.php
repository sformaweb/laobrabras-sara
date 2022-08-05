<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div>
        <div id='calendar-container' wire:ignore>
            <div id='calendar'></div>
        </div>
    </div>

    @push('scripts')
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>

        <script>
            document.addEventListener('livewire:load', function() {
                var Calendar = FullCalendar.Calendar;
                var Draggable = FullCalendar.Draggable;
                var calendarEl = document.getElementById('calendar');
                var checkbox = document.getElementById('drop-remove');

            var containerEl = document.getElementById('external-events'); // engadido

                var data =   @this.events;
                var calendar = new Calendar(calendarEl, {
/* engadido
 slotMinTime: '09:00:00',
                slotMaxTime: '22:00:00',
                slotDuration: '00:15:00',
                slotLabelInterval: '00:15:00',
                editable: true,
                selectable: true,
                eventDurationEditable: true,
                displayEventTime: true,
                droppable: true, // this allows things to be dropped onto the calendar
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay,listWeek'
                },

 fin engadido */
                    events: JSON.parse(data),
                    dateClick(info)  {
                        var title = prompt('Enter Event Title');
                        var date = new Date(info.dateStr + 'T00:00:00');
                        if(title != null && title != ''){
                            calendar.addEvent({
                                title: title,
                                start: date,
                                // allDay: true
                                end: end,
                            });
                            var eventAdd = {title: title,start: date};
                        @this.addevent(eventAdd);
                            alert('Great. Now, update database...');
                        }else{
                            alert('Event Title Is Required');
                        }
                    },
                    editable: true,
                    selectable: true,
                    displayEventTime: false,
                    // settings
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,basicWeek,basicDay'
                    },
                    navLinks: true, // can click day/week names to navigate views
                    eventLimit: true, // allow "more" link when too many events
                    // end settings
                    droppable: true, // this allows things to be dropped onto the calendar
                    drop: function(info) {
                        // is the "remove after drop" checkbox checked?
                        if (checkbox.checked) {
                            // if so, remove the element from the "Draggable Events" list
                            info.draggedEl.parentNode.removeChild(info.draggedEl);
                        }
                    },
                    eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
                    loading: function(isLoading) {
                        if (!isLoading) {
                            // Reset custom events
                            this.getEvents().forEach(function(e){
                                if (e.source === null) {
                                    e.remove();
                                }
                            });
                        }
                    }
                });
                calendar.render();
            @this.on(`refreshCalendar`, () => {
                calendar.refetchEvents()
            });
            });
        </script>
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet'>
    @endpush
</div>
