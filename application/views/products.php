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
                <h1 class="section-title">List Produk</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Home</a><span class="mx-2">\</span><span>Produk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="sidebar-container">
        <div class="content">
            <section class="section">
                <div class="grid row">
                    <?php
                    if (!empty($product)) {
                        foreach ($product as $p) {
                            echo "
                                <div class='col-12 col-lg-6 d-flex'>
                                <article class='entity-block entity-hover-shadow'>
                                    <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$p->idProduct") . "/$p->idProduct'><span class='embed-responsive embed-responsive-4by3'><img class='embed-responsive-item' src='" . base_url('assets') . "/upload/products/$p->image' alt='' /></span><span class='with-back entity-preview-content'><span class='overflow-back bg-body-back opacity-70'></span><span class='m-auto h1 text-theme text-center'><i class='fas fa-shopping-cart'></i></span></span></a>
                                    <div class='fill-color-line' data-role='fill-line'>
                                        <div class='opacity-30 fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                                        <div class='opacity-60 fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                                        <div class='fill-line-segment bg-theme' data-role='fill-line-segment' data-min-width='10' data-preffered-width='50' data-max-width='80'></div>
                                    </div>
                                    <div class='entity-content'>
                                        <h4 class='entity-title'>
                                            <a class='content-link' href='" . base_url("C_product/view/$p->idProduct") . "/$p->idProduct'>$p->name</a>
                                        </h4>
                                        <p class='entity-text'>
                                            $p->description
                                        </p>
                                        <div class='entity-bottom-line'>
                                            <div class='entity-price'>
                                                <span class='currency'>Rp </span>" . number_format($p->price, 0, ',', ',') . "                                        
                                            </div>
                                            <div class='entity-action-btns'>
                                                <button style='font-size: 11px;' class='btn-sm btn btn-theme' onclick='addToCart(" . json_encode($p) . ")'>tambah keranjang</button>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                                ";
                        }
                    } else {
                        echo " 
                            <div class='col-12 col-lg-12 d-flex' style='justify-content: center'>
                                <h2>Produk Tidak Ditemukan</h2>
                            </div>
                        ";
                    }
                    ?>
                </div>
                <div class="section-footer">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </section>
        </div>
        <div class="sidebar section order-lg-last">
            <section class="section-sidebar">
                <div class="mb-4 section-head">
                    <h3 class="section-title h4"><span>Cari</span></h3>
                </div>
                <form action="<?php base_url("C_product") ?>" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <div class="input-group">
                                    <input class="form-control" name="keyword" type="text" placeholder="Keywords" required="required" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button class="mb-0 btn btn-theme" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="section-sidebar">
                <div class="mb-4 section-head">
                    <h3 class="section-title h4"><span>Produk Teratas</span></h3>
                </div>
                <div class="grid row">
                    <?php
                    if (!empty($top_products)) {
                        foreach ($top_products as $tp) {
                            echo "
                        <div class='col-md-6 col-lg-12'>
                            <article class='entity'>
                                <div class='grid-sm row'>
                                    <div class='col-sm-5'>
                                        <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$tp->idProduct") . "'><span class='embed-responsive embed-responsive-6by4'><img class='embed-responsive-item' src='" . base_url("assets/upload/products/$tp->image") . "' alt='' /></span><span class='with-back entity-preview-content'><span class='h3 m-auto text-theme text-center'><i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'></span></span></a>
                                    </div>
                                    <div class='col'>
                                        <h4 class='h5 mb-1 entity-title'>
                                            <a class='content-link' href='" . base_url("C_product/view/$tp->idProduct") . "'>$tp->name</a>
                                        </h4>
                                        <div class='entity-price'>
                                            <span class='currency'>Rp</span> " . number_format($tp->price, 0, ',', ',') . "
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        ";
                        }
                    } else {
                        foreach ($products as $tp) {
                            echo "
                        <div class='col-md-6 col-lg-12'>
                            <article class='entity'>
                                <div class='grid-sm row'>
                                    <div class='col-sm-5'>
                                        <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$tp->idProduct") . "'><span class='embed-responsive embed-responsive-6by4'><img class='embed-responsive-item' src='" . base_url("assets/upload/products/$tp->image") . "' alt='' /></span><span class='with-back entity-preview-content'><span class='h3 m-auto text-theme text-center'><i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'></span></span></a>
                                    </div>
                                    <div class='col'>
                                        <h4 class='h5 mb-1 entity-title'>
                                            <a class='content-link' href='" . base_url("C_product/view/$tp->idProduct") . "'>$tp->name</a>
                                        </h4>
                                        <div class='entity-price'>
                                            <span class='currency'>Rp</span> " . number_format($tp->price, 0, ',', ',') . "
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        ";
                        }
                    } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<script>
    function addToCart(object) {
        object['qty'] = 1;
        $.ajax({
            type: "POST",
            url: baseUrl + "C_cart/add_cart",
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