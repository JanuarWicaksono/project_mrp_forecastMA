<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Jadwal Produksi <small>Description text here...</small>
                        </h2>
                        <!-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </div>
                    <div class="body">
                        <div id="calendar">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<script src="<?= base_url('assets/js/full-calendar.js') ?>"></script>
<script>
// $(document).ready(function() {
    
//     var calendar = $('#calendar').fullCalendar({
//         // theme: 'bootstrap4',
//         defaultView: 'month',
//         header: {
//             left: 'prev,next today',
//             center: 'title',
//             right: 'month,agendaWeek,agendaDay,listWeek'
//         },
//         defaultDate: new Date(),
//         navLinks: true, // can click day/week names to navigate views
//         editable: true,
//         eventLimit: true,
//         height: 500,
//         events: baseUrl('Productions/productionsCalendarGet'),
        
//     });

//     calendar.on('dayClick', function(date, jsEvent, view) {
//         console.log('clicked on ' + date.format());
//     });
// });
</script>
