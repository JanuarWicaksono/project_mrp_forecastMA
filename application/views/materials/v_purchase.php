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
                            <li role="presentation">
                                <a href="#tab-purchases-material" data-toggle="tab">
                                    <i class="material-icons">view_list</i> Pesanan Per Materials
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane fade in active" id="tab-purchases-all">

                                <div class="table-responsive">

                                    <table id="purchasesTable" class="table table-bordered table-striped table-hover js-basic-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id</th>
                                                <th>Tanggal</th>
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

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-purchases-finished">

                                <h2>tab-purchases-finished</h2>

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-purchases-unfinished">

                                <h2>tab-purchases-unfinished</h2>

                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab-purchases-material">

                                <h2>tab-purchases-material</h2>

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
                    <h2>First Step</h2>
                    <section>
                        <form action="" id="form-purchases">

                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <b>Status</b>
                                    <input name="status" type="radio" id="arrived" value="arrived" />
                                    <label for="arrived">Sudah Datang</label>
                                    <input name="status" type="radio" id="notarrived" value="notarrived" checked/>
                                    <label for="notarrived">Belum Datang</label>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="col-md-1">#</th>
                                        <th>Nama Material</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Note</th>
                                    </tr>
                                </thead>
                                <tbody id="materials-form">

                                    <tr class="material-form">
                                        <th scope="row">1</th>
                                        <td>
                                            <div class="form-group form-float" style="margin-bottom:0">
                                                <select class="form-control show-tick material-input" name="materials[]" data-live-search="true" data-size="5" required>
                                                    <option value="">-- Pilih Material --</option>

                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group form-float" style="margin-bottom:0">
                                                <div class="form-line">
                                                    <input type="number" class="form-control num-comb-input" name="num-of-purchase[]" required placeholder="Jumlah Pemesanan">
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
                                            <button type="button" class="btn btn-block btn-primary waves-effect" id="btn-add-form-material">
                                                <i class="material-icons">add</i>
                                                <span>Tambah</span>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger waves-effect" id="btn-remove-form-material">
                                                <i class="material-icons">close</i>
                                                <span>Hapus</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>
                            <div class="col-md-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <b>Catatan</b>
                                        <textarea name="note" cols="30" rows="5" class="form-control no-resize" required placeholder="Catatan">
                                            <?php echo set_value('note'); ?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>

                    <h2>Second Step</h2>
                    <section>
                        <p>
                            Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum, nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus.
                        </p>
                    </section>

                    <h2>Third Step</h2>
                    <section>
                        <p>
                            Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat. Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris venenatis.
                        </p>
                    </section>

                    <h2>Forth Step</h2>
                    <section>
                        <p>
                            Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae. Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo tortor.
                        </p>
                    </section>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btn-conf-purchase" type="submit" class="btn btn-primary waves-effect"><i class="material-icons">save</i><span>Simpan</span></button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="material-icons">close</i><span>Tutup</span></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-conf" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Konfirmasi Detail Pemesanan Bahan Baku</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="body">
                        <div class="table responsive">
                            <table class="table table-bordered" id="table-purchase-detail">
                                <tr>
                                    <th class="col-md-2">Status</th>
                                    <td class="col-md-4 status" colspan="3"></td>
                                </tr>
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
            </div>
            <div class="modal-footer">
                <button id="btn-save" type="submit" class="btn btn-primary waves-effect">
                    <i class="material-icons">save</i><span>Simpan</span>
                </button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    <i class="material-icons">close</i><span>Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        function purchasesDatatables() {
            var no = 1;
            $('#purchasesTable').DataTable({
                "processing": true,
                "bDestroy": true,
                "ajax": {
                    url: '<?php echo base_url("Materials/purchasesGet"); ?>',
                    dataSrc: ''
                },
                "columns": [{
                        render: function(){
                            return no++;
                        }
                    },
                    {
                        data: 'material_trans_id',
                        name: 'material_trans_id'
                    },
                    {
                        data: 'date',
                        name: "date"
                    },
                    {
                        data: 'Nonactive - Active',
                        name: 'Nonactive - Active',
                        render: function(data, type, full, meta){
                            if(full.status == 'finished'){
                                return '<button type="button" class="btn btn-xs bg-green waves-effect" disabled>Selesai</button>';
                            }else{
                                return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Belum Selesai</button>';                            
                            }
                        }
                    },
                    {
                        name: 'action',
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-purchase-detail" title="Detail" data="' + full.material_trans_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                                '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-purchase-edit" title="Edit" data="' + full.material_trans_id + '"><i class="material-icons">edit</i></a>' +
                                '<a type="javascript:;" class="btn btn-xs waves-effect btn-purchase-delete" title="Detele" data="' + full.material_trans_id + '"><i class="material-icons">delete</i></a>';
                        }
                    }
                ],
                "fnDrawCallback": function(oSettings) {

                    // display modal-purchase-detail
                    $('.btn-purchase-detail').click(function() {
                        var id = $(this).attr('data');
                        $('#modal-purchase-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("materials/purchaseGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json',
                            success: function(response) {

                                $('#modal-purchase-detail').modal('show');

                            },
                            error: function() {
                                swal('Failed', 'Error', 'error');
                            }
                        });
                    });

                    // // display modal-purchase-edit
                    // $('.btn-purchase-edit').click(function() {
                    //     $('#modal-purchase-form').find('.modal-title').text('Edit Produk');
                    //     $('#purchase-form').attr('action', '<?php echo base_url("purchases/purchaseUpdate");?>');
                    //     $('#purchase-form [name="status"]').removeAttr('checked');

                    //     var id = $(this).attr('data');
                    //     $.ajax({
                    //         type: 'ajax',
                    //         method: 'get',
                    //         url: '<?php echo base_url("purchases/purchaseGet"); ?>',
                    //         data: {
                    //             id: id
                    //         },
                    //         async: false,
                    //         dataType: 'json'
                    //     }).done(function(response) {

                    //         $('#purchase-form input[name=purchase-id]').val(response[0].purchase_id);
                    //         $('#purchase-form input[name=purchase-name]').val(response[0].purchase_name);
                    //         $('#purchase-form input[name=price]').val(response[0].price);
                    //         $('#purchase-form input[name=expiration]').val(response[0].expiration);
                    //         $('#purchase-form input[name=unit-in-stock]').val(response[0].unit_in_stock);
                    //         $('#purchase-form #categories').selectpicker('val', response[0].category_id);
                    //         if (response[0].status == 'available') {
                    //             $( "#purchase-form #active").prop("checked", true);                       
                    //         } else {
                    //             $( "#purchase-form #nonactive" ).prop("checked", true);
                    //         }
                    //         $('#purchase-form textarea[name=description]').html(response[0].purchase_description);
                    //         $('#purchase-form textarea[name=note]').html(response[0].note);

                    //         $('#modal-purchase-form').modal('show');
                    //     }).fail(function() {
                    //         swal('Failed', 'something wrong with your input', 'error');
                    //     });

                    // });

                    // // display modal-purchase-bom
                    // $('.btn-purchase-bom').click(function() {
                    //     $('#modal-purchase-form-bom').find('.modal-title').text('Bill Of Material');

                    //     var purchaseWhere = $(this).attr('data');
                    //     $.ajax({
                    //         type: 'ajax',
                    //         method: 'get',
                    //         url: '<?php echo base_url("purchases/bomGet"); ?>',
                    //         data: {
                    //             purchaseWhere: purchaseWhere
                    //         },
                    //         async: false,
                    //         dataType: 'json'
                    //     }).done(function(response) {
                    //         resetBomModal();
                            
                    //         $('#form-bom [name="purchase-id"]').val(response.purchases_purchase_id);
                    //         $('#table-bom .name').html(response.purchase_name);
                    //         if (response.response_status == true) {
                    //             $('#form-bom').attr('action', '<?php echo base_url("purchases/bomUpdate");?>');
                    //             $('#form-bom [name="bom-id"]').val(response.bom_id);
                    //             for (var i = 0; i < response.materials.length; i++) {
                    //                 formBomEdit(response.materials[i]);
                    //             }
                    //             $('.bom-form-'+bomFormNo).remove();
                    //             bomFormNo--;
                    //             $('input[name="num-comb-purchase"]').val(response.num_comb_purchase);

                    //         } else if (response.response_status == false){
                    //             $('#form-bom').attr('action', '<?php echo base_url("purchases/bomCreate");?>');
                    //         }
                    //         $('#modal-purchase-form-bom').modal('show');
                            
                    //         $('#btn-save-bom').click(function(){
                    //             var url = $('#form-bom').attr('action');
                    //             var data = $('#form-bom').serialize();
                    //             swal({
                    //                 title: "Ubah BOM Produk ini ?",
                    //                 text: 'Pilih "OK" untuk menyimpan',
                    //                 type: "info",
                    //                 showCancelButton: true,
                    //                 closeOnConfirm: false,
                    //                 showLoaderOnConfirm: true,
                    //             }, function() {
                    //                 setTimeout(function() {
                    //                     $.ajax({
                    //                         type: 'ajax',
                    //                         method: 'post',
                    //                         url: url,
                    //                         data: data,
                    //                         async: false,
                    //                         dataType: 'json'
                    //                     }).done(function(response) {
                    //                         swal("Tersimpan", "Data Bill Of Meterial Produk ini Telah Terimpan !", "success");
                    //                         purchasesDatatables();
                    //                         $('#modal-purchase-form-bom').modal('hide');
                    //                     }).fail(function() {
                    //                         swal('error', 'Error, Pastikan Inputan Benar dan Terisi semua', 'error');
                    //                     });
                    //                 }, 1000);
                    //             });
                                
                    //         });

                    //     }).fail(function() {
                    //         swal('Failed', 'something wrong with your input', 'error');
                    //     });

                    // });

                    // // btn delete purchase
                    // $('.btn-purchase-delete').click(function() {
                    //     var id = $(this).attr('data');
                    //     swal({
                    //         title: "Hapus Data Ini?",
                    //         text: 'Pilih "OK" untuk menghapus',
                    //         type: "info",
                    //         showCancelButton: true,
                    //         closeOnConfirm: false,
                    //         showLoaderOnConfirm: true,
                    //     }, function() {
                    //         setTimeout(function() {
                    //             purchaseDelete(id);
                    //         }, 1000);
                    //     });
                    // });




                }
            });
        }

        function materialsGet(materialForm){
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
                materialForm.find('select').append(html);
                
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function destroySelectPicker(el) {
            // URL: https://github.com/silviomoreto/bootstrap-select/issues/605
            el.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
        }

        function purchaseSave(url, data){
            $.ajax({
                type: 'ajax',
                method: 'POST',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Tersimpan", "Data Pemsanan Telah Terimpan !", "success");
                purchasesDatatables();
                $('#modal-product-form').modal('hide');
            }).fail(function() {
                swal('error', 'ERROR', 'error');
            });
        }

        $('#btn-modal-create').click(function(){
            var formCount = $('#materials-form .material-form').length;
            for (var i = 0; i < (formCount-1); i++) {
                $('#materials-form .material-form').last().remove();
            }
            $('#materials-form .material-input').selectpicker('deselectAll');

            $('#modal-puchase-form').modal('show');
        })

        $('#btn-conf-purchase').click(function(){
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

                    $('#table-purchase-detail .status').html(response.status);
                    $('#table-purchase-detail .note').html(response.note);
                    
                    var html = '';
                    for (let i = 0; i < response.material_purch.length; i++) {
                        html += '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td>'+response.material_purch[i].material.material_name+'</td>'+
                            '<td>'+response.material_purch[i].material.supplier_name+'</td>'+
                            '<td>'+response.material_purch[i].num_of_purchase+'</td>'+
                            '<td>'+response.material_purch[i].material.status+'</td>'+
                            '<td>'+response.material_purch[i].note+'</td>'+
                        '</tr>';
                    }
                    $('#purchase-materials-detail').html(html);

                    $('#modal-conf').modal('show');

                    $('#btn-save-productions').click(function(){
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
                    });

                },
                error: function() {
                    swal('Failed', 'Error', 'error');
                }
            });
        });

        materialsGet($('#materials-form .material-form').first());
        $('#btn-add-form-material').click(function() {
            var materialForm = $('#materials-form .material-form').first().clone();
            var formCount = $('#materials-form .material-form').length;

            // reset form
            destroySelectPicker(materialForm);
            materialForm.find('select.material-input').selectpicker();
            materialForm.find('input').val("");
            materialForm.find('th[scope="row"]').first().html(parseInt(formCount)+1);
            

            $('#materials-form').append(materialForm);
            materialsGet(materialForm);
        });

        $('#btn-remove-form-material').click(function(){
            $('#materials-form .material-form').last().remove();
        });

        purchasesDatatables();
        $('#wizard_horizontal').steps({
            headerTag: 'h2',
            bodyTag: 'section',
            transitionEffect: 'slideLeft',
            onInit: function (event, currentIndex) {
                setButtonWavesEffect(event);
            },
            onStepChanged: function (event, currentIndex, priorIndex) {
                setButtonWavesEffect(event);
                console.log('wdadawdad');
            }
        });
        
    });
</script>