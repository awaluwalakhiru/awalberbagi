<!-- card -->
<div class="container pt-5 pb-5">
    <div class="card mx-auto">
        <div class="card-header text-center">
            Registrasi
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Halaman Registrasi</h5>
            <?php if ($this->session->flashdata('pesan')) : ?>
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <form action="<?= base_url(); ?>auth/daftar" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Username</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="username" value="<?= set_value('username'); ?>" placeholder="Username" autofocus>
                        <?= form_error('username', '<small class="form-text alert alert-danger mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Password</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" placeholder="Password">
                        <?= form_error('password', '<small class="form-text alert alert-danger mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password2" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Konfirmasi
                        Password</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" name="password2" value="<?= set_value('password2'); ?>" placeholder="Konfirmasi Password">
                        <?= form_error('password2', '<small class="form-text alert alert-danger mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-md-3 offset-md-4">
                        <button type="submit" class="btn btn-primary daftar" name="daftar">Daftar</button>
                    </div>
                    <div class="col">
                        <a href="<?= base_url(); ?>auth/masuk" class="btn btn-primary">Masuk</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted text-center">
            <?php
            $waktu = date("l, d-M-Y, h:i:s");
            echo "$waktu";
            ?>
        </div>
    </div>
</div>

<!-- modal on load -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Petunjuk Penggunaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Buat dengan registrasi atau masuk</li>
                        <li class="list-group-item">2. password dan username yang telah terdaftar</li>
                        <li class="list-group-item">3. awal, prasetyo, admin
                            <code><i><b>itu password dan username yang bisa langsung digunakan</b></i></code></li>
                        <li class="list-group-item">4. Atau anda bisa registrasi langsung bisa masuk</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#exampleModalCenter").modal('show');
    });
    // setTimeout(function setModal() {
    //     $("#exampleModalCenter").modal('hide');
    // }, 5000);
</script>