<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">

            <div class="col-md-5">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Produksi <small>Tambah Produksi</small>
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
                    <div class="body table-responsive">
                        <form action="<?php echo base_url('Productions/productionsCreate') ?>" id="productions-form">
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <b>Pilih Produk</b>
                                    <select id="product-input" class="form-control show-tick" name="product-input" data-live-search="true" required>
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
                                <button type="button" class="btn btn-xs bg-red waves-effect btn-forecast-add" data="simple">Simple</button>
                                <button type="button" class="btn btn-xs bg-teal waves-effect btn-forecast-add" data="cumulative">Cumulative</button>
                                <button type="button" class="btn btn-xs bg-orange waves-effect btn-forecast-add" data="weight">Weight</button>
                                <button type="button" class="btn btn-xs bg-brown waves-effect btn-forecast-add" data="exponential">Exponential</button>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <b>Tanggal Mulai</b>
                                        <input type="text" class="datepicker-min-started form-control" id="production-date" name="started-at" placeholder="Please choose a date...">
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
                                <button type="button" id="btn-prod-save" class="btn btn-block btn-lg btn-primary waves-effect"><i class="material-icons">save</i><span>Lanjut Produksi</span></button>
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
                        <!-- <ul class="nav nav-tabs" role="tablist">
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
                        </ul> -->
                        <canvas id="line_chart"></canvas><br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr id="forecast-data-mounth">
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="forecast-data-count">
                                        

                                    </tr>
                                    <tr id="forecast-label">
                                    
                                    </tr>
                                    <tr id="forecast-sma">
                                        

                                    </tr>
                                    <tr id="forecast-cma">
                                        

                                    </tr>
                                    <tr id="forecast-wma">
                                        

                                    </tr>
                                    <tr id="forecast-ema">
                                        

                                    </tr>
                                </tbody>
                                <tfoot>
                                    
                                </tfoot>
                            </table>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
        </div>

    </div>

</section>

<div class="modal fade" id="modal-production-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Produksi Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body">
                        <div class="alert alert-warning">
                            <strong>Perhatian!</strong> penambahan produksi hanya dilakukan satu kali dalam sebulan,
                            jika terdapat penambahan produksi maka akan mengikuti tanggal yang sudah ada
                        </div>
                        <div class="table responsive">
                            <table class="table table-bordered" id="table-production-detail">
                                <tr>
                                    <th class="col-md-2" colspan="1">Produk :</th>
                                    <td class="col-md-4 product" colspan="3"></td>
                                </tr>
                                <tr>
                                    <th class="col-md-2">Jumlah Produksi :</th>
                                    <td class="col-md-4 num-product" colspan="3"></td>
                                </tr>
                                <tr>
                                    <th class="col-md-2">Status :</th>
                                    <td class="col-md-4 status" colspan="3"></td>
                                </tr>
                                <tr>
                                    <th class="col-md-2">Tanggal Mulai :</th>
                                    <td class="col-md-4 started-at"></td>
                                    <th class="col-md-2">Tanggal Selesai :</th>
                                    <td class="col-md-4 finished-at"></td>
                                </tr>
                                <tr>
                                    <th class="col-md-2">Catatan :</th>
                                    <td class="col-md-4 note" colspan="3"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table responsive">                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bahan Baku</th>
                                        <th>Stok</th>
                                        <th>Stok Tipe</th>
                                        <th>Kebutuhan </th>
                                        <th>Sisa</th>
                                    </tr>
                                </thead>
                                <tbody id="productions-materials">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">
                                            <button type="button" id="btn-purchase-form" class="btn btn-info btn-xs btn-block waves-effect" >
                                                <i class="material-icons">save</i><span>Pesan Bahan Baku</span>
                                            </button>
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-save-productions" class="btn btn-primary waves-effect" >
                    <i class="material-icons">save</i><span>Simpan</span>
                </button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    <i class="material-icons">close</i><span>Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

function productsGet() {
    $.ajax({
        type: 'ajax',
        url: baseUrl('Products/productsGet'),
        async: false,
        dataType: 'json'
    }).done(function(response) {
        var html = '';
        for (var i = 0; i < response.length; i++) {
            html += '<option value="' + response[i].product_id + '" data-subtext="' + response[i].status + '" data-price="' + response[i].price + '">' + response[i].name + '</option>';
        }
        $('#product-input').append(html);
        $('#product-input').selectpicker('render');
    }).fail(function() {
        swal('Failed', 'Error', 'error');
    });
}

