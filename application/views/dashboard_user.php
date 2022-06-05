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
                <div class="section-back-text">Dashboard</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Dashboard</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Dashboard</span>
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
                <a class="nav-link active" href="<?php echo base_url("C_user") ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("C_user/view/" . $this->session->userdata('idUser') . "") ?>">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("C_user/orders") ?>">Pesanan</a>
            </li>
        </ul>
        <div class="separator-line wide mirror"></div>
    </nav>
</div>
<section class="mt-5 entity section">
    <div class="container">
        <div class="grid align-items-center row">
            <div class="col-auto col-lg">
                <div class="d-inline-block mb-0 entity-image">
                    <img class="mw-100" src="<?php echo base_url("assets/") ?><?php if ($this->session->userdata('image') == "images/default/male-default.png" || $this->session->userdata('image') == "images/default/female-default.png") {
                                                                                    echo $this->session->userdata('image');
                                                                                } else {
                                                                                    echo "upload/profile/" . $this->session->userdata('image') . "";
                                                                                } ?>" alt="" />
                </div>
            </div>
            <div class="col-6 col-lg">
                <h5 class="mb-0 entity-title"><?php echo $this->session->userdata('firstName') . " " . $this->session->userdata('lastName') ?></h5>
                <p class="mb-0 entity-text">Member</p>
            </div>
            <div class="col-6 col-lg-4">
                <div class="entity-detail-side-icon">
                    <span class="entity-detail-icon text-theme"><i class="far fa-envelope fa-fw"></i></span><?php echo $this->session->userdata('email') ?>
                </div>
                <div class="entity-detail-side-icon">
                    <span class="entity-detail-icon text-theme"><i class="fas fa-phone-volume fa-fw"></i></span><?php echo $this->session->userdata('phone') ?>
                </div>
            </div>
            <div class="col-6 col-lg-4">
                <div class="entity-detail-side-icon">
                    <span class="entity-detail-icon text-theme"><i class="fas fa-map-marker-alt fa-fw"></i></span><?php echo $this->session->userdata('address') ?>,<br /><?php echo $this->session->userdata('city') ?>, <?php echo $this->session->userdata('province') ?>, <?php echo $this->session->userdata('posCode') ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-head">
        <div class="separator-double"></div>
        <h2 class="section-title">Pesanan Saya</h2>
    </div>
    <div class="container">
        <?php if (!empty($orders)) { ?>
            <?php foreach ($orders as $o) {
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
                }
                echo "
            <div class='line-entity dash-separated-entity'>
                <div class='entity-number'>
                    <a class='content-link' href='" . base_url('C_user/orders') . "#order-" . substr($o->noInvoice, 1) . "'>$o->noInvoice</a>
                </div>
                <div class='entity-title'>$o->product</div>
                <div class='entity-break d-md-none'></div>
                <div class='entity-date'>" . date("Y-m-d", strtotime($o->dateMake)) . "</div>
                <div class='entity-total'>Rp " . number_format($o->totalPrice, 0, ',', ',') . "</div>
                <div class='entity-status $color'> $status</div>
            </div>
            ";
            } ?>
            <div class="section-footer">
                <a class="btn btn-theme" href="<?php echo base_url("C_user/orders") ?>">lihat semua</a>
            </div>
        <?php } ?>
    </div>

</section>