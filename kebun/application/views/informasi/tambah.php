<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Informasi Kebun
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="pemilik">Pemilik</label>
                            <input type="text" class="form-control" id="pemilik" name="pemilik">
                            <small class="form-text text-danger"><?= form_error('pemilik'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="letak">Letak</label>
                            <input type="text" class="form-control" id="letak" name="letak">
                            <small class="form-text text-danger"><?= form_error('letak'); ?></small>

                        </div>

                        <div class="form-group">
                            <label for="luas">Luas</label>
                            <input type="text" class="form-control" id="luas" name="luas">
                            <small class="form-text text-danger"><?= form_error('luas'); ?></small>

                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Informasi
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ini digunakan untuk view dari menu di tombol tambah informasi baru -->