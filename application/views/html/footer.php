<!-- Page Content-->
      
      
    </div>
    
<!-- Modal: modalPoll -->
<div class="modal fade right" id="modalPoll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
  data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
             <form action="<?php echo base_url('motivation/feedback'); ?>" method="post">

	<div class="modal-content">
      <!--Header-->
	  
      <div class="modal-header" >
        <span class="heading lead">Feedback request
        </span>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">×</span>
        </button>
		
      </div>

      <!--Body-->
      <div class="modal-body" style="height:100%;">
    <div class="radio">
      <label><input type="radio" name="optradio" value="Very good">Very good</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio" value="Good">Good</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="Mediocre">Mediocre</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="Bad">Bad</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio" value="Very bad" required>Very bad</label>
    </div>
    


        <p class="text-center">
          <strong>What could we improve?</strong>
        </p>
        <!--Basic textarea-->
        <div class="md-form">
		<label for="form79textarea">Your message</label>
          <textarea type="text" name="message" id="form79textarea" class="md-textarea form-control" rows="3" ></textarea>
          
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" style="background:#fff;">
        <button type="submit" class="btn btn-primary waves-effect waves-light">Send
          <i class="fa fa-paper-plane ml-1"></i>
        </button>
        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
	</form>
  </div>
</div>
<!-- Modal: modalPoll -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/core.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/vendor/js/script.js"></script>
	 <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/js/images-grid.js"></script>
 
<script>

<?php if(isset($post_images) && count($post_images)>0){ ?>
<?php foreach($post_images as $List){
if(count($List['p_list'])!=0){ ?>
 var images<?php echo $List['p_id']; ?> = [
			<?php foreach($List['p_list'] as $lis){ ?>
                '<?php echo base_url('assets/files/'.$lis['imgname']); ?>',
			<?php } ?>
            ];

           $(function() {
					$('#gallery<?php echo $List['p_id']; ?>').imagesGrid({
                    images: images<?php echo $List['p_id']; ?>
                });
                
			});

  $(document).ready(function(){
    $("#comm_expand<?php echo $List['p_id']; ?>>").click(function(){
        $("#comm_sec<?php echo $List['p_id']; ?>").toggle();
    });
});
<?php } ?>
<?php } ?>
<?php } ?>
     
      </script> 
</html>