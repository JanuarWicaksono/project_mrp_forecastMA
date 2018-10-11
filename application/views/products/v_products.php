<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Produk
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
                        <button type="button" class="btn btn-primary waves-effect" id="btn-modal-product" title="Add product" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">add</i>
							<span>Tambah Pelanggan</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="btn-reload-products" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">refresh</i>
							<span>Segarkan Data</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="btn-reload-page" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">refresh</i>
							<span>Segarkan Halaman</span>
						</button><br><br>
                        <div class="table-responsive">
                            <table id="productsTable" class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>                                    
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Unit Persediaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="products-data">

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

<!-- Modal Form product-->
<div class="modal fade" id="modal-product-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="product-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="product-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Produk</b>
                                    <input type="text" class="form-control" name="product-name" placeholder="Nama Produk" required>                                    
                                </div>
                                <div class="help-info">Max. 40 Karakter</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-float">
                                <b>Kategori</b>
                                <select id="categories" class="form-control " name="categories" required>
									<option value="">-- Pilih Kategori --</option>

								</select>
                                <div class="help-info">Pilih Salah Satu</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Masa Berlaku (hari)</b>
                                    <input type="number" class="form-control" name="expiration" required placeholder="Masa berlaku (hari)">
                                </div>
                                <div class="help-info">Input Angka (Hari)</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Harga (Rp)</b>
                                    <input type="number" class="form-control" name="price" required placeholder="Harga">
                                </div>
                                <div class="help-info">Input Angka Rupiah Rp.000.000</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Persediaan Unit</b>
                                    <input type="number" class="form-control" name="unit-in-stock" required placeholder="Persediaan Stock">
                                </div>
                                <div class="help-info">Input Angka</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float" disabled>
                                <div class="">
                                    <b>Status</b>
                                    <div class="col-md-12">
                                        <input name="status" type="radio" id="active" value="available" checked />
                                        <label for="active">Aktif</label>
                                        <input name="status" type="radio" id="nonactive" value="notavailable" />
                                        <label for="nonactive">Tidak Aktif</label>
                                    </div>
                                    <div class="help-info">Pilih Salah Satu</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Deskripsi</b>
                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize" required placeholder="Deskripsi"></textarea>
                                </div>
                                <div class="help-info">Input Text</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Catatan</b>
                                    <textarea name="note" cols="30" rows="5" class="form-control no-resize" required placeholder="Catatan"></textarea>
                                </div>
                                <div class="help-info">Input Text</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-save-product" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal BOM product-->
<div class="modal fade" id="modal-product-form-bom" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="alert alert-warning">
                        <strong>Perhatian !</strong> Penambahan Data <i>Bill Of Material</i> Hanya Dapat Dilakukan Satu Kali, 
                        Sehingga Tidak Dapat Diubah
                    </div>
                    <table class="table table-bordered" id="table-bom">
                        <tr>
                            <th class="col-md-2">Nama Produk :</th>
                            <td class="col-md-10 name"></td>
                        </tr>
                    </table>
                    <form action="" id="form-bom">
                        <input type="hidden" name="bom-id" value="0">
                        <input type="hidden" name="product-id" value="0">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-1">#</th>
                                    <th>Nama Material</th>
                                    <th>Kebutuhan</th>
                                </tr>
                            </thead>
                            <tbody id="bom-form">
                                <tr class="bom-form-0">
                                    <th scope="row">1</th>
                                    <td>
                                        <div class="form-group form-float" style="margin-bottom:0px;">
                                            <select class="form-control show-tick material-input-0" name="materials[]" data-live-search="true" data-size="5" required>
                                                <option value="">-- Pilih Material --</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group form-float" style="margin-bottom:0px;">
                                            <div class="form-line">
                                                <input type="number" class="form-control num-comb-input-0" name="num-comb-materials[]" required placeholder="Jumlah Kombinasi">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <th></th>
                                    <td>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-primary waves-effect" id="btn-add-form-bom">
                                        <i class="material-icons">add</i>
                                        <span>Tambah</span>
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-block btn-danger waves-effect" id="btn-remove-form-bom">
                                        <i class="material-icons">close</i>
                                        <span>Hapus</span>
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-save-bom" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-product-form-bom-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Bill Of Material</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="alert alert-info">
                        <p>Data <i>Bill Of Material</i> Tidak Dapat Diubah !</p>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-bom-detail">
                            <tr>
                                <th class="col-md-2">Produk ID:</th>
                                <td class="col-md-10 product-id"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Nama Produk :</th>
                                <td class="col-md-10 name"></td>
                            </tr>
                        </table>
                    </div>
                    
                    <table id="table-bom-detail-comb" class="table table-bordered table-striped table-hover js-basic-example">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama Bahan Baku (satuan)</th>
                                <th>Jumlah Combunasi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
					<i class="material-icons">close</i>
					<span>Tutup</span>
				</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Products -->
