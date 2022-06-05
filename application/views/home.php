<section class="white-curve-after after-head slick-top-fix section-white-text">
    <div class="slick-view-banner slick-numeric-navigation slick-carousel" data-slider="top-side-numbers">
        <div class="slick-slides">
            <div class="slick-slide">
                <div class="
                    section-white-text
                    entity-banner
                    content-offs
                    section-solid
                    justify-content-center
                    bg-orange
                    ">
                    <div class="container text-center text-lg-left flex-0 entity-content">
                        <div class="
                            my-auto
                            position-relative
                            align-items-lg-center
                            flex-0
                            row
                            ">
                            <div class="full-block">
                                <div class="section-back-text">Burpang</div>
                                <img class="d-none d-lg-block z-index-3" src="<?php echo base_url("assets") ?>/images/content/x/shpinat-2.png" alt="" data-size="51px" data-at="61%;-20%;-25deg" /><img class="d-none d-lg-block z-index-3" src="<?php echo base_url("assets") ?>/images/content/x/shpinat-1.png" alt="" data-size="122px" data-at="29%;21%;-90deg" /><img class="d-none d-lg-block z-index-3" src="<?php echo base_url("assets") ?>/images/content/x/shpinat-3.png" alt="" data-size="95px" data-at="47%;86%" />
                            </div>
                            <div class="m-lg-auto d-flex z-index-2 position-relative col">
                                <img class="px-5 px-lg-0 m-auto col-auto mw-100" src="<?php echo base_url("assets") ?>/images/default/burger1.png" alt="" />
                            </div>
                            <div class="
                                col-lg-6
                                mr-lg-5
                                mt-5
                                my-lg-auto
                                order-lg-first
                                z-index-4
                                position-relative
                                ">
                                <h2 class="h1 entity-title">
                                    Hemat di semua Produk
                                    <span class="text-crimson">Diskon</span> 30%
                                </h2>
                                <div class="
                                h4
                                mt-0                                
                                font-weight-medium
                                entity-subtitle
                                ">
                                    Produk dibuat dengan hati-hati
                                </div>
                                <p class="mb-4 pb-2 entity-text">
                                    Kami menggunakan produk yang segar!
                                </p>
                                <div class="entity-action-btns">
                                    <a class="btn-wide btn btn-theme-white-bordered" href="<?php echo base_url("C_product") ?>">beli sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-slide">
                <div class="
                    section-white-text
                    entity-banner
                    content-offs
                    section-solid
                    justify-content-center
                    bg-light-green
                    ">
                    <div class="container text-center text-lg-left flex-0 entity-content">
                        <div class="
                            my-auto
                            position-relative
                            align-items-lg-center
                            flex-0
                            row
                            ">
                            <div class="full-block">
                                <div class="section-back-text">Sangat Enak</div>
                            </div>
                            <div class="m-lg-auto d-flex z-index-2 position-relative col">
                                <img class="m-auto col-auto px-5 pr-lg-0 mw-100" src="<?php echo base_url("assets") ?>/images/default/burger2.png" alt="" />
                            </div>
                            <div class="
                                col-lg-5
                                mr-lg-5
                                mt-5
                                my-lg-auto
                                order-lg-first
                                z-index-4
                                position-relative
                                ">
                                <h2 class="h1 entity-title">
                                    Kentang <span class="text-bittersweet">Goreng</span>
                                </h2>
                                <div class="h4 mt-0 entity-subtitle">
                                    Produk dibuat dengan hati-hati
                                </div>
                                <p class="mb-4 pb-2 entity-text">
                                    Perut kamu kosong ? kuy pesan burpang.
                                </p>
                                <div class="entity-action-btns">
                                    <a class="btn-wide btn btn-theme-white-bordered" href="<?php echo base_url("C_product") ?>">beli sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section" data-slider="featured-products">
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-crimson svg-content" src="<?php echo base_url("assets") ?>/images/default/icon4.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Produk Unggulan</h2>
        </div>
        <div class="slick-arrows">
            <div class="slick-arrow-prev"><i class="fas fa-arrow-left"></i></div>
            <div class="slick-arrow-next"><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="slick-view-carousel slick-carousel">
            <div class="slick-slides">
                <?php
                if (!empty($top_products)) {
                    foreach ($top_products as $p) {
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
                    }
                } else {
                    foreach ($product as $p) {
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
                    }
                } ?>
            </div>
        </div>
    </div>
