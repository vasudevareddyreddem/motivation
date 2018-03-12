<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/datatable/dataTables.bootstrap.min.css">
	    <script src="<?php echo base_url(); ?>assets/vendor/css/datatable/jquery-1.12.4.js"></script> 
	    <script src="<?php echo base_url(); ?>assets/vendor/css/datatable/jquery.dataTables.min.js"></script> 
	    <script src="<?php echo base_url(); ?>assets/vendor/css/datatable/dataTables.bootstrap.min.js"></script> 
 </head>
 <div class="container">
 <br>
 <div class="row">
	<button class="btn btn-primary">Back</button>
	<a href="<?php echo base_url('motivation/admin'); ?>" class="btn btn-primary pull-right">Home</a>
 </div>
<main class="page-content " style="margin-top:50px;">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>Image Count</th>
                <th>Date</th>
				 <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Image Count</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
		<?php if(isset($image_list) && count($image_list)>0){ ?>
			<?php foreach($image_list as $list){ ?>
				<tr>
					<td><?php echo $list['count']; ?></td>
					<td><?php echo $list['create_at']; ?></td>
					<td><?php if($list['pstatus']==1){ echo "Active";}elseif($list['pstatus']==1){ "Deactive"; } ?></td>
					<td><a href="<?php echo base_url('motivation/status/'.base64_encode($list['p_id']).'/'.base64_encode($list['pstatus'])); ?>"><?php if($list['pstatus']==1){ echo "Active";}else if($list['pstatus']==0){ "Deactive"; } ?></a> | <a href="<?php echo base_url('motivation/deletes/'.base64_encode($list['p_id'])); ?>">Delete</a></td>
				   
				</tr>
			<?php } ?>
			
		<?php }else{ ?>
		<tr> <td colspan="5" style="Text-align:center;">NO Data Available</td></tr>
		<?php } ?>
            
        </tbody>
    </table>
      </main>
	  </div>
	 <script>
$(document).ready(function() {
    $('#example').DataTable();
} );
	 </script>
	 
	
   
