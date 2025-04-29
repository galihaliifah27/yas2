<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form Register</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h2>Form Pendaftaran</h2>

          <?php if ($this->session->flashdata('success')): ?>
            <p style="color:green;"><?= $this->session->flashdata('success');?></p>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
            <p style="color:red;"><?= $this->session->flashdata('error');?></p>
            <?php endif; ?>

            <?= validation_errors('<p style=color:red;">','</p>'); ?>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="collapse">
            <i class="fas fa-minus"></i>
            </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="collapse">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        <div class="box-body">
            <form action="<?php echo base_url(). "auth/process_register";?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="konfirmasi">Konfrimasi</label>
                    <input type="text" name="konfirmasi_password" id="konfirmasi_password" class="form-control" placeholder="Konfrimasi" required>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan Register</button>
            <a href="<?php echo base_url('kategori'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
            </div>
        </form>
        <div class="card-footer">
</div>
</div>
</section>
</div>