</section>
<section class="
        bg-bittersweet
        white-curve-before
        curve-before-50
        white-curve-after
        curve-after-20
        section-solid section-white-text
      ">
    <div class="section-back-text">Fitur</div>
    <div class="full-block">
        <div class="container h-100 position-relative" data-size="60%">
            <img class="z-index-4 d-none d-xl-block mw-100" src="<?php echo base_url("assets") ?>/images/default/icon2.png" alt="" data-size="205px" data-at="-15%;bottom 70px" /><img class="z-index-4 d-none d-xl-block mw-100" src="<?php echo base_url("assets") ?>/images/default/icon1.png" alt="" data-size="300px" data-at="115%;15px;-17deg" />
        </div>
    </div>
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon4-white.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Fitur terbaik</h2>
            <p class="section-text">Rasanya enak banget</p>
        </div>
    </div>
    <div class="container">
        <div class="cols-lg row">
            <div class="col-md-4">
                <div class="entity text-center">
                    <div class="entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/default/tomato.png" alt="" />
                    </div>
                    <h4 class="entity-title">Makanan Alami</h4>
                    <p class="mb-0 entity-text">
                        Dibuat dengan bahan dasar alami.
                    </p>
                    <img class="d-none d-lg-block mw-100" src="<?php echo base_url("assets") ?>/images/parts/arrow-curved-up.png" alt="" data-size="50px" data-at="right 5px;40px;25deg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="entity text-center">
                    <div class="entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/default/privacy.png" alt="" />
                    </div>
                    <h4 class="entity-title">Higienis</h4>
                    <p class="mb-0 entity-text">
                        Dibuat secara higienis.
                    </p>
                    <img class="d-none d-lg-block mw-100" src="<?php echo base_url("assets") ?>/images/parts/arrow-curved.png" alt="" data-size="50px" data-at="right -21px;85px;-36deg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="entity text-center">
                    <div class="entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/default/coins.png" alt="" />
                    </div>
                    <h4 class="entity-title">Murah</h4>
                    <p class="mb-0 entity-text">
                        Harganya sangat terjangkau.
                    </p>
                    <img class="d-none mw-100" src="<?php echo base_url("assets") ?>/images/parts/arrow-curved.png" alt="" data-size="50px" data-at="100%;50%" />
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-solid">
    <div class="overflow-back opacity-10"></div>
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon4-green.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Produk Kami</h2>
            <p class="section-text">Semua item terbaik untuk anda</p>
        </div>
    </div>
    <div class="container">
        <div class="grid row">
            <?php foreach ($product_limits as $pl) {
                echo "
                    <div class='col-sm-6 col-lg-4'>
                    <article class='
                        entity-block entity-hover-shadow
                        text-center
                        entity-preview-show-up
                        '>
                        <div class='entity-preview'>
                            <div class='embed-responsive embed-responsive-4by3'>
                                <img class='embed-responsive-item' src='" . base_url('assets') . "/upload/products/$pl->image' alt='' />
                            </div>
                            <div class='with-back entity-preview-content'>
                                <div class='mx-auto mt-auto mb-4 text-center'>
                                    <a class='btn-wide mr-2 btn btn-theme' href='" . base_url('C_product/view/') . $pl->idProduct . "'>beli sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class='pb-4 entity-content'>
                            <h4 class='entity-title'>
                                <a class='content-link' href='" . base_url('C_product/view/') . $pl->idProduct . "'>$pl->name</a>
                            </h4>
                            <div class='entity-price'>
                                <span class='currency'>Rp </span>" . number_format($pl->price, 0, ',', ',') . "                                
                            </div>
                        </div>
                    </article>
                </div>
                    ";
            } ?>
        </div>
    </div>
    <div class="section-footer">
        <a class="btn btn-theme" href="<?php echo base_url("C_product") ?>">lihat semua</a>
    </div>
