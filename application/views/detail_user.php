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
                <div class="section-back-text">Detail User</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Profil</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Profil</span>
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
                <a class="nav-link active" href="<?php echo base_url("C_user/view/" . $this->session->userdata('idUser') . "") ?>">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url("C_user/orders") ?>">Pesanan</a>
            </li>
        </ul>
        <div class="separator-line wide mirror"></div>
    </nav>
</div>
<section class="mt-0 section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-7 mx-auto">
                <form id="basic" enctype="multipart/form-data">
                    <h2 class="section-title text-center my-5">
                        Informasi Personal
                    </h2>
                    <div class="row grid">
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nama Depan</label>
                                <div class="input-group">
                                    <input class="form-control" name="firstName" id="firstName" type="text" placeholder="Nama Depan" value="<?php echo $detail_user->firstName ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nama Belakang</label>
                                <div class="input-group">
                                    <input class="form-control" name="lastName" id="lastName" type="text" placeholder="Nama Belakang" value="<?php echo $detail_user->lastName ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Jenis Kelamin</label>
                                <?php if ($detail_user->gender == "L") {
                                    echo "
                                    <div class='input-group'>
                                        <select class='form-control' name='gender' id='gender'>
                                            <option value='L' selected>Laki - laki</option>
                                            <option value='P'>Perempuan</option>
                                        </select>
                                    </div>
                                    ";
                                } else {
                                    echo "
                                    <div class='input-group'>
                                        <select class='form-control' name='gender' id='gender'>
                                            <option value='L'>Laki - laki</option>
                                            <option value='P' selected>Perempuan</option>
                                        </select>
                                    </div>
                                    ";
                                } ?>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Username</label>
                                <div class="input-group">
                                    <input class="form-control" name="username" id="username" type="text" placeholder="username" value="<?php echo $detail_user->username ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Email</label>
                                <div class="input-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email" value="<?php echo $detail_user->email ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-view-flat input-gray-shadow form-group-preview">
                                <div class="file-preview mr-4">
                                    <div class="file-preview-image">
                                        <img class="mw-100" src="<?php echo base_url("assets/") ?><?php if ($detail_user->image == "images/default/male-default.png" || $detail_user->image == "images/default/female-default.png") {
                                                                                                        echo $detail_user->image;
                                                                                                    } else {
                                                                                                        echo "upload/profile/$detail_user->image";
                                                                                                    } ?>" alt="" />
                                    </div>
                                    <div class="file-no-preview">
                                        <i class="far fa-image"></i>
                                    </div>
                                    <div class="file-preview-bg"></div>
                                </div>
                                <div class="my-auto form-group">
                                    <label>Upload new avatar - JPEG 100x100</label>
                                    <div class="input-group-file">
                                        <input class="form-control-file" name="avatar" id="avatar" type="file" value="" />
                                        <div class="input-group">
                                            <input class="form-control" name="avatarPlaceholder" type="text" placeholder="No file choosen" data-value-current="" />
                                        </div>
                                        <a class="form-control-file-btn btn btn-theme" href="#">choose file</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="section-title text-center my-5">Detail Alamat</h2>
                    <div class="row grid">
                        <div class="col-12">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Alamat</label>
                                <div class="input-group">
                                    <input class="form-control" name="address" id="address" type="text" placeholder="Alamat" value="<?php echo $detail_user->address ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kecamatan</label>
                                <div class="input-group">
                                    <input class="form-control" name="urbanVillage" id="urbanVillage" type="text" placeholder="Kecamatan" value="<?php echo $detail_user->urbanVillage ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kelurahan</label>
                                <div class="input-group">
                                    <input class="form-control" name="district" id="district" type="text" placeholder="Kelurahan" value="<?php echo $detail_user->district ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kota</label>
                                <div class="input-group">
                                    <input class="form-control" name="city" id="city" type="text" placeholder="Kota" value="<?php echo $detail_user->city ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Provinsi</label>
                                <div class="input-group">
                                    <input class="form-control" name="province" id="province" type="text" placeholder="Provinsi" value="<?php echo $detail_user->province ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Kode Pos</label>
                                <div class="input-group">
                                    <input class="form-control" name="posCode" id="posCode" type="text" placeholder="Kode Pos" value="<?php echo $detail_user->posCode ?>" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-view-flat input-gray-shadow form-group">
                                <label class="required">Nomor Telepon</label>
                                <div class="input-group">
                                    <input class="form-control" name="phone" id="phone" type="text" placeholder="Nomor Telepon" value="<?php echo $detail_user->phone ?>" required="required" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row grid mt-0">
                        <div class="col-auto mx-auto">
                            <button class="btn-wide mb-0 btn btn-theme" type="button-submit" onclick="update(<?php echo $detail_user->idUser ?>)">
                                update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    function update(id) {
        $("#basic").submit(function(e) {
            let file_data = $("#avatar").prop("files")[0] ? $("#avatar").prop("files")[0] : "";
            let form_data = new FormData();
            form_data.append("file", file_data);
            form_data.append("firstName", $("#firstName").val());
            form_data.append("lastName", $("#lastName").val());
            form_data.append("gender", $("#gender").val());
            form_data.append("username", $("#username").val());
            form_data.append("email", $("#email").val());
            form_data.append("address", $("#address").val());
            form_data.append("urbanVillage", $("#urbanVillage").val());
            form_data.append("district", $("#district").val());
            form_data.append("city", $("#city").val());
            form_data.append("province", $("#province").val());
            form_data.append("posCode", $("#posCode").val());
            form_data.append("phone", $("#phone").val());
            swal({
                title: "Anda sudah yakin melakukan perubahan data ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_user/update/" + id,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        data: form_data,
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
                                    text: "Data Berhasil Diperbarui",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_user/view/" + id;
                                });
                            } else if (data.status == 503) {
                                swal({
                                    title: "Pemberitahuan",
                                    text: "Email sudah terdaftar",
                                    icon: "warning",
                                    button: "OK",
                                });
                            } else if (data.status == 504) {
                                swal({
                                    title: "Pemberitahuan",
                                    text: "Gagal mengupload foto",
                                    icon: "warning",
                                    button: "OK",
                                });
                            } else {
                                swal({
                                    title: "Error",
                                    text: "Data Gagal Diperbarui",
                                    icon: "error",
                                    button: "OK",
                                });
                            }
                        },
                    });
                } else {
                    swal("Cancelled", "", "error");
                }
            });
            return false;
        });
    }
</script>