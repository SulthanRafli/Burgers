<script src="<?php echo base_url('assets_admin/plugins') ?>/jquery/jquery.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?php echo base_url('assets_admin/plugins') ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets_admin/template/backend/dist') ?>/js/adminlte.js"></script>
<script src="<?php echo base_url('assets_admin/template/backend/dist') ?>/js/demo.js"></script>
<script src="<?php echo base_url('assets_admin/template/backend/dist') ?>/js/pages/dashboard.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/sc-2.0.3/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="<?php echo base_url('assets_admin/plugins') ?>/select2/js/select2.full.min.js"></script>
<script>
    baseUrl = "<?php echo base_url(); ?>";

    $('#table').DataTable({
        "scrollX": true,
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });

    $('.select2').select2({
        theme: 'bootstrap4'
    })

    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
</script>