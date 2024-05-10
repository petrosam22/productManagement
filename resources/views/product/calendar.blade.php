 @extends('layouts.dashboard');
<link rel="stylesheet" href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}">


@section('content');

<!-- MAIN-CONTENT -->
<div class="content">
    <div class="main-content">


        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3
                    class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                    Full Calendar</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[0.813rem] ps-[0.5rem]">
                    <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                        href="javascript:void(0);">
                        Apps
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                    aria-current="page">
                    Full Calendar
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="xl:col-span-3 col-span-12">
                <div class="box custom-box">
                    <div class="py-4 px-[1.25rem] border-b dark:border-defaultborder/10  !grid">
                        <a href="{{ route('event.createForm') }}" class="ti-btn ti-btn-primary"
                            data-hs-overlay="#create-task">
                            <i class="ri-add-line align-middle me-1 font-semibold inline-block"></i>Create New Event</a>
                    </div>



                    <div class="box-body !p-0">
                        <div id="external-events" class="border-b dark:border-defaultborder/10 p-4">
                            @foreach ($events as $event)

                            <div
                                class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event !bg-primary border !border-primary">
                                <div class="fc-event-main">{{ $event->name }}</div>
                            </div>
                            @endforeach








                        </div>
                        <div class="p-4 border-b dark:border-defaultborder/10 ">
                            <div class="flex items-center mb-4 justify-between">
                                <h6 class="font-semibold">
                                    Activity :
                                </h6>
                                <button type="button"
                                    class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary btn-wave">View All</button>
                            </div>
                            <ul class="	 list-none mb-0 fullcalendar-events-activity" id="full-calendar-activity">


                                @foreach ($events as $event)

                                <li>
                                    <div class="flex items-center justify-between flex-wrap">
                                        <div class="mb-1 font-extrabold">
                                            {{ $event->date->format('D, M d, Y')}}

                                        </div>
                                    </div>
                                    <div class="badge  text-white mb-1" style="background:{{ $event->status->color }};">
                                    
                                    
                                    {{ $event->status->name }} </div>
                                    <p class="mb-0 text-muted text-[0.75rem]">
                                        {{ $event->name }}
                                    </p>
                                    <p class="mb-0 text-muted text-[0.75rem]">
                                        {{ $event->description }}
                                    </p>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="p-4">
                            <img src="https://php.spruko.com/tailwind/ynex/ynex/assets/images/media/media-83.svg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-9 col-span-12">
                <div class="box custom-box">
                    <div class="box-header">
                        <div class="box-title">Full Calendar</div>
                    </div>
                    <div class="box-body">
                        <div id="calendar2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->


    </div>
</div>

<!-- END MAIN-CONTENT -->
<!-- END MAIN-CONTENT -->
   <script src="{{asset('assets/libs/fullcalendar/main.min.js')}}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>


<script>
    var events = {!! $events->toJson() !!};


    // Iterate over the events and extract year, month, and day
    var extractedEvents = events.map(function (event) {


         var eventDate = new Date(event.date); // Assuming 'date' is the field name in your event table

        var year = eventDate.getFullYear(); // Extract the year (e.g., 2024)
        var month = String(eventDate.getMonth() + 1).padStart(2, '0'); // Extract the month (e.g., 04)
        var day = String(eventDate.getDate()).padStart(2, '0'); // Extract the day (e.g., 10)

        return {
            id: event.id,
            start: year + '-' + month + '-' + day + 'T' + event.from,
            end: year + '-' + month + '-' + day + 'T' + event.to,
             title: event.name,
            backgroundColor: '#845adf',
            borderColor:event.status.color,
            description: 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary'
        };
    });

       (function () {
        "use strict";
        //_____Calendar Events Initialization


        // sample calendar events data
        var sptCalendarEvents = {
                 id: 7,
                 events: extractedEvents

                };

        //________ FullCalendar
        var containerEl = document.getElementById('external-events');
        new FullCalendar.Draggable(containerEl, {
          itemSelector: '.fc-event',
          eventData: function (eventEl) {
            return {
              title: eventEl.innerText.trim(),
              title: eventEl.innerText,
              className: eventEl.className + ' overflow-hidden '
            };
          }
        });

        var calendarEl = document.getElementById('calendar2');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
          },
          defaultView: 'month',
          navLinks: true, // can click day/week names to navigate views
          businessHours: true, // display business hours
          editable: true,
          selectable: true,
          selectMirror: true,
          droppable: true, // this allows things to be dropped onto the calendar

          select: function (arg) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.addEvent({
                title: title,
                start: arg.start,
                end: arg.end,
                allDay: false // Set allDay property to false for specific time events
              });
            }
            calendar.unselect();
          },
          eventClick: function (arg) {
            if (confirm('Are you sure you want to delete this event?')) {
              arg.event.remove();
            }
          },

          editable: true,
          dayMaxEvents: false, // allow all events to be displayed without a "more" link
          eventSources: [sptCalendarEvents]
        });

        calendar.render();

        // for activity scroll
        var myElement1 = document.getElementById('full-calendar-activity');
        new SimpleBar(myElement1, { autoHide: true });
      })();

</script>

@endsection