<div class="modal fade" id="modal-product-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Produk</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-product-detail">
                            <tr>
                                <th class="col-md-2">Nama Produk :</th>
                                <td class="col-md-10 name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Harga :</th>
                                <td class="col-md-10 price"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Unit Tersedia :</th>
                                <td class="col-md-10 unit-in-stock"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Kategori :</th>
                                <td class="col-md-10 category"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Status :</th>
                                <td class="col-md-10 status"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Deskripsi :</th>
                                <td class="col-md-10 description"></td>
                            </tr><tr>
                                <th class="col-md-2">Catatan :</th>
                                <td class="col-md-10 note"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Dibuat Pada</th>
                                <td class="col-md-10 created-at"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Diperbaharui Pada  :</th>
                                <td class="col-md-10 updated-at"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
					<i class="material-icons">close</i>
					<span>Tutup</span>
				</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    var bomFormNo = 0;
    
    // function get products
    function productsDatatables() {
        var no = 1;
        $('#productsTable').DataTable({
            "processing": true,
            "bDestroy": true,
            "ajax": {
                url: '<?php echo base_url("Products/productsGet"); ?>',
                dataSrc: ''
            },
            "columns": [{
                    render: function(){
                        return no++;
                    }
                },
                {
                    data: 'product_id',
                    name: 'product_id'
                },
                {
                    data: 'name',
                    name: "name"
                },
                {
                    data: "price",
                    render: function(data, type, full, meta){
                        return convertToRupiah(data);
                    }
                },
                {
                    data: 'unit_in_stock',
                    name: 'unit_in_stock'
                },
                {
                    data: 'Nonactive - Active',
                    name: 'Nonactive - Active',
                    render: function(data, type, full, meta){
                        if(full.status == 'available'){
                            return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>';
                        }else{
                            return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak tersedia</button>';                            
                        }
                    }
                },
                {
                    name: 'action',
                    render: function(data, type, full, meta) {
                        return '<a type="javascript:;" class="btn btn-xs waves-effect btn-product-bom" title="Bill Of Material" data="' + full.product_id + '"><i class="material-icons">view_module</i><span>BOM</span></a>'+
                        '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-product-detail" title="Detail" data="' + full.product_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                            '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-product-edit" title="Edit" data="' + full.product_id + '"><i class="material-icons">edit</i></a>' +
                            '<a type="javascript:;" class="btn btn-xs waves-effect btn-product-delete" title="Detele" data="' + full.product_id + '"><i class="material-icons">delete</i></a>';
                    }
                }
            ],
            "fnDrawCallback": function(oSettings) {

                // display modal-product-detail
                $('.btn-product-detail').click(function() {
                    var id = $(this).attr('data');
                    $('#modal-product-detail').modal('show');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Products/productGet"); ?>',
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            var statusRender = '';
                            if(response[0].status == 'available'){
                                statusRender = '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>';
                            }else{
                                statusRender = '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak Tersedia</button>';
                            }
                            
                            $('#table-product-detail .name').html(response[0].product_name);
                            $('#table-product-detail .price').html(convertToRupiah(response[0].price));
                            $('#table-product-detail .unit-in-stock').html(response[0].unit_in_stock);
                            $('#table-product-detail .category').html(response[0].category_name);
                            $('#table-product-detail .status').html(statusRender);
                            $('#table-product-detail .description').html(response[0].product_description);
                            $('#table-product-detail .note').html(response[0].note);
                            $('#table-product-detail .created-at').html(response[0].created_at);
                            $('#table-product-detail .updated-at').html(response[0].updated_at);
                        },
                        error: function() {
                            swal('Failed', 'Error', 'error');
                        }
                    });
                });

                // display modal-product-edit
                $('.btn-product-edit').click(function() {
                    $('#modal-product-form').find('.modal-title').text('Edit Produk');
                    $('#product-form').attr('action', '<?php echo base_url("Products/productUpdate");?>');
                    $('#product-form [name="status"]').removeAttr('checked');

                    var id = $(this).attr('data');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Products/productGet"); ?>',
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json'
                    }).done(function(response) {

                        $('#product-form input[name=product-id]').val(response[0].product_id);
                        $('#product-form input[name=product-name]').val(response[0].product_name);
                        $('#product-form input[name=price]').val(response[0].price);
                        $('#product-form input[name=expiration]').val(response[0].expiration);
                        $('#product-form input[name=unit-in-stock]').val(response[0].unit_in_stock);
                        $('#product-form #categories').selectpicker('val', response[0].category_id);
                        if (response[0].status == 'available') {
                            $( "#product-form #active").prop("checked", true);                       
                        } else {
                            $( "#product-form #nonactive" ).prop("checked", true);
                        }
                        $('#product-form textarea[name=description]').html(response[0].product_description);
                        $('#product-form textarea[name=note]').html(response[0].note);

                        $('#modal-product-form').modal('show');
                    }).fail(function() {
                        swal('Failed', 'something wrong with your input', 'error');
                    });

                });

                // display modal-product-bom
                $('.btn-product-bom').click(function() {
                    $('#modal-product-form-bom').find('.modal-title').text('Bill Of Material');

                    var productWhere = $(this).attr('data');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Products/bomGet"); ?>',
                        data: {
                            productWhere: productWhere
                        },
                        async: false,
                        dataType: 'json'
                    }).done(function(response) {
                        resetBomModal();
                        
                        
                        if (response.response_status == true) {
                            $('#table-bom-detail .product-id').html(response.products_product_id);
                            $('#table-bom-detail .name').html(response.product_name);

                            var bomDetailTbody = '';
                            for (let i = 0; i < response.materials.length; i++) {
                                bomDetailTbody += '<tr>'+
                                    '<td>'+ (i+1) +'</td>'+
                                    '<td>'+ response.materials[i].name +' ('+ response.materials[i].stock_type +') </td>'+
                                    '<td>'+ response.materials[i].num_comb_material +'</td>'+
                                '</tr>';
                            }
                            $('#table-bom-detail-comb tbody').html(bomDetailTbody);

                            $('#modal-product-form-bom-detail').modal('show');


                        } else if (response.response_status == false){
                            $('#form-bom [name="product-id"]').val(response.products_product_id);
                            $('#table-bom .name').html(response.product_name);
                            $('#form-bom').attr('action', '<?php echo base_url("Products/bomCreate");?>');
                            $('#modal-product-form-bom').modal('show');

                        }
                        
                        $('#btn-save-bom').click(function(){
                            var url = $('#form-bom').attr('action');
                            var data = $('#form-bom').serialize();
                            swal({
                                title: "Ubah BOM Produk ini ?",
                                text: 'Pilih "OK" untuk menyimpan',
                                type: "info",
                                showCancelButton: true,
                                closeOnConfirm: false,
                                showLoaderOnConfirm: true,
                            }, function() {
                                setTimeout(function() {
                                    $.ajax({
                                        type: 'ajax',
                                        method: 'post',
                                        url: url,
                                        data: data,
                                        async: false,
                                        dataType: 'json'
                                    }).done(function(response) {
                                        swal("Tersimpan", "Data Bill Of Meterial Produk ini Telah Terimpan !", "success");
                                        productsDatatables();
                                        $('#modal-product-form-bom').modal('hide');
                                    }).fail(function() {
                                        swal('error', 'Error, Pastikan Inputan Benar dan Terisi semua', 'error');
                                    });
                                }, 1000);
                            });
                            
                        });

                    }).fail(function() {
                        swal('Failed', 'something wrong with your input', 'error');
                    });

                });

                // btn delete product
                $('.btn-product-delete').click(function() {
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
                            productDelete(id);
                        }, 1000);
                    });
                });




            }
        });
    }

    function saving(url, data){
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: false,
            dataType: 'json'
        }).done(function(response) {
            swal("Tersimpan", "Data Perlanggan Telah Terimpan !", "success");
            productsDatatables();
            $('#modal-product-form').modal('hide');
            $('#product-form')[0].reset();
        }).fail(function() {
            swal('Error !', 'Masukan Form Dengan Benar', 'error');
        });
    }

    function productDelete(id){
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: '<?php echo base_url("Products/productDelete"); ?>',
            data: {id: id},
            dataType: 'json'
        }).done(function(response) {
            swal("Terhapus", "Data Pelanggan Telah Terhapus", "success");
            productsDatatables();
        }).fail(function() {
            swal('Failed', 'something wrong with your input', 'error');
        });
    }

    function categoriesGet(){
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url("Products/categoriesGet"); ?>',
            async: false,
            dataType: 'json'
        }).done(function(response){
            var html = '';
            var i = 0;
            for (i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].category_id+'">'+response[i].name+'</option>';                        
            }
            $('#product-form #categories').append(html);
            
        }).fail(function(){
            swal('Failed', 'Error', 'error');
        });
    }

    function materialsGet(element){
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: '<?php echo base_url("Materials/materialsGet"); ?>',
            dataType: 'json'
        }).done(function(response) {
            var html = '';
            for (var i = 0; i < response.length; i++) {
                html += '<option value="'+response[i].material_id+'" data-subtext="'+response[i].stock_type+'">'+response[i].name+' ('+response[i].stock_type+')</option>';
            }
            $('#bom-form .material-input-'+bomFormNo).append(html);
            $('#bom-form .material-input-'+bomFormNo).selectpicker('render');
            
        }).fail(function() {
            swal('Failed', 'Error', 'error');
        });
    }

    function resetBomModal(){
        while(bomFormNo > 0) {
            $('.bom-form-'+bomFormNo).remove();
            bomFormNo--;
        }
        $('.material-input-0').selectpicker('deselectAll');
        $('#form-bom')[0].reset();
    }

    function formBomEdit(dataMaterial, callback){
        bomFormNo++;
        var html = '';
        html += '<tr class="bom-form-'+bomFormNo+'">'+
            '<th scope="row">'+(bomFormNo+1)+'</th>'+
            '<td>'+
                '<div class="form-group form-float" style="margin-bottom:0px;">'+
                    '<select class="form-control show-tick material-input-'+bomFormNo+'" name="materials[]" data-live-search="true" data-size="5" required>'+
                        '<option value="">-- Pilih Material --</option>'+
                        
                    '</select>'+
                '</div>'+
            '</td>'+
            '<td>'+
                '<div class="form-group form-float" style="margin-bottom:0px;">'+
                    '<div class="form-line">'+
                        '<input type="number" class="form-control num-comb-input-'+bomFormNo+'" name="num-comb-materials[]" required placeholder="Jumlah Kombinasi">'+
                    '</div>'+
                '</div>'+
            '</td>'+
        '</tr>';
        $('#bom-form').append(html);
        callback && callback();
        materialsGet();
        $('.material-input-'+(bomFormNo-1)).selectpicker('val', dataMaterial.material_id);
        $('.num-comb-input-'+(bomFormNo-1)).val(dataMaterial.num_comb_material);
    }
    
    //modal create product 
    $("#btn-modal-product").click(function() {
        $('#product-form')[0].reset();
        $("#product-form #active").attr('checked', true);
        $('#product-form select').selectpicker('deselectAll');
        $('#product-form textarea').html("");
        
        $('#modal-product-form').find('.modal-title').text('Tambah Produk');
        $('#product-form').attr('action', '<?php echo base_url("Products/productCreate");?>');
        $('#modal-product-form').modal('show');
    });

    //btn-product-save
    $("#btn-save-product").click(function() {
        var url = $('#product-form').attr('action');
        var data = $('#product-form').serialize();
        swal({
            title: "Data Pelanggan Yang Dimasukan Sudah Benar?",
            text: 'Pilih "OK" untuk menyimpan',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                saving(url, data);
            }, 1000);
        });
    });

    $('#btn-add-form-bom').click(function(){
        bomFormNo++;
        var html = '';
        html += '<tr class="bom-form-'+bomFormNo+'">'+
            '<th scope="row">'+(bomFormNo+1)+'</th>'+
            '<td>'+
                '<div class="form-group form-float" style="margin-bottom:0px;">'+
                    '<select class="form-control show-tick material-input-'+bomFormNo+'" name="materials[]" data-live-search="true" data-size="5" required>'+
                        '<option value="">-- Pilih Material --</option>'+
                        
                    '</select>'+
                '</div>'+
            '</td>'+
            '<td>'+
                '<div class="form-group form-float" style="margin-bottom:0px;">'+
                    '<div class="form-line">'+
                        '<input type="number" class="form-control num-comb-input-'+bomFormNo+'" name="num-comb-materials[]" required placeholder="Jumlah Kombinasi">'+
                    '</div>'+
                '</div>'+
            '</td>'+
        '</tr>';
        $('#bom-form').append(html);
        materialsGet();
    });

    $('#btn-remove-form-bom').click(function(){
        setTimeout(function() {
            if(bomFormNo > 0){
                $('.bom-form-'+bomFormNo).remove();
                bomFormNo--;
            } else if (bomFormNo == 0){
                $('.bom-form-'+bomFormNo+' .material-input-'+bomFormNo).selectpicker('deselectAll');
                $('.bom-form-'+bomFormNo+' .num-comb-input-'+bomFormNo).val('');
                $('[name="num-comb-product"]').val('');
            }
            else {
                swal('Failed', 'Tidak Dapat Mengahapus Input BOM Kembali', 'error');
            }
        }, 0);
    });
    
    //btn-reload
    $('#btn-reload-products').click(function() {
        productsDatatables();
    });

    $('#btn-reload-page').click(function() {
        location.reload();
    });

    productsDatatables();
    categoriesGet();
    materialsGet()

});
</script>