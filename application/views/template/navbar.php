<header class="header-colorfull header-horizontal header-over header-view-side">
    <div class="container">
        <nav class="navbar">
            <a class="navbar-brand" href="<?php echo base_url() ?>"><span class="logo-element-line"><span class="logo-icon"><span class="svg-content svg-fill-theme" data-svg="<?php echo base_url("assets") ?>/images/svg/logo-part.svg"></span></span><span class="logo-text">Burpang</span></span></a>
            <button class="navbar-toggler" type="button">
                <i class="fas fa-bars nav-show"></i><i class="fas fa-times nav-hide"></i>
            </button>
            <div class="navbar-collapse">
                <div class="container">
                    <ul class="navbar-nav">
                        <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                            <a class="nav-link" href="<?php echo base_url("C_home") ?>">Beranda</a>
                        </li>
                        <li class="nav-item nav-item-arrow-down nav-hover-show-sub">
                            <a class="nav-link" href="<?php echo base_url("C_about") ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url("C_product") ?>">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url("C_contact") ?>">Kontak</a>
                        </li>
                    </ul>
                    <div class="navbar-extra">
                        <ul class="actions-nav">
                            <?php if ($this->session->userdata('isLogin') == false) {
                                echo "
                                <li class='nav-item'>                                
                                    <a class='nav-link' href='" . base_url('C_user/login') . "'><i class='fas fa-user'></i>&nbsp;&nbsp;Masuk</a>
                                </li>";
                            } else {
                                echo "
                                <li class='nav-item'>  
                                    <a class='nav-link' href='" . base_url('C_user/view/') . $this->session->userdata('idUser') . "'><i class='fas fa-user'></i>&nbsp;&nbsp;" . $this->session->userdata('username') . "</a>
                                </li>
                                <li class='nav-item'>  
                                    <a class='nav-link' href='" . base_url('C_user/logout') . "'><i class='fas fa-sign-out-alt'></i>&nbsp;&nbsp; Keluar</a>
                                </li>";
                            } ?>

                            <li class="nav-item">
                                <a class="nav-link" id="click-cart" href="<?php echo base_url("C_cart") ?>" data-show-block="cart"><i class="fas fa-shopping-bag"></i><span class="navbar-mobile">&nbsp;&nbsp;Keranjang</span>
                                    <span class="cart-quantity">
                                        <span class="badge badge-pill badge-cart">
                                            <?php if ($this->session->has_userdata('cart')) {
                                                echo count($this->session->userdata('cart'));
                                            } else {
                                                echo 0;
                                            } ?>
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="navbar-info">
                            <div class="navbar-info-title">Hubungi Kami</div>
                            <div class="navbar-info-value">+6287721601239</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>