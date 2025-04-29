<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Form Berita</h1>
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
          <h3 class="card-title">Update berita</h3>
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
            <form action="<?= base_url('berita/update/' . $berita['id_berita']);?>" method="post">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control"  placeholder="judul" require value="<?= $berita['judul'];?>">
            </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" name="kategori" id="kategori" class="form-control" placeholder="kategori" require value="<?= $berita['kategori'];?> ">
            </div>
                <div class="form-group">
                    <label for="headline">Headline</label>
                    <input type="text" name="headline" id="headline" class="form-control" placeholder="headline" require value="<?= $berita['headline'];?> ">
            </div>
                <div class="form-group">
                    <label for="isi_berita">Isi Berita</label>
                    <textarea name="isi_berita" id="isi_berita" class="form-control summernote" placeholder="isi berita" require><?= $berita['isi_berita'];?></textarea>
            </div>
                <div class="form-group">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" name="pengirim" id="pengirim" class="form-control"  placeholder="pengirim" require value="<?= $berita['pengirim'];?>">
            </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
            <a href="<?php echo base_url('berita'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
            </div>
        </form>
        <div class="card-footer">
</div>
</div>
</section>
</div>
