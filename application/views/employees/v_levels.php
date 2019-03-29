<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h2>
                            Posisi / Level
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
                            <button type="button" class="btn btn-primary waves-effect" id="btn-modal-level" title="Add Level" data-toggle="modal" data-target="#largeModal">
                                <i class="material-icons">add</i>
                                <span>Tambah Posisi</span>
                            </button>
                            <button type="button" class="btn bg-green waves-effect" id="reload-levels" title="Refresh" data-toggle="modal" data-target="#largeModal">
                                <i class="material-icons">refresh</i>
                                <!-- <span>Segarkan Data</span> -->
                            </button><br><br>
                            <table id="levelsTable" class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Posisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="levels-data">

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
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Modal Form Level-->
<div class="modal fade" id="modal-level-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="level-form" method="post">
                        <input type="hidden" name="level-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Posisi/Level</b>
                                    <input type="text" class="form-control" name="level-name" placeholder="Nama Posisi/Level">
                                    <div class="help-info">Max. 20 Karakter</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line" id="data-levels-access">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="btn-save-level" type="submit" class="btn  btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>      
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

<!-- <script type="text/javascript" src="<?= base_url('assets/js/validate.js');?>"></script> -->

<script type="text/javascript">
    $(document).ready(function() {

        // function levelGet
        function levelsGet() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("Employees/levelsGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response){
                var html = '';
                var i;
                for (i = 0; i < response.length; i++) {
                    html += '<tr>' +
                        '<td>'+ (i+1) +'</td>' +                    
                        '<td>'+ response[i].level_name +'</td>' +
                        '<td>'+
                            '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-level-edit" title="Edit" data="' + response[i].level_id + '"><i class="material-icons">edit</i></a>' +
                            '<a type="javascript:;" class="btn btn-xs waves-effect btn-level-delete" title="Detele" data="' + response[i].level_id + '"><i class="material-icons">delete</i></a>' +
                        '</td>' +                        
                    '</tr>';                        
                }
                $('#levels-data').html(html);

                // btn-level-delete
                $('.btn-level-delete').click(function() {
                    var id = $(this).attr('data');
                    // console.log(id);
                    swal({
                        title: "Hapus Data Ini?",
                        text: 'Pilih "OK" jika ingin menghapus',
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function() { 
                        setTimeout(function() {
                            levelDelete(id);
                        }, 1000);
                    });
                });

                // btn-level-edit
                $('.btn-level-edit').click(function(){
                    resetForm();
                    $('#modal-level-form').find('.modal-title').text('Edit Posisi/Level');
                    $('#level-form').attr('action', '<?php echo base_url("Employees/levelUpdate");?>');

                    var id = $(this).attr('data');
                    // console.log(id);
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Employees/levelAccessGet"); ?>',
                        data: {id: id},
                        async: false,
                        dataType: 'json'
                    }).done(function(response) {
                        $('#level-form input[name=level-id]').val(response[0].level_id);
                        $('#level-form input[name=level-name]').val(response[0].level_name);
                        levelsAccessGet();
                        if(response[0].level_access != null){
                            for (i = 0; i < response[0].level_access.length; i++) {
                                var accessId = response[0].level_access[i].access_id;
                                $('#level_access_' + accessId).attr('checked', 'checked');
                            }
                        }
                        $('#modal-level-form').modal('show');
                    }).fail(function() {
                        swal('Failed', 'ERROR', 'error');
                    });
                });
                

            }).fail(function(){
                swal('Failed', 'ERROR', 'error');                
            });

        }

        // function levelSave
        function levelSave(url, data) {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                console.log(response);
                if (response.success == true) {
                    swal("Tersimpan", "Data Posisi/Level Telah Tersimpan", "success");
                    levelsGet();
                    $('#modal-level-form').modal('hide');
                    $('#level-form')[0].reset();
                }else if(response.success == false){
                    $.each(response.messages, function(key, value){
                    var element = $('#level-form [name="'+key+'"]');
                    element.parent().removeClass('focused success error').addClass(value.length > 0 ? 'focused error' : 'focused success');
                    element.closest('div.form-group').find('label.error').remove();
                    element.parent().after(value);
                    });
                    swal('Error !', 'Masukan Inputan Dengan Benar !', 'error');
                }
            }).fail(function() {
                swal('Erorr !', 'Masukan Form Dengan Benar !', 'error');
            });
        }

        function levelDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Employees/levelDelete"); ?>',
                data: {
                    id: id
                },
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Posisi/Level Telah Terhapus", "success");
                levelsGet();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }
        
        function levelsAccessGet(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("Employees/levelsAccessGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response){
                var html = '<b>Level Akses</b><br>';
                for (var i = 0; i < response.length; i++) {
                    var accessId = response[i].access_id;
                    html += '<input type="checkbox" class="filled-in" id="level_access_'+ accessId +'" name="level-access[]" value="'+ accessId +'">' +
                    '<label for="level_access_'+ accessId +'">'+ response[i].access_name +'</label><br>';        
                }
                $('#data-levels-access').html(html);
            }).fail(function(){
                swal('Failed', 'Error', 'error');
            })
        }

        function resetForm(){
            $('#level-form')[0].reset();
            $('#level-form .form-line').removeClass('focused success error');
            $('#level-form label.error').remove();
        }


        $('#btn-modal-level').click(function() {
            resetForm();
            levelsAccessGet();

            $('#modal-level-form').find('.modal-title').text('Tambah Posisi/Level');
            $('#level-form').attr('action', '<?php echo base_url("Employees/levelCreate");?>');
            $('#modal-level-form').modal('show');
        });

        $('#level-form').submit(function(e) {
            e.preventDefault();

            var url = $(this).attr('action');
            var data = $(this).serialize();
            swal({
                title: "Data Posisi/Level yang dimasukan sudah benar?",
                text: 'Pilih "OK" jika sudah benar',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function() { 
                setTimeout(function() {
                    levelSave(url, data);
                    levelsGet();
                }, 1000);
            });
        });

        $('#reload-levels').click(function(){
            $('#levels-data tr').remove();
            levelsGet();
        })
        
        levelsGet();

    });
</script>