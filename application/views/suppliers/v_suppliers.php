<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pemasok
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
                        <div class="table-responsive">
                            <button type="button" class="btn btn-primary waves-effect" id="btn-modal-supplier" title="Add supplier" data-toggle="modal" data-target="#largeModal">
                                <i class="material-icons">add</i>
                                <span>Tambah Pemasok</span>
                            </button>
                            <button type="button" class="btn bg-green waves-effect" id="reload-suppliers" title="Refresh" data-toggle="modal" data-target="#largeModal">
                                <i class="material-icons">refresh</i>
                                <span>Segarkan Data</span>
                            </button>
                            <button type="button" class="btn bg-green waves-effect" id="reload-page" title="Refresh" data-toggle="modal" data-target="#largeModal">
                                <i class="material-icons">refresh</i>
                                <span>Segarkan Halaman</span>
                            </button><br><br>
                            <table id="suppliersTable" class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>id</th>
                                        <th>Nama Pemasok</th>
                                        <th>Email</th>
                                        <th>Nomor Telepon</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="suppliers-data">

                                </tbody>
                                <tfoot>
                                    <tr class="">
                                        <th></th>
                                        <th>Total Supplier</th>
                                        <th>100</th>
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

<!-- Modal Form supplier-->
<div class="modal fade" id="modal-supplier-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="supplier-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="supplier-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Pemasok</b>
                                    <input type="text" class="form-control" name="supplier-name" required placeholder="Nama Pemasok">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Email</b>
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nomor Telepon</b>
                                    <input type="text" class="form-control" name="phone" required placeholder="Nomor Telepon">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float" disabled>
                                <b>Status</b>
                                <div class="col-md-12">
                                    <input name="status" type="radio" id="active" value="active" checked />
                                    <label for="active">Aktif</label>
                                    <input name="status" type="radio" id="nonactive" value="nonactive" />
                                    <label for="nonactive">Tidak Aktif</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Alamat</b>
                                    <textarea name="address" cols="30" rows="5" class="form-control no-resize" required placeholder="Alamat"></textarea>                                    
                                </div>
                            </div>
                        </div>
                        <div id="material-form">
                            <div class="col-md-8 material-form-0">
                                <div class="form-group form-float">
                                    <b>Material - 1</b>
                                    <select class="form-control show-tick material-input-0" name="materials[]" data-live-search="true" data-size="5" required>
                                        <option value="">-- Pilih Material --</option>
                                        
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary waves-effect" id="btn-form-material"><i class="material-icons">add</i><span>Tambah Material</span></button>
                            <button type="button" class="btn btn-danger waves-effect" id="btn-remove-material"><i class="material-icons">close</i><span>Hapus</span></button>
                        </div>
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-save-supplier" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Suppliers -->
<div class="modal fade" id="modal-supplier-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Suppliers</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-supplier-detail">
                            <tr>
                                <th class="col-md-2">Supplier ID :</th>
                                <td class="col-md-10 supplier-id"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Nama :</th>
                                <td class="col-md-10 name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Email :</th>
                                <td class="col-md-10 email"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Nomor Telepon :</th>
                                <td class="col-md-10 phone"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Status :</th>
                                <td class="col-md-10 status"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Alamat :</th>
                                <td class="col-md-10 address"></td>
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
                        <table class="table table-bordered" id="stock">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Material ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Stok</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="materials-suppliers">
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Footer</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
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
        var materialInputID = 0;

        // function supplierSave
        function supplierSave(url, data) {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Tersimpan", "Data Pemasok Telah Tersimpan", "success");
                suppliersDatatables();
                $('#modal-supplier-form').modal('hide');
                $('#supplier-form')[0].reset();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function suppliersDatatables() {
            var no = 1;
            $('#suppliersTable').DataTable({
                "processing": true,
                "bDestroy": true,
                "ajax": {
                    url: '<?php echo base_url("Suppliers/suppliersGet"); ?>',
                    dataSrc: ''
                },
                "columns": [{
                        render: function(){
                            return no++;
                        }
                    },
                    {
                        data: 'supplier_id',
                        name: 'supplier_id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, full, meta){
                        if(full.status == 'active'){
                            return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Aktif</button>';
                        }else{
                            return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak Aktif</button>';                            
                        }
                    }
                    },
                    {
                        name: 'action',
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-supplier-detail" title="Detail" data="' + full.supplier_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                                '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-supplier-edit" title="Edit" data="' + full.supplier_id + '"><i class="material-icons">edit</i></a>' +
                                '<a type="javascript:;" class="btn btn-xs waves-effect btn-supplier-delete" title="Detele" data="' + full.supplier_id + '"><i class="material-icons">delete</i></a>';
                        }
                    }
                ],
                "fnDrawCallback": function(oSettings) {

                    // display modal-supplier-detail
                    $('.btn-supplier-detail').click(function() {
                        var id = $(this).attr('data');
                        $('#modal-supplier-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Suppliers/supplierGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json',
                            success: function(response) {
                                console.log(response);

                                $('#table-supplier-detail .supplier-id').html(response[0].supplier_id);
                                $('#table-supplier-detail .name').html(response[0].name);
                                $('#table-supplier-detail .email').html(response[0].email);
                                $('#table-supplier-detail .phone').html(response[0].phone);
                                if(response[0].status == 'active'){
                                    $('#table-supplier-detail .status').html('<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Aktif</button>');
                                }else{
                                    $('#table-supplier-detail .status').html('<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak Aktif</button>');
                                }
                                $('#table-supplier-detail .address').html(response[0].address);
                                $('#table-supplier-detail .created-at').html(response[0].created_at);
                                $('#table-supplier-detail .updated-at').html(response[0].updated_at);
                                var html = '';
                                for (var i = 0; i < response[0].materials.length; i++) {
                                    html += '<tr>'+
                                        '<td>'+(i+1)+'</td>'+
                                        '<td>'+response[0].materials[i].material_id+'</td>'+
                                        '<td>'+response[0].materials[i].name+'</td>'+
                                        '<td>'+response[0].materials[i].price+'</td>'+
                                        '<td>'+response[0].materials[i].stock+'</td>'+
                                        '<td>'+response[0].materials[i].status+'</td>'+
                                    '</tr>';
                                }
                                $('#materials-suppliers').html(html);

                            },
                            error: function() {
                                swal('Failed', 'Error', 'error');
                            }
                        });
                    });

                    // display modal-supplier-edit
                    $('.btn-supplier-edit').click(function() {
                        $('#modal-supplier-form').find('.modal-title').text('Edit Produk');
                        $('#supplier-form').attr('action', '<?php echo base_url("suppliers/supplierUpdate");?>');

                        var id = $(this).attr('data');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("suppliers/supplierGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json'
                        }).done(function(response) {
                            resetModal();
                            $('#supplier-form input[name=supplier-id]').val(response[0].supplier_id);
                            $('#supplier-form input[name=supplier-name]').val(response[0].name);
                            $('#supplier-form input[name=email]').val(response[0].email);
                            $('#supplier-form input[name=phone]').val(response[0].phone);
                            if (response[0].status == 'active') {
                                $('#supplier-form #active').prop('checked', true);
                            } else {
                                $('#supplier-form #nonactive').prop('checked', true);                                
                            }
                            $('#supplier-form textarea[name=address]').html(response[0].address);

                            $('.material-input-'+materialInputID).selectpicker('val', response[0].materials[0].material_id);
                            // console.log(materialInputID);
                            for (var i = 0; i < (response[0].materials.length-1); i++) {
                                materialInputID++;
                                var html = '<div class="col-md-8 material-form-'+materialInputID+'">'+
                                    '<div class="form-group form-float">'+
                                        '<b>Material - '+(materialInputID+1)+'</b>'+
                                        '<select class="form-control show-tick material-input-'+materialInputID+'" name="materials[]" data-live-search="true" required data-size="5">'+
                                            '<option value="">-- Pilih Material --</option>'+
                                            
                                        '</select>'+
                                    '</div>'+
                                '</div>';
                                $('#material-form').append(html);
                                materialsGet();
                                $('.material-input-'+materialInputID).selectpicker('render');
                                $('.material-input-'+materialInputID).selectpicker('val', response[0].materials[(i+1)].material_id);
                            }

                            $('#modal-supplier-form').modal('show');
                        }).fail(function() {
                            swal('Failed', 'something wrong with your input', 'error');
                        });

                    });

                    // btn delete supplier
                    $('.btn-supplier-delete').click(function() {
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
                                supplierDelete(id);
                            }, 1000);
                        });
                    });
                }
            });
        }

        function supplierDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Suppliers/supplierDelete"); ?>',
                data: {
                    id: id
                },
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Pemasok Telah Terhapus", "success");
                suppliersDatatables();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function materialsGet(){
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Materials/materialsGet"); ?>',
                dataType: 'json'
            }).done(function(response) {
                var html = '';
                for (var i = 0; i < response.length; i++) {
                    html += '<option value="'+response[i].material_id+'" data-subtext="'+response[i].status+'" data-price="'+response[i].price+'">'+response[i].name+'</option>';
                }
                $('.material-input-'+materialInputID).append(html);
                $('.material-input-'+materialInputID).selectpicker('render');
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function materialsUnSelectedGet(){
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Materials/materialsUnSelectedGet"); ?>',
                dataType: 'json'
            }).done(function(response) {
                var html = '';
                for (var i = 0; i < response.length; i++) {
                    html += '<option value="'+response[i].material_id+'" data-subtext="'+response[i].status+'" data-price="'+response[i].price+'">'+response[i].name+'</option>';
                }
                $('.material-input-'+materialInputID).append(html);
                $('.material-input-'+materialInputID).selectpicker('render');
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function resetModal(){
            $('#supplier-form')[0].reset();
            $('#supplier-form #active').prop('checked', true);
            while (0 < materialInputID) {
                $('.material-form-'+materialInputID).remove();
                materialInputID--;
            }
            $('[name="materials[]"]').selectpicker('deselectAll');
            $('#supplier-form textarea').html("");
        }

        $('#btn-modal-supplier').click(function() {
            resetModal();
            
            $('#modal-supplier-form').find('.modal-title').text('Create supplier');
            $('#supplier-form').attr('action', '<?php echo base_url("Suppliers/supplierCreate");?>');
            $('#modal-supplier-form').modal('show');
        });

        $('#btn-save-supplier').click(function() {
            var url = $('#supplier-form').attr('action');
            var data = $('#supplier-form').serialize();

            swal({
                title: "Data Pemasok Yang Dimasukan Sudah Benar?",
                text: 'Pilih "OK" untuk Menyimpan',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function() {
                setTimeout(function() {
                    supplierSave(url, data);
                    suppliersDatatables();
                }, 1000);
            });
        });

        $('#reload-suppliers').click(function(){
            $('#suppliers-data tr').remove();
            suppliersDatatables();
        });
        
        $('#btn-form-material').click(function(){
            materialInputID++;
            var html = '<div class="col-md-8 material-form-'+materialInputID+'">'+
                '<div class="form-group form-float">'+
                    '<b>Material - '+(materialInputID+1)+'</b>'+
                    '<select class="form-control show-tick material-input-'+materialInputID+'" name="materials[]" data-live-search="true" required data-size="5">'+
                        '<option value="">-- Pilih Material --</option>'+
                        
                    '</select>'+
                '</div>'+
            '</div>';
            $('#material-form').append(html);
            materialsGet();
            
        });

        $('#btn-remove-material').click(function(){
            setTimeout(function() {
                if(materialInputID > 0){
                    $('.material-form-'+materialInputID).remove();
                    materialInputID--;
                }else{
                    swal('Failed', 'Tidak Dapat Mengahapus Input Material Kembali', 'error');
                }
            }, 0);         
        });
        
        materialsGet();
        suppliersDatatables();
    });
</script>