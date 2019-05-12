<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Pegawai
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
                        <div id="alert-success-employees" class="alert alert-success" style="display:none;">
                            Data Pegawai Telah <strong>Tersimpan !</strong>
                        </div>
                        <button type="button" class="btn bg-blue waves-effect" id="btn-create-employee" title="Add Employee" data-toggle="modal" data-target="#largeModal">
                            <i class="material-icons">add</i>
                            <span>Tambah Pegawai</span>
                        </button>
                        <button type="button" class="btn bg-green waves-effect" id="reload-datatables" title="Refresh" data-toggle="modal" data-target="#largeModal">
                            <i class="material-icons">refresh</i>
                        </button><br><br>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama Pegawai</th>
                                        <th>Posisi</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="employees-data">

                                </tbody>
                                <!-- <tfoot>
									<tr>
										<th></th>
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

<!-- Modal Form Employee Create-->
<div class="modal fade" id="modal-employee-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel"></h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <form id="employee-form" method="post">
                        <input type="hidden" name="employee-id" value="0">
                        <div class="col-md-12">
                            <div class="form-group form-float ">
                                <div class="form-line">
                                    <b>Nama Lengkap </b>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap Pegawai">
                                </div>
                                <div class="help-info">Max. 40 Karakter</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <b>Position / Level</b>
                                <select id="levels-form" id="employee-level" class="form-control " name="level">
                                    <option value="">-- Pilih Posisi/Level --</option>

                                </select>
                                <div class="help-info">Pilih Salah Satu</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <b>Jenis Kelamin</b>
                                <select id="employee-gender" class="form-control show-tick" name="gender">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="help-info">Pilih Salah Satu</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Email</b>
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="help-info">Contoh : xxx@example.com</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Kontak</b>
                                    <input type="number" id="employee-phone" class="form-control" placeholder="Nomor Telepon" name="phone">
                                </div>
                                <div class="help-info">Contoh : 08XXXXXXXXXX</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Username</b>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="help-info">Max. 20 Karakter</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Password</b>
                                    <input type="password" id="form-password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="help-info">Max. 20 Karakter</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Konfirmasi Password</b>
                                    <input type="password" id="form-cpassword" class="form-control" name="cpassword" placeholder="Konfirmasi Password">
                                </div>
                                <div class="help-info">Max. 50 Karakter</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <b>Alamat</b>
                                    <textarea name="address" cols="30" rows="5" class="form-control no-resize" placeholder="Alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary waves-effect" id="btn-save-employee"><i class="material-icons">save</i><span>Simpan</span></button>
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

<div class="modal fade" id="modal-employee-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Pegawai</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-employee-detail">
                            <tr>
                                <th class="col-md-2">Nama Pegawai :</th>
                                <td class="col-md-10 employee-name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Posisi / Level :</th>
                                <td class="col-md-10 employee-level"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Jenis Kelamin :</th>
                                <td class="col-md-10 employee-gender"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Email :</th>
                                <td class="col-md-10 employee-email"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Username :</th>
                                <td class="col-md-10 employee-username"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Alamat :</th>
                                <td class="col-md-10 employee-address"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Nomor Telepon :</th>
                                <td class="col-md-10 employee-phone"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Dibuat Pada</th>
                                <td class="col-md-10 created-at"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Diperbaharui Pada :</th>
                                <td class="col-md-10 updated-at"></td>
                            </tr>
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

