<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Kategori Produk
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
                        <button type="button" class="btn bg-blue waves-effect" id="btn-form-category" title="Tambah Kategori" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">add</i>
							<span>Tambah Kategori</span>
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
                                        <th>Nama Kategori</th>
                                        <th>Note</th>                                       
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="categories-data">

                                </tbody>
                                <tfoot>
									<tr>
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
<div class="modal fade" id="modal-category-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="category-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="category-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Nama Kategori</b>
                                    <input type="text" class="form-control" name="name" required placeholder="Nama Kategori">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Deskripsi</b>
                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize" required placeholder="Deskripsi"></textarea>
                                </div>
                            </div>
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


<script type="text/javascript">
    $(document).ready(function(){
        // function levelGet
        function categoriesGet() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("Products/categoriesGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response){
                var html = '';
                var i;
                for (i = 0; i < response.length; i++) {
                    html += '<tr>' +
                        '<td>'+ (i+1) +'</td>' +                   
                        '<td>'+ response[i].category_id +'</td>' +                   
                        '<td>'+ response[i].name +'</td>' +
                        '<td>'+ response[i].description +'</td>' +
                        '<td>'+
                            '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-category-edit" title="Edit" data="' + response[i].category_id + '"><i class="material-icons">edit</i></a>' +
                            '<a type="javascript:;" class="btn btn-xs waves-effect btn-category-delete" title="Detele" data="' + response[i].category_id + '"><i class="material-icons">delete</i></a>' +
                        '</td>' +                        
                    '</tr>';                        
                }
                $('#categories-data').html(html);

                // btn-category-delete
                $('.btn-category-delete').click(function() {
                    var id = $(this).attr('data');
                    swal({
                        title: "Hapus Data Ini?",
                        text: 'Pilih "OK" jika ingin menghapus',
                        type: "info",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        showLoaderOnConfirm: true
                    }, function() { 
                        setTimeout(function() {
                            categoryDelete(id);
                        }, 1000);
                    });
                });

                // btn-category-edit
                $('.btn-category-edit').click(function(){
                    $('#modal-category-form').find('.modal-title').text('Edit Kategori');
                    $('#category-form').attr('action', '<?php echo base_url("Products/categoryUpdate");?>');

                    var id = $(this).attr('data');
                    // console.log(id);
                    $.ajax({
                        type: 'ajax',
                        method: 'get',
                        url: '<?php echo base_url("Products/categoryGet"); ?>',
                        data: {id: id},
                        async: false,
                        dataType: 'json'
                    }).done(function(response) {
                        $('#category-form input[name=category-id]').val(response[0].category_id);
                        $('#category-form input[name=name]').val(response[0].name);
                        $('#category-form textarea[name=description]').html(response[0].description);
                        $('#modal-category-form').modal('show');
                    }).fail(function() {
                        swal('Failed', 'ERROR', 'error');
                    });
                });
                

            }).fail(function(){
                swal('Failed', 'ERROR', 'error');                
            });
        }

        // function categoriesSave
        function categoriesSave(url, data) {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Tersimpan", "Data Posisi/Level Telah Tersimpan", "success");
                categoriesGet();
                $('#modal-category-form').modal('hide');
                $('#category-form')[0].reset();
            }).fail(function() {
                swal('Failed', 'ERROR', 'error');
            });
        }

        function categoryDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Products/categoryDelete"); ?>',
                data: {
                    id: id
                },
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Kategori Telah Terhapus", "success");
                categoriesGet();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }
        
        // btn-modal-level
        $('#btn-form-category').click(function() {
            $('#category-form')[0].reset();

            $('#modal-category-form').find('.modal-title').text('Tambah Kategori');
            $('#category-form').attr('action', '<?php echo base_url("Products/categoryCreate");?>');
            $('#modal-category-form').modal('show');
        });

        //btn-save-level
        $('#btn-save-category').click(function() {
            var url = $('#category-form').attr('action');
            var data = $('#category-form').serialize();
            swal({
                title: "Data Kategori yang dimasukan sudah benar?",
                text: 'Pilih "OK" jika sudah benar',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function() {
                setTimeout(function() {
                    categoriesSave(url, data);
                    categoriesGet();
                }, 1000);
            });
        });

        categoriesGet()
        

       
    });
</script>