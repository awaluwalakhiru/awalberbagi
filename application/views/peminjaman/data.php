<div class="col-sm-12 col-md-9">
    <h5>Daftar Peminjaman</h5>
    <a href="<?= site_url('peminjaman/tambah'); ?>" class="btn btn-success btn-sm mb-2">Peminjaman</a>
    <div class="table-responsive">
        <table class="table" id="tabel_peminjaman">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Pinjam</th>
                    <th scope="col">Tempo</th>
                    <th scope="col">Kembali</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($pinjam as $row) :
                    ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->tanggal_pinjam; ?></td>
                        <td><?= $row->tanggal_jatuh_tempo; ?></td>
                        <td class="text-center">
                            <?= ($row->tanggal_kembali != '') ? $row->tanggal_kembali : '-'; ?></td>
                        <td>
                            <?php $status = '';
                            if ($row->tanggal_kembali != '') {
                                $status = 'sudah dikembalikan';
                            } else {
                                $status = 'belum dikembalikan';
                            }
                            echo $status; ?>
                        </td>
                        <td>
                            <div class="btn-group" role="group">
                                <?php if ($row->tanggal_kembali == '') : ?>
                                    <a href="<?= site_url('pengembalian/hapus/' . $row->id_pinjam); ?>" class="btn btn-info mr-2 btn-sm" title="Klik untuk proses pengembalian">kembalikan</a>
                                    <a href="<?= site_url('peminjaman/edit/' . $row->id_pinjam . '/' . $status); ?>" class="btn btn-info mr-2 btn-sm">Edit</a>
                                <?php endif; ?>
                                <a href="<?= site_url('peminjaman/hapus/' . $row->id_pinjam . '/' . $status . '/' . $row->id_buku); ?>" class="btn btn-danger btn-sm" id="hapus" onclick="return confirm('Anda yakin akan menghapusnya?')">Hapus</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>