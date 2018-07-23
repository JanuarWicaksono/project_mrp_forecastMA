<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Transaksi
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
                        <div class="row clearfix">
                            <form id="transaction-form" action="<?php echo base_url('Transactions/TransactionCreate');?>">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Tanggal Transaksi</b>
                                            <input type="text" class="datepicker form-control" id="transaction-date" name="transaction-date" placeholder="Please choose a date...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <b>Pelanggan Pembeli</b>
                                        <select id="costumers-input" class="form-control show-tick dropdown" name="costumer" data-live-search="true" data-size="5" required>
                                            <option value="">-- Pilih Pelanggan --</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Transaksi Produk</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row clearfix">
                                                <div id="products-add-form">
                                                    <div class="product-form-0">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-float">
                                                                <select class="form-control show-tick product-input-0" name="products[]" data-live-search="true" required>
                                                                    <option value="">-- Pilih Produk 1 --</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-6">
                                                            <div class="form-group form-float">
                                                                <b>Jumlah</b>
                                                                <input type="number" class="form-control" name="qty[]" required placeholder="Jumlah Terjual" min="1" max="200">
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-6">
                                                            <div class="form-group form-float">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="qty[]" required>
                                                                    <label class="form-label">Jumlah</label>
                                                                </div>
                                                                <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-block btn-primary waves-effect" id="btn-product-form">
                                                        <i class="material-icons">add</i>
                                                        <span>Tambah</span>
                                                    </button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-block btn-danger waves-effect" id="btn-product-remove">
                                                        <i class="material-icons">close</i>
                                                        <span>Hapus</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-block waves-effect" id="btn-modal-save">
                                        <i class="material-icons">save</i>
                                        <span>Simpan Transaksi</span>
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn bg-green btn-block waves-effect" id="btn-product-form">
                                        <i class="material-icons">refresh</i>
                                        <span>Segarkan Masukan</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<div class="modal fade" id="modal-transaction-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-blue">
                <h4 class="modal-title" id="largeModalLabel">Detail Transaksi</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix ">
                    <div class="body">
                        <div class="table responsive">
                            <table class="table table-bordered" id="table-transaction-detail">
                                <tr>
                                    <th class="col-md-2">Pelanggan :</th>
                                    <td class="col-md-10 costumer"></td>
                                </tr>
                                <tr>
                                    <th class="col-md-2">Tanggal :</th>
                                    <td class="col-md-10 date"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="table responsive">                        
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price </th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="transaction-products">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total</th>
                                        <th class="total-price"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-danger waves-effect" data-dismiss="modal">
                    <i class="material-icons">close</i><span>Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var productInputId = 0;

        function costumersGet(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("Costumers/costumersGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response){
                var html = '';
                for (var i = 0; i < response.length; i++) {
                    html += '<option value="'+response[i].costumer_id+'" data-subtext="'+response[i].address+'">'+response[i].name+'</option>';       
                }
                $('#costumers-input').append(html);
            }).fail(function(){
                swal('Failed', 'Error', 'error');
            });
        }

        function productsGet(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("Products/productsGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response){
                var html = '';
                for (var i = 0; i < response.length; i++) {
                    html += '<option value="'+response[i].product_id+'" data-subtext="- '+response[i].unit_in_stock+' Unit" data-price="'+response[i].price+'">'+response[i].name+' - '+response[i].unit_in_stock+' unit</option>';
                }
                $('.product-input-'+productInputId).append(html);
                $('.product-input-'+productInputId).selectpicker('render');
            }).fail(function(){
                swal('Failed', 'Error', 'error');
            });
        }

        function transactionSave(url, data){
            $.ajax({
                type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Tersimpan", "Data Perlanggan Telah Terimpan !", "success");
                location.reload();
            }).fail(function() {
                swal('error', 'ERROR', 'error');
            });
        }

        function pushInputTransaction(costumer, transactionDate, products, qtys){
            $('#table-transaction-detail .costumer').html(costumer);
            $('#table-transaction-detail .date').html(transactionDate);
            var html = '';
            for(var i = 0; i < products.length ;i++){
                html = '<td>'+i+'</td>'+
                '<td>'+products[i].value+'</td>'
                '<td>'+qtys[i].value+'</td>'
            }
        }

        
        $('#btn-product-form').click(function(){
            productInputId++;
            var html = $('<div class="product-form-'+productInputId+'">'+
                '<div class="col-md-6">'+
                    '<div class="form-group form-float">'+
                        '<select class="form-control show-tick product-input-'+productInputId+'" name="products[]" data-live-search="true" required>'+
                            '<option value="">-- Pilih Produk '+ (productInputId+1) +' --</option>'+
                        '</select>'+
                    '</div>'+
                '</div>'+
                '<div class="col-md-6">'+
                    '<div class="form-group form-float">'+
                        '<div class="form-line">'+
                            '<input type="text" class="form-control" name="qty[]" required>'+
                            '<label class="form-label">Jumlah</label>'+
                        '</div>'+
                        '<div class="help-info">Min. Value: 10, Max. Value: 200</div>'+
                    '</div>'+
                '</div>'+
            '</div>');
            $('#products-add-form').append(html);
            animate('.product-form-'+productInputId, 'fadeIn');
            productsGet();
        });

        $('#btn-product-remove').click(function(){
            setTimeout(function() {
                if(productInputId > 0){
                    $('.product-form-'+productInputId).remove();
                    productInputId--;
                }else{
                    swal('Failed', 'Tidak Dapat Mengahapus Input Produk Kembali', 'error');
                }
            }, 0);         
        });

        $('#btn-modal-save').click(function(){
            var url = $('#transaction-form').attr('action');
            var data = $('#transaction-form').serializeArray();
            swal({
                title: "Data Transaksi Yang Dimasukan Sudah Benar?",
                text: 'Pilih "OK" untuk menyimpan',
                type: "info",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            }, function() {
                setTimeout(function() {
                    transactionSave(url, data);
                }, 1000);
            });
        });

        //Form Validation
        $('#transaction-form').validate({
            rules: {
                'date': {
                    customdate: true
                },
                'creditcard': {
                    creditcard: true
                }
            },
            highlight: function (input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            }
        });




        // $('#btn-modal-save').click(function(){
        //     var costumer = $('#costumers-input option[value='+$('#costumers-input').val()+']').html();
        //     var transactionDate = $('#transaction-date').val();
        //     var products = $('#products-add-form [name="products[]"]').serializeArray();
        //     var qtys = $('#products-add-form [name="qty[]"]').serializeArray();
        //     pushInputTransaction(costumer, transactionDate, products, qtys);
        //     $('#modal-transaction-detail').modal('show');
        // });
        
        costumersGet();
        productsGet();
        
    });
</script>

