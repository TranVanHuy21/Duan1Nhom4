<!-- header -->
 <?php include './views/layout/header.php'; ?>
 <!-- header -->
  <!-- <nav>
    <?php include './views/layout/navbar.php';  ?>
  </nav> -->

  

  <!-- Main Sidebar Container -->
  <?php include './views/layout/sidebar.php';  ?>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quan Ly Danh Muc</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= 'http://localhost/DuanCellphoneS/admin/?act=addCategory' ?>">
                  <button class="btn btn-success">Thêm Danh Mục</button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Category_name</th>
                    <th>Parent_id</th>
                    <th>Chức Năng</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($categories  as $key => $categorie ): ?>

                  <tr>
                    <td><?= $key + 1  ?></td>
                    <td><?= $categorie['Category_name'] ?></td>
                    <td><?= $categorie['Parent_id'] ?></td>
                    <td>
                    <a href="?act=editCategory&id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                      <a href="?act=deleteCategory&id=<?= $row['id'] ?>" class="btn btn-danger"
                      onclick="return confirm('Are you sure you want to delete this Category?');">Delete</a>
                        <!-- <button class="btn btn-danger">Xóa</button> -->
                    </td>

                    
                  </tr>
                  <?php endforeach; ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Category_name</th>
                    <th>Parent_id</th>
                    <th>Chức Năng</th>
                    
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <?php include './views/layout/footer.php'; ?>
  <!-- <footer> -->


    <!-- end Footer -->

 <!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body>
</html>
