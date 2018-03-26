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
<main class="page-content">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0 offset-top-30">
              <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h4>About Whatslyf</h4>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <div class="range">
                    <div class="cell-md-6"><img src="<?php echo base_url(); ?>assets/vendor/img/aboutus.png" width="355" height="355" alt="" class="img-responsive thumbnail"></div>
                    <div class="cell-md-6 range">
                      <div class="cell-md-12">
                        <h6>Life is more than just a journey, more than just a struggle! </h6>
                        <p>More than just a quote… it’s the phase to proofread life between the lines of the para!</p>
                      </div>
                      <div class="cell-md-12 cell-md-bottom offset-md-top-20 offset-lg-top-0">
						<ul class="list-inline-0">
						<li><a href="https://www.facebook.com/Whats-lyf-1952309441763306/" target="_blank" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
						<li><a href="https://twitter.com/whats_lyf" target="_blank" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
						<li><a href="https://www.linkedin.com/in/whats-lyf-50a830156/" target="_blank" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
						<li><a href="https://www.pinterest.com.au/whatslyf/" target="_blank" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
						<li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
						</ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <p>We are here with a small initiative and new outlook which can help each other push our limits… to reach and change our profound imaginations into reality!</p>
                  
                  <p>
                    We are in a mindset to transform our blog into yours by instilling encouragement and connecting our roots through emotions and laying a foundation for a strong and refreshing society, where we’ll convert disappointment, failure, depression, and low grounds into Solitude, Success, Contentment, desires to achieve, to take risks, to tip toe with life …..And feel whatslyf!
                  </p>
				  <p>
                    The world is highly depressing with every day’s set of unnumbered challenges in store for us. We are here to relax you and let you find yourself by providing some lively content, where you get to witness world’s most inspiring hero’s beginning’s, breakthroughs, tough times….and how they have outraged each circle to reach the peak of some substance for self and rest to look at.
                  </p>
				   <hr class="divider offset-none">
				  <h5>What we believe in? </h5>
				  <p>We believe to do something, however small or big to make others happier and better, We ride our self with the highest ambition of being the most elevating hope, which can inspire or change a human being.</p>
				  <hr class="divider offset-none">
				  <h5>Bringing change in you…. </h5>
				  <h6>Copyright Notice: </h6>
				  <p>We make these videos with the intention of educating others in a motivational/inspirational form. We do not own the clips and music we use in most cases. Our understanding is that it is in correlation to Fair Right Use, however given that it is open to interpretation, if any owners of the content clips would like us to remove the video, we have no problem with that and will do so as fast as possible. Please email us if you have any concerns at whatslyfhelp@gmail.com</p>
				  <h6>FAIR-USE COPYRIGHT DISCLAIMER</h6>
				  <p>* Copyright Disclaimer Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, commenting, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing. Non-profit, educational or personal use tips the balance in favor of fair use.</p>
				<ol>
					<li>This video has no negative impact on the original works (It would actually be positive for them)</li>
					<li>This video is also for teaching purposes.</li>
					<li>It is positively transformative in nature.</li>
					<li> I only used bits and pieces of videos to get the point across where necessary.</li>
					<li> All the videos are used in this blog are provided the YouTube api if any individual have any problem with the video can directly mail us on whatslyfhelp@gmail.com</li>
				</ol>
                
                 
                </div>
                
              </div>
			  <div class="box offset-top-30">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30 ">
                  <h5>Send us a message</h5>
                  <p>Your email address will not be published.<br class="veil-sm"> Required fields are marked *
                  </p>
                  <!-- RD Mailform-->
                  <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="<?php echo base_url('motivation/contactpost'); ?>" >
            <input type="text" class="form-control" name="name"  placeholder="Your name *" required><br>
            <input type="email" class="form-control" name="email"  placeholder="Your e-mail *"required><br>
            <input type="text" class="form-control" name="subjects" placeholder="Subjects"required><br>
            <textarea name="message" class="form-control" placeholder="Message *"required></textarea><br>
            <div class="text-md-left offset-top-30">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
                  <!-- Rd Mailform result field-->
                  <div class="rd-mailform-validate-2"></div>
                </div>
              </div>
            </div>
            <div class="cell-md-4">
              <!-- Sidebar-->
              <div class="range offset-top-30 offset-md-top-0">
                
                <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 offset-top-30">
                  <div class="box text-center">
                    <div class="section-xs-size">
                      <h5>Follow us</h5>
                                    <ul class="list-inline-0">
							<li><a href="https://www.facebook.com/Whats-lyf-1952309441763306/" target="_blank" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
							<li><a href="https://twitter.com/whats_lyf" target="_blank" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
							<li><a href="https://www.linkedin.com/in/whats-lyf-50a830156/" target="_blank" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
							<li><a href="https://www.pinterest.com.au/whatslyf/" target="_blank" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
							<li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
						</ul>
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      
                      <!-- RD Mailform-->
                     <form  method="post" action="<?php echo base_url('motivation/newsletter'); ?>" class="form-inline-flex form-inline reveal-xs-flex ">
                        <input class="form-control" style="width:90%" type="email" name="email"  placeholder="Your e-mail" required>
                        <button style="font-size:12px;" type="submit" class="btn btn-primary btn-sm offset-top-15 offset-xs-top-0" style=""> Subscribe</button>
                      </form>
                      <!-- Rd Mailform result field-->
                    </div>
                    <div class="rd-mailform-validate">
                      <form action="#" class="form-inline-custom form-inline-flex reveal-xs-flex">
                        <div class="form-group offset-bottom-0">
                          <input type="text" name="email" placeholder="Search..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-icon material-icons-search btn-primary offset-top-10 offset-xs-top-0"></button>
                      </form>
                    </div>
                  </div><br>
			<div class="range offset-top-30 offset-md-top-0 ">
               <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
                  <a href="http://offerspot.in/" target="_blank"><div class="box text-center ">
					<img class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/img/sideadd.png">
                  </div></a>
               </div>
            </div>
                </div>
                
              </div>
            </div>
          </div>
		  <div class="range offset-top-30">
		  <div class="cell-sm-12 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
              <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h4>Privacy Policy </h4>
                </div>
				 <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
					<p>We make these videos with the intention of educating others in a motivational/inspirational form. We do not own the clips and music we use in most cases. Our understanding is that it is in correlation to Fair Right Use, however given that it is open to interpretation, if any owners of the content clips would like us to remove the video, we have no problem with that and will do so as fast as possible. Please email us if you have any concerns at <a href="#">whatslyfhelp@gmail.com</a></p>
					<ol>
					<li>This video has no negative impact on the original works (It would actually be positive for them)</li>
					<li>This video is also for teaching purposes.</li>
					<li>It is positively transformative in nature.</li>
					<li>I only used bits and pieces of videos to get the point across where necessary.</li>
					<li>All the videos are used in this blog are provided the youtube api if any individual have any problem with the video can directly mail us on whatslyfhelp@gmail.com</li>
					</ol>
				</div>
              </div>
          </div>
          </div>
        </div>
      </main>
	  
