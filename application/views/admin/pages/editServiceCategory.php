  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ყველა პროდუქტი</h3>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
					
              <table id="neswstable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>სერვისის კატეგორია ქართულად</th>
                  <th>სერვისის კატეგორია ინგლისურად</th>
				  <th></th>	
				  <th></th>				  
                </tr>
                </thead>
                <tbody>					
				<?php 
					if( isset( $servcats ) && !empty( $servcats )  )
					{
						$url = base_url("$language");
						$i = 1;
						foreach( $servcats as $k=>$v )
						{
							echo '
								 <tr>
								  <td>'.$i.'</td>
								  <td>'.$v->catnamege.'</td>
								  <td>'.$v->catnameen.'</td>
								  <td><a class="btn btn-warning" href="'.$url.'/admin/editSingeServiceCategory/'.$v->id.'"><i class="fa fa-edit"></i> რედაქტირება</a></td>
								  <td><a class="btn btn-danger delete-button" onclick="return confirm(\'ფრთხილად! კატეგორიის წაშლით წაიშლება ყველა სერვისი, რომელიც მიეკუთვნება ამ კატეგორიას! მაინც გსურთ წაშლა?\');" href="'.$url.'/admin/editSingeServiceCategory/'.$v->id.'"><i class="	fa fa-remove"></i> წაშლა</a></td>
								</tr>
							';
							$i++;
						}
					}				
				?>             
                </tbody>
                
              </table>			  
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->

<!-- page script -->
<script>
  $(function () {
   // $("#neswstable").DataTable();
    $('#neswstable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
