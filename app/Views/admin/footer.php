<!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y"); ?></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/plugins/jquery/jquery.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Tag Input -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/plugins/tag-input/jquery.amsify.suggestags.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('/'); ?>/public/AdminLTE/dist/js/demo.js"></script>

  <script>

    function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function() {
        $('#avatar').click(function(){
            $('#img').click();
        });
    });




    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

    });
    $('input[name="tag_input"]').amsifySuggestags({
      type : 'bootstrap'
    });
  </script>
