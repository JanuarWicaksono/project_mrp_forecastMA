<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pelanggan
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
                        <button type="button" class="btn btn-primary waves-effect" id="btn-modal-costumer" title="Add costumer" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">add</i>
							<span>Tambah Pelanggan</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="btn-reload-costumers" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">refresh</i>
						</button><br><br>
                        <div class="table-responsive">
                            <table id="costumersTable" class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th>no</th>                                    
                                        <th>id</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="costumers-data">

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

<!-- Modal Form costumer-->
<div class="modal fade" id="modal-costumer-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="costumer-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="costumer-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Pelanggan</b>
                                    <input type="text" class="form-control" name="costumer-name" placeholder="Nama Pelanggan">
                                </div>
                                <div class="help-info">Max 50 Karakter</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Email</b>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="help-info">contoh xxx@xxx.com</div>                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nomor Telepon</b>
                                    <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon">
                                </div>
                                <div class="help-info">contoh xxx@xxx.com</div>                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float" disabled>
                                <div class="">
                                    <b>Status</b>
                                    <div class="col-md-12">
                                        <input name="status" type="radio" id="active" value="active"/>
                                        <label for="active">Aktif</label>
                                        <input name="status" type="radio" id="nonactive" value="nonactive" />
                                        <label for="nonactive">Tidak Aktif</label>
                                    </div>
                                </div>
                                <div class="help-info">Pilih Salah Satu</div>                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Alamat</b>
                                    <textarea name="address" cols="30" rows="5" class="form-control no-resize" placeholder="Alamat"></textarea>
                                </div>
                                <div class="help-info">Inputan Tidak Terbatas</div>                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="btn-save-costumer" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail Costumers -->
