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
                <div class="section-back-text">Produk</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title"><?php echo $detail_product->name ?></h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><a class="content-link" href="<?php echo base_url("C_product") ?>">Produk</a><span class="mx-2">\</span><span>Detail Produk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-center section">
    <div class="container">
        <div class="entity">
            <div class="grid col-auto px-0 row">
                <div class="col-md-6">
                    <div class="position-relative entity-image">
                        <img class="w-100" src="<?php echo base_url("assets") ?>/upload/products/<?php echo $detail_product->image ?>" alt="" />
                    </div>
                </div>
                <div class="col">
                    <h2 class="mb-2 entity-title"><?php echo $detail_product->name ?></h2>
                    <div class="mb-3 entity-price">
                        <span class="entity-price-current">Rp <?php echo number_format($detail_product->price, 0, ',', ',') ?></span><span class="entity-price-old">Rp <?php echo number_format($detail_product->price + 4000, 0, ',', ',') ?></span>
                    </div>
                    <div class="entity-action-btns">
                        <div class="row grid">
                            <div class="col-auto">
                                <div class="
                                        input-view-flat
                                        input-gray-shadow
                                        input-spin
                                        input-group
                                        ">
                                    <?php
                                    $qty = 1;

                                    if ($this->session->has_userdata('cart')) {
                                        foreach ($this->session->userdata('cart') as $c) {
                                            if ($detail_product->idProduct == $c->idProduct) {
                                                $qty = $c->qty;
                                            }
                                        }
                                    } ?>
                                    <input class="form-control qty" min="1" name="qty" type="number" id="qty" value="<?php echo $qty ?>" /><span class="input-actions"><span class="input-decrement"><i class="fas fa-minus"></i></span><span class="input-increment"><i class="fas fa-plus"></i></span></span>
                                </div>
                            </div>
                            <div class="col-auto col-lg">
                                <button class='btn-sm btn btn-theme' style="font-size: 11px;" onclick='addToCart(<?php echo json_encode($detail_product) ?>)'>tambah keranjang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 entity-body">
                <p>
                    <?php echo $detail_product->description ?>
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    function addToCart(object) {
        let qty = $("#qty").val();
        object['qty'] = parseFloat(qty);
        $.ajax({
            type: "POST",
            url: baseUrl + "C_cart/update_cart_id",
            data: object,
            dataType: "JSON",
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(arguments);
                console.log(errorThrown);
                console.log(textStatus);
            },
            success: function(data) {
                loadCart();
                $("#click-cart").trigger("click");
            },
        });
    }
</script>