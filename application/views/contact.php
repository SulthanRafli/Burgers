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
                <div class="section-back-text">Kontak Kami</div>
            </div>
            <div class="z-index-4 position-relative text-center">
                <h1 class="section-title">Kontak Kami</h1>
                <div class="mt-3">
                    <div class="page-breadcrumbs">
                        <a class="content-link" href="<?php echo base_url() ?>">Beranda</a><span class="mx-2">\</span><span>Kontak Kami</span>
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
            <h2 class="section-title">Memiliki sesuatu untuk dikatakan?</h2>
            <p class="section-text">Disini tempatnya</p>
        </div>
    </div>
    <div class="container">
        <form autocomplete="off" id="basic">
            <div class="row grid justify-content-center">
                <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                    <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Nama</label>
                        <div class="input-group">
                            <input class="form-control" name="name" type="text" placeholder="Nama" required="required" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                    <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Email</label>
                        <div class="input-group">
                            <input class="form-control" name="email" type="email" placeholder="Email" required="required" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="input-view-flat input-gray-shadow form-group">
                        <label class="required">Pesan</label>
                        <div class="input-group">
                            <textarea class="form-control" name="message" placeholder="Pesan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn-wide mb-0 btn btn-theme" type="button-submit" onclick="save()">
                        kirim pesan
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    function save() {
        $("#basic").submit(function(e) {
            swal({
                title: "Apa anda yakin ingin mengirim pesan ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_contact/save",
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
                                    text: "Terimakasih Atas Feedback Anda",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_contact";
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
                    swal("Cancelled", "", "error");
                }
            });
            return false;
        });
    }
</script>