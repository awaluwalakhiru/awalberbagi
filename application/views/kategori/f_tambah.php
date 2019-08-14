<div class="col">
    <div class="row">
        <h5 class="pl-3">Tambah Data Kategori</h5>
        <div class="col">
            <a href="<?= site_url('kategori/data'); ?>" class="btn btn-info btn-sm mb-2 float-right">&laquo; kembali</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
            Tambah Daftar Kategori
        </div>
        <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="row">
                <div class="col-md-12 col-12 mx-auto">
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <form action="<?= site_url('kategori/tambah') ?>" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Nama kategori</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" value="<?= set_value('nama_kategori'); ?>" name="nama_kategori" placeholder="Nama Kategori" autofocus>
                        <?= form_error('nama_kategori', '<small class="form-text alert alert-danger mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-md-3 offset-md-4">
                        <button type='submit' class='btn btn-primary' name='tambah'>tambah</button>
                    </div>
                    <div class="col">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>