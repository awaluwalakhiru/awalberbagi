<div class="col">
    <div class="row">
        <h5 class="pl-3">Edit Data Kategori</h5>
        <div class="col">
            <a href="<?= site_url('kategori/data'); ?>" class="btn btn-info btn-sm mb-2 float-right">&laquo; kembali</a>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            Edit Daftar Kategori
        </div>
        <div class="card-body">
            <form action="<?= site_url('kategori/edit') ?>" method="post">
                <div class="form-group row">
                    <label for="username" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Nama kategori</label>
                    <div class="col-md-7">
                        <input type="hidden" name="id" value="<?= $pId->id_kategori; ?>">
                        <input type="text" value="<?= $pId->nama_kategori; ?>" class="form-control" name="nama_kategori" placeholder="Nama Kategori" autofocus>
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