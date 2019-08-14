<!-- awal content -->
<div class="col-sm-12 col-md-9">
    <h4>Selamat datang, <?= ucfirst($this->session->userdata('username')); ?></h4>
    <div class="accordion pt-2" id="accordionExample">
        <div class="card akordion">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0 ml-0 pl-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="intermezo">Intermezzo silahkan diklik #</span>
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Assalamu'allaikum warahmatullahi wabarakatuh, saat ini anda sedang memasuki aplikasi buatan saya yang sederhana. Sekiranya berkenan anda dapat menghubungi saya di <i><b><strong>WA 08562671113</strong></b></i> atau via <i><b><strong>EMAIL awalprasetyo4@gmail.com</strong></b></i>. Terima kasih telah berkunjung</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- akhir content -->