</section>
<section class="
        bg-orange
        white-curve-before
        curve-before-60
        white-curve-after
        curve-after-90
        section-solid section-white-text
      ">
    <div class="section-back-text" style="font-size: 15vw;">Statistik</div>
    <div class="full-block">
        <div class="container h-100 position-relative" data-size="60%">
            <img class="z-index-4 d-none d-xl-block mw-100" src="<?php echo base_url("assets") ?>/images/default/burger3.png" alt="" data-size="245px" data-at="-5%;15px" /><img class="z-index-4 d-none d-xl-block mw-100" src="<?php echo base_url("assets") ?>/images/default/burger4.png" alt="" data-size="255px" data-at="110%;bottom 40px" />
        </div>
    </div>
    <div class="container">
        <div class="cols-lg row">
            <div class="col-lg-4">
                <div class="entity line">
                    <div class="my-auto entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/100/white/in-love.png" alt="" />
                    </div>
                    <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="<?php echo $total_user ?>" data-waypoint-counter-extra="+"></div>
                        <p class="mb-0 entity-text">Member yang terdaftar</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="entity line">
                    <div class="my-auto entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/100/white/handshake.png" alt="" />
                    </div>
                    <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="<?php echo $total_transaction ?>" data-waypoint-counter-extra="+"></div>
                        <p class="mb-0 entity-text">Transaksi yang berhasil</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="entity line">
                    <div class="my-auto entity-icon">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/100/white/guarantee.png" alt="" />
                    </div>
                    <div class="ml-4 my-auto entity-content">
                        <div class="h1 mb-1 entity-value" data-waypoint-counter="<?php echo $total_contact ?>" data-waypoint-counter-extra="+"></div>
                        <p class="mb-0 entity-text">Feedback yang diterima</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-head container left">
        <div class="section-icon">
            <span class="svg-fill-theme svg-content" data-svg="<?php echo base_url("assets") ?>/images/svg/title-baracka.svg"></span>
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Pengiriman dan pembayaran</h2>
            <p class="section-text">Kami akan melakukannya secepat mungkin</p>
        </div>
    </div>
    <div class="container">
        <div class="grid row">
            <div class="col-lg-3 d-flex">
                <div class="
                entity-block
                entity-hover-shadow
                entity-hover-highlight
                entity-hover-white-icon
              ">
                    <div class="
                  mt-4
                  mb-0
                  mr-auto
                  align-self-start
                  p-2
                  px-4
                  bradr
                  entity-icon
                ">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/50/orange/shopping-basket.png" alt="" />
                    </div>
                    <div class="entity-content">
                        <h4 class="entity-title">Memesan</h4>
                        <p class="mb-0 entity-text">
                            Kami akan menghubungi anda untuk mendiskusikan detail pememesan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div class="m-auto">
                    <div class="h2 lg-horizontal separator-dots-arrow">
                        <span class="separator-dot"></span><span class="separator-dot last"></span><span class="separator-arrow"><i class="fas fa-angle-down separator-show-vertical"></i>
                            <i class="fas fa-angle-right separator-show-horizontal"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="
                entity-block
                entity-hover-shadow
                entity-hover-highlight
                entity-hover-white-icon
              ">
                    <div class="
                  mt-4
                  mb-0
                  mr-auto
                  align-self-start
                  p-2
                  px-4
                  bradr
                  entity-icon
                ">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/50/orange/card-payment.png" alt="" />
                    </div>
                    <div class="entity-content">
                        <h4 class="entity-title">Pembayaran</h4>
                        <p class="mb-0 entity-text">
                            Anda sendiri yang memilih metode dimana anda akan menggunakan layanan ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex align-items-center">
                <div class="m-auto">
                    <div class="h2 lg-horizontal separator-dots-arrow">
                        <span class="separator-dot"></span><span class="separator-dot last"></span><span class="separator-arrow"><i class="fas fa-angle-down separator-show-vertical"></i>
                            <i class="fas fa-angle-right separator-show-horizontal"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex">
                <div class="
                entity-block
                entity-hover-shadow
                entity-hover-highlight
                entity-hover-white-icon
              ">
                    <div class="
                  mt-4
                  mb-0
                  mr-auto
                  align-self-start
                  p-2
                  px-4
                  bradr
                  entity-icon
                ">
                        <img class="mw-100" src="<?php echo base_url("assets") ?>/images/parts/icons/50/orange/shipped.png" alt="" />
                    </div>
                    <div class="entity-content">
                        <h4 class="entity-title">Pengiriman</h4>
                        <p class="mb-0 entity-text">
                            Kurir akan mengirimkan barang pada waktu yang tepat untuk anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="
        bg-dark-lime-green
        white-curve-before
        curve-before-40
        white-curve-after
        curve-after-70
        slick-solid-nav
        section-solid section-white-text
      " data-slider="images-carousel">
    <div class="overflow-back bg-vegetables-pattern opacity-20"></div>
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon4-lgreen.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Ikuti Kami</h2>
            <p class="section-text">Lihat yang terbaru <a href="#">@burpangggg_id</a></p>
        </div>
        <div class="slick-arrows">
            <div class="slick-arrow-prev"><i class="fas fa-arrow-left"></i></div>
            <div class="slick-arrow-next"><i class="fas fa-arrow-right"></i></div>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="slick-view-carousel slick-carousel">
            <div class="slick-slides">
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig1.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig2.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig3.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig4.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig5.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
                <div class="slick-slide">
                    <a class="entity-block entity-hover-shadow" href="#"><span class="entity-preview-show-up entity-preview"><span class="embed-responsive embed-responsive-1by1"><img class="embed-responsive-item" style="object-fit: cover;" src="<?php echo base_url("assets") ?>/images/default/ig6.jpg" alt="" /></span><span class="with-back entity-preview-content"><span class="overflow-back bg-body-back opacity-70"></span><span class="m-auto h1 text-theme text-center"><i class="fab fa-instagram"></i></span></span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-head container left">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon5.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Kontak</h2>
            <p class="section-text">Berhubungan</p>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="entity">
            <div class="cols-lg row">
                <div class="col-12 col-xl">
                    <div class="frame-block p-2">
                        <iframe style="width: -webkit-fill-available;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2641447208744!2d106.87330671471737!3d-6.359847895397799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ecf211e45971%3A0x7059d96e78941f2c!2sJl.%20Blk.%20Duku%2C%20RT.10%2FRW.10%2C%20Cibubur%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1625388733085!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-12 col-xl-3 pt-xl-3">
                    <div class="cols-sm row">
                        <div class="col-md-6 col-lg-3 col-xl-12">
                            <div class="entity-record short">
                                <div class="entity-record-title">Telepon:</div>
                                <div class="entity-record-value">+6287721601239</div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-12">
                            <div class="entity-record short">
                                <div class="entity-record-title">Alamat:</div>
                                <div class="entity-record-value">
                                    Jl. Blk. Duku, RT.10/RW.10, Cibubur, Kec. Ciracas, Kota Jakarta Timur
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-12">
                            <div class="entity-record short">
                                <div class="entity-record-title">E-mail:</div>
                                <div class="entity-record-value">burpangggg_id@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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