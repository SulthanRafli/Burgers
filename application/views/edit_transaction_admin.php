<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Transaksi</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="basic">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="name" id="name" value="<?php echo $orders->name ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <input type="text" class="form-control" placeholder="Jenis Kelamin" name="gender" id="gender" value="<?php echo $orders->gender == "L" ? "Laki - laki" : "Perempuan" ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo $orders->email ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" cols="5" rows="5" placeholder="Alamat" name="address" id="address" value="" disabled><?php echo $orders->address ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" placeholder="Kecamatan" name="urbanVillage" id="urbanVillage" value="<?php echo $orders->urbanVillage ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Kelurahan</label>
                                    <input type="text" class="form-control" placeholder="Kelurahan" name="district" id="district" value="<?php echo $orders->district ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" placeholder="Kota" name="city" id="city" value="<?php echo $orders->city ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" class="form-control" placeholder="Provinsi" name="province" id="province" value="<?php echo $orders->province ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" class="form-control" placeholder="Kode Pos" name="posCode" id="posCode" value="<?php echo $orders->posCode ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="text" class="form-control" placeholder="Nomor Telepon" name="phone" id="phone" value="<?php echo $orders->phone ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" cols="5" rows="5" placeholder="Keterangan" name="note" id="note" value="" disabled><?php echo $orders->note ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <?php
                                    if ($orders->status == 1) {
                                        echo "
                                        <select class='form-control select2' style='width: 100%;' data-placeholder='Status' name='status' id='status' required>
                                            <option value=''>Status</option>
                                            <option value='1' selected>Menunggu Pembayaran</option>
                                            <option value='2'>Dikonfimasi</option>
                                            <option value='3'>Sedang Diproses</option>
                                            <option value='4'>Berhasil</option>
                                            <option value='5'>Gagal</option>
                                        </select>
                                      ";
                                    } else if ($orders->status == 2) {
                                        echo "
                                        <select class='form-control select2' style='width: 100%;' data-placeholder='Status' name='status' id='status' required>
                                            <option value=''>Status</option>
                                            <option value='1'>Menunggu Pembayaran</option>
                                            <option value='2' selected>Dikonfimasi</option>
                                            <option value='3'>Sedang Diproses</option>
                                            <option value='4'>Berhasil</option>
                                            <option value='5'>Gagal</option>
                                        </select>
                                      ";
                                    } else if ($orders->status == 3) {
                                        echo "
                                        <select class='form-control select2' style='width: 100%;' data-placeholder='Status' name='status' id='status' required>
                                            <option value=''>Status</option>
                                            <option value='1'>Menunggu Pembayaran</option>
                                            <option value='2'>Dikonfimasi</option>
                                            <option value='3' selected>Sedang Diproses</option>
                                            <option value='4'>Berhasil</option>
                                            <option value='5'>Gagal</option>
                                        </select>
                                      ";
                                    } else if ($orders->status == 4) {
                                        echo "
                                        <select class='form-control select2' style='width: 100%;' data-placeholder='Status' name='status' id='status' required>
                                            <option value=''>Status</option>
                                            <option value='1'>Menunggu Pembayaran</option>
                                            <option value='2'>Dikonfimasi</option>
                                            <option value='3'>Sedang Diproses</option>
                                            <option value='4' selected>Berhasil</option>
                                            <option value='5'>Gagal</option>
                                        </select>
                                      ";
                                    } else {
                                        echo "
                                        <select class='form-control select2' style='width: 100%;' data-placeholder='Status' name='status' id='status' required>
                                            <option value=''>Status</option>
                                            <option value='1'>Menunggu Pembayaran</option>
                                            <option value='2'>Dikonfimasi</option>
                                            <option value='3'>Sedang Diproses</option>
                                            <option value='4'>Berhasil</option>
                                            <option value='5' selected>Gagal</option>
                                        </select>
                                      ";
                                    } ?>
                                </div>
                                <br>
                                <h4>List Produk</h4>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="10%">No</th>
                                            <th class="text-center">Produk</th>
                                            <th class="text-center">Harga</th>
                                            <th class="text-center">Jumlah</th>
                                            <th class="text-center">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php
                                        $no = 1;
                                        foreach ($detail_orders as $do) {
                                            echo "
                                            <tr>
                                                <td>$no</td>                                            
                                                <td>$do->product</td>
                                                <td>Rp " . number_format($do->price, 0, ',', ',') . "</td>
                                                <td>$do->quantity</td>
                                                <td>Rp " . number_format($do->price * $do->quantity, 0, ',', ',') . "</td>                                                                                               
                                            </tr>                                        
                                        ";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" class="text-right">Sub Total</td>
                                            <td class="text-center">Rp <?php echo number_format($orders->totalPrice - 6000, 0, ',', ',') ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Pengiriman</td>
                                            <td class="text-center">Rp 6,000</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total</td>
                                            <td class="text-center">Rp <?php echo number_format($orders->totalPrice, 0, ',', ',') ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="card-footer text-right">
                                <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_admin/list_transaction">Kembali</a>
                                <button type="button-submit" class="btn btn-primary" onclick="update(<?php echo $orders->idTransaction ?>)">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function update(id) {
        $("#basic").submit(function(e) {
            let form_data = new FormData();
            form_data.append("status", $("#status").val());
            swal({
                title: "Anda sudah yakin mengubah data ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_admin/update_transaction/" + id,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        data: form_data,
                        dataType: "json",
                        beforeSend: function() {
                            console.log($(e.target).serialize());
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(arguments);
                            console.log(errorThrown);
                            console.log(textStatus);
                        },
                        success: function(data) {
                            if (data.status === true) {
                                swal({
                                    title: "Berhasil",
                                    text: "Data Berhasil Diubah",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_admin/list_transaction";
                                });
                            } else {
                                swal({
                                    title: "Error",
                                    text: "Data Gagal Diubah",
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
        });
    }
</script>