<!DOCTYPE html>
<html>
<?php $this->load->view('template/meta') ?>

<body class="body">
    <div class="page-loader cube-loader">
        <div class="loader-wrap">
            <div class="loader-1 loader-element"></div>
        </div>
    </div>
    <?php $this->load->view('template/navbar') ?>
    <?php $this->load->view($page) ?>
    <?php $this->load->view('template/cart') ?>
    <div class="scroll-top"><i class="fas fa-long-arrow-alt-up"></i></div>
    <?php $this->load->view('template/footer') ?>
    <?php $this->load->view('template/js') ?>
</body>

</html>