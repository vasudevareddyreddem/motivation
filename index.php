<<<<<<< HEAD
<?php
date_default_timezone_set('Asia/Kolkata');
?>
<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'system';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */
	$application_folder = 'application';

/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$view_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the "application" directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);

	// The path to the "views" directory
	if ( ! isset($view_folder[0]) && is_dir(APPPATH.'views'.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.'views';
	}
	elseif (is_dir($view_folder))
	{
		if (($_temp = realpath($view_folder)) !== FALSE)
		{
			$view_folder = $_temp;
		}
		else
		{
			$view_folder = strtr(
				rtrim($view_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$view_folder.DIRECTORY_SEPARATOR))
	{
		$view_folder = APPPATH.strtr(
			trim($view_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your view folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('VIEWPATH', $view_folder.DIRECTORY_SEPARATOR);

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';
=======
<?php include('header.php'); ?>
<main class="page-content offset-top-30" >
		<div class="">
			<div class="">
				<!--Title-->
				<h4 class="card-title">Share your  photo, video or idea</h4>
				   <div class="row">
						<div class="col-md-12">
    						<div class="widget-area no-padding blank">
								<div class="status-upload">
									<form>
										<textarea placeholder="What are you doing right now?" ></textarea>
										
								<div class="row" id="image_preview"></div>
								
										<ul>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-music"></i>
													</label>

													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-camera"></i>
													</label>
													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											<li class="image-upload">
													<label for="images">
														<i class="fa fa-picture-o"></i>
													</label>
													 <input type="file"  id="images" name="images[]" onchange="preview_images();" multiple/>
											</li>
											
										</ul>
										<button type="submit" class="btn  btn-primary"><i class="fa fa-share"></i> Post</button>
									
								
									</form>
									
								</div><!-- Status Upload  -->
								
							</div><!-- Widget Area -->
							
						</div>
		`			</div>
				
				
			</div>
		</div>
		<br>
        <div id="fb-root"></div>
        <!-- Owl Carousel-->
        <div data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-loop="true" data-nav="true" data-mouse-drag="false" data-margin="30px" class="owl-carousel owl-carousel-flex offset-top-0">
          <div class="owl-item">
            <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
              <div>
                <div class="post-media-wrap"><a href="#"><img src="img/p1.jpg" width="370" height="231" alt="" class="img-responsive post-image"/></a>
                  
                </div>
                <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#">Lorem Ipsum</a></span></div>
                  <h5><a href="#">Engine testing: how much is 350 watt power?</a></h5>
                </div>
                <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                    <li><a href="#" class="post-meta-date small">Dec 13, 2016</a></li>
                    <li><a href="#" class="post-meta-comment small">18</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item">
            <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
              <div>
                <div class="post-media-wrap"><a href="#"><img src="img/p2.jpg" width="370" height="231" alt="" class="img-responsive post-image"/></a>
                  
                </div>
                <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#">Lorem Ipsum</a></span></div>
                  <h5><a href="#">Lorem Ipsum is simply dummy text </a></h5>
                </div>
                <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                    <li><a href="#" class="post-meta-date small">Dec 14, 2016</a></li>
                    <li><a href="#" class="post-meta-comment small">14</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item">
            <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
              <div>
                <div class="post-media-wrap"><a href="#"><img src="img/p3.jpg" width="370" height="231" alt="" class="img-responsive post-image"/></a>
                 
                </div>
                <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#">Lorem Ipsum</a></span></div>
                  <h5><a href="#">E-bike: a Beautiful Design</a></h5>
                </div>
                <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                    <li><a href="#" class="post-meta-date small">Dec 15, 2016</a></li>
                    <li><a href="#" class="post-meta-comment small">26</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item">
            <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
              <div>
                <div class="post-media-wrap"><a href="#"><img src="img/p1.jpg" width="370" height="231" alt="" class="img-responsive post-image"/></a>
                 
                </div>
                <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#">Lorem Ipsum</a></span></div>
                  <h5><a href="#">Research &amp; Development: Building a Dream</a></h5>
                </div>
                <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                    <li><a href="#" class="post-meta-date small">Dec 26, 2016</a></li>
                    <li><a href="#" class="post-meta-comment small">3</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="owl-item">
            <div class="post post-variant-1 post-variant-1-short box post-variant-1-equal-height">
              <div>
                <div class="post-media-wrap"><a href="#"><img src="img/p2.jpg" width="370" height="231" alt="" class="img-responsive post-image"/></a>
                  
                </div>
                <div class="post-content-wrap">
                  <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="#">Lorem Ipsum</a></span></div>
                  <h5><a href="#">Bicycle NXT 3000 - reviewed by industry pros</a></h5>
                </div>
                <div class="post-content-bottom">
                  <ul class="post-meta list-inline list-inline-md">
                    <li><a href="#" class="post-meta-date small">Dec 28, 2016</a></li>
                    <li><a href="#" class="post-meta-comment small">30</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Posts-->
        <div class="shell">
          <div class="range">
            <div class="cell-sm-8 cell-sm-preffix-2 cell-md-8 cell-md-preffix-0">
              <div class="post post-variant-1 box">
                <div>
                  <div class="post-media-wrap"><a href="#"><img src="img/p2.jpg" width="770" height="480" alt="" class="img-responsive post-image"/></a>
                    
                  </div>
                  <div class="post-content-wrap">
                    <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">Lorem Ipsum</a></span></div>
                    <h4><a href="#">Lorem Ipsum is simply dummy text </a></h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...</p>
                    <ul class="post-meta list-inline list-inline-md">
                      <li><a href="#" class="post-meta-date small">Dec 15, 2016</a></li>
                      <li  id="comm_expand"><a  class="post-meta-comment small">34</a></li>
                      <li><a href="#" class="post-meta-like small">4</a></li>
                      <li><a href="#" class="post-meta-share small">4</a></li>
                    </ul>
                  </div>
                  <hr class="divider offset-none"/>
                  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
                            <ul class="list-inline-0">
                              <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                            </ul><a href="single.php" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
				  <div class="card-footer" style="display:none;" id="comm_sec">
				<div class="row">
				<hr>
				<span class="col-md-2 col-xs-2 comm-img"><img class="img-responsive" src="img/coment-user.png"></span>
					<div class="col-md-8 col-xs-8">
					<textarea type="text"  class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
					</div>
					<div class="col-md-2 col-xs-2">
						<div class="file btn btn-sm btn-primary ">
							Send
							
						</div>
					 <!--<textarea type="text"  class="form-control pad-lef" placeholder="Enter your Comment" rows="1"></textarea>
					 <div class="pos-ab-cem " >
					 <span class="btn-bs-file"><input type="file" /><i  class="fa fa-camera " aria-hidden="true"></i></span>
					 </div>-->
				</div>
				</div>
			</div>
                </div>
              </div>
			<!--second post-->
			  <div class="post post-variant-1 box mar-t30">
                <div>
                  <div class="post-media-wrap">
					<div id="gallery1"></div>
                  </div>
                  <div class="post-content-wrap">
                    <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">Lorem Ipsum</a></span></div>
                    <h4><a href="#">Lorem Ipsum is simply dummy text </a></h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...</p>
                    <ul class="post-meta list-inline list-inline-md">
                      <li><a href="#" class="post-meta-date small">Dec 15, 2016</a></li>
                      <li><a href="#" class="post-meta-comment small">34</a></li>
                       <li><a href="#" class="post-meta-like small">4</a></li>
                      <li><a href="#" class="post-meta-share small">4</a></li>
                    </ul>
                  </div>
                  <hr class="divider offset-none"/>
                  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
                            <ul class="list-inline-0">
                              <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                            </ul><a href="#" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
                </div>
              </div>
			  <!--third post-->
			  <div class="post post-variant-1 box mar-t30">
                <div>
                  <div class="post-media-wrap">
					<div >
					<iframe width="100%" height="315" src="https://www.youtube.com/embed/ytchGSaA5-g?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
                  </div>
                  <div class="post-content-wrap">
                    <div class="small text-gray-dark post-meta-author">Posted<span class="text-primary"> by <a href="">Lorem Ipsum</a></span></div>
                    <h4><a href="#">Lorem Ipsum is simply dummy text </a></h4>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged...</p>
                    <ul class="post-meta list-inline list-inline-md">
                      <li><a href="#" class="post-meta-date small">Dec 15, 2016</a></li>
                      <li><a href="#" class="post-meta-comment small">34</a></li>
					   <li><a href="#" class="post-meta-like small">4</a></li>
                      <li><a href="#" class="post-meta-share small">4</a></li>
                    </ul>
                  </div>
                  <hr class="divider offset-none"/>
                  <div class="post-bottom reveal-xs-flex range-xs-justify range-xs-middle">
                            <ul class="list-inline-0">
                              <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
                              <li><a href="#" class="icon icon-circle fa-pinterest icon-default text-info"></a></li>
                            </ul><a href="#" class="btn btn-primary offset-top-10 offset-xs-top-0">Read more</a>
                  </div>
                </div>
              </div>
			  <!--plugin start-->
			  
            </div>
            <div class="cell-md-4">
              <!-- Sidebar-->
              <div class="range offset-top-30 offset-md-top-0">
                
                <div class="cell-sm-8 cell-sm-preffix-2 cell-md-12 cell-md-preffix-0 ">
                  <div class="box text-center">
                    <div class="section-xs-size">
                      <h5>Follow us</h5>
                                    <ul class="list-inline-0">
                                      <li><a href="#" class="icon icon-circle fa-facebook icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-twitter icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-google-plus icon-default text-info"></a></li>
                                      <li><a href="#" class="icon icon-circle fa-linkedin icon-default text-info"></a></li>
									  <li><a data-toggle="modal" data-target="#myModal" class="icon icon-circle  fa-plus icon-default text-info"></a></li>
                                      
                                    </ul>
                    </div>
                    <hr class="divider offset-none">
                    <div class="section-xs-size">
                      <h5>Newsletter</h5>
                      <p>Sign up for the latest news on this startup further process and when the product will be released!</p>
                      
                      <form data-result-class="rd-mailform-validate" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-inline-flex form-inline reveal-xs-flex">
                        <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
                        <button class="btn btn-primary offset-top-15 offset-xs-top-0"> Subscribe</button>
                      </form>
                      
                    </div>
                    <div class="rd-mailform-validate">
                      <form action="#" class="form-inline-custom form-inline-flex reveal-xs-flex">
                        <div class="form-group offset-bottom-0">
                          <input type="text" name="email" placeholder="Search..." class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm btn-icon material-icons-search btn-primary offset-top-10 offset-xs-top-0"></button>
                      </form>
                    </div>
                  </div>
                </div>
                
                
               
              </div>
            </div>
          </div>
        </div>
        
        
      </main>
	  
  <script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-2'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>
<script>
 $('#add_more').click(function() {
          "use strict";
          $(this).before($("<div/>", {
            id: 'filediv'
          }).fadeIn('slow').append(
            $("<input/>", {
              name: 'file[]',
              type: 'file',
              id: 'file',
              multiple: 'multiple',
              accept: 'image/*'
            })
          ));
        });

        $('#upload').click(function(e) {
          "use strict";
          e.preventDefault();

          if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
            alert("No files are selected.");
            return false;
          }

          // Now, upload the files below...
          // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
        });

        deletePreview = function (ele, i) {
          "use strict";
          try {
            $(ele).parent().remove();
            window.filesToUpload.splice(i, 1);
          } catch (e) {
            console.log(e.message);
          }
        }

        $("#file").on('change', function() {
          "use strict";

          // create an empty array for the files to reside.
          window.filesToUpload = [];

          if (this.files.length >= 1) {
            $("[id^=previewImg]").remove();
            $.each(this.files, function(i, img) {
              var reader = new FileReader(),
                newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                preview = newElement.find("img");

              reader.onloadend = function() {
                preview.attr("src", reader.result);
                preview.attr("alt", img.name);
              };

              try {
                window.filesToUpload.push(document.getElementById("file").files[i]);
              } catch (e) {
                console.log(e.message);
              }

              if (img) {
                reader.readAsDataURL(img);
              } else {
                preview.src = "";
              }

              newElement.appendTo("#filediv");
            });
          }
        });
</script>

<?php include('footer.php'); ?>
>>>>>>> b234efc697aa90cb4420642dae4447ab35f7280c
