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
                <h1 class="section-title">Keranjang Belanja</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><a class="content-link" href="<?php echo base_url("C_product") ?>">Produk</a><span class="mx-2">\</span><span>Keranjang</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-0 section">
    <form class="container" id="basic">
        <div class="cart-items">
            <div class="cart-header">
                <h2 class="cart-title">Produk di keranjang anda</h2>
                <div class="cart-item-title">Produk</div>
                <div class="cart-item-price">Harga</div>
                <div class="cart-item-quantity">Jumlah</div>
                <div class="cart-item-total">Total</div>
                <div class="cart-item-remove"></div>
            </div>
            <div id="list-cart-item">
                <?php if ($this->session->has_userdata('cart')) {
                    foreach ($this->session->userdata('cart') as $c) {
                        $sub_total = $c->price * $c->qty;
                        echo "                    
                        <div class='cart-item-entity'>
                            <div class='cart-item-image'>
                                <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$p->idProduct") . "'>
                                    <span class='embed-responsive embed-responsive-4by3'>
                                        <img class='embed-responsive-item' src='" . base_url('assets') . "/upload/products/$c->image' alt='' />
                                    </span>
                                    <span class='with-back entity-preview-content'>
                                        <span class='h3 m-auto text-theme text-center'><i class='fas fa-search'></i>
                                        </span>
                                        <span class='overflow-back bg-body-back opacity-70'>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class='cart-item-title'>
                                <a class='content-link' href='" . base_url("C_product/view/$p->idProduct") . "'>$c->name</a>
                            </div>
                            <div class='cart-item-price'>Rp " . number_format($c->price, 0, ',', ',') . "</div>
                            <div class='cart-item-quantity'>
                                <div class='input-view-flat input-gray-shadow input-spin input-group'>                                    
                                    <input class='form-control qty' value='$c->qty' min='1' name='qty[]' id='qty' type='number' onmouseup='countGrandTotal(this)' onkeyup='countGrandTotal(this)' onchange='countGrandTotal(this)'/>
                                    <span class='input-actions'>
                                        <span class='input-decrement'>
                                            <i class='fas fa-minus'></i>
                                        </span>
                                        <span class='input-increment'>
                                            <i class='fas fa-plus'></i>
                                        </span>
                                    </span>                                    
                                    <input class='form-control' value='$c->idProduct' name='idProduct[]' id='idProduct' type='hidden' />                               
                                    <input class='form-control' value='$c->image' name='image[]' type='hidden' />
                                    <input class='form-control' value='$c->name' name='name[]' type='hidden' />
                                    <input class='form-control price' value='$c->price' name='price[]' id='price' type='hidden' />
                                    <input class='form-control' value='$c->description' name='description[]' type='hidden' />
                                </div>
                            </div>
                            <div class='cart-item-total'>
                                <span class='cart-item-total-text'>Item total:</span>
                                <span class='subTotal'>                                    
                                    Rp " . number_format($sub_total, 0, ",", ",") . "                                                                    
                                </span>
                            </div>
                            <div class='cart-item-remove'>
                                <a style='color: #ffb524; cursor: pointer;' onclick='deleteCart($c->idProduct)'><span class='cart-item-remove-text'>remove from cart</span><i class='fas fa-times'></i></a>
                            </div>                            
                        </div>                    
                    ";
                    }
                } else {
                    echo "<h4 style='text-align: center; padding: 50px'>Keranjang Kosong</h4>";
                } ?>
            </div>
            <div class="separator-line"></div>
            <div class="cart-footer">
                <div class="grid-sm row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <button class="btn btn-theme-bordered" type="button" onclick="deleteAllCart()">
                            clear shopping cart
                        </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mr-auto">
                        <button class="btn btn-theme-bordered" type="button-submit" onclick="updateCart()">
                            update shopping cart
                        </button>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <a class="btn btn-theme" type="button" href="<?php echo base_url("C_product") ?>">
                            continue shopping
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<section class="section" data-slider="featured-products">
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon5.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Produk Terbaru</h2>
        </div>
        <div class="slick-arrows">
            <div class="slick-arrow-prev"><i class="fas fa-arrow-left"></i></div>
            <div class="slick-arrow-next"><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="slick-view-carousel slick-carousel">
            <div class="slick-slides">
                <?php foreach ($products as $p) {
                    echo "
                    <div class='slick-slide'>
                        <article class='entity-block entity-hover-shadow'>
                            <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$p->idProduct") . "'>
                                <span class='embed-responsive embed-responsive-4by3'>
                                    <img class='embed-responsive-item' src='" . base_url('assets') . "/upload/products/$p->image' alt='' />
                                </span>
                                <span class='with-back entity-preview-content'>
                                    <span class='overflow-back bg-body-back opacity-70'></span>
                                    <span class='m-auto h1 text-theme text-center'><i class='fas fa-shopping-cart'></i></span>
                                </span>
                            </a>
                            <div class='fill-color-line' data-role='fill-line'>
                                <div class='opacity-30 fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                                <div class='opacity-60 fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                                <div class='fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                            </div>
                            <div class='entity-content'>
                                <h4 class='entity-title'>
                                    <a class='content-link' href='" . base_url("C_product/view/$p->idProduct") . "'>$p->name</a>
                                </h4>
                                <p class='entity-text'>
                                    $p->description
                                </p>
                                <div class='entity-bottom-line'>
                                    <div class='entity-price'>
                                        <span class='currency'>Rp </span>" . number_format($p->price, 0, ",", ",") . "                                        
                                    </div>
                                    <div class='entity-action-btns'>
                                        <button style='font-size: 11px;' class='btn-sm btn btn-theme' onclick='addToCart(" . json_encode($p) . ")'>tambah keranjang</button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div> 
                    ";
                } ?>
            </div>
        </div>
    </div>
</section>
<script>
    function deleteCart(id) {
        $.ajax({
            type: "POST",
            url: baseUrl + "C_cart/delete_cart/" + id,
            dataType: "JSON",
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(arguments);
                console.log(errorThrown);
                console.log(textStatus);
            },
            success: function(data) {
                location.reload();
            },
        });
    }

    function updateCart() {
        $("#basic").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: baseUrl + "C_cart/update_cart",
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
                            text: "Keranjang Anda Kosong",
                            icon: "warning",
                            button: "OK",
                        });
                    } else {
                        location.reload();
                    }
                },
            });
            return false;
        });
    }

    function deleteAllCart() {
        $.ajax({
            type: "POST",
            url: baseUrl + "C_cart/delete_all_cart",
            dataType: "json",
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(arguments);
                console.log(errorThrown);
                console.log(textStatus);
            },
            success: function(data) {
                if (data.status == 500) {
                    swal({
                        title: "Pemberitahuan",
                        text: "Keranjang Anda Kosong",
                        icon: "warning",
                        button: "OK",
                    });
                } else {
                    location.reload();
                }
            },
        });
    }

    function countGrandTotal(selectedElement) {
        let nf = new Intl.NumberFormat();

        let el = $(selectedElement);
        let id = el.val();
        let parent = el.parent();

        $(selectedElement).parent().parent().parent().find(".subTotal").empty();

        let qty = parent.find(".qty").val();
        let price = parent.find(".price").val();

        let subTotal = price * qty;


        $(selectedElement).parent().parent().parent().find(".subTotal").append("Rp " + nf.format(subTotal));
    }
</script>