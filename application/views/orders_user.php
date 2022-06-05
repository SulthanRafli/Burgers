<?php if ($this->session->userdata('isLogin') == false) {
    redirect(base_url());
} else {
    if ($this->session->userdata('kategori') == 1) {
        redirect(base_url("C_admin/list_products"));
    }
} ?>
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
                <div class="section-back-text">Pesanan</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Pesanan</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Pesanan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section mb-0 container text-center">
    <nav class="line-navbar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("C_user") ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("C_user/view/" . $this->session->userdata('idUser') . "") ?>">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url("C_user/orders") ?>">Pesanan</a>
            </li>
        </ul>
        <div class="separator-line wide mirror"></div>
    </nav>
</div>
<section class="mt-5 section">
    <div class="container">
        <?php if (!empty($orders)) { ?>
            <div class="order-line-head-entity d-none d-md-block">
                <div class="entity-line-head">
                    <div class="entity-order-number">No Invoice</div>
                    <div class="entity-title">Produk</div>
                    <div class="entity-date">Tanggal</div>
                    <div class="entity-total">Total</div>
                    <div class="entity-status">Status</div>
                </div>
            </div>
            <div class="entity-accordion-group">
                <?php foreach ($orders as $o) :
                    if ($o->status == 1) {
                        $color = "";
                        $status = "Menunggu Pembayaran";
                    } else if ($o->status == 2) {
                        $color = "text-info";
                        $status = "Dikonfimasi";
                    } else if ($o->status == 3) {
                        $color = "text-warning";
                        $status = "Sedang Diproses";
                    } else if ($o->status == 4) {
                        $color = "text-primary";
                        $status = "Berhasil";
                    } else {
                        $color = "text-danger";
                        $status = "Batal";
                    } ?>
                    <div class='
                    order-line-entity
                    dash-separated-entity
                    entity-hover-only-shadow-block entity-expandable
                    ' id='order-<?php echo substr($o->noInvoice, 1) ?>' data-theme-accordion='orders-list'>
                        <div class='entity-line-head entity-expand-head'>
                            <div class='entity-expand'>
                                <div class='entity-active-rotate'>
                                    <i class='fas fa-angle-double-down fa-fw'></i>
                                </div>
                            </div>
                            <div class='entity-number'><?php echo $o->noInvoice ?></div>
                            <div class='entity-break d-sm-none'></div>
                            <div class='entity-title'><?php echo $o->product ?></div>
                            <div class='entity-break d-md-none'></div>
                            <div class='entity-date'><?php echo date("Y-m-d", strtotime($o->dateMake)) ?></div>
                            <div class='entity-total'>Rp <?php echo number_format($o->totalPrice, 0, ',', ',') ?></div>
                            <div class='entity-status <?php echo $color ?>' style='width: min-content'><?php echo $status ?></div>
                        </div>
                        <div class='entity-expanded-content'>
                            <div class='separator-dashed'></div>
                            <?php foreach ($detail_orders as $do) {
                                if ($o->idTransaction == $do->idTransaction) {
                                    echo "
                                <div class='entity-line-items'>
                                    <div class='line-entity'>
                                        <div class='entity-line-image'>
                                            <a class='entity-preview-show-up entity-preview' href='" . base_url("C_product/view/$do->idProduct") . "'><span class='embed-responsive embed-responsive-4by3'><img class='embed-responsive-item' src='" . base_url("assets") . "/upload/products/$do->image' alt='' /></span><span class='with-back entity-preview-content'><span class='h3 m-auto text-theme text-center'><i class='fas fa-search'></i></span><span class='overflow-back bg-body-back opacity-70'></span></span></a>
                                        </div>
                                        <div class='entity-title'>
                                            <a class='content-link' href='" . base_url("C_product/view/$do->idProduct") . "'>$do->product</a>
                                        </div>
                                        <div class='entity-break d-md-none'></div>
                                        <div class='entity-price'>Rp " . number_format($do->price, 0, ',', ',') . "</div>
                                        <div class='entity-quantity'>x$do->quantity</div>
                                        <div class='entity-total'>Rp " . number_format($do->price * $do->quantity, 0, ',', ',') . "</div>
                                    </div>
                                </div>
                                ";
                                }
                            } ?>
                            <div class='separator-dashed'></div>
                            <div class='entity-content-details'>
                                <div class='entity-content-title'>Informasi Pesanan</div>
                                <div class='row'>
                                    <div class='col-md-6 col-lg-6'>
                                        <ul class='main-list entity-list'>
                                            <li>
                                                <span class='entity-list-title'>Penerima:</span><span class='entity-list-value'><?php echo $o->name ?></span>
                                            </li>
                                            <li>
                                                <span class='entity-list-title'>Alamat:</span><span class='entity-list-value'><?php echo $o->address ?>, <?php echo $o->city ?>, <?php echo $o->province ?>, <?php echo $o->posCode ?></span>
                                            </li>
                                            <li style="padding-top: 10px;">
                                                <span class='entity-list-title'><a class="btn btn-theme" type="button" href="<?php echo base_url("C_transaction/print_invoice/$o->idTransaction") ?>" target="_blank">Cetak Invoice</a></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class='mt-4 mt-lg-0 col-md-6 col-lg-6'>
                                        <ul class='flex-list entity-list'>
                                            <li class='entity-detail-subtotal'>
                                                <span class='entity-list-title'>Sub total:</span><span class='entity-list-value'>Rp <?php echo number_format($o->totalPrice - 6000, 0, ',', ',') ?></span>
                                            </li>
                                            <li class='entity-detail-subtotal'>
                                                <span class='entity-list-title'>Pengiriman:</span><span class='entity-list-value'>Rp 6,000</span>
                                            </li>
                                            <li class='separator-line my-3'></li>
                                            <li class='entity-detail-total'>
                                                <span class='entity-list-title'>Total:</span><span class='entity-list-value'>Rp <?php echo number_format($o->totalPrice, 0, ',', ',') ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php } else { ?>
            <h1 class="text-center">Pesanan Kosong</h1>
        <?php }  ?>
    </div>
    <div class=" section-footer">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</section>