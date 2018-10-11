<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
    </div>
    <div class="row clearfix">

        <div class="col-md-6" id="tot-sales">
            <div class="info-box-2 bg-teal hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">attach_money</i>
                </div>
                <div class="content">
                    <div class="text">PENJUALAN</div>
                    <div class="number"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="tot-qty">
            <div class="info-box-2 bg-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">business_center</i>
                </div>
                <div class="content">
                    <div class="text">PRODUCT TERJUAL</div>
                    <div class="number"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Grafik Penjualan <small>Grafik Penjualan 11 Bulan Terakhir...</small>
                    </h2>
                </div>
                <div class="body">
                    
                    <canvas id="line_chart" height="80vh"></canvas>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Jadwal Produksi <small>Description text here...</small>
                    </h2>
                </div>
                <div class="body">
                    <div id="calendar">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script src="<?= base_url('assets/js/full-calendar.js') ?>" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){

    function getChartJs(type, response) {
        var config = null;

        
        var dataLable = [];
        var dataCount = [];
        for (var i = 0; i < response.length; i++) {
            dataLable[i] = response[i].date;
            dataCount[i] = response[i].count;
        }

        if (type === 'line') {
            config = {
                type: 'line',
                data: {
                    labels: dataLable,
                    datasets: [{
                            label: 'Product Terjual',
                            data: dataCount,
                            borderColor: 'rgba(0, 188, 212, 0.75)',
                            backgroundColor: 'rgba(0, 188, 212, 0.3)',
                            pointBorderColor: 'rgba(0, 188, 212, 0)',
                            pointBackgroundColor: 'rgba(0, 188, 212, 0.9)',
                            pointBorderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    legend: false
                }
            }
        }

        return config;
    }

    function getSalesForChart(){
        $.ajax({
            type: 'ajax',
            method: 'get',
            url: baseUrl('Dashboard/salesForChartGet'),
            async: false,
            dataType: 'json'
        }).done(function(response) {
            // Push Data to Chartjs
            new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line', response));
        }).fail(function() {
            swal('Gagal', 'ERROR', 'error');
        });
    }

    function transactionsTotalSales(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url("Transactions/transactionsTotalSales"); ?>',
            async: false,
            dataType: 'json'
        }).done(function(response){
            $('#tot-sales .content .number').append('Rp.'+convertToRupiah(response.total_price));
        }).fail(function(){
            swal('Failed', 'Error', 'error');
        });
    }

    function transactionsTotalQty(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url("Dashboard/transactionsTotalQty"); ?>',
            async: false,
            dataType: 'json'
        }).done(function(response){
            $('#tot-qty .content .number').append(response+' Unit');
        }).fail(function(){
            swal('Failed', 'Error', 'error');
        });
    }


    transactionsTotalSales();
    transactionsTotalQty();
    getSalesForChart();
    
});
</script>
