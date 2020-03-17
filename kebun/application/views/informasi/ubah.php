<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Informasi Kebun
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= $informasi['id']; ?>""
                            <label for=" nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $informasi['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $informasi['pemilik']; ?>">
                            <small class="form-text text-danger"><?= form_error('pemilik'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="letak">Letak</label>
                            <input type="text" class="form-control" id="letak" name="letak" value="<?= $informasi['letak']; ?>">
                            <small class="form-text text-danger"><?= form_error('letak'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="luas">Luas</label>
                            <input type="text" class="form-control" id="luas" name="luas" value="<?= $informasi['luas']; ?>">
                            <small class="form-text text-danger"><?= form_error('luas'); ?></small>

                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">
                            Ubah Informasi
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ini digunakan untuk menampilkan view ubah data -->