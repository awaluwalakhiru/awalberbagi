</div>
</div>
<div class="card-footer text-muted text-center">
    <?php
    $waktu = date("l, d-M-Y, h:i:s");
    echo "$waktu";
    ?>
</div>
</div>
</div>
<!-- footer -->
<footer class="navbar bg-dark d-flex justify-content-center fixed-bottom">
    <span class=" text-light">Created by Awal
        Prasetyo &copy; 2018</span>
</footer>

<!-- Modal keluar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Perhatian</h5>
                <p>Yakin anda ingin keluar?</p>
            </div>
            <div class="modal-footer">
                <a href="<?= site_url('auth/keluar') ?>" class="btn btn-primary">Ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>

</body>

</html>