<div class="container">

    <?php if($this->session->flashdata('flashdata')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data User <strong>berhasil</strong> <?= $this->session->flashdata('flashdata'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('user/tambahUser'); ?>" class="btn btn-primary">Tambah User</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="Cari user . . .">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar User</h3>
            <?php if (empty($user)) : ?>
                <div class="alert alert-danger" role="alert">
                    User tidak ditemukan!
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach($user as $usr) : ?>
                    <li class="list-group-item">
                        <?= ucwords($usr['nama']); ?>
                        <a href="<?= base_url('user/hapusUser/'); ?><?= $usr['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin hapus?')">hapus</a>
                        <a href="<?= base_url('user/ubahUser/'); ?><?= $usr['id']; ?>" class="badge badge-warning float-right">ubah</a>
                        <a href="<?= base_url('user/detailUser/'); ?><?= $usr['id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>