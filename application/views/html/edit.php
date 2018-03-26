   <span onclick="hideshow()"> <?php if($this->session->flashdata('success')): ?>
				<div class="alert_msg1 animated slideInUp bg-succ">
				<?php echo $this->session->flashdata('success');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
			<?php if($this->session->flashdata('error')): ?>
				<div class="alert_msg1 animated slideInUp bg-warn">
				<?php echo $this->session->flashdata('error');?> &nbsp; <i class="glyphicon glyphicon-ok text-success ico_bac" aria-hidden="true"></i>
				</div>
			<?php endif; ?>
<main class="page-content offset-top-30" >
		<div class="">
			<div class="">
				<!--Title-->
				<h4 class="card-title">Share your  photo, video or idea</h4>
				   <div class="row">
						<div class="col-md-12">
    						<div class="widget-area  blank">
								<div class="">
								<div class="row prev">
								<?php //echo '<pre>';print_r($image_list); ?>
								<?php if(isset($image_list['p_list']) && count($image_list['p_list'])>0){ ?>
										
										<?php foreach($image_list['p_list'] as $list){ ?> 
										
											<?php $path = $list['imgname'];
												$ext = pathinfo($path, PATHINFO_EXTENSION); 
												if($ext=="mp4" || $ext=="mp3" ||$ext=="3gpp"){  ?>
													<div class="col-md-4" style="width:315px;" id="attach_<?php echo $list['img_id']; ?>">
													<video  src="<?php echo base_url('assets/files/'.$list['imgname']);?>" width="300px"  type="video/<?php echo $ext; ?>" controls></video>
													<div onclick="remove_image(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
													</div>
												 <?php }else{ ?>
													<div class="col-md-2" id="attach_<?php echo $list['img_id']; ?>">
													<img class="img-responsive" src="<?php echo base_url('assets/files/'.$list['imgname']);?>">
													<div onclick="remove_image(<?php echo $list['img_id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
												</div>
												<?php } ?>
												
										<?php } ?>
											<?php } ?>
										<?php if(isset($temp_image_list) && count($temp_image_list)>0){ ?>
										<div class="row prev">
										<?php foreach($temp_image_list as $list){ ?>
										
											<?php $path = $list['name'];
											$ext = pathinfo($path, PATHINFO_EXTENSION); 
											if($ext=="mp4" || $ext=="mp3" ||$ext=="3gpp"){  ?>
												<div class="col-md-4" style="width:315px;" id="tempattach_<?php echo $list['id']; ?>">
												<video  src="<?php echo base_url('assets/temp/'.$list['name']);?>" width="300px"  type="video/<?php echo $ext; ?>" controls></video>
												<div onclick="remove_imagetemp(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
												</div>
											 <?php }else{ ?>
												<div class="col-md-2" id="tempattach_<?php echo $list['id']; ?>">
												<img class="img-responsive" src="<?php echo base_url('assets/temp/'.$list['name']);?>">
												<div onclick="remove_imagetemp(<?php echo $list['id']; ?>);" class="pos-ab-close"><i class="fa fa-close"></i></div>
											</div>
											<?php } ?>
											
										<?php } ?>
										</div>
										<?php } ?>
										</div>
									
										<div class="row">
									<form id="addimages" name="addimages" action="<?php echo base_url('motivation/editimage'); ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">
											<ul  class="col-md-1 col-xs-1 col-sm-1" >
					
											<li class="image-upload">

													<label for="imagesupload">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="imagesupload" name="images2" onchange="onchangeimage(<?php echo isset($post_id)?$post_id:''; ?>);" />
												</li>
											
											
										</ul>
										
									</form>
									<form  id="addimages1" name="addimages1" action="<?php echo base_url('motivation/editimage'); ?>" method="post" enctype="multipart/form-data">
									
										<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">

										<ul class="col-md-1 col-xs-1 col-sm-1">
					
											<li class="image-upload">
													<label for="videoimages">
														<i class="fa fa-video-camera"></i>
													</label>
													 <input type="file"  id="videoimages" name="images3" onchange="onchangevideo(<?php echo isset($post_id)?$post_id:''; ?>);" />
											</li>
											
										</ul>
										
									
								
									</form>
									 <form id="#" name="" action="" method="post" enctype="multipart/form-data">
										  <ul class="col-md-1 col-xs-1 col-sm-1" style="width:80px;">
											 <li class="image-upload">
												<a style="color:#333;cursor:pointer" data-toggle="modal" data-target="#linkmodal">
												<i class=" fa fa-link" ></i>
												</a>
											 </li>
										  </ul>
									   </form>
									</div>
									<form  id="imagespost" name="imagespost" action="<?php echo base_url('motivation/editimagepost'); ?>" method="post" enctype="multipart/form-data">
											<input type="hidden" name="post_id" id="post_id" value="<?php echo isset($post_id)?$post_id:''; ?>">

									<input class="form-control" type="text" placeholder="Title" id="title" name="title" value="<?php echo isset($image_list['title'])?$image_list['title']:'';?>" required>
									<textarea  class="form-control" placeholder="What are you doing right now?" id="content" name="content"  required><?php echo isset($image_list['text'])?$image_list['text']:'';?></textarea>
									
									<button style="margin-top:10px;"type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-share"></i> Post</button>
								

									
									</form>
									
								</div><!-- Status Upload  -->
								
							</div><!-- Widget Area -->
							
						</div>
		`			</div>
				
				
			</div>
		</div>
		<br>
        <div id="fb-root"></div>
        
        
        
      </main>
	  <div class="modal fade" id="linkmodal" role="dialog">
   <div class="modal-dialog modal-sm" id="linkid">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-body">
            <form action="/action_page.php">
               <div class="form-group">
                  <label for="email">Add Link</label>
                  <input type="text" name="addlink" id="addlink" value="" class="form-control"  >
               </div>
			   <div id="errormsgs"></div>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" onclick="getvideoid();" class="btn btn-default btn-sm" >Ok</button>
            <button type="button" onclick="getvideoidclose();" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
   <div class="modal-dialog" id="linkplayid" style="display:none;">
      <!-- Modal content-->
	  	<button type="button" style="position: absolute;right:5px;top:5px;color: #444;z-index: 1024;" onclick="closepopup();" class="close" aria-label="Close"><span aria-hidden="true">X</span></button>

      <div class="modal-content">

         <div class="modal-body" id="freameslink">
            <iframe width="560" id="iframefilelink" height="315" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         </div> 
		 <div class="modal-body" id="normallink" style="display:none;">
		 <div id="links_id"></div>
         </div>
		 <input type="hidden" name="playlink" id="playlink" value="">
         <div class="modal-footer">
            <button type="button" onclick="savevideoidclose();" class="btn btn-default btn-sm" >Ok</button>
            <button type="button" onclick="getvideoidclose();" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div id="sucessmsg" style="display:none;"></div>

  <script>
 
function savetext(val){
	 document.getElementById("formsavetext").value=val;	
	 document.getElementById("formsavetext1").value=val;	
}
function savetitle(val){
	 document.getElementById("formsavetitle1").value=val;	
	 document.getElementById("formsavetitle").value=val;	
}
function readmoreoption(id){
	$('#readless'+id).hide();
	$('#readmore'+id).show();
}
function readlessoption(id){
	$('#readless'+id).show();
	$('#readmore'+id).hide();
}
function prelogin(){
	$('#sucessmsg').show();
$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please login to continue<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  

}
function closepopup(){
	var link=$('#addlink').val('');
		$('#linkid').show();
		$('#linkplayid').hide();
}
function savevideoidclose(){
	var link=document.getElementById("playlink").value;
	if(link!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('motivation/save_link');?>",
   					data: {
   						linkid: link,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
						$('#sucessmsg').show();
						if(data.msg==1){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please login to continue<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
						}if(data.msg==2){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-succ"> Post Successfully updated<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
							location.reload();
						}if(data.msg==3){
							$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">technical problem will occurred. Please try again. <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
					
   					}
   				 }
   				});
   			}
}
function getvideoid(){
	var link=$('#addlink').val();
		if(link ==''){
			$('#sucessmsg').show();
			$('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn">Please enter value<i class="fa fa-check text-success ico_bac" aria-hidden="true"></i></div>');  
			return false;
		}else{
			$('#linkid').hide();
			 var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
				var match = link.match(regExp);
				if (match && match[2].length == 11) {
						var res = link.split("?v=");
						var url='https://www.youtube.com/embed/'+res[1];
						document.getElementById("iframefilelink").src=url;
						document.getElementById("playlink").value=link;
						$('#normallink').hide();
						$('#freameslink').show();
						$('#linkid').hide();
						$('#linkplayid').show();
			
				}else{
				 document.getElementById("iframefilelink").src=link;
				 document.getElementById("playlink").value=link;
				 document.getElementById("links_id").innerHTML=link;
				$('#linkid').hide();
				$('#linkplayid').show();
				$('#normallink').show();
				$('#freameslink').hide();
				}
		}
}
function getvideoidclose(){
	var link=$('#addlink').val('');
		$('#linkid').show();
		$('#linkplayid').hide();
		
}
   /*validation starting*/
    
     function onchangeimage(){
   	
   		var fup= document.getElementById('imagesupload');
   		
   		var fileName = fup.value;
   		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
   		if(ext == "docx" || ext == "doc" || ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" )
   		{
   			
   		}
   		var names_arr = ['docx','doc','png','gif','GIF','JPEG','jpeg','jpg'];
   		jQuery.ajax({
   					url: "<?php echo site_url('motivation/getfiledata');?>",
   					data: {
   						attachmentid: '',
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						if(data.msg !=''){
   							if( data.msg == "png" ||  data.msg == "gif" || data.msg == "GIF" || data.msg == "JPEG" || data.msg == "jpeg" || data.msg == "jpg" || data.msg == "JPG" ){
   								
   								$('#loading').show();
									var file_data    = $('#imagesupload').prop('files')[0];
									var form_data    = new FormData();
										form_data.append('attachment', file_data);form_data.append('imagesupload', file_data);
										form_data.append('text1', jQuery("#formsavetext").val());
										form_data.append('title1', jQuery("#formsavetitle").val());
											jQuery.ajax({
											dataType: 'json',
											cache: false,
											contentType: false,
											processData: false,
											url: "<?php echo base_url('motivation/uploadvideos');?>",
											data: form_data,
											type: 'POST',
											success: function (data) {
														if(data.msg==1){
														location.reload();
															}
												}
											});
								
								
								
								
								
   							}else{
   								
   									alert('Invalid upload  formate. Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only');return false;
   							
   								}
   							}else{
   							$("#addimages").submit();
   						}
   					}
   				});
   		
   	
   } 
   function onchangevideo(){
   	var fup= document.getElementById('attachment');
   		var fileName = fup.value;
   		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
   		var blockedTile = new Array("mp4", "mp3", "3gpp");
   		jQuery.ajax({
   					url: "<?php echo site_url('motivation/getfiledata');?>",
   					data: {
   						attachmentid: '',
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   						if(data.msg !=''){
   							alert('Your upload only one video at time');return false;
   						}else{
   							if(ext == "mp4" || ext == "3gpp" || ext == "mp3")
   								{
									$('#loading').show();
									var file_data    = $('#attachment').prop('files')[0];
									var form_data    = new FormData();
										form_data.append('attachment', file_data);form_data.append('attachment', file_data);
										form_data.append('text1', jQuery("#formsavetext1").val());
										form_data.append('title1', jQuery("#formsavetitle1").val());
											jQuery.ajax({
											dataType: 'json',
											cache: false,
											contentType: false,
											processData: false,
											url: "<?php echo base_url('motivation/uploadvideos');?>",
											data: form_data,
											type: 'POST',
											success: function (data) {
														if(data.msg==1){
														location.reload();
															}
												}
											});
   								} else
   									{
   										alert("Upload mp4,mp3 ,3gpp videos only");return false;
   								}
   						}
   					}
   				});
   		
   } 
   
   
   function remove_image(id){
   	if(id!=''){
   		 jQuery.ajax({
   					url: "<?php echo site_url('motivation/attchements');?>",
   					data: {
   						attachmentid: id,
   					},
   					dataType: 'json',
   					type: 'POST',
   					success: function (data) {
   					if(data.msg==1){
   					$('#modalwindow').modal('hide');
   						jQuery('#attach_'+id).hide();
   					}
   				 }
   				});
   			}
   }
   
   /*validationending*/
function remove_imagetemp(id){
	if(id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('motivation/attchements');?>",
					data: {
						attachmentid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
					$('#modalwindow').modal('hide');
						jQuery('#tempattach_'+id).hide();
					}
				 }
				});
			}
}
  function onchangeimage(id){
	
		var fup= document.getElementById('imagesupload');
		
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		if(ext == "docx" || ext == "doc" || ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" )
		{
			
		}else{

		alert('Invalid upload  formate. Upload Gif,JPEG,jpeg,jpg,JPG images only or  mp4,mp3 ,3gpp videos only');return false;

		}jQuery.ajax({
					url: "<?php echo site_url('motivation/editgetfiledata');?>",
					data: {
						attachmentid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg !=''){
							if(ext == "docx" || ext == "doc" || ext == "png" || ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" ){
								
								$("#addimages").submit();
							}else{
								
									alert('Your upload only one video at time');return false;
							
								}
							}else{
							$("#addimages").submit();
						}
					}
				});
					
		
	
} 
function onchangevideo(id){
	
		var fup= document.getElementById('videoimages');
		var fileName = fup.value;
		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
		var blockedTile = new Array("mp4", "mp3", "3gpp");
		jQuery.ajax({
					url: "<?php echo site_url('motivation/editgetfiledata');?>",
					data: {
						attachmentid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
						if(data.msg !=''){
							alert('Your upload only one video at time');return false;
						}else{
							if(ext == "mp4" || ext == "3gpp" || ext == "mp3")
								{
									$("#addimages1").submit();
								} else
									{
										alert("Upload mp4,mp3 ,3gpp videos only");return false;
								}
						}
					}
				});
				
		
	
} 


function remove_image(id){
	if(id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('motivation/editattchements');?>",
					data: {
						attachmentid: id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
					$('#modalwindow').modal('hide');
						jQuery('#attach_'+id).hide();
					}
				 }
				});
			}
}


</script>
</span>


