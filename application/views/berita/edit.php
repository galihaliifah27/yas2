<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Berita</h3>
                    </div>
                    <form action="<?= base_url('berita/edit'); ?>" method="post">
                        <div class="card-body">
                            <input type="hidden" name="id" value="<?= $berita['id']; ?>">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" value="<?= $berita['judul']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori" class="form-control" value="<?= $berita['kategori']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Headline</label>
                                <input type="text" name="headline" class="form-control" value="<?= $berita['headline']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Isi Berita</label>
                                <textarea name="isi_berita" class="form-control" required><?= $berita['isi_berita']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Pengirim</label>
                                <input type="text" name="pengirim" class="form-control" value="<?= $berita['pengirim']; ?>" required>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>