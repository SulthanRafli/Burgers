<style>
    .col-sm-12 {
        margin-top: 10px !important;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Data Transaksi</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10%">No</th>
                                        <th class="text-center">User</th>
                                        <th class="text-center">Nomor Invoice</th>
                                        <th class="text-center">Metode Pembayaran</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $no = 1;
                                    foreach ($list_transaction as $lt) {
                                        if ($lt->status == 1) {
                                            $status = "Menunggu Pembayaran";
                                        } else if ($lt->status == 2) {
                                            $status = "Dikonfimasi";
                                        } else if ($lt->status == 3) {
                                            $status = "Sedang Diproses";
                                        } else if ($lt->status == 4) {
                                            $status = "Berhasil";
                                        } else {
                                            $status = "Batal";
                                        }

                                        if ($lt->paymentMethod == "transferBank") {
                                            $statusPayment = "Transfer Bank";
                                        } else {
                                            $statusPayment = "Cash On Delivery";
                                        }

                                        if ($lt->statusPayment == 0) {
                                            $aksi   = "
                                                <a type='button' href='" . base_url() . "C_admin/view_transaction/$lt->idTransaction' class='btn btn-md btn-primary'>Lihat</a>                                                    
                                                <button type='button' class='btn btn-md btn-info' onclick='confirmData($lt->idTransaction)'>Konfirmasi</button>                                                
                                                <button type='button' class='btn btn-md btn-danger' onclick='deleteData($lt->idTransaction)'>Hapus</button>
                                            ";
                                        } else {
                                            $aksi   = "
                                                <a type='button' href='" . base_url() . "C_admin/view_transaction/$lt->idTransaction' class='btn btn-md btn-primary'>Lihat</a>                                                                                                  
                                                <a type='button' href='" . base_url() . "C_admin/edit_transaction/$lt->idTransaction' class='btn btn-md btn-warning text-white'>Ubah</a>
                                                <button type='button' class='btn btn-md btn-danger' onclick='deleteData($lt->idTransaction)'>Hapus</button>
                                            ";
                                        }

                                        echo "
                                        <tr>
                                            <td>$no</td>                                            
                                            <td>$lt->name</td>
                                            <td>$lt->noInvoice</td>
                                            <td>$statusPayment</td>
                                            <td>$lt->note</td>                                                                                                                    
                                            <td>$status</td>       
                                            <td>
                                                <div class='btn-group-vertical'>
                                                    $aksi
                                                </div>
                                            </td>
                                        </tr>                                        
                                        ";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function confirmData(id) {
        swal({
            title: "Anda sudah yakin melakukan konfirmasi pembayaran?",
            text: "Data yang sudah dikonfirmasi tidak dapat dikembalikan",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: baseUrl + "C_admin/update_transaction/" + id + "/confirm",
                    dataType: "json",
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(arguments);
                        console.log(errorThrown);
                        console.log(textStatus);
                    },
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Dikonfirmasi",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                window.location = baseUrl + "C_admin/list_transaction";
                            });
                        } else {
                            swal({
                                title: "Error",
                                text: "Data Gagal Dikonfirmasi",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    },
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
        return false;
    }

    function deleteData(id) {
        swal({
            title: "Anda sudah yakin melakukan penghapusan data?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: baseUrl + "C_admin/delete_transaction/" + id,
                    dataType: "json",
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(arguments);
                        console.log(errorThrown);
                        console.log(textStatus);
                    },
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Terhapus",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                window.location = baseUrl + "C_admin/list_transaction";
                            });
                        } else {
                            swal({
                                title: "Error",
                                text: "Data Gagal Dihapus",
                                icon: "error",
                                button: "OK",
                            });
                        }
                    },
                });
            } else {
                swal("Cancelled", "", "error");
            }
        });
        return false;
    }
</script>