<div class="col-sm-12 col-md-9">
    <h5>Daftar Kategori</h5>
    <a href="<?= site_url('kategori/f_tambah'); ?>" class="btn btn-success btn-sm mb-2">Tambah</a>
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="row">
            <div class="col-md-12 col-12 mx-auto">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table" id="tabel_kategori">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($kategori as $row) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row->id_kategori; ?></td>
                        <td><?= $row->nama_kategori; ?></td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="<?= site_url('kategori/f_edit/' . $row->id_kategori); ?>" class="btn btn-info btn-sm mr-2">Edit</a><a href="<?= site_url('kategori/hapus/' . $row->id_kategori); ?>" data-id="" data-toggle="modal" data-target="#hapusK" class="btn btn-danger btn-sm hpsK">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal hapus -->
<div class="modal fade" id="hapusK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <p>Yakin anda ingin menghapus data?</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-primary hpsKategori">Ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal -->