<style>
    .card {
        border: none;
        border-radius: 8px;
        box-shadow: 5px 6px 6px 2px #e9ecef
    }

    .heading {
        font-size: 23px;
        font-weight: 00
    }

    .text {
        font-size: 16px;
        font-weight: 500;
        color: #b1b6bd
    }

    .pricing {
        border: 2px solid #304FFE;
        background-color: #f2f5ff
    }
</style>

<section class="
        after-head
        top-block-page
        with-back
        white-curve-after
        section-white-text
      ">
    <div class="overflow-back bg-orange"></div>
    <div class="content-offs-stick my-5 container">
        <div class="section-solid with-back">
            <div class="full-block">
                <div class="section-back-text">Checkout</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Checkout Belanja</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><a class="content-link" href="<?php echo base_url("C_product") ?>">Produk</a><span class="mx-2">\</span><span>Keranjang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <form class="container" id="basic">
        <div class="cols-xl row">
            <div class="col-lg-6">
                <h2 class="text-title mb-5">Detail Pemesanan</h2>
                <div class="grid row">
                    <div class="col-md-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Nama Lengkap</label>
                            <div class="input-group">
                                <input class="form-control" name="name" type="text" placeholder="Nama Lengkap" value="<?php echo $this->session->has_userdata('firstName') && $this->session->has_userdata('lastName') ?  $this->session->userdata('firstName') . " " . $this->session->has_userdata('lastName') : "" ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Email</label>
                            <div class="input-group">
                                <input class="form-control" name="email" type="email" placeholder="Email" value="<?php echo $this->session->has_userdata('email') ?  $this->session->userdata('email') : "" ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Jenis Kelamin</label>
                            <div class="input-group">
                                <?php if ($this->session->has_userdata('gender')) {
                                    if ($this->session->userdata('gender') == "L") {
                                        echo "
                                        <select class='form-control' name='gender'>
                                            <option value='L' selected>Laki - laki</option>
                                            <option value='P'>Perempuan</option>
                                        </select>
                                        ";
                                    } else {
                                        echo "
                                        <select class='form-control' name='gender'>
                                            <option value='L'>Laki - laki</option>
                                            <option value='P' selected>Perempuan</option>
                                        </select>
                                        ";
                                    }
                                } else {
                                    echo "
                                    <select class='form-control' name='gender'>
                                        <option value='L'>Laki - laki</option>
                                        <option value='P'>Perempuan</option>
                                    </select>
                                    ";
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Alamat</label>
                            <div class="input-group">
                                <input class="form-control" name="address" type="text" placeholder="Alamat" value="<?php echo $this->session->has_userdata('address') ?  $this->session->userdata('address') : "" ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Kecamatan</label>
                            <div class="input-group">
                                <input class="form-control" value="<?php echo $this->session->has_userdata('urbanVillage') ?  $this->session->userdata('urbanVillage') : "" ?>" name="urbanVillage" type="text" placeholder="Kecamatan" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Kelurahan</label>
                            <div class="input-group">
                                <input class="form-control" name="district" type="text" placeholder="Kelurahan" value="<?php echo $this->session->has_userdata('district') ?  $this->session->userdata('district') : "" ?>" required="required" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Kota</label>
                            <div class="input-group">
                                <input class="form-control" name="city" type="text" placeholder="Kota" required="required" value="<?php echo $this->session->has_userdata('city') ?  $this->session->userdata('city') : "" ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Provinsi</label>
                            <div class="input-group">
                                <input class="form-control" name="province" type="text" placeholder="Provinsi" required="required" value="<?php echo $this->session->has_userdata('province') ?  $this->session->userdata('province') : "" ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Kode Pos</label>
                            <div class="input-group">
                                <input class="form-control" name="posCode" type="text" placeholder="Kode Pos" required="required" value="<?php echo $this->session->has_userdata('posCode') ?  $this->session->userdata('posCode') : "" ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="required">Nomor Telepon</label>
                            <div class="input-group">
                                <input class="form-control" name="phone" type="text" placeholder="Nomor Telepon" required="required" value="<?php echo $this->session->has_userdata('phone') ?  $this->session->userdata('phone') : "" ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <label class="h4 mb-3 text-title">Keterangan</label>
                            <div class="input-group">
                                <textarea class="form-control" name="note" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="text-title mb-5">Pesanan Kamu</h2>
                <div class="order-items mb-5">
                    <div class="order-header">
                        <div class="order-line-title">Nama</div>
                        <div class="order-line-total">Total</div>
                    </div>
                    <?php
                    $subTotal = 0;
                    $shipping = 0;
                    $idPayment = 0;
                    if ($this->session->has_userdata('cart')) {
                        $shipping = 6000;
                        $idPayment = rand(pow(10,  3 - 1), pow(10,  3) - 1);
                        foreach ($this->session->userdata('cart') as $c) {
                            $subTotal += $c->price * $c->qty;
                            echo "
                            <div class='order-item'>
                                <div class='order-line-title'>$c->name</div>
                                <div class='order-line-total'>Rp " . number_format($c->price * $c->qty) . "</div>
                            </div>
                            ";
                        }
                    } else {
                        echo "<h4 style='text-align: center; padding: 50px'>Keranjang Kosong</h4>";
                    } ?>
                    <div class="order-subtotal">
                        <div class="order-line-title">Sub Total</div>
                        <div class="order-line-total">Rp <?php echo number_format($subTotal) ?></div>
                    </div>
                    <div class="order-subtotal">
                        <div class="order-line-title">Pengiriman</div>
                        <div class="order-line-total">Rp <?php echo number_format($shipping) ?></div>
                    </div>
                    <div class="separator-line"></div>
                    <div class="order-total">
                        <div class="order-line-title">Total</div>
                        <div class="order-line-total">Rp <span id="total-display"><?php echo number_format($subTotal + $shipping + $idPayment) ?></span></div>
                        <input class="form-control" name="idPayment" id="idPayment" type="hidden" value="<?php echo $idPayment ?>" />
                        <input class="form-control" name="totalPrice" id="totalPrice" type="hidden" value="<?php echo ($subTotal + $shipping + $idPayment) ?>" />
                    </div>
                </div>
                <h3 class="text-title mb-4">Detail Pembayaran</h3>
                <div class="grid row">
                    <div class="col-12">
                        <p>
                            Harap membayar sesuai dengan harga yang tertera.
                        </p>
                    </div>
                    <div class="col-12 transfer-bank">
                        <div class="pricing p-3 rounded d-flex justify-content-between">
                            <div class="images d-flex flex-row align-items-center"> <img src="<?php echo base_url("assets") ?>/images/default/logo-bca.png" class="rounded" width="60">
                                <div class="d-flex flex-column ml-4"> <span class="business"><b>BCA</b></span> <span class="plan">166-034-669-1 a/n Randini Oktaviani Savitri</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-groups">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="check-payment" name="paymentMethod" onchange="changePayment()" value="transferBank" checked="checked" /><span class="form-check-icon"></span><label class="form-check-label" for="check-payment">Transfer Bank</label>
                                </div>
                            </div>
                            <div class="input-view-flat input-gray-shadow form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cash-on-payment" name="paymentMethod" onchange="changePayment()" value="cod" /><span class="form-check-icon"></span><label class="form-check-label" for="cash-on-payment">Cash On Delivery</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-view-flat input-gray-shadow form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-and-conditions" required name="terms" value="yes" /><span class="form-check-icon"></span><label class="form-check-label" for="terms-and-conditions">Saya telah membaca &amp;
                                    <a target="_blank" href="<?php echo base_url("assets/images/default/syarat_ketentuan.pdf"); ?>" download>menerima syarat &amp; ketentuan</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn-wider btn btn-theme" type="button-submit" onclick="checkout()">
                            memesan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script>
    function checkout() {
        $("#basic").submit(function(e) {
            swal({
                title: "Apa anda yakin ingin dengan pesananan anda ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    if (!isLogin) {
                        swal({
                            title: "Pemberitahuan",
                            text: "Silahkan daftar atau masuk terlebih dahulu",
                            icon: "warning",
                            button: "OK",
                        });
                    } else {
                        $.ajax({
                            type: "POST",
                            url: baseUrl + "C_transaction/save",
                            data: $(e.target).serialize(),
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
                                if (data.status == 500) {
                                    swal({
                                        title: "Pemberitahuan",
                                        text: "Pesanan Anda Kosong",
                                        icon: "warning",
                                        button: "OK",
                                    });
                                } else {
                                    if (data.status === true) {
                                        swal({
                                            title: "Berhasil",
                                            text: "Terimakasih Atas Pesanan Anda",
                                            icon: "success",
                                            button: "OK",
                                        }).then(function(isConfirm) {
                                            window.location = baseUrl + "C_user";
                                        });
                                    } else {
                                        swal({
                                            title: "Error",
                                            text: "Gagal Melakukan Transaksi",
                                            icon: "error",
                                            button: "OK",
                                        });
                                    }
                                }
                            },
                        });
                    }
                } else {
                    swal("Cancelled", "", "error");
                }
            });
            return false;
        });
    }

    function changePayment() {
        let nf = new Intl.NumberFormat();
        let valuePaymentMethod = $('input[name="paymentMethod"]:checked').val();
        $("#total-display").empty();
        let idPayment = $("#idPayment").val();
        let totalPrice = $("#totalPrice").val();
        if (valuePaymentMethod == "transferBank") {
            $(".transfer-bank").show();
            let tempTotal = parseFloat(totalPrice) + parseFloat(idPayment);
            $("#totalPrice").val(tempTotal);
            $("#total-display").append(nf.format(tempTotal));
        } else {
            $(".transfer-bank").hide();
            let tempTotal = parseFloat(totalPrice) - parseFloat(idPayment);
            $("#totalPrice").val(tempTotal);
            $("#total-display").append(nf.format(tempTotal));
        }
    }
</script>