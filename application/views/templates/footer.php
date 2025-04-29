<!-- Summernote CSS -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
  

<!-- Other Plugin Scripts -->
<script src="<?= base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/chart.js/chart.min.js')?>"></script>

<!-- Additional Scripts -->
<script src="<?= base_url('assets/adminlte/plugins/sparklines/sparkline.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/moment/moment.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/overlayScrollBars/js/jquery.overlayScrollBars.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/dist/js/pages/dashboard.js')?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/demo.js')?>"></script>

<script>
    $(document).ready(function() {
      // Menginisialisasi Summernote dan menambahkan opsi warna teks di toolbar
      $('.summernote').summernote({
        height: 300,
        toolbar: [
          ['style', ['bold', 'italic', 'underline']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['forecolor', 'backcolor']],  // Menambahkan opsi warna teks
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link', 'picture']]
        ]
      });
    });
  </script>
