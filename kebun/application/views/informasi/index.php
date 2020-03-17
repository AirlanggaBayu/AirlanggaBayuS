<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">Informasi
                <strong>berhasil!</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">

        <div class="col-md-6">
            <a href="<?= base_url() ?>informasi/tambah" class="btn btn-primary">Tambah Informasi Kebun</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari informasi.." name="keyword">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row-mt-3">
        <div class="col-md-6">
            <h3>Informasi Kebun</h3>
            <?php if (empty($informasi)) : ?>
                <div class="alert alert-danger" role="alert">
                    Informasi tidak ditemukan !
                </div>
            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($informasi as $ifo) : ?>
                    <li class="list-group-item"><?= $ifo['nama'] ?>
                        <a href="<?= base_url(); ?>informasi/hapus/<?= $ifo['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');"> Hapus</a>
                        <a href="<?= base_url(); ?>informasi/detail/<?= $ifo['id']; ?>" class="badge badge-primary float-right"> Detail</a>
                        <a href="<?= base_url(); ?>informasi/ubah/<?= $ifo['id']; ?>" class="badge badge-success float-right"> Ubah</a>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!-- ini digunakan untuk view pada menu informasi -->