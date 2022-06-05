<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Produk</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="basic">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama" id="nama" value="<?php echo $product->name ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="number" class="form-control" name="harga" id="harga" value="<?php echo $product->price ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" cols="5" rows="5" placeholder="Deskripsi" name="deskripsi" id="deskripsi" required><?php echo $product->description ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="file_name" id="file_name">
                                            <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>C_admin/list_products">Kembali</a>
                                <button type="button-submit" class="btn btn-primary" onclick="update(<?php echo $product->idProduct ?>)">Ubah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function update(id) {
        $("#basic").submit(function(e) {
            let file_data = $("#file_name").prop("files")[0] ? $("#file_name").prop("files")[0] : "";
            let form_data = new FormData();
            form_data.append("file", file_data);
            form_data.append("nama", $("#nama").val());
            form_data.append("harga", $("#harga").val());
            form_data.append("deskripsi", $("#deskripsi").val());
            swal({
                title: "Anda sudah yakin mengubah data ?",
                text: "Pastikan data yang diinput benar!",
                icon: "warning",
                buttons: ["Tidak", "Iya"],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: baseUrl + "C_admin/update_product/" + id,
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
                                    text: "Data Berhasil Diubah",
                                    icon: "success",
                                    button: "OK",
                                }).then(function(isConfirm) {
                                    window.location = baseUrl + "C_admin/list_products";
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
                                    text: "Data Gagal Diubah",
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