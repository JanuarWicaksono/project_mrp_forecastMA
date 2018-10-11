<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pesanan Bahan Baku
                        </h2>
                        <small>CV. Anugrah Sukses Mandiri</small>
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
                    <div class="body">
                        <button type="button" class="btn btn-primary waves-effect" id="btn-modal-create" title="Add purchase" data-toggle="modal" data-target="#largeModal">
                            <i class="material-icons">add</i>
                            <span>Tambah Pesanan</span>
                        </button>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab-purchases-all" data-toggle="tab">
                                    <i class="material-icons">list</i> Semua Pesanan
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab-purchases-finished" data-toggle="tab">
                                    <i class="material-icons">add_shopping_cart</i> Pesanan Selesai
                                </a>
                            </li>
                            <li role="presentation">
                                <a href="#tab-purchases-unfinished" data-toggle="tab">
                                    <i class="material-icons">remove_shopping_cart</i> Dalam Pesanan
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="tab-purchases-all">

                                <div class="table-responsive" width="100%">
                                    <table id="purchasesTable" class="table table-bordered table-striped table-hover js-basic-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th>Tanggal Datang</th>
                                                <th>Status Pemesanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th colspan="4">900</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-purchases-finished">

                                <table id="purchasesFinishedTable" class="table table-bordered table-striped table-hover js-basic-example" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Tanggal Datang</th>
                                            <th>Status Pemesanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="purchases-data">
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2018-7-1</td>
                                            <td>
                                                <button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>
                                            </td>
                                            <td>aksi</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>2018-7-1</td>
                                            <td>
                                                <button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>
                                            </td>
                                            <td>aksi</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th colspan="4">900</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-purchases-unfinished">

                                <table id="purchasesUnfinishedTable" class="table table-bordered table-striped table-hover js-basic-example" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id</th>
                                            <th>Tanggal Pemesanan</th>
                                            <th>Tanggal Datang</th>
                                            <th>Status Pemesanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th colspan="4">900</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<div class="modal fade" id="modal-puchase-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Tambah Pesanan Bahan Baku</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">

                </div>

                <div id="wizard_horizontal">
                    <h2>Form Pembelian Bahan Baku</h2>
                    <section>
                        <form action="<?php echo base_url('Materials/purchaseCreate') ?>" id="form-purchases">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">#</th>
                                        <th>Nama Material (Stok Gudang)</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody id="materials-form">

                                    <tr class="material-form">
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="form-group form-float" style="margin-bottom:0">
                                                <select class="form-control show-tick material-input" name="materials[]" data-live-search="true" data-size="5" data-dropup-auto="false" required>
                                                    <option value="">-- Pilih Material --</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-float" style="margin-bottom:0">
                                                <div class="form-line">
                                                    <input type="number" class="form-control num-comb-input" name="num-of-purchase[]" value="0" placeholder="Jumlah Pesanan" required>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-float" style="margin-bottom:0">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="notes[]" required placeholder="Catatan">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td colspan="2">
                                            <button type="button" class="btn btn-block btn-xs btn-primary waves-effect" id="btn-add-form-material">
                                                <i class="material-icons">add</i>
                                                <span>Tambah</span>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-xs btn-danger waves-effect" id="btn-remove-form-material">
                                                <i class="material-icons">close</i>
                                                <span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <b>Catatan</b>
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" name="note" placeholder="Catatan Pemesanan"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <h2>Detail Dan Konfirmasi Bahan Baku</h2>
                    <section>
                        <div class="table responsive">
                            <table class="table table-bordered" id="table-purchase-detail-conf">
                                <tr>
                                    <th class="col-md-2">Catatan</th>
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
                                        <th>Supplier</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody id="purchase-materials-detail-conf">

                                </tbody>
                                <!-- <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total</th>
                                        <th class="total-price"></th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </section>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-puchase-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Bahan Baku</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="table responsive">
                        <table class="table table-bordered" id="table-purchase-detail">
                            <tr>
                                <th>Id Pemesanan</th>
                                <td class="purchase-id" colspan="3"></td>
                            </tr>
                            <tr>
                                <th class="col-md-3">Dibuat Pada</th>
                                <td class="col-md-4 created-at"></td>
                                <th class="col-md-2">Diperbaharui Pada</th>
                                <td class="col-md-4 updated-at"></td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td class="note" colspan="3"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bahan Baku</th>
                                    <th>Supplier</th>
                                    <th>Jumlah</th>
                                    <th>Status (Ubah Status)</th>
                                    <th>Tiba Pada</th>
                                    <th>Catatan</th>
                                </tr>
                            </thead>
                            <tbody id="purchase-materials-detail">

                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Total</th>
                                    <th class="total-price"></th>
                                </tr>
                            </tfoot> -->
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script href="<?php echo base_url('assets/js/getUrl.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function() {

