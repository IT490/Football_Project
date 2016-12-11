<?php

  class noTokenView extends View {

    public function getHTML() {
      //create the Sign Up view
      $this->html .= "<div class='page-header' style='margin-top:60px;'>
											<h2 class='text-center'>Your #19 site for NFL News and Arrests</h2>
											</div>
											<br>
											<div class='container'>
												<div class='row'>
													<div class='col-sm-4'>
														<img src='https://s-media-cache-ak0.pinimg.com/236x/5f/47/79/5f47791ffef43ca6c6515e4a9f43f13d.jpg' class='img-rounded center-block' width='300px' height='400px'>
													</div>
												
													<div class='col-sm-8'>
														<h3>You're missing out on amazing stuff!</h3>
														<h4>
															Please
															<a href='index.php?controller=signupController'>Sign up</a>
															/
															<a href='index.php?controller=loginController'>Log in</a>
															to get in on the action!
														</h4>
													</div>
												</div>
											</div>";
                              
      return $this->html;
    }

  }


