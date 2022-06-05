<?php if ($this->session->userdata('isLogin') == true) {
    if ($this->session->userdata('kategori') == 2) {
        redirect(base_url());
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
                <div class="section-back-text">Masuk</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Masuk</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Masuk</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-head">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon5.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Masuk</h2>
            <p class="section-text">
                Masuk ke akun anda untuk memesan produk.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-5 mx-auto">
                <form id="basic">
                    <div class="row grid">
                        <div class="col-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Email</label>
                                <div class="input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Password</label>
                                <div class="input-group">
                                    <input class="form-control" name="password" type="password" placeholder="Password" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn-wide mb-0 btn btn-theme" type="button-submit" onclick="login()">
                                masuk
                            </button>
                        </div>
                        <div class="col-12 text-center">
                            Belum punya akun?&nbsp;<a href="<?php echo base_url("C_user/register") ?>">Daftar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function login() {
        $("#basic").submit(function(e) {
            $.ajax({
                type: "POST",
                url: baseUrl + "C_user/check_login",
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
                    if (data.status === true) {
                        swal({
                            title: "Berhasil",
                            text: "Login Berhasil",
                            icon: "success",
                            button: "OK",
                        }).then(function(isConfirm) {
                            if (data.kategori == 1) {
                                window.location = baseUrl + "C_admin/list_products";
                            } else {
                                location.reload();
                            }
                        });
                    } else {
                        swal({
                            title: "Gagal",
                            text: "Login Gagal",
                            icon: "error",
                            button: "OK",
                        });
                    }
                },
            });
            return false;
        });
    }
</script>