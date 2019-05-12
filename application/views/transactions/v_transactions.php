<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="info-total-price">
                <div class="info-box hover-zoom-effect">
                    <div class="icon bg-blue">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Penjualan</div>
                        <div class="number"></div>
                    </div>
                </div>

            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Transaksi
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
                        <form id="form-search" action="<?php echo base_url('Transactions/transactionsGet'); ?>">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="form-group form-float">
                                        <select id="costumers-input" class="form-control show-tick dropdown" name="costumer" data-live-search="true" data-size="5" required>
                                            <option value="">-- Cari Berdasarkan Pelanggan --</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control datepicker" name="search-date" placeholder="Cari Berdasarkan Tanggal">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" id="btn-search" class="btn btn-primary waves-effect">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                                <div class="col-md-12">
                                    <a href="<?php echo base_url('Transactions/transactionsCreateView'); ?>" class="btn btn-primary waves-effect" id="btn-add-transaction" title="Add product">
                                        <i class="material-icons">add</i>
                                        <span>Tambah</span>
                                    </a>
                                    <a type="button" class="btn bg-green waves-effect" id="btn-latest-transactions" title="Add product">
                                        <i class="material-icons">refresh</i>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table id="transactionsTable" class="table table-bordered table-striped table-hover js-basic-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>Pelanggan</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr </thead> <tbody id="transactions-data">

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
                                    <th class="col-md-2">Id Transaksi :</th>
                                    <td class="col-md-10 transaction-id">12</td>
                                </tr>
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
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">
                    <i class="material-icons">close</i><span>Tutup</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // function get materials
    $(document).ready(function() {

        transactionsDatatables();
        costumersGet();

        function transactionsDatatables(costumerWhere, dateWhere) {
            var no = 0;
            $('#transactionsTable').DataTable({
                "ajax": {
                    url: '<?php echo base_url("Transactions/transactionsGet"); ?>',
                    dataSrc: '',
                    method: 'get',
                    data: {
                        dateWhere: dateWhere,
                        costumerWhere: costumerWhere
                    }
                },
                "columns": [{
                        render: function() {
                            return (no++ + 1);
                        }
                    },
                    {
                        data: 'transaction_id',
                        name: 'transaction_id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'transaction_date',
                        name: 'transaction_date'
                    },
                    {
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, full, meta) {
                            return '<a href="javascript:;" type="button" class="btn btn-xs waves-effect btn-transaction-detail" title="Detail" data="' + full.transaction_id + '" ><i class="material-icons">remove_red_eye</i></a>';
                        }
                    }
                ],
                "processing": true,
                "bDestroy": true,
                "fnDrawCallback": function(oSettings) {

                    // display modal-transaction-detail
                    $('.btn-transaction-detail').click(function() {
                        var id = $(this).attr('data');
                        $('#modal-transaction-detail').modal('show');
                        $.ajax({
                            type: 'ajax',
                            method: 'get',
                            url: '<?php echo base_url("Transactions/transactionGet"); ?>',
                            data: {
                                id: id
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                //push transaction data
                                $('#table-transaction-detail .transaction-id').html(data[0].transaction_id);
                                $('#table-transaction-detail .costumer').html(data[0].costumer[0].name);
                                $('#table-transaction-detail .date').html(data[0].date);

                                //push transaction orders
                                var html = '';
                                var totalPrice = '';
                                for (var i = 0; i < data[0].orders.length; i++) {
                                    totalPrice = parseInt(totalPrice + data[0].orders[i].purchase_qty * data[0].orders[i].price);
                                    html += '<tr>' +
                                        '<td>' + (i + 1) + '</td>' +
                                        '<td>' + data[0].orders[i].name + '</td>' +
                                        '<td>' + data[0].orders[i].purchase_qty + '</td>' +
                                        '<td>' + convertToRupiah(data[0].orders[i].price) + '</td>' +
                                        '<td>' + convertToRupiah(data[0].orders[i].purchase_qty * data[0].orders[i].price) + '</td>' +
                                        '</tr>';
                                }
                                $('#transaction-products').html(html);

                                //push total transaction                            
                                $('.total-price').html(convertToRupiah(totalPrice));
                            },
                            error: function() {
                                alert('Gagal', 'ERROR', 'error');
                            }
                        });
                    });

                    //btn-transaction-delete
                    $('.btn-transaction-delete').click(function() {
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
                                transactionDelete(id);
                            }, 1000);
                        });
                    });



                }
            });
        }

        function costumersGet() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("Costumers/costumersGet"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response) {
                var html = '';
                for (var i = 0; i < response.length; i++) {
                    html += '<option value="' + response[i].costumer_id + '" data-subtext="' + response[i].address + '">' + response[i].name + '</option>';
                }
                $('#costumers-input').append(html);
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function ransactionDelete(id) {
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("Transactions/transactionDelete"); ?>',
                data: {
                    id: id
                },
                async: false,
                dataType: 'json'
            }).done(function(response) {
                swal("Terhapus", "Data Pelanggan Telah Terhapus", "success");
                transactionsDatatables();
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        function transactionsTotalSales() {
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url("Transactions/transactionsTotalSales"); ?>',
                async: false,
                dataType: 'json'
            }).done(function(response) {
                $('#info-total-price [class="number"]').append('Rp.' + convertToRupiah(response.total_price));
            }).fail(function() {
                swal('Failed', 'Error', 'error');
            });
        }

        $('#btn-search').click(function() {
            var costumerWhere = $('#form-search #costumers-input').val();
            var dateWhere = $('#form-search input[name="search-date"]').val();
            transactionsDatatables(costumerWhere, dateWhere);
        });

        $('#btn-latest-transactions').click(function() {
            transactionsDatatables();
        });

        transactionsTotalSales();

    })
</script>