var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

chekUrlParameter();
function chekUrlParameter(){ // 
    var productId = getUrlParameter('productId');
    var numProd = getUrlParameter('numProd');
    console.log(productId, numProd);
    if(productId != undefined && numProd != undefined){
        productionsGetConf(productId, numProd);
    }
}

function productionsGetConf(productId, numProd){
    $.ajax({
        type: 'ajax',
        method: 'get',
        async: false,
        url: '<?php echo base_url("Materials/purchaseBaseProduction"); ?>',
        dataType: 'json',
        data: {
            'products-id': productId,
            'num-prod': numProd
        },
    }).done(function(response) {
        productionsPushConf(response);
    }).fail(function() {
        swal('Failed', 'Erroar', 'error');
    });
}

function productionsPushConf(response) {
    materialsGet(undefined, function (html) {
        setTimeout(function () {
            for (var i = 0; i < response.materials.length; i++) {
                var materialForm = $('#materials-form .material-form').first().clone();

                destroySelectPicker(materialForm);
                materialForm.find('input').val("");
                materialForm.find('th[scope="row"]').first().html(i+2);
                materialForm.find('select').selectpicker('render');
                $('#materials-form').append(materialForm);

                var context = $('#materials-form .material-form').eq(i);
                context.find('select[name="materials[]"]').selectpicker('val', response.materials[i].material_data.material_id);
                context.find('input[name="num-of-purchase[]"]').val(Math.abs(response.materials[i].cal_total_min_stock));
            }
            $('#materials-form .material-form').eq(response.materials.length).remove();
        }, 100);

        $('#modal-puchase-form').modal('show'); 
    });
}

function purchasesDatatables(element, dataStatus) {
    var no = 1;
    $(element).DataTable({
        "processing": true,
        "bDestroy": true,
        "ajax": {
            'url': '<?php echo base_url("Materials/purchasesGet"); ?>',
            'method': 'GET',
            'dataSrc': '',
            'data': {data:dataStatus}
        },
        "columns": [{
                render: function() {
                    return no++;
                }
            },
            {
                data: 'material_trans_id',
                name: 'material_trans_id'
            },
            {
                data: 'created_at',
                name: "created_at"
            },
            {
                data: 'date_status_finished',
                name: "date_status_finished"
            },
            {
                data: 'Nonactive - Active',
                name: 'Nonactive - Active',
                render: function(data, type, full, meta) {
                    if (full.status == 'finished') {
                        return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Selesai</button>';
                    } else {
                        return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Belum Selesai</button>';
                    }
                }
            },
            {
                name: 'action',
                render: function(data, type, full, meta) {
                    return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-purchase-detail" title="Detail" data="' + full.material_trans_id + '" ><i class="material-icons">remove_red_eye</i></a>';
                }
            }
        ],
        "fnDrawCallback": function(oSettings) {

            // display modal-purchase-detail
            $('.btn-purchase-detail').click(function() {
                var purchaseId = $(this).attr('data');
                purchaseGet(purchaseId, function() {
                    $('#modal-puchase-detail').modal('show');
                });
            });
        }
    });
}

function reloadAllDatatables(){
    purchasesDatatables('#purchasesTable');
    purchasesDatatables('#purchasesFinishedTable', 'finished');
    purchasesDatatables('#purchasesUnfinishedTable', 'unfinished');
}

