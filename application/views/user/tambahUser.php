<div class="container">
     <div class="row mt-3">
          <div class="col-md-6">

          <div class="card">
               <div class="card-header">
                    Form Tambah User
               </div>
               <div class="card-body">
                    <!-- untuk menampilkan semua eror -->
                    <!-- <?php if (validation_errors()) : ?>
                         <div class="alert alert-danger" role="alert">
                              <?= validation_errors(); ?>
                         </div>
                    <?php endif; ?> -->
                    <form action="" method="post">
                         <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama">
                              <small id="emailHelp" class="form-text text-danger">
                                   <?= form_error('nama'); ?>
                              </small>
                         </div>
                         <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" id="email" name="email">
                              <small id="emailHelp" class="form-text text-danger">
                                   <?= form_error('email'); ?>
                              </small>
                         </div>
                         <div class="form-group">
                              <label for="nohp">Nomor HP</label>
                              <input type="text" class="form-control" id="nohp" name="nohp">
                              <small id="emailHelp" class="form-text text-danger">
                                   <?= form_error('nohp'); ?>
                              </small>
                         </div>
                         <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
                    </form>
               </div>
          </div>

          </div>
     </div>
</div>