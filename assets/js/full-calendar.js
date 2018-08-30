$(document).ready(function() {
    
    var calendar = $('#calendar').fullCalendar({
        // theme: 'bootstrap4',
        defaultView: 'month',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true,
        height: 500,
        events: baseUrl('Productions/productionsCalendarGet'),
        
    });

    calendar.on('dayClick', function(date, jsEvent, view) {
        console.log('clicked on ' + date.format());
    });
});