function purchaseGet(purchaseId, callback) {
    $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url("materials/purchaseGet"); ?>',
        data: { 
            'purchase-id': purchaseId
        },
        async: false,
        dataType: 'json',
        success: function(responsePurchase) {
            // Baru append element baru
            materialPurDetailPush(responsePurchase);

            // bind click setiap element baru di push
            $('.btn-mat-status').click(function() {
                var materialId = $(this).attr('data');
                materialUpdateStatus(purchaseId, materialId);
            });

            callback && callback();
        },
        error: function() {
            swal('Failed', 'Masukkan Input Dengan Benar', 'error'); 
        }
    });
}

function materialUpdateStatus(purchaseId, materialId) {
    $.ajax({
        type: 'ajax',
        method: 'get',
        async: false,
        data: {
            'purchase-id': purchaseId,
            'material-id': materialId
        },
        url: '<?php echo base_url("Materials/purMaterialUpdateStatus"); ?>',
        dataType: 'json'
    }).done(function(response) {

        swal("Tersimpan", "Data Pemsanan Material Telah Berubah !", "success");
        purchaseGet(purchaseId);
        reloadAllDatatables();

    }).fail(function() {
        swal('Failed', 'Error', 'error');
    });
}

function materialPurDetailPush(response){
    $('#table-purchase-detail .purchase-id').html(response.material_trans_id);
    $('#table-purchase-detail .date').html(response.date);
    $('#table-purchase-detail .created-at').html(response.created_at);
    $('#table-purchase-detail .updated-at').html(response.updated_at);
    $('#table-purchase-detail .note').html(response.note);

    var html = '';
    for (let i = 0; i < response.material_purchases.length; i++) {

        var statusRender = '';
        var btnActionRender = '';
        if(response.material_purchases[i].status == 'arrived'){
            statusRender = '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Sudah Datang</button>';
        }else{
            statusRender = '<button href="javascript:;" type="button" class="btn btn-xs btn-danger waves-effect" disabled>Belum Datang</button>';
            btnActionRender = '- <a href="javascript:;" type="button" class="btn btn-primary btn-xs waves-effect btn-mat-status" title="Edit" data="' + response.material_purchases[i].material_id + '">Ubah</a>';
        }

        html += '<tr>' +
            '<td>' + (i + 1) + '</td>' +
            '<td>' + response.material_purchases[i].material_name + '</td>' +
            '<td>' + response.material_purchases[i].supplier_name + '</td>' +
            '<td>' + response.material_purchases[i].qty + '</td>' +
            '<td>' + statusRender+' '+btnActionRender+ '</td>' +
            '<td>' + response.material_purchases[i].arrived_at + '</td>' +
            '<td>' + response.material_purchases[i].note + '</td>' +
            '</tr>';
    }
    $('#purchase-materials-detail').html(html);
}

function materialsGet(materialForm, callback) {
    $.ajax({
        type: 'ajax',
        method: 'get',
        async: false,
        url: '<?php echo base_url("Materials/materialsGet"); ?>',
        dataType: 'json'
    }).done(function(response) {
        var html = '';
        for (var i = 0; i < response.length; i++) {
            html += '<option value="' + response[i].material_id + '" data-subtext="">' + response[i].name + ' ('+ response[i].stock +' '+ response[i].stock_type + ')</option>';
        }
        materialForm && materialForm.find('select').append(html);
        callback && callback(html);
    }).fail(function() {
        swal('Failed', 'Error', 'error');
    });
}

function destroySelectPicker(el) {
    // URL: https://github.com/silviomoreto/bootstrap-select/issues/605
    el.find('.bootstrap-select').replaceWith(function() {
        return $('select', this);
    });
}

function purchaseSave(url, data) {
    $.ajax({
        type: 'ajax',
        method: 'POST',
        url: url,
        data: data,
        async: false,
        dataType: 'json'
    }).done(function(response) {
        swal("Tersimpan", "Data Pemsanan Telah Terimpan !", "success");
        setTimeout(function(){ location.reload(); }, 800);
    }).fail(function() {
        swal('error', 'Masukan Inputan Dengan Benar', 'error');
    });
}

