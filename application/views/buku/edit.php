<div class="col">
    <div class="row">
        <h5 class="pl-3">Edir Data Buku</h5>
        <div class="col">
            <a href="<?= site_url('buku/data'); ?>" class="btn btn-info btn-sm mb-2 float-right">&laquo; kembali</a>
        </div>
    </div>
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="row">
            <div class="col-md-12 col-12 mx-auto">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="card">
        <div class="card-header text-center">
            Edir Daftar Buku
        </div>
        <div class="card-body">
            <form action="<?= site_url('buku/edit'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="judul" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Judul</label>
                    <div class="col-md-7">
                        <input type="hidden" name="id_buku" value="<?= $buku->id_buku; ?>">
                        <input type="text" class="form-control" value="<?= $buku->judul_buku; ?>" name="judul" placeholder="Masukkan judul" autofocus>
                        <?= form_error('judul', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Deskripsi</label>
                    <div class="col-md-7">
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi"><?= $buku->deskripsi_buku; ?></textarea>
                        <?= form_error('deskripsi', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Jumlah</label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" value="<?= $buku->jumlah_buku; ?>" name="jumlah" placeholder="Masukkan jumlah">
                        <?= form_error('jumlah', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cover" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Cover</label>
                    <div class="col-md-7">
                        <input type="file" name="cover" class="form-control">
                        <?= form_error('cover', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kategori" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Kategori</label>
                    <div class="col-md-7">
                        <select name="kategori" id="kategori" class="custom-select">
                            <option value="">-Pilih Kategori-</option>
                            <?php foreach ($kategori as $row) : ?>
                                <option value="<?= $row->id_kategori; ?>" <?= ($row->id_kategori == $buku->id_kategori) ? 'selected' : ''; ?>><?= $row->nama_kategori; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('kategori', '<small class="alert alert-danger form-text mb-0" role="alert">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-md-3 offset-md-4">
                        <button type='submit' class='btn btn-primary' name='edit'>edit</button>
                    </div>
                    <div class="col">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>