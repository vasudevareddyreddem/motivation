<!-- Page Content-->
      
      
    </div>
    
<!-- Modal: modalPoll -->
<div class="modal fade right" id="modalPoll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
  data-backdrop="false">
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
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
         <form>
    <div class="radio">
      <label><input type="radio" name="optradio">Very good</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="optradio">Good</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio">Mediocre</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio">Bad</label>
    </div>
	<div class="radio">
      <label><input type="radio" name="optradio">Very bad</label>
    </div>
    
  </form>


        <p class="text-center">
          <strong>What could we improve?</strong>
        </p>
        <!--Basic textarea-->
        <div class="md-form">
		<label for="form79textarea">Your message</label>
          <textarea type="text" id="form79textarea" class="md-textarea form-control" rows="3"></textarea>
          
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" style="background:#fff;">
        <a type="button" class="btn btn-primary waves-effect waves-light">Send
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalPoll -->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
	 <script type="text/javascript" src="js/images-grid.js"></script>
   
    
<script>
$(document).ready(function(){
    $("#comm_expand").click(function(){
        $("#comm_sec").toggle();
    });
});
</script>
<script>
$(document).ready(function(){
    $("#comm_expand1").click(function(){
        $("#comm_sec1").toggle();
    });
});
</script>
<script>

            var images = [
                
                'img/p1.jpg',
                'img/p3.jpg',
                'img/p2.jpg',
                'img/p3.jpg',
                'img/p1.jpg',
                'img/p2.jpg',
                'img/p2.jpg',
                
            ];

           $(function() {

                $('#gallery1').imagesGrid({
                    images: images
                });
                $('#gallery2').imagesGrid({
                    images: images.slice(0, 2)
                });
                $('#gallery3').imagesGrid({
                    images: images.slice(0, 4)
                });
                $('#gallery4').imagesGrid({
                    images: images.slice(0, 3)
                });
                $('#gallery5').imagesGrid({
                    images: images.slice(0, 2)
                });
                $('#gallery6').imagesGrid({
                    images: images.slice(0, 1)
                });
                $('#gallery7').imagesGrid({
                    images: [
                        'https://unsplash.it/660/440?image=875',
                'https://unsplash.it/660/990?image=874',
                'https://unsplash.it/660/440?image=872',
                'https://unsplash.it/750/500?image=868',
                'https://unsplash.it/660/990?image=839',
                'https://unsplash.it/660/455?image=838'
                    ],
                    align: true,
                    getViewAllText: function(imgsCount) { return 'View all' }
                });

            });

        </script> 
</html>