function productionsSave(url, data) {
    $.ajax({
        type: 'ajax',
        method: 'post',
        url: url,
        data: data, 
        async: false,
        dataType: 'json'
    }).done(function(response) {
        swal("Tersimpan", "Data Productions Telah Tersimpan ! ", "success");
        
        window.location.href = "<?php echo base_url('Productions/ProductionsView') ?>";
    }).fail(function() {
        swal('Gagal', 'ERROR', 'error');
    });
}

function pushDetailProductions(response){
    $('#table-production-detail .product').html(response.product_name);
    $('#table-production-detail .num-product').html(response.num_productions);
    if (response.status == 'finished') {
        $('#table-production-detail .status').html('<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Selesai</button>');
    } else {
        $('#table-production-detail .status').html('<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Belum Selesai</button>');
    }
    $('#table-production-detail .started-at').html(response.started_at);
    $('#table-production-detail .finished-at').html(response.finished_at);
    $('#table-production-detail .note').html(response.note);

    var tBodyprodsMat = '';
    for (var i = 0; i < response.materials.length; i++) {
        tBodyprodsMat += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td>' + response.materials[i].material_data.name + '</td>' +
            '<td>' + response.materials[i].material_data.stock + '</td>' +
            '<td>' + response.materials[i].material_data.stock_type + '</td>' +
            '<td>' + response.materials[i].total_num_comb + '</td>' +
            '<td>' + response.materials[i].cal_total_min_stock + '</td>' +
            '</tr>';
    }
    $('#productions-materials').html(tBodyprodsMat);

    $('#modal-production-detail').modal('show');

    $('#btn-save-productions').click(function() {
        var url = $('#productions-form').attr('action');
        var data = $('#productions-form').serialize('action');
        // console.log(url, data);
        swal({
            title: "Data Produksi Yang Dimasukan Sudah Benar?",
            text: 'Pilih "OK" untuk menyimpan',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                productionsSave(url, data)
            }, 1000);
        });
    });
}

