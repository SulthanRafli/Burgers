<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url(); ?>C_admin/list_products" class="brand-link">
        <img src="<?php echo base_url("assets") ?>/images/svg/logo-part.svg" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Burpang</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img style="height: 2.1rem !important; object-fit: cover !important;" src="<?php echo base_url('assets/images/default/admin-default.png') ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p class="text-white" style="margin: 0;">Admin</p>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>C_admin/list_products" <?php if ($classAktif == 'list_products_admin') {
                                                                                    echo 'class="nav-link active"';
                                                                                } else {
                                                                                    echo 'class="nav-link"';
                                                                                } ?>>
                        <i class="nav-icon fas fa-archive"></i>
                        <p>List Produk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>C_admin/list_transaction" <?php if ($classAktif == 'list_transaction_admin') {
                                                                                    echo 'class="nav-link active"';
                                                                                } else {
                                                                                    echo 'class="nav-link"';
                                                                                } ?>>
                        <i class="nav-icon fas fa-archive"></i>
                        <p>List Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url(); ?>C_admin/list_feedback" <?php if ($classAktif == 'list_feedback_admin') {
                                                                                    echo 'class="nav-link active"';
                                                                                } else {
                                                                                    echo 'class="nav-link"';
                                                                                } ?>>
                        <i class="nav-icon fas fa-archive"></i>
                        <p>List Ulasan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>