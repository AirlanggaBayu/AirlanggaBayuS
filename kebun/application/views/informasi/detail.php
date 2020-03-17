<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Informasi
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $informasi['nama']; ?></h5>
                    <h6 class="card-title"><?= $informasi['pemilik']; ?></h6>
                    <p class="card-text"><?= $informasi['letak']; ?></p>
                    <p class="card-text"><?= $informasi['luas']; ?></p>
                    <a href="<?= base_url() ?>informasi" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- digunakan untuk view dari tampilan detail data-->