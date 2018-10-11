<section class="content">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-md-12">
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
                                                    <div class="product-form">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-float">
                                                                <select class="form-control show-tick product-input" name="products[]" data-live-search="true" required>
                                                                    <option value="" class="default">-- Pilih Produk 1 --</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" class="form-control" name="qty[]" placeholder="Jumlah" required>
                                                                </div>
                                                                <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-block btn-xs btn-primary waves-effect" id="btn-product-form">
                                                        <i class="material-icons">add</i>
                                                        <span>Tambah</span>
                                                    </button>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="button" class="btn btn-block btn-xs btn-danger waves-effect" id="btn-product-remove">
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
                <button type="button" id="btn-save-transaction" class="btn btn-primary waves-effect" >
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
    $(document).ready(function(){
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

        function productsGet(element) {
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
                element.find('select').append(html);
                element.selectpicker('render');
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

        function destroySelectPicker(el) {
            // URL: https://github.com/silviomoreto/bootstrap-select/issues/605
            el.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
        }

        productsGet($('#products-add-form .product-form').first());
        $('#btn-product-form').click(function() {
            var productForm = $('#products-add-form .product-form').first().clone();
            var formCount = $('#products-add-form .product-form').length;

            destroySelectPicker(productForm);
            productForm.find('select.product-input > .default').first().html('-- Pilih Produk ' + (formCount+1) + ' --');
            productForm.find('select.product-input').selectpicker();
            $('#products-add-form').append(productForm);
            // animate('.product-form-'+productInputId, 'fadeIn');
            productsGet(productForm);
        });

        $('#btn-product-remove').click(function(){
            setTimeout(function() {
                $('#products-add-form .product-form').last().remove();
            }, 100);         
        });

        $('#btn-modal-save').click(function(){
            var url = $('#transaction-form').attr('action');
            var data = $('#transaction-form').serializeArray();
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("transactions/transactionsDetailConfm"); ?>',
                data: data,
                async: false,
                dataType: 'json',
                success: function(response) {
                    var tableProducts = '';
                    $('#modal-transaction-detail .costumer').html(response.costumer.name);
                    $('#modal-transaction-detail .date').html(response.transaction_date);
                    for (var i = 0; i < response.products.length; i++) {
                        tableProducts += '<tr>'+
                            '<td>'+(i+1)+'</td>'+
                            '<td>'+response.products[i].product_data.product_name+'</td>'+
                            '<td>'+response.products[i].qty+'</td>'+
                            '<td>'+convertToRupiah(response.products[i].product_data.price)+'</td>'+
                            '<td>'+convertToRupiah(response.products[i].total_price)+'</td>'+
                        '</tr>';
                    }
                    $('#transaction-products').html(tableProducts);
                    $('#modal-transaction-detail .total-price').html(response.totals_price);

                    $('#modal-transaction-detail').modal('show');

                    $('#btn-save-transaction').click(function(){
                        swal({
                            title: "Data Produksi Transaksi Yang Dimasukan Sudah Benar?",
                            text: 'Pilih "OK" untuk menyimpan',
                            type: "info",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                        }, function() {
                            setTimeout(function() {
                                transactionSave(url, data)
                            }, 1000);
                        });
                    })
                },
                error: function() {
                    swal('Failed', 'Error', 'error');
                }
            });
        });

        $('#transaction-date').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD',
            clearButton: true,
            weekStart: 1,
            time: false,
            maxDate : new Date()
        });
        //Form Validation
        // $('#transaction-form').validate({
        //     rules: {
        //         'date': {
        //             customdate: true
        //         },
        //         'creditcard': {
        //             creditcard: true
        //         }
        //     },
        //     highlight: function (input) {
        //         $(input).parents('.form-line').addClass('error');
        //     },
        //     unhighlight: function (input) {
        //         $(input).parents('.form-line').removeClass('error');
        //     },
        //     errorPlacement: function (error, element) {
        //         $(element).parents('.form-group').append(error);
        //     }
        // });




        // $('#btn-modal-save').click(function(){
        //     var costumer = $('#costumers-input option[value='+$('#costumers-input').val()+']').html();
        //     var transactionDate = $('#transaction-date').val();
        //     var products = $('#products-add-form [name="products[]"]').serializeArray();
        //     var qtys = $('#products-add-form [name="qty[]"]').serializeArray();
        //     pushInputTransaction(costumer, transactionDate, products, qtys);
        //     $('#modal-transaction-detail').modal('show');
        // });
        
        costumersGet();
        // productsGet();
        
    });
</script>

