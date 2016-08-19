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
				<?php if(isset($servmain)){?>
				<div class="form-group" style="float:left;margin-right:10px;">
                  <label>მთავარი გვერდის სერვისის ტექსტი ქართულად</label>
				  <input id="serv_id" type="hidden" value="<?php echo $servmain[0]["id"]; ?>">
                  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="<?php echo $servmain[0]["textge"]; ?>" style="width:650px; height:50px;">
                </div>
				
				<div class="form-group" style="float:left;margin-right:10px;">
                  <label>მთავარი გვერდის სერვისის ტექსტი ინგლისურად</label>
                  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="<?php echo $servmain[0]["texten"]; ?>" style="width:650px; height:50px;">
                </div>
				
				  <div class="box-body" style="float:left; margin-top:15px;">
					<button style="width:120px;" id="btn-updateServText" class="btn btn-block btn-success btn-lg" type="button">Update</button>					
				  </div>
				<?php }?>
					<br><br>
              <table id="neswstable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>სერვისის დასახელება ქართულად</th>
                  <th>სერვისის დასახელება ინგლისურად</th>
				  <th></th>	
				  <th><a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addService"><i class="fa fa-plus-circle"></i> დამატება</a></th>				  
                </tr>
                </thead>
                <tbody>					
				<?php 
					if( isset( $services ) && !empty( $services )  )
					{
						$url = base_url("$language");
						$i = 1;
						foreach( $services as $k=>$v )
						{
							echo '
								 <tr>
								  <td>'.$i.'</td>
								  <td>'.$v->titlege.'</td>
								  <td>'.$v->titleen.'</td>
								  <td><a class="btn btn-warning" href="'.$url.'/admin/editService/'.$v->id.'"><i class="fa fa-edit"></i> რედაქტირება</a></td>
								  <td><a class="btn btn-danger delete-button" onclick="return confirm(\'ნამდვილად გსურთ წაშლა?\');" href="'.$url.'/admin/deleteService/'.$v->id.'"><i class="	fa fa-remove"></i> წაშლა</a></td>
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




  <script> 

	$( document ).ready(function() {
						
		$("#btn-updateServText").click(function(){
			
			data = new Object();
			
			if( $("#txt_titlege").val() == '' || $('#txt_titleen').val() == '' )
			{
				alert("შეავსეთ სერვისის სათაურის ველები."); return false;
			}		
			
			data["id"] = $("#serv_id").val();
			data['textge'] = $("#txt_titlege").val();
			data['texten'] = $("#txt_titleen").val();
			
			$.post(base_url +'/'+ lang + '/admin/updateServText',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin/services');				
			})
			.fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>


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
