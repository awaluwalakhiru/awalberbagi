<div class="col-sm-12 col-md-9">
    <h5>Daftar Buku</h5>
    <a href="<?= site_url('buku/f_tambah'); ?>" class="btn btn-success btn-sm mb-2">Tambah</a>
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="row">
            <div class="col-md-12 col-12 mx-auto">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($success)) {
        var_dump($success);
    } ?>
    <?php if (isset($error)) {
        var_dump($error);
    } ?>
    <div class="table-responsive">
        <table class="table" id="tabel_buku">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Sampul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($buku as $row) :
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row->id_buku; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->deskripsi_buku; ?></td>
                        <td><?= $row->jumlah_buku; ?></td>
                        <td><img src="<?= base_url('uploads/' . $row->cover_buku); ?>" style="max-width: 100px;max-height: 100px;" class="img-thumbnail"></td>
                        <td><?= $row->nama_kategori; ?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="<?= site_url('buku/f_edit/' . $row->id_buku); ?>" class="btn btn-info mr-2 btn-sm" id="edit">Edit</a>
                                <a href="<?= site_url('buku/hapus/' . $row->id_buku); ?>" class="btn btn-danger btn-sm hpsB" data-toggle="modal" data-target="#hapusB">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal hapus -->
<div class="modal fade" id="hapusB" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a href="#" class="btn btn-primary">Ya</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
        </div>
    </div>
</div>
<!-- akhir modal -->