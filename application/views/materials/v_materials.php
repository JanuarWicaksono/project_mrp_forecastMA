<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Bahan Baku
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
                        <button type="button" class="btn bg-blue waves-effect" id="btn-create-material" title="Add Material" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">add</i>
							<span>Tambah Bahan Baku</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="reload-datatables" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">refresh</i>
							<span>Segarkan Data</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="reload-page" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">refresh</i>
							<span>Segarkan Halaman</span>
						</button><br><br>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>id</th>
                                        <th>Nama Bahan Baku</th>
                                        <th>Stock</th>
                                        <th>Status</th>                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="materials-data">

                                </tbody>
                                <tfoot>
									<tr>
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

<!-- Modal Form Material Create-->
<div class="modal fade" id="modal-material-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="material-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="material-id" value="0">
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Bahan Baku</b>
                                    <input type="text" class="form-control" name="name" required placeholder="Nama Bahan Baku">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Stok Gudang</b>
                                    <input type="number" class="form-control" name="stock" required placeholder="Stok">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float" disabled>
                                <div class="">
                                    <b>Satuan</b>
                                    <select class="form-control show-tick" id="stock-type" name="stock-type" data-live-search="true" data-size="5">
                                        <option value="">-- Please select --</option>
                                        <optgroup label="Satuan Padat">
                                            <option value="gram" data-subtext="g">Gram</option>
                                            <option value="kilogram" data-subtext="Kg">Kilogram</option>
                                        </optgroup>
                                        <optgroup label="Satuan Cair">
                                            <option value="liter" data-subtext="l">Liter</option>
                                            <option value="mililiter" data-subtext="ml">Mililiter</option>
                                        </optgroup>
                                        <optgroup label="Satuan Panjang">
                                            <option value="cm" data-subtext="cm">Centimeter</option>
                                            <option value="cm2" data-subtext="cm2">Centimeter Kubik</option>
                                            <option value="m" data-subtext="m">Meter</option>
                                            <option value="m2" data-subtext="m2">Meter Kubik</option>
                                        </optgroup>
                                        <optgroup label="Satuan Lain-lain">
                                            <option value="unit" data-subtext="unit">Unit</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <b>Status</b>
                                <div class="col-md-12">
                                    <input name="status" type="radio" id="active" value="available"/>
                                    <label for="active">Tersedia</label>
                                    <input name="status" type="radio" id="nonactive" value="notavailable" />
                                    <label for="nonactive">Tidak Tersedia</label>
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
                        
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-save-material" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-material-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Bahan Baku</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-material-detail">
                            <tr>
                                <th class="col-md-2 ">Nama Material</th>
                                <td class="col-md-10 name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2 ">Stock</th>
                                <td class="col-md-10 stock"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2 ">Status</th>
                                <td class="col-md-10 status"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2 ">Catatan</th>
                                <td class="col-md-10 note"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2 ">Dibuat Pada</th>
                                <td class="col-md-10 created-at"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2 ">Diperbaharui Pada</th>
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

        materialsDatatables();

        // function get materials
        function materialsDatatables() {
            var no = 1;
            $('#myTable').DataTable({
                "ajax": {
                    url: '<?php echo base_url("Materials/materialsGet"); ?>',
                    dataSrc: ''
                },
                "columns": [
                    {
                        render: function(){
                            return no++;
                        }
                    },
                    {
                        data: 'material_id',
                        name: 'material_id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        name: 'stock',
                        render: function(data, type, full, meta){
                            return full.stock+' '+full.stock_type;
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function(data, type, full, meta){
                            if(full.status == "available"){
                                return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>';
                            }else{
                                return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak Tersedia</button>';
                            }
                        }
                    },
                    {
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-material-detail" title="Detail" data="' + full.material_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                                '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-material-edit" title="Edit" data="' + full.material_id + '"><i class="material-icons">edit</i></a>' +
                                '<a type="javascript:;" class="btn btn-xs waves-effect btn-material-delete" title="Detele" data="' + full.material_id + '"><i class="material-icons">delete</i></a>';
                        }
                    }
                ],
                "processing": true,
                "bDestroy": true,
                "fnDrawCallback": function(oSettings) {
                    // display modal-material-detail
                    $('.btn-material-detail').click(function() {
                        var id = $(this).attr('data');
                        $('#modal-material-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Materials/materialGet"); ?>',
                            data: {id: id},
                            async: false,
                            dataType: 'json'
                        }).done(function(response){
                            $('#table-material-detail .name').html(response.name);
                            $('#table-material-detail .stock').html(response.stock);
                            if (response.status == 'available') {
                                $('#table-material-detail .status').html('<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Tersedia</button>');
                            } else {
                                $('#table-material-detail .status').html('<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak Tersedia</button>');
                            }
                            $('#table-material-detail .note').html(response.note);
                            $('#table-material-detail .created-at').html(response.created_at);
                            $('#table-material-detail .updated-at').html(response.updated_at);
                        }).fail(function(){
                            swal('Failed', 'Error', 'error');
                        });
                    });

                    // btn-material-edit
                    $('.btn-material-edit').click(function() {
                        $('#modal-material-form').find('.modal-title').text('Edit Bahan Baku');
                        $('#material-form').attr('action', '<?php echo base_url("Materials/materialUpdate");?>');

                        $("#material-form input[name=password]").attr("disabled", "");
                        $("#material-form input[name=cpassword]").attr("disabled", "");
                        var id = $(this).attr('data');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Materials/materialGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json'
                        }).done(function(response) {
                            $('#material-form input[name=material-id]').val(response.material_id);
                            $('#material-form input[name=name]').val(response.name);
                            $('#material-form input[name=stock]').val(response.stock);
                            $('#material-form [name="stock-type"]').selectpicker('val', response.stock_type);
                            if(response.status == 'available'){
                                $('#material-form #active').prop("checked", true);
                            }else{
                                $('#material-form #nonactive').prop("checked", true);
                            }
                            $('#material-form textarea[name=note]').html(response.note);
                            $('#modal-material-form').modal('show');
                        }).fail(function() {
                            swal('Failed', 'Error', 'error');
                        });
                    });

                    // btn delete material
                    $('.btn-material-delete').click(function() {
                        var id = $(this).attr('data');
                        swal({
                            title: "Hapus Data?",
                            text: 'Pilih "OK" untuk menghapus',
                            type: "info",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                        }, function() {
                            setTimeout(function() {
                                materialDelete(id);
                            }, 1000);
                        });
                    });

                }
            });
        }

        //function create material
        function materialSave(url, data) {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Tersimpan", "Data Bahan Baku Telah Tersimpan", "success");
                materialsDatatables();
                $('#modal-material-form').modal('hide');
                $('#material-form')[0].reset();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function materialDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Materials/materialDelete"); ?>',
                data: {
                    id: id
                },
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Bahan Baku Telah Terhapus", "success");
                materialsDatatables();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function convertToRupiah(data)
        {
            var rupiah = '';		
            var angkarev = data.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }

        //modal create materiale
        $("#btn-create-material").click(function() {
            $('#material-form')[0].reset();
            $('#material-form #active').prop('checked', true);
            $('#material-form select').selectpicker('deselectAll');
            $('#material-form textarea').html("");

            $('#modal-material-form').find('.modal-title').text('Tambah Bahan Baku');
            $('#material-form').attr('action', '<?php echo base_url("Materials/materialCreate");?>');
            $('#modal-material-form').modal('show');
        });

        // save material
        $("#btn-save-material").click(function() {
            var url = $('#material-form').attr('action');
            var data = $('#material-form').serialize();

            swal({
                title: "Data Bahan Baku Yang Dimasukan Sudah Benar?",
                text: 'Pilih "OK" untuk menyimpan',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function() {
                setTimeout(function() {
                    materialSave(url, data);
                }, 1000);
            });
        });

        // reload datatables
        $('#reload-datatables').click(function() {
            materialsDatatables();
        });

        // reload datatables
        $('#reload-page').click(function() {
            location.reload();
        });

    });
</script>