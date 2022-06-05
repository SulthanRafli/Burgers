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
                    <h1>List Data Produk</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a type="button" href="<?php echo base_url(); ?>C_admin/add_product" href="<?php echo base_url(); ?>C_admin/add_product" class="btn btn-md btn-primary">Tambah Data Produk</a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10%">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Gambar</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $no = 1;
                                    foreach ($list_product as $lp) {
                                        echo "
                                        <tr>
                                            <td>$no</td>                                            
                                            <td>$lp->name</td>
                                            <td>Rp " . number_format($lp->price) . "</td>
                                            <td><img class='embed-responsive-item' style='width: 180px;' src='" . base_url('assets') . "/upload/products/$lp->image' alt='' /></td>
                                            <td>$lp->description</td>                                                                        
                                            <td>
                                                <div class='btn-group-vertical'>
                                                    <a type='button' href='" . base_url() . "C_admin/view_product/$lp->idProduct' class='btn btn-md btn-primary'>Lihat</a>
                                                    <a type='button' href='" . base_url() . "C_admin/edit_product/$lp->idProduct' class='btn btn-md btn-warning text-white'>Ubah</a>
                                                    <button type='button' class='btn btn-md btn-danger' onclick='deleteData($lp->idProduct)'>Hapus</button>
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
                    url: baseUrl + "C_admin/delete_product/" + id,
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
                                window.location = baseUrl + "C_admin/list_products";
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