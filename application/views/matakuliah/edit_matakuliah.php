<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form matakuliah</h1>
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
          <h3 class="card-title">Update matakuliah</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="collapse">
            <i class="fas fa-minus"></i>
            </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="collapse">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        <div class="card-body">
            <form action="<?= base_url('matakuliah/update/' . $matakuliah['kode_matakuliah']);?>" method="post">
                <div class="form-group">
                    <label for="kode_matakuliah">Kode Matakuliah</label>
                    <input type="text" name="kode_matakuliah" id="kode_matakuliah" class="form-control" placeholder="kode_matakuliah" require value="<?= $matakuliah['kode_matakuliah'];?> ">
            </div>
                <div class="form-group">
                    <label for="nama_matakuliah">Nama Matakuliah</label>
                    <input type="text" name="nama_matakuliah" id="nama_matakuliah" class="form-control" placeholder="nama_matakuliah" require value="<?= $matakuliah['nama_matakuliah'];?> ">
            </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis" class="form-control" required> 
                    <option value="umum">Umum</option>
                    <option value="wajib">Wajib</option>
                </select>
            </div>
                <div class="form-group">
                    <label for="prodi">Program Studi</label>
                    <select name="prodi" id="prodi" class="form-control" required> 
                    <option value="sistem_informasi">Sistem Informasi</option>
                    <option value="teknologi_informasi">Teknologi Informasi</option>
                    <option value="komputerisasi_akuntansi">Komputerisasi Akuntansi</option>
                </select>
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan matakuliah</button>
            <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
            </div>
        </form>
        <div class="card-footer">
</div>
</div>
</section>
</div>
