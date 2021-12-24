<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © <?=date('Y')?>. All rights reserved. Design with <i class="fa fa-heart"
                    style="color:red"></i> by <a href="https://streamzinu.com">Streamzinu</a>.</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log out</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah yakin ingin logout ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url()?>logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT MODAL -->
<div class="modal fade" id="aboutModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

<!-- Verifikasi MODAL -->
<div class="modal fade" id="verifikasiModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">

</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url()?>assets/js/sb-admin-2.min.js"></script>



<!-- Page level plugins -->
<script src="<?= base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url()?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url()?>assets/js/demo/chart-pie-demo.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    $('#aboutModal').load('<?= base_url()?>modal/about');
    $('#addPenjualanModal').load('<?=base_url()?>modal/penjualan');
    $('#addPelangganModal').load('<?=base_url()?>modal/pelanggan');
    $('#addDistributorModal').load('<?=base_url()?>modal/distributor');
    $('#addPersediaanModal').load('<?=base_url()?>modal/persediaan');
    $('#addDataMasukModal').load('<?=base_url()?>modal/data_masuk');
    $('#addDataKeluarModal').load('<?=base_url()?>modal/data_keluar');
    
    $('#editDistributorModal').load('<?=base_url()?>modal/edit_distributor');
    $('#editDataMasukModal').load('<?=base_url()?>modal/edit_data_masuk');
    $('#editDataKeluarModal').load('<?=base_url()?>modal/edit_data_keluar');
    $('#editPelangganModal').load('<?=base_url()?>modal/edit_pelanggan');
    $('#editPersediaanModal').load('<?=base_url()?>modal/edit_persediaan');
    $('#editPenjualanModal').load('<?=base_url()?>modal/edit_penjualan');
});
</script>
<?php if($this->session->flashdata('insert') == 'berhasil'): ?>
<script>
Swal.fire(
    'Success !!',
    'Data Berhasil Ditambahkan',
    'success'
)
</script>
<?php endif ?>
<?php if($this->session->flashdata('edit') == 'berhasil'): ?>
<script>
Swal.fire(
    'Success !!',
    'Data Berhasil Diupdate',
    'success'
)
</script>
<?php endif ?>
<script>
$(document).ready(function() {
    $("#export").on('change', function() {
        if ($(this).val() == 'img') {
            var container = document.getElementById("html-content-holder");; // full page 
            html2canvas(container, {
                allowTaint: true
            }).then(function(canvas) {

                var link = document.createElement("a");
                document.body.appendChild(link);
                link.download = "html_image.jpg";
                link.href = canvas.toDataURL();
                link.target = '_blank';
                link.click();
            });
        }
    });
});
</script>
</body>

</html>