<script type="text/javascript">
    $(document).ready(function() {
        employeesDatatables();

        // function get employees
        function employeesDatatables() {
            var no = 1;
            $('#myTable').DataTable({
                "ajax": {
                    method: 'get',
                    url: '<?php echo base_url("Employees/employeesGet"); ?>',
                    dataSrc: ''
                },
                "columns": [{
                        render: function() {
                            return no++;
                        }
                    }, {
                        data: 'employee_id',
                        name: 'employee_id'
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'level_name',
                        name: 'level_name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-employee-detail" title="Detail" data="' + full.employee_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                                '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-employee-edit" title="Edit" data="' + full.employee_id + '"><i class="material-icons">edit</i></a>' +
                                '<a type="javascript:;" class="btn btn-xs waves-effect btn-employee-delete" title="Detele" data="' + full.employee_id + '"><i class="material-icons">delete</i></a>';
                        }
                    }
                ],
                "processing": true,
                "bDestroy": true,
                "fnDrawCallback": function(oSettings) {
                    // display modal-employee-detail
                    $('.btn-employee-detail').click(function() {
                        var id = $(this).attr('data');
                        $('#modal-employee-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Employees/employeeGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                $('#table-employee-detail .employee-name').html(data.name);
                                $('#table-employee-detail .employee-level').html(data.level_name);
                                $('#table-employee-detail .employee-gender').html(data.gender);
                                $('#table-employee-detail .employee-email').html(data.email);
                                $('#table-employee-detail .employee-username').html(data.username);
                                $('#table-employee-detail .employee-address').html(data.address);
                                $('#table-employee-detail .employee-phone').html(data.phone);
                                $('#table-employee-detail .created-at').html(data.created_at);
                                $('#table-employee-detail .updated-at').html(data.updated_at);
                            },
                            error: function() {
                                alert('Gagal', 'ERROR', 'error');
                            }
                        });
                    });

                    // display modal-employee-edit
                    $('.btn-employee-edit').click(function() {
                        $('#modal-employee-form').find('.modal-title').text('Edit Pegawai');
                        $('#employee-form').attr('action', '<?php echo base_url("Employees/employeeUpdate"); ?>');
                        var id = $(this).attr('data');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Employees/employeeGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json'
                        }).done(function(response) {
                            resetForm();

                            $('#employee-form input[name=employee-id]').val(response.employee_id);
                            $('#employee-form input[name=name]').val(response.name);
                            $('#employee-form input[name=email]').val(response.email);
                            $('#employee-form input[name=username]').val(response.username);
                            $('#employee-form textarea[name=address]').html(response.address);
                            $('#employee-form input[name=phone]').val(response.phone);
                            $('#employee-form #levels-form').selectpicker('val', response.level_id);
                            $('#employee-form #employee-gender').selectpicker('val', response.gender);

                            $('#modal-employee-form').modal('show');
                        }).fail(function() {
                            swal('Error !', 'Masukan Input Dengan Benar !', 'error');
                        });

                    });

                    // btn delete employee
                    $('.btn-employee-delete').click(function() {
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
                                employeeDelete(id);
                            }, 1000);
                        });
                    });




                }
            });
        }

        //function create employee
        function employeeSave(url, data) {
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                if (response.success == true) {
                    swal("Tersimpan", "Data Pegawai Telah Tersimpan ! ", "success");
                    employeesDatatables();
                    $('#modal-employee-form').modal('hide');
                    $('#employee-form')[0].reset();
                } else if (response.success == false) {
                    $.each(response.messages, function(key, value) {
                        var element = $('#employee-form [name="' + key + '"]');
                        element.parent().removeClass('focused success error').addClass(value.length > 0 ? 'focused error' : 'focused success');
                        element.closest('div.form-group').find('label.error').remove();
                        element.parent().after(value);
                    });
                    swal('Error !', 'Masukan Inputan Dengan Benar !', 'error');
                }
            }).fail(function() {
                swal('Error !', 'Masukan Inputan Dengan Benar !', 'error');
            });
        }

        function employeeDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url("Employees/employeeDelete"); ?>',
                data: {
                    id: id
                },
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Pegawai Telah Terhapus", "success");
                employeesDatatables();
            }).fail(function() {
                swal('Error !', 'Error !', 'error');
            });
        }

        function levelsGet() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("Employees/levelsGet"); ?>',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option id="level-op-' + data[i].level_id + '" value="' + data[i].level_id + '">' + data[i].level_name + '</option>';
                    }
                    $('#levels-form').append(html);
                },
                error: function() {
                    swal('Failed', 'ERROR', 'error');
                }
            })
        }

        function resetForm() {
            $('#employee-form')[0].reset();
            $('#employee-form select').selectpicker('deselectAll');
            $('#employee-form textarea').html("");
            $("#employee-form input[name=password]").removeAttr("disabled");
            $("#employee-form input[name=cpassword]").removeAttr("disabled");

            $('#employee-form .form-line').removeClass('focused success error');
            $('#employee-form label.error').remove();
        }

        //modal create employeee
        $("#btn-create-employee").click(function() {
            resetForm();

            $('#modal-employee-form').find('.modal-title').text('Tambah Pegawai');
            $('#employee-form').attr('action', '<?php echo base_url("Employees/employeeCreate"); ?>');
            $('#modal-employee-form').modal('show');
        });

        // save employee
        $("#employee-form").submit(function(e) {
            e.preventDefault();
            // console.log('submit');
            var url = $(this).attr('action');
            var data = $(this).serialize();

            swal({
                title: "Data Pegawai yang dimasukan sudah benar?",
                text: 'Pilih "OK" jika sudah benar',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function() {
                setTimeout(function() {
                    employeeSave(url, data);
                }, 1000);
            });
        });

        // reload datatables
        $('#reload-datatables').click(function() {
            employeesDatatables();
        });

        // reload datatables
        $('#reload-page').click(function() {
            location.reload();
        });

        //load employees datatables

        levelsGet();
    });
</script>