<div class="modal fade" id="modal-costumer-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Pelanggan</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-costumers-detail">
                            <tr>
                                <th class="col-md-2">Nama Pelanggan :</th>
                                <td class="col-md-10 name">Indomaret</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Email :</th>
                                <td class="col-md-10 email">indomaret.com</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">No Telepon :</th>
                                <td class="col-md-10 phone">januar@gmail.com</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Alamat :</th>
                                <td class="col-md-10 address">januarwicaksono@gmail.com</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Status :</th>
                                <td class="col-md-10 status">Nonaktif</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Dibuat Pada</th>
                                <td class="col-md-10 created-at">Sukabumi</td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Diperbaharui Pada  :</th>
                                <td class="col-md-10 updated-at">085799414363</td>
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
    
    // function get costumers
    function costumersDatatables() {
        var no = 1;
        $('#costumersTable').DataTable({
            "processing": true,
            "bDestroy": true,
            "ajax": {
                url: '<?php echo base_url("Costumers/costumersGet"); ?>',
                dataSrc: ''
            },
            "columns": [{
                    render: function(){
                        return no++;
                    }
                },
                {
                    data: 'costumer_id',
                    name: 'costumer_id'
                },
                {
                    data: 'name',
                    name: "name"
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
                    data: 'Nonactive - Active',
                    name: 'Nonactive - Active',
                    render: function(data, type, full,meta){
                        if(full.status == 'active'){
                            return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Aktif</button>';
                        }else{
                            return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>NonAktif</button>';                            
                        }
                    }
                },
                {
                    name: 'action',
                    render: function(data, type, full, meta) {
                        return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-costumer-detail" title="Detail" data="' + full.costumer_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                            '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-costumer-edit" title="Edit" data="' + full.costumer_id + '"><i class="material-icons">edit</i></a>' +
                            '<a type="javascript:;" class="btn btn-xs waves-effect btn-costumer-delete" title="Detele" data="' + full.costumer_id + '"><i class="material-icons">delete</i></a>';
                    }
                }
            ],
            "fnDrawCallback": function(oSettings) {

                // display modal-costumer-detail
                $('.btn-costumer-detail').click(function() {
                    var id = $(this).attr('data');
                    $('#modal-costumer-detail').modal('show');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Costumers/costumerGet"); ?>',
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            var statusRender = '';
                            if(response.status == 'active'){
                                statusRender = '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Aktif</button>';
                            }else{
                                statusRender = '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>NonAktif</button>';                            
                            }

                            $('#table-costumers-detail .name').html(response.name);
                            $('#table-costumers-detail .email').html(response.email);
                            $('#table-costumers-detail .phone').html(response.phone);
                            $('#table-costumers-detail .status').html(statusRender);
                            $('#table-costumers-detail .address').html(response.address);
                            $('#table-costumers-detail .created-at').html(response.created_at);
                            $('#table-costumers-detail .updated-at').html(response.updated_at);
                        },
                        error: function() {
                            swal('Failed', 'Error', 'error');
                        }
                    });
                });

                // display modal-costumer-edit
                $('.btn-costumer-edit').click(function() {
                    resetForm();

                    $('#modal-costumer-form').find('.modal-title').text('Edit Pelanggan');
                    $('#costumer-form').attr('action', '<?php echo base_url("Costumers/costumerUpdate");?>');

                    $("#costumer-form input[name=password]").attr("disabled", "");
                    $("#costumer-form input[name=cpassword]").attr("disabled", "");
                    var id = $(this).attr('data');
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Costumers/costumerGet"); ?>',
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json'
                    }).done(function(response) {
                        $('#costumer-form input[name=costumer-id]').val(response.costumer_id);
                        $('#costumer-form input[name=costumer-name]').val(response.name);
                        $('#costumer-form input[name=email]').val(response.email);
                        $('#costumer-form input[name=phone]').val(response.phone);
                        if(response.status == 'active'){
                            $('#costumer-form #active').prop('checked', true);
                        }else{
                            $('#costumer-form #nonactive').prop('checked', true);                                                      
                        }
                        $('#costumer-form textarea[name=address]').html(response.address);

                        $('#modal-costumer-form').modal('show');
                    }).fail(function() {
                        swal('Failed', 'something wrong with your input', 'error');
                    });

                });

                // btn delete costumer
                $('.btn-costumer-delete').click(function() {
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
                            costumerDelete(id);
                        }, 1000);
                    });
                });




            }
        });
    }

    function costumerSave(url, data){
        $.ajax({
            type: 'ajax',
            method: 'post',
            url: url,
            data: data,
            async: false,
            dataType: 'json'
        }).done(function(response) {
            if (response.success ==  true) {
                swal("Tersimpan", "Data Perlanggan Telah Terimpan !", "success");
                costumersDatatables();
                $('#modal-costumer-form').modal('hide');
                $('#costumer-form')[0].reset();
            }else{
                $.each(response.messages, function(key, value){
                    var element = $('#costumer-form [name="'+key+'"]');
                    element.parent().removeClass('focused success error').addClass(value.length > 0 ? 'focused error' : 'focused success');
                    element.closest('div.form-group').find('label.error').remove();
                    element.parent().after(value);
                });
                swal('Error !', 'Masukan Inputan Dengan Benar !', 'error');
            }
        }).fail(function() {
            swal('error', 'ERROR', 'error');
        });
    }

    function costumerDelete(id){
        $.ajax({
            type: 'ajax',
            method: 'get',
            async: false,
            url: '<?php echo base_url("Costumers/costumerDelete"); ?>',
            data: {id: id},
            dataType: 'json'
        }).done(function(response) {
            swal("Terhapus", "Data Pelanggan Telah Terhapus", "success");
            costumersDatatables();
        }).fail(function() {
            swal('Failed', 'something wrong with your input', 'error');
        });
    }

    function resetForm(){
        $('#costumer-form')[0].reset();
        $('#costumer-form #active').prop('checked', true);        
        $('#costumer-form textarea').html("");
        $('#costumer-form .form-line').removeClass('focused success error');
        $('#costumer-form label.error').remove();
    }

    //modal create costumer 
    $("#btn-modal-costumer").click(function() {
        resetForm();
        $('#modal-costumer-form').find('.modal-title').text('Tambah Pelanggan');
        $('#costumer-form').attr('action', '<?php echo base_url("Costumers/costumerCreate");?>');
        $('#modal-costumer-form').modal('show');
    });

    //btn-costumer-save
    $("#costumer-form").submit(function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        var data = $(this).serialize();

        swal({
            title: "Data Pelanggan Yang Dimasukan Sudah Benar?",
            text: 'Pilih "OK" untuk menyimpan',
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function() {
            setTimeout(function() {
                costumerSave(url, data);
            }, 1000);
        });
    });
    
    //btn-reload
    $('#btn-reload-costumers').click(function() {
        costumersDatatables();
    });

    $('#btn-reload-page').click(function() {
        location.reload();
    });

    costumersDatatables();

});
</script>