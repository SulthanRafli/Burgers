<style>
    .col-sm-12 {
        margin-top: 10px !important;
    }
</style>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>List Data Feedback</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" width="10%">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Pesan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    $no = 1;
                                    foreach ($list_contact as $lc) {
                                        echo "
                                        <tr>
                                            <td>$no</td>                                            
                                            <td>$lc->name</td>
                                            <td>$lc->email</td>
                                            <td>$lc->message</td>                                                                                                 
                                            <td>                                               
                                                <button type='button' class='btn btn-md btn-danger' onclick='deleteData($lc->idContact)'>Hapus</button>                                                
                                            </td>
                                        </tr>                                        
                                        ";
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function deleteData(id) {
        swal({
            title: "Anda sudah yakin melakukan penghapusan data?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            icon: "warning",
            buttons: ["Tidak", "Iya"],
            dangerMode: true,
        }).then(function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    url: baseUrl + "C_admin/delete_contact/" + id,
                    dataType: "json",
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(arguments);
                        console.log(errorThrown);
                        console.log(textStatus);
                    },
                    success: function(data) {
                        if (data.status === true) {
                            swal({
                                title: "Berhasil",
                                text: "Data Berhasil Terhapus",
                                icon: "success",
                                button: "OK",
                            }).then(function(isConfirm) {
                                window.location = baseUrl + "C_admin/list_feedback";
                            });
                        } else {
                            swal({
                                title: "Error",
                                text: "Data Gagal Dihapus",
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
    }
</script>