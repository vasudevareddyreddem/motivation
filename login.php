 <?php include('header.php'); ?>
<main class="page-content" style="margin-top:50px;">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-12  cell-md-6  col-md-offset-3">
              <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h4>Admin Login </h4>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                 
               
                  <form data-result-class="rd-mailform-validate-2" data-form-type="contact" method="post" action="index.php" class="rd-mailform">
                    <input type="text" name="name" data-constraints="@NotEmpty" placeholder="user name *"> 
					<input type="password" name="name" placeholder="Enter Password *">
                  
                    <div class="text-md-left offset-top-30">
                      <a href="index.php" class="btn btn-primary">Login</a>
                    </div>
                  </form>
                  <!-- Rd Mailform result field-->
                  <div class="rd-mailform-validate-2"></div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
	  <?php include('footer.php'); ?>