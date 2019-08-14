<div class="col-sm-12 col-md-9">
    <h5>Daftar Anggota</h5>
    <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-success btn-sm mb-2">Tambah</a>
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="row">
            <div class="col-md-12 col-12 mx-auto">
                <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table" id="tabel">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($all as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row->id_anggota; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->alamat_anggota; ?></td>
                        <td><?= $row->jk_anggota == "L" ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td><?= $row->hp_anggota; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?= site_url('anggota/edit/' . $row->id_anggota) ?>" data-toggle="modal" data-target="#edit" data-id="<?= $row->id_anggota; ?>" class="btn btn-primary btn-sm edit">edit</a>
                                <a href="<?= site_url('anggota/hapus/' . $row->id_anggota) ?>" data-toggle="modal" data-target="#hapus" class="btn btn-danger btn-sm ml-1 hapus">hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Daftar Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Tambah Anggota</h5>
                <form action="<?= site_url('anggota/tambah'); ?>" method="post">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Nama</label>
                        <div class="col-md-7">
                            <input required type="text" id="nama" class="form-control" name="nama" placeholder="nama" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Alamat</label>
                        <div class="col-md-7">
                            <input required type="text" id="alamat" class="form-control" name="alamat" placeholder="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Gender
                        </label>
                        <div class="col-md-7">
                            <select required type="text" id="jenis" class="form-control" name="jenis">
                                <option value="" autofocus>-Pilih-</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Telepon</label>
                        <div class="col-md-7">
                            <input required type="number" pattern="[0-9]+" min="0" maxlength="13" id="telepon" class="form-control" name="telepon" placeholder="Nomor hp/telepon">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="tambah" class="btn btn-primary">tambah</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal tambah -->

<!-- modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Daftar Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Edit Data Anggota</h5>
                <form action="#" method="post" class="editData">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Nama</label>
                        <div class="col-md-7">
                            <input type="hidden" class="form-control" name="id">
                            <input type="text" id="nama" class="form-control formNama" name="nama" placeholder="nama" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Alamat</label>
                        <div class="col-md-7">
                            <input type="text" id="alamat" class="form-control formAlamat" name="alamat" placeholder="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Gender</label>
                        <div class="col-md-7">
                            <select type="text" id="jenis" class="form-control formJk" name="jenis">
                                <option value="">-Pilih-</option>
                                <option value="L" class="editL">Laki-laki</option>
                                <option value="P" class="editP">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-sm-12 col-md-3 offset-md-1 col-form-label">Telepon</label>
                        <div class="col-md-7">
                            <input type="telp" min="0" pattern="[0-9]+" maxlength="13" id="telepon" class="form-control formTelp" name="telepon" placeholder="Nomor hp/telepon">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- akhir modal edit -->