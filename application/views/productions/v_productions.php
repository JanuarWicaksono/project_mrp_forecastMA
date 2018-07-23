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
                        <button type="button" class="btn bg-blue waves-effect" id="btn-create-productions" title="Add Material" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">add</i>
							<span>Tambah Produksi</span>
						</button>
                        <button type="button" class="btn bg-green waves-effect" id="reload-datatables" title="Refresh" data-toggle="modal" data-target="#largeModal">
							<i class="material-icons">new_releases</i>
							<span>Produksi Terbaru</span>
						</button><br><br>
                        <div class="row clearfix">
                            <form action="" >
                                <div class="col-md-12">
                                    <div class="form-group form-float">
                                        <select id="product-input" class="form-control show-tick" name="productions" data-live-search="true" required>
                                            <option value="">-- Pilih Produk --</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" id="production-date" name="production-date" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                    <!-- <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">check_circle</i>
                                        <span>Cari</span>
                                    </button> -->
                                </div>
                            </form>
                            
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
                <h4 class="modal-title" id="largeModalLabel">Detail Bahan Baku</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body table-responsive">
                        <table class="table table-bordered" id="table-production-detail">
                            <tr>
                                <th class="col-md-2">ID :</th>
                                <td class="col-md-10 production-id"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Produk :</th>
                                <td class="col-md-10 product-name"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Jumlah Produksi :</th>
                                <td class="col-md-10 num-prod"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Status :</th>
                                <td class="col-md-10 status"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Catatan :</th>
                                <td class="col-md-10 note"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Tanggal Dimulai :</th>
                                <td class="col-md-10 start-date"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Tanggal Selesai :</th>
                                <td class="col-md-10 finish-date"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Dibuat Pada :</th>
                                <td class="col-md-10 created-at"></td>
                            </tr>
                            <tr>
                                <th class="col-md-2">Diperbaharui Pada :</th>
                                <td class="col-md-10 updated_at"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table responsive">                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Bahan Baku</th>
                                    <th>Stok Tersedia</th>
                                    <th>Stok Dibutuhkan </th>
                                    <th>Stok Sisa</th>
                                </tr>
                            </thead>
                            <tbody id="">

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
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
					<i class="material-icons">close</i>
					<span>Tutup</span>
				</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

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
                            return no++;
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
                                return '<button type="button" class="btn btn-xs bg-red waves-effect" disabled>Tidak tersedia</button>';                            
                            }
                        }
                    },
                    {
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-production-detail" title="Detail" data="' + full.production_id + '" ><i class="material-icons">remove_red_eye</i></a>' +
                                // '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-production-edit" title="Edit" data="' + full.production_id + '"><i class="material-icons">edit</i></a>' +
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
                        $('#modal-production-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("productions/productionGet"); ?>',
                            data: {id: id},
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                //push production data
                                $('#table-production-detail .production-id').html(data[0].production_id);
                                $('#table-production-detail .product-name').html(data[0].product_name);
                                $('#table-production-detail .num-prod').html(data[0].num_production);
                                $('#table-production-detail .status').html(data[0].status);
                                $('#table-production-detail .note').html(data[0].note);
                                $('#table-production-detail .start-date').html(data[0].started_at);
                                $('#table-production-detail .finished-date').html(data[0].finished_at);
                                $('#table-production-detail .created-at').html(data[0].created_at);
                                $('#table-production-detail .updated-at').html(data[0].updated_at);
                                // $('#table-production-detail .costumer').html(data[0].costumer[0].name);
                                // $('#table-production-detail .date').html(data[0].date);
                                
                                // //push production orders
                                // var html = '';
                                // var totalPrice = '';
                                // for (var i = 0; i < data[0].orders.length; i++) {
                                //     totalPrice = parseInt(totalPrice + data[0].orders[i].purchase_qty * data[0].orders[i].price);
                                //     html += '<tr>'+
                                //         '<td>'+(i+1)+'</td>'+
                                //         '<td>'+data[0].orders[i].name+'</td>'+
                                //         '<td>'+data[0].orders[i].purchase_qty+'</td>'+
                                //         '<td>'+convertToRupiah(data[0].orders[i].price)+'</td>'+
                                //         '<td>'+convertToRupiah(data[0].orders[i].purchase_qty * data[0].orders[i].price)+'</td>'+
                                //     '</tr>';                   
                                // }
                                // $('#production-products').html(html);

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
    })

</script>