function getChartJs(type, response) {
    var config = null;
    var dataLable = [];
    var dataCount = [];
    for (var i = 0; i < response.data_each_mounth.length; i++) {
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
                    },
                    {
                        label: "Peramalan / Forecast Simple Moving Average",
                        data: [null, null, null, null, null, null, null, null, null, null, null, null, response.forecast_sma],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: '#F44336',
                        pointBorderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 5
                    },
                    {
                        label: "Peramalan / Forecast Cumulative Moving Average",
                        data: [null, null, null, null, null, null, null, null, null, null, null, null, response.forecast_cma],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: '#009688',
                        pointBorderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 5
                    },
                    {
                        label: "Peramalan / Forecast Weight Moving Average",
                        data: [null, null, null, null, null, null, null, null, null, null, null, null, response.forecast_wma],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: '#FFC107',
                        pointBorderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 5
                    },
                    {
                        label: "Peramalan / Forecast Exponential Moving Average",
                        data: [null, null, null, null, null, null, null, null, null, null, null, null, response.forecast_ema],
                        borderColor: 'rgba(233, 30, 99, 0.75)',
                        backgroundColor: 'rgba(233, 30, 99, 0.3)',
                        pointBorderColor: 'rgba(233, 30, 99, 0)',
                        pointBackgroundColor: '#795548',
                        pointBorderWidth: 1,
                        pointRadius: 3,
                        pointHoverRadius: 5
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


$('#product-input').change(function() {
    $('#forecast-data-mounth').empty();
    $('#forecast-data-count').empty();
    $('#forecast-label').empty();
    $('#forecast-sma').empty();
    $('#forecast-cma').empty();
    $('#forecast-wma').empty();
    $('#forecast-ema').empty();


    var $loading = $('.card-forecast').waitMe({
        effect: 'rotation',
        text: 'Loading...',
        bg: 'rgba(255,255,255,0.90)',
        color: '#555'
    });

    setTimeout(function() {
        //Request productionsForecast
        var id = $('#product-input').val();
        $.ajax({
            type: 'ajax',
            method: 'get',
            url: '<?php echo base_url("Productions/productionsForecast"); ?>',
            data: {
                product_id: id
            },
            async: false,
            dataType: 'json'
        }).done(function(response) {

            //Push Data to Table Forecast
            var tableMounth = '<th class="bg-blue">Bulan (t)</th>';
            var tableCount = '<th class="bg-blue">Jumlah Penjualan</th>';
            var tableForecastLabel = '<th class="bg-blue" colspan="7">Hasil Peramalan/Forecast Moving Average ' + response.now_mounth + '</th>';
            var tableForecastSma = '<th class="bg-red" colspan="5">Simple</th>';
            var tableForecastCma = '<th class="bg-teal" colspan="5">Cumulative</th>';
            var tableForecastWma = '<th class="bg-orange" colspan="5">Weight</th>';
            var tableForecastEma = '<th class="bg-brown" colspan="5">Exponential</th>';

            for (var i = 0; i < response.data_each_mounth.length; i++) {
                tableMounth += '<th class="bg-blue">' + response.data_each_mounth[i].date + '</th>';
            }
            $('#forecast-data-mounth').append(tableMounth);

            for (var i = 0; i < response.data_each_mounth.length; i++) {
                tableCount += '<td>' + response.data_each_mounth[i].count + '</td>';
            }
            $('#forecast-data-count').append(tableCount);

            $('#forecast-label').append(tableForecastLabel);

            tableForecastSma += '<th class="bg-red" colspan="2" style="text-align: center;">' + response.forecast_sma + '</th>';
            $('#forecast-sma').append(tableForecastSma);

            tableForecastCma += '<th class="bg-teal" colspan="2" style="text-align: center;">' + response.forecast_cma + '</th>';
            $('#forecast-cma').append(tableForecastCma);

            tableForecastWma += '<th class="bg-orange" colspan="2" style="text-align: center;">' + response.forecast_wma + '</th>';
            $('#forecast-wma').append(tableForecastWma);

            tableForecastEma += '<th class="bg-brown" colspan="2" style="text-align: center;">' + response.forecast_ema + '</th>';
            $('#forecast-ema').append(tableForecastEma);

            // Push Data to Chartjs
            new Chart(document.getElementById("line_chart").getContext("2d"), getChartJs('line', response));

            setTimeout(function() {
                $loading.waitMe('hide');

                $('.btn-forecast-add').click(function() {
                    var methodData = $(this).attr('data');
                    var methodValue;
                    switch(methodData){
                        case 'simple': methodValue = response.forecast_sma;break;
                        case 'cumulative': methodValue = response.forecast_cma;break;
                        case 'weight': methodValue = response.forecast_wma;break;
                        case 'exponential': methodValue = response.forecast_ema;
                    }
                    $('#productions-form [name="num-prod"]').val(methodValue);
                });
            }, 256);



        }).fail(function() {
            swal('Failed', 'Error', 'error');
        });

    }, 1024);

});

$('#btn-prod-save').click(function() {
    var url = $('#productions-form').attr('action');
    var data = $('#productions-form').serialize();
    productionsDetailConf(url, data);
});

function productionsDetailConf(url, data) {
    var run = true;
    $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url("productions/productionsDetailConfm"); ?>',
        data: data,
        async: false,
        dataType: 'json',
        success: function(response) {
            pushDetailProductions(response);

            for (let i = 0; i < response.materials.length; i++) {
                if(response.materials[i].cal_total_min_stock < 0){
                    run = false;
                }
            }
            if (run) {
                $("#btn-save-productions").css("display", "show");                
                $("#btn-purchase-form").css("display", "none");                
            } else {
                $("#btn-save-productions").css("display", "none");
                $("#btn-purchase-form").css("display", "show");

                $('#btn-purchase-form').click(function(){
                    var productId = $('#productions-form [name="product-input"]').val();
                    var numProd = $('#productions-form [name="num-prod"]').val();
                    window.location.href = "<?php echo base_url('Materials/purchaseMaterialsView'); ?>?productId=" + productId + "&numProd=" + numProd;
                });            
            }
        },
        error: function() {
            swal('Failed', 'Error', 'error');
        }
    });
}

$('.datepicker-min-started').bootstrapMaterialDatePicker({
    format: 'YYYY-MM-DD',
    clearButton: true,
    weekStart: 1,
    time: false,
    minDate : new Date()
});

productsGet();
});
</script>