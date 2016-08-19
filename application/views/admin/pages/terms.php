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
				<select id="category" class="form-control" style="width:250px; float:left; margin-right:20px;">
					<option value="0">აირჩიეთ</option>
					<?php 
						if(isset($faqs) && !empty($faqs))
						{
							foreach($faqs as $k=>$v)
							{
								echo '<option value="'.$v["id"].'">'.$v["catnamege"].'/'.$v["catnameen"].'</option>';
							}
						}
					?>
				</select>
				<a style="float:left;margin-right:20px;" class="btn btn-warning" href="<?php echo base_url("$language");?>/admin/allFaqs"><i class="fa fa-edit"></i> რედაქტირება</a>
				
				<a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addFaqs"><i class="fa fa-plus-circle"></i> დამატება</a>				
			</div>
			
			
            <div  class="box-body">
			<table id="result" id="neswstable" class="table table-bordered table-hover">			
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
			data = new Object();
			
    $('select').on('change', function() {
			
			$("#result").html("");		 
			var cat = $("#category").val();
			if(cat != "0")
			{
				data['catid'] = cat;
				$.post(base_url +'/'+ lang + '/admin/searchFAQS',data, function(data,status){
					
				})
				.success(function(data){
					//alert(data); return false;	
					$("#result").html(data);
				})
				 .fail(function(){
					console.log("ERROR");
					return false;
				});
			}
		  
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
