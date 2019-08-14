$(function () {
    $("#tabel").DataTable({
        "columnDefs": [{
            "targets": [5, 6],
            "orderable": false
        }]
    });
    $(".btn-group a.hapus").click(function () {
        var href = this.href;
        var modal = $(".modal-footer a").attr('href', href);
    });
    $(".btn-group a.hpsK").click(function () {
        var href = this.href;
        var modal = $(".modal-footer a").attr('href', href);
    });
    $(".btn-group a.hpsB").click(function () {
        var href = this.href;
        var modal = $(".modal-footer a").attr('href', href);
    });
    $(".btn-group a.edit").click(function () {
        var id = $(this).data('id');
        var href = this.href;
        var modal = $('form.editData').attr('action', href);
        $.ajax({
            url: "http://localhost/awalberbagi/anggota/ambil/" + id,
            method: "post",
            data: { id: id },
            type: "json",
            success: function (data) {
                var o = $.parseJSON(data);
                $("input.formNama").val(o.nama_anggota);
                $("input.formAlamat").val(o.alamat_anggota);
                $("input.formTelp").val(o.hp_anggota);
                $("input[name='id']").val(o.id_anggota);
                var opsiL = $("option.editL");
                var opsiP = $("option.editP");
                if (o.jk_anggota == "L") {
                    opsiL.prop('selected', true);
                } else {
                    opsiP.prop('selected', true);
                }
            }
        });
    });
    $("#tabel_kategori").DataTable({
        "columnDefs": [{
            "targets": [3],
            "orderable": false
        }]
    });
    $("#tabel_buku").DataTable({
        "columnDefs": [{
            "targets": [3, 5, 7],
            "orderable": false
        }]
    });
    $("#tabel_peminjaman").DataTable({
        "columnDefs": [{
            "targets": [6, 7],
            "orderable": false
        }]
    });
});