$('#btn-modal-create').click(function() { 
    var formCount = $('#materials-form .material-form').length;
    for (var i = 0; i < (formCount - 1); i++) {
        $('#materials-form .material-form').last().remove();
    }
    $('#materials-form [name="materials[]"]').selectpicker('deselectAll');
    $('#materials-form [name="num-of-purchase[]"]').val('');
    $('#materials-form [name="notes[]"]').val('');
    $('#modal-puchase-form').modal('show');
});

materialsGet($('#materials-form .material-form').first());

//Start - Create Purchase Steps JS
function setButtonWavesEffect(event) {
    $(event.currentTarget).find('[role="menu"] li a').removeClass('waves-effect');
    $(event.currentTarget).find('[role="menu"] li:not(.disabled) a').addClass('waves-effect');
}

var formSteps = $('#wizard_horizontal').show();
formSteps.steps({
    headerTag: 'h2',
    bodyTag: 'section',
    //Event execute on that step
    onInit: function(event, currentIndex) {
        $.AdminBSB.input.activate();
        var $tab = $(event.currentTarget).find('ul[role="tablist"] li');
        var tabCount = $tab.length;
        $tab.css('width', (100 / tabCount) + '%');
        //set button waves effect
        setButtonWavesEffect(event);

        //Add materials form
        $('#btn-add-form-material').click(function() {
            var materialForm = $('#materials-form .material-form').first().clone();
            var formCount = $('#materials-form .material-form').length;

            // reset form
            destroySelectPicker(materialForm);
            materialForm.find('select.material-input').selectpicker();
            materialForm.find('input').val("");
            materialForm.find('th[scope="row"]').first().html(parseInt(formCount) + 1);


            $('#materials-form').append(materialForm);
            materialsGet(materialForm);
        });
        //Remove materials form
        $('#btn-remove-form-material').click(function() {
            $('#materials-form .material-form').last().remove();
        });
        // setButtonWavesEffect(event);
    },
    //Event execute on that step changed
    onStepChanged: function(event, currentIndex, priorIndex) {
        // setButtonWavesEffect(event);

        if (currentIndex == 1) { 

            var urlCreate = $('#form-purchases').attr('action');
            var data = $('#form-purchases').serialize();
            $.ajax({
                type: 'ajax',
                method: 'POST',
                url: '<?php echo base_url("Materials/purchaseConf"); ?>',
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {

                    $('#table-purchase-detail-conf .note').html(response.note);
                    var statusRender = '';
                    if (response.status == 'arrived') {
                        statusRender = '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Telah Datang</button>';
                    } else {
                        statusRender = '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Belum Datang</button>';                        
                    }

                    var html = '';
                    for (let i = 0; i < response.material_purch.length; i++) {
                        html += '<tr>' +
                            '<td>' + (i + 1) + '</td>' +
                            '<td>' + response.material_purch[i].material.material_name + '</td>' +
                            '<td>' + response.material_purch[i].material.supplier_name + '</td>' +
                            '<td>' + response.material_purch[i].num_of_purchase + '</td>' +
                            '<td>' + statusRender + '</td>' +
                            '<td>' + response.material_purch[i].note + '</td>' +
                            '</tr>';
                    }
                    $('#purchase-materials-detail-conf').html(html);

                },
                error: function() {
                    swal('Failed', 'Masukan Input Dengan Benar !', 'error'); 
                }
            });
            
        }

    },
    onFinishing: function (event, currentIndex) {
        var urlCreate = $('#form-purchases').attr('action');
        var data = $('#form-purchases').serialize();
        swal({
            title: "Data Pembelihan Bahan Baku Yang Dimasukan Sudah Benar?",
            text: 'Pilih "OK" untuk menyimpan',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                purchaseSave(urlCreate, data);
            }, 1000);
        });
    },
    onFinished: function (event, currentIndex) {
        
    }
});

reloadAllDatatables();

});
</script>