<?php //echo '<pre>';print_r($image_list);exit; ?>
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
	<a href="<?php echo base_url('motivation/admin'); ?>" class="btn btn-primary">Back</a>
	<a href="<?php echo base_url('motivation/admin'); ?>" class="btn btn-primary pull-right">Home</a>
 </div>
 <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
<main class="page-content " style="margin-top:50px;">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                 <th>Posted By</th>
                 <th>Title</th>
				 <th>text</th>
				 <th>Image Count</th>
				 <th>Images</th>
                <th>Date</th>
				 <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Posted By</th>
				<th>Title</th>
				 <th>text</th>
				 <th>Image Count</th>
				<th>Images</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
		<?php if(isset($image_list) && count($image_list)>0){ ?>
			<?php foreach($image_list as $list){ ?>
				<tr>
					<td><?php echo $list['name']; ?></td>
					<td><?php echo $list['title']; ?></td>
					<td><?php echo $list['text']; ?></td>
					<td><?php echo count($list['p_list']); ?></td>
					<td width="20%">
					<?php foreach($list['p_list'] as $li){ ?>
					 <?php $path =isset($li['imgname'])?$li['imgname']:'';
					$ext = pathinfo($path, PATHINFO_EXTENSION);  ?>
				
					<?php if(count($list['p_list'])>1 && $ext =='png' || $ext =='jpg' || $ext =='jpeg'){ ?>
						<img src="<?php echo base_url('assets/files/'.$li['imgname']); ?>" height="auto" width="100px">
					<?php }else{ ?>
						<video  src="<?php echo base_url('assets/files/'.$li['imgname']); ?>" width="100%" type="" controls></video>

					<?php } ?>
					<?php } ?>
					
					</td>
					<td><?php echo $list['create_at']; ?></td>
					<td><?php echo $list['status_text']; ?></td>
					<td>
					<a href="<?php echo base_url('motivation/status/'.base64_encode($list['p_id']).'/'.base64_encode($list['pstatus'])); ?>">Status change</a> | 
					<a href="<?php echo base_url('motivation/deletes/'.base64_encode($list['p_id'])); ?>">Delete</a> |
					<a href="<?php echo base_url('motivation/details/'.base64_encode($list['p_id'])); ?>">Edit</a>

					</td>
				   
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
	 
	
   
