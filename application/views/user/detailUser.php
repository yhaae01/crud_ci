<div class="container">
     <div class="row mt-3">
          <div class="col-md-6">
          <div class="card">
               <div class="card-header">
                    Detail User
               </div>
               <div class="card-body">
                    <h5 class="card-title"><?= ucwords($user['nama']); ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $user['email']; ?></h6>
                    <p class="card-text"><?= $user['nohp']; ?></p>
                    <a href="<?= base_url('user'); ?>" class="btn btn-primary">Kembali</a>
               </div>
          </div>
          </div>
     </div>
</div>