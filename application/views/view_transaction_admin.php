<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Transaksi</h1>
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
                                    <input type="text" class="form-control" placeholder="Status" name="status" id="status" value="<?php
                                                                                                                                    if ($orders->status = 1) {
                                                                                                                                        $status = "Menunggu Pembayaran";
                                                                                                                                    } else if ($orders->status = 2) {
                                                                                                                                        $status = "Dikonfimasi";
                                                                                                                                    } else if ($orders->status = 3) {
                                                                                                                                        $status = "Sedang Diproses";
                                                                                                                                    } else if ($orders->status = 4) {
                                                                                                                                        $status = "Berhasil";
                                                                                                                                    } else {
                                                                                                                                        $status = "Gagal";
                                                                                                                                    }
                                                                                                                                    echo $status ?>" disabled>
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
                                <a type="button" target="_blank" class="btn btn-info" href="<?php echo base_url("C_transaction/print_invoice/$orders->idTransaction"); ?>">Cetak</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>