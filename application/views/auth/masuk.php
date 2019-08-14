<!-- card -->
<div class="container pt-5 pb-5">
    <div class="card mx-auto">
        <div class="card-header text-center">
            Masuk
        </div>
        <div class="card-body">
            <h5 class="card-title text-center">Halaman Masuk</h5>
            <?php if ($this->session->flashdata('pesan')) : ?>
                <div class="row">
                    <div class="col-md-10 col-12 mx-auto">
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Username</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="username" value="<?= set_value('username'); ?>" placeholder="Username" autofocus>
                        <?= form_error('username', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
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
                    <div class="col col-md-3 offset-md-4">
                        <button type='submit' class='btn btn-primary' name='masuk'>Masuk</button>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary" href='<?= site_url() ?>auth/daftar'>Daftar</a>
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