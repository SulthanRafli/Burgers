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
                <div class="section-back-text">Daftar</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Daftar</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Daftar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-head">
        <div class="section-icon">
            <img class="svg-fill-white svg-content" src="<?php echo base_url("assets") ?>/images/default/icon4-lgreen.png" />
        </div>
        <div class="section-head-content">
            <h2 class="section-title">Daftar</h2>
            <p class="section-text">Bergabunglah dengan kami.</p>
        </div>
    </div>
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
                <form autocomplete="off" id="basic">
                    <div class="row grid">
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nama Depan</label>
                                <div class="input-group">
                                    <input class="form-control" name="firstName" type="text" placeholder="Nama Depan" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nama Belakang</label>
                                <div class="input-group">
                                    <input class="form-control" name="lastName" type="text" placeholder="Nama Belakang" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Jenis Kelamin</label>
                                <div class="input-group">
                                    <select class="form-control" name="gender">
                                        <option value="L">Laki - laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Username</label>
                                <div class="input-group">
                                    <input class="form-control" name="username" type="text" placeholder="Username" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Email</label>
                                <div class="input-group">
                                    <input class="form-control" name="email" type="email" placeholder="Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Password</label>
                                <div class="input-group">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Confirm Password</label>
                                <div class="input-group">
                                    <input class="form-control" name="confirmPassword" id="confirmPassword" type="password" placeholder="Confirm password" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Alamat</label>
                                <div class="input-group">
                                    <input class="form-control" name="address" type="text" placeholder="Alamat" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kecamatan</label>
                                <div class="input-group">
                                    <input class="form-control" name="urbanVillage" type="text" placeholder="Kecamatan" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kelurahan</label>
                                <div class="input-group">
                                    <input class="form-control" name="district" type="text" placeholder="Kelurahan" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kota</label>
                                <div class="input-group">
                                    <input class="form-control" name="city" type="text" placeholder="Kota" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Provinsi</label>
                                <div class="input-group">
                                    <input class="form-control" name="province" type="text" placeholder="Provinsi" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kode Pos</label>
                                <div class="input-group">
                                    <input class="form-control" name="posCode" type="text" placeholder="Kode Pos" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nomor Telepon</label>
                                <div class="input-group">
                                    <input class="form-control" name="phone" type="text" placeholder="Nomor Telepon" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-auto mx-auto">
                            <button class="btn-wide mb-0 btn btn-theme" type="button-submit" onclick="save()">
                                daftar
                            </button>
                        </div>
                        <div class="col-12 text-center">
                            Sudah memiliki akun?&nbsp;<a href="<?php echo base_url("C_user/login") ?>">Masuk</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function save() {
        $("#basic").submit(function(e) {

            swal({
                title: "Apa anda yakin ingin mendaftar ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    let password = $("#password").val();
                    let confirmPassword = $("#confirmPassword").val();
                    if (password == confirmPassword) {
                        $.ajax({
                            type: "POST",
                            url: baseUrl + "C_user/save",
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
                                        text: "Terimakasih Telah Mendaftar",
                                        icon: "success",
                                        button: "OK",
                                    }).then(function(isConfirm) {
                                        window.location = baseUrl + "C_user/login";
                                    });
                                } else if (data.status == 503) {
                                    swal({
                                        title: "Pemberitahuan",
                                        text: "Email sudah terdaftar",
                                        icon: "warning",
                                        button: "OK",
                                    });
                                } else {
                                    swal({
                                        title: "Error",
                                        text: "Data Gagal Disimpan",
                                        icon: "error",
                                        button: "OK",
                                    });
                                }
                            },
                        });
                    } else {
                        swal({
                            title: "Pemberitahuan",
                            text: "Password tidak sama",
                            icon: "warning",
                            button: "OK",
                        });
                    }
                } else {
                    swal("Cancelled", "", "error");
                }
            });
            return false;
        });
    }
</script>