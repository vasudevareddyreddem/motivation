<span onclick="hideshow()">
<main class="page-content" style="margin-top:50px;">
        <div id="fb-root"></div>
        <div class="shell">
          <div class="range">
            <div class="cell-sm-12  cell-md-6  col-md-offset-3">
              <div class="box">
                <div class="section-20 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                  <h4>Login </h4>
                </div>
                <hr class="divider offset-none">
                <div class="section-30 inset-left-15 inset-right-15 inset-md-left-30 inset-md-right-30">
                 
               
                  <form  method="POST" action="<?php echo base_url('admin/loginpost'); ?>">
                    <input class="form-control" type="text" id="email" name="email"  placeholder="Email Adress" required><br> 
					<input class="form-control" type="password" id="password" name="password" placeholder="Enter Password " required><br> 
                  
                      <button type="submit" class="btn btn-primary">Login</button>
                      <a href="<?php echo base_url('admin/forgotpassword'); ?>" class="btn btn-primary">Forgot password</a>
                  </form>
                  <!-- Rd Mailform result field-->
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </main>
	  </span>
