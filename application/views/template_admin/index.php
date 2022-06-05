<?php if ($this->session->userdata('isLogin') == false) {
    redirect(base_url());
} else {
    if ($this->session->userdata('kategori') == 2) {
        redirect(base_url());
    }
} ?>
<?php $this->load->view('template_admin/meta') ?>
<div class="wrapper">
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="<?php echo base_url('assets_admin/template/backend/dist') ?>/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php $this->load->view('template_admin/navbar') ?>

    <?php $this->load->view('template_admin/sidebar') ?>

    <?php $this->load->view($page) ?>

    <?php $this->load->view('template_admin/footer') ?>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
</div>
<?php $this->load->view('template_admin/js') ?>
</body>

</html>