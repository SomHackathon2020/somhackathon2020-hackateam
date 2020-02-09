@extends('layouts.app')
@section('content')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

<h3>Calendar</h3>

<div id='calendar'></div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($actividades as $actividad)
                {
                    title : '{{ $actividad->nombre }}',
                    start : '{{ $actividad->inicio }}',
                    end : '{{ $actividad->fin }}'
                    url : '{{ route('activitats.edit', $actividad->id) }}'
                },
                @endforeach
            ]
        })
    });
</script>
@endsection
