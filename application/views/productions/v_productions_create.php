<section class="content">
<div class="container-fluid">
    
    <div class="row clearfix">

        <div class="col-md-5">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Produksi <small>Tambah Produksi</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
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
                    </ul>
                </div>
                <div class="body table-responsive">
                    <form action="<?php echo base_url('Productions/productionsCreate') ?>" id="productions-form">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <b>Pilih Produk</b>
                                <select id="product-input" class="form-control show-tick" name="products-id" data-live-search="true" required>
                                    <option value="">-- Pilih Produk --</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Jumlah Produksi</b>
                                    <input type="number" class="form-control" name="num-prod" required placeholder="Jumlah Produksi">
                                </div>
                            </div>
                            <button type="button" id="btn-forecast-add" class="btn btn-xs btn-info btn-block waves-effect" onclick="checkInputForecast(response)"><i class="material-icons">show_chart</i><span>Masukan Peramalan / Forecast</span></button>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float" disabled>
                                <div class="">
                                    <b>Status</b>
                                    <div class="col-md-12">
                                        <input name="status" type="radio" id="active" value="finished" />
                                        <label for="active">Selesai</label>
                                        <input name="status" type="radio" id="nonactive" value="unfinished" checked/>
                                        <label for="nonactive">Belum Selesai</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <b>Tanggal Mulai</b>
                                    <input type="text" class="datepicker form-control" id="transaction-date" name="started-at" placeholder="Please choose a date...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <b>Tanggal Selesai</b>
                                    <input type="text" class="datepicker form-control" id="transaction-date" name="finished-at" placeholder="Please choose a date...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Catatan</b>
                                    <textarea name="note" cols="30" rows="5" class="form-control no-resize" required placeholder="Catatan"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="button" id="btn-prod-save" class="btn btn-block btn-lg btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan Produksi</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card card-forecast">
                <div class="header">
                    <h2>
                        Peramalan / <i>Forecast</i> <small>Peramalan atau <i>Forecast</i> menggunakan metode Moving Average</small>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);" class=" waves-effect waves-block">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#home_with_icon_title" data-toggle="tab">
                                <i class="material-icons">insert_chart</i> Chart
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#profile_with_icon_title" data-toggle="tab">
                                <i class="material-icons">view_list</i> Table
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                            <canvas id="line_chart" height="200"></canvas>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr id="forecast-data-mounth" class="bg-blue">
                                            

                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr id="forecast-data-count">
                                            

                                        </tr>
                                        <tr id="forecast-data">
                                            

                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        

        

    </div>

</div>

</section>

<script>
$(document).ready(function(){

    function productsGet(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url("Products/productsGet"); ?>',
            async: false,
            dataType: 'json'
        }).done(function(response){
            var html = '';
            for (var i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].product_id+'" data-subtext="'+response[i].status+'" data-price="'+response[i].price+'">'+response[i].name+'</option>';
            }
            $('#product-input').append(html);
            $('#product-input').selectpicker('render');
        }).fail(function(){
            swal('Failed', 'Error', 'error');
        });
    }

    function productionsSave(url, data){
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: false,
            dataType: 'json'
        }).done(function(response) {
            swal("Tersimpan", "Data Productions Telah Tersimpan ! ", "success");
            location.reload();
        }).fail(function() {
            swal('Gagal', 'ERROR', 'error');
        }); 
    }

    function getChartJs(type, response) {
        var config = null;
        var dataLable = [];
        var dataCount = [];
        for(var i = 0; i < response.data_each_mounth.length ;i++){
            dataLable[i] = response.data_each_mounth[i].date;
            dataCount[i] = response.data_each_mounth[i].count;
        }
        dataLable.push(response.now_mounth);
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
                    }, {
                            label: "My Second dataset",
                            data: [null, null, null, null, null, null, null, null, null, null, null, null, response.forecast_cma],
                            borderColor: 'rgba(233, 30, 99, 0.75)',
                            backgroundColor: 'rgba(233, 30, 99, 0.3)',
                            pointBorderColor: 'rgba(233, 30, 99, 0)',
                            pointBackgroundColor: 'rgba(233, 30, 99, 0.9)',
                            pointBorderWidth: 100
                        }]
                },
                options: {
                    responsive: true,
                    legend: false
                }
            }
        }
        return config;
    }


    $('#product-input').change(function(){
        $('#forecast-data-mounth').empty();
        $('#forecast-data-count').empty();
        $('#forecast-data').empty();

        var $loading = $('.card-forecast').waitMe({
            effect: 'rotation',
            text: 'Loading...',
            bg: 'rgba(255,255,255,0.90)',
            color: '#555'
        });
        
        setTimeout(function () {            
            //Request productionsForecast
            var id = $('#product-input').val();
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("Productions/productionsForecast"); ?>',
                data: {product_id: id},
                async: false,
                dataType: 'json'
            }).done(function(response){
                
                //Push Data to Table Forecast
                var tableMounth = '<th>Bulan (t)</th>';
                var tableCount = '<th class="bg-blue">Jumlah Penjualan</th>';
                var tableForecast = '<th class="bg-blue">Hasil Peramalan<br> ('+response.now_mounth+')</th>';
                
                for(var i = 0; i < response.data_each_mounth.length ;i++){
                    tableMounth += '<th>'+response.data_each_mounth[i].date+'</th>';
                } 
                $('#forecast-data-mounth').append(tableMounth);

                for(var i = 0; i < response.data_each_mounth.length ;i++){
                    tableCount += '<td>'+response.data_each_mounth[i].count+'</td>';
                } 
                $('#forecast-data-count').append(tableCount);
                
                tableForecast += '<td>'+response.forecast_cma+'</td>';
                $('#forecast-data').append(tableForecast);

                // Push Data to Chartjs
                new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line', response));
                
                setTimeout(function(){
                    $loading.waitMe('hide');

                    $('#btn-forecast-add').click(function(){
                        if(response.forecast_cma == ''){
                            swal('Failed', 'Pilih Produk Terlebih Dahulu Untuk Melihat Peramalan', 'error');
                        }else{
                            $('#productions-form [name="num-prod"]').val(response.forecast_cma);
                        }
                    });
                }, 256);

                

            }).fail(function(){
                swal('Failed', 'Error', 'error');
            });

        }, 1024);
        
    });

    $('#btn-prod-save').click(function(){
        var url = $('#productions-form').attr('action');
        var data = $('#productions-form').serialize();

        swal({
            title: "Data Produksi yang dimasukan sudah benar?",
            text: 'Pilih "OK" jika sudah benar',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                productionsSave(url, data);
            }, 1000);
        });
    });

    productsGet();
});
</script>