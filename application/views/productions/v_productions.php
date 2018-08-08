<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Produksi
                            <small>CV. Anugrah Sukses Mandiri</small>
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
                        <a href="<?php echo base_url('Productions/productionsCreateView'); ?>" class="btn bg-blue waves-effect" id="btn-create-productions">
							<i class="material-icons">add</i>
							<span>Tambah Produksi</span>
						</a>
                        <button type="button" class="btn bg-green waves-effect" id="reload-datatables" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">new_releases</i>
							<span>Produksi Terbaru</span>
						</button><br><br>
                        <div class="row clearfix">
                            <!-- <form action="" >
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <select  class="form-control show-tick product-input" name="product" data-live-search="true" required>
                                            <option value="">-- Pilih Produk --</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" id="production-date" name="production-date" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">check_circle</i>
                                        <span>Cari</span>
                                    </button>
                                </div>
                            </form> -->
                            
                        </div>
                        <div class="table-responsive">
                            <table id="productions-table" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Unit Tersedia</th>
                                        <th>Jumlah Produksi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="productions-data">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
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
                <h4 class="modal-title" id="largeModalLabel">Detail Produksi</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body">
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
                                    <th class="col-md-2">Dibuat Pada :</th>
                                    <td class="col-md-4 created-at"></td>
                                    <th class="col-md-2">Diperbaharui Pada :</th>
                                    <td class="col-md-4 updated-at"></td>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    <i class="material-icons">close</i><span>Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form Material Create-->
<div class="modal fade" id="modal-produksi-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Edit Produksi</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form action="<?php echo base_url('Productions/productionUpdate') ?>" id="productions-form">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <b>Pilih Produk</b>
                                <select class="form-control show-tick product-input" name="products-id" data-live-search="true" disabled>
                                    <option value="">-- Pilih Produk --</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Jumlah Produksi</b>
                                    <input type="number" class="form-control" name="num-prod" required placeholder="Jumlah Produksi" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float" disabled>
                                <div class="">
                                    <b>Status</b>
                                    <div class="col-md-12">
                                        <input name="status" type="radio" id="finished" value="finished" />
                                        <label for="finished">Selesai</label>
                                        <input name="status" type="radio" id="unfinished" value="unfinished"/>
                                        <label for="unfinished">Belum Selesai</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <b>Tanggal Mulai</b>
                                    <input type="text" class="datepicker form-control" id="production-date" name="started-at" placeholder="Please choose a date..." disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-line">
                                    <b>Tanggal Selesai</b>
                                    <input type="text" class="datepicker form-control" id="production-date" name="finished-at" placeholder="Please choose a date...">
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
            <div class="modal-footer">
                <button id="btn-save-category" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

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
            $('.product-input').append(html);
            $('.product-input').selectpicker('render');
        }).fail(function(){
            swal('Failed', 'Error', 'error');
        });
    }

    function productionDelete(id){
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: '<?php echo base_url("Productions/productionDelete"); ?>',
            data: {
                'production-id': id
            },
            dataType: 'json'
        }).done(function(response) {
            swal("Terhapus", "Data Pemasok Telah Terhapus", "success");
            productionsDatatables();
        }).fail(function() {
            swal('Failed', 'Error', 'error');
        });
    }

    function productionsDatatables() {
        var no = 0;
        $('#productions-table').DataTable({
            "ajax": {
                url: '<?php echo base_url("Productions/productionsGet"); ?>',
                dataSrc: '',
                method: 'get'
            },
            "columns": [
                {
                    render: function(){
                        return (no+++1);
                    }
                },
                {
                    data: 'production_id',
                    name: 'production_id'
                },
                {
                    data: 'product_name',
                    name: 'product_name'
                },
                {
                    data: 'unit_in_stock',
                    name: 'unit_in_stock'
                },
                {
                    data: 'num_production',
                    name: 'num_production'
                },
                {
                    render: function(data, type, full, meta) {
                        if(full.status == 'finished'){
                            return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>';
                        }else{
                            return '<button type="button" class="btn btn-xs bg-red waves-effect">Tidak tersedia</button>';                            
                        }
                    }
                },
                {
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, full, meta) {
                        return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-production-detail" title="Detail" data="' + full.production_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                            '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-production-edit" title="Edit" data="' + full.production_id + '"><i class="material-icons">edit</i></a>' +
                            '<a type="javascript:;" class="btn btn-xs waves-effect btn-production-delete" title="Detele" data="' + full.production_id + '"><i class="material-icons">delete</i></a>';
                    }
                }
            ],
            "processing": true,
            "bDestroy": true,
            "fnDrawCallback": function(oSettings) {

                // display modal-production-detail
                $('.btn-production-detail').click(function() {
                    var id = $(this).attr('data');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("productions/productionGet"); ?>',
                        data: {id: id},
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            //push production data
                            // console.log(response);
                            $('#table-production-detail .product').html(response.product_data.product_name);
                            $('#table-production-detail .num-product').html(response.num_production);
                            $('#table-production-detail .status').html(response.status);
                            $('#table-production-detail .started-at').html(response.started_at);
                            $('#table-production-detail .finished-at').html(response.finished_at);
                            $('#table-production-detail .created-at').html(response.created_at);
                            $('#table-production-detail .updated-at').html(response.updated_at);
                            $('#table-production-detail .note').html(response.note);
                            
                            var tBodyprodsMat = '';
                            for (var i = 0; i < response.bom_data.length; i++) {
                                tBodyprodsMat += '<tr>'+
                                    '<td>'+(i+1)+'</td>'+
                                    '<td>'+response.bom_data[i].material_data.name+'</td>'+
                                    '<td>'+response.bom_data[i].material_data.stock+'</td>'+
                                    '<td>'+response.bom_data[i].material_data.stock_type+'</td>'+
                                    '<td>'+response.bom_data[i].total_num_comb+'</td>'+
                                    '<td>'+response.bom_data[i].cal_total_min_stock+'</td>'+
                                '</tr>';
                            }
                            $('#productions-materials').html(tBodyprodsMat);

                            $('#modal-production-detail').modal('show');

                        },
                        error: function() {
                            alert('Gagal', 'ERROR', 'error');
                        }
                    });
                });

                $('.btn-production-edit').click(function() {
                    var id = $(this).attr('data');

                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("productions/productionGet"); ?>',
                        data: {id: id},
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            //push production data
                            $('#productions-form .product-input').selectpicker('val', response.product_data.product_id);
                            $('#productions-form [name="num-prod"]').val(response.num_production);
                            if (response.status == 'finished') {
                                $('#productions-form #finished').prop('checked', true);
                            } else {
                                $('#productions-form #unfinished').prop('checked', true);                                
                            }
                            $('#productions-form [name="started-at"]').val(response.started_at);
                            $('#productions-form [name="finished-at"]').val(response.finished_at);
                            $('#productions-form [name="note"]').html(response.note);

                            $('#modal-produksi-form').modal('show');

                            // //push total production                            
                            // $('.total-price').html(convertToRupiah(totalPrice));
                        },
                        error: function() {
                            alert('Gagal', 'ERROR', 'error');
                        }
                    });
                });

                //btn-production-delete
                $('.btn-production-delete').click(function() {
                    var id = $(this).attr('data');
                    swal({
                        title: "Hapus Data Ini?",
                        text: 'Pilih "OK" untuk menghapus',
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true,
                    }, function() {
                        setTimeout(function() {
                            productionDelete(id);
                        }, 1000);
                    });
                });



            }
        });
    }

    productionsDatatables();
    productsGet();

})

</script>