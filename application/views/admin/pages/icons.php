  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ყველა სერვისი</h3>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">				
              <table id="neswstable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>სურათი(icon)</th>
				  <th></th>	
				  <th><a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addIcon"><i class="fa fa-plus-circle"></i> დამატება</a></th>				  
                </tr>
                </thead>
                <tbody>					
				<?php 
					if( isset( $icons ) && !empty( $icons )  )
					{
						$url = base_url("$language");
						$i = 1;
						foreach( $icons as $k=>$v )
						{
							echo '
								 <tr>
								  <td>'.$i.'</td>
								  <td><img src="'.base_url().'/images/resource/'.$v["iconimage"].'"></td>								  
								  <td><a class="btn btn-warning" href="'.$url.'/admin/editIcons/'.$v["id"].'"><i class="fa fa-edit"></i> რედაქტირება</a></td>
								  <td><a class="btn btn-danger delete-button" onclick="return confirm(\'ნამდვილად გსურთ წაშლა?\');" href="'.$url.'/admin/deleteIcon/'.$v["id"].'"><i class="	fa fa-remove"></i> წაშლა</a></td>
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



<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>


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
