<?php

  class homeView extends View {

    public function getHTML() {
      //create the view
      $this->html = "<div class='page-header clearfix'>
                       <h1> \"They did what?!?\" | <small><i>The number 19 source for news & arrests</i></small></h1>
                     </div>
                     <div class='container'>
                       <div class='row'>
                         <div class='col-md-12'>
                           <img class='img-circle' src='http://static1.businessinsider.com/image/51cae6e36bb3f7b31500000e-480/aaron-hernandez-arrested.jpg' alt='hernandez' width='350px' height='250px' style='margin-left: 20px; float: left; margin-right:20px;'>
                           <p class='big-font'>
                               The most embarrasing news and arrests<span class='lead'>
                               all in one place for your viewing pleasure.
                               Sign up to gain access to arrest graphs,
                               news feeds, and the use of our player arrest
                               database that provides information on current
                               active players.
                           </span></br>
                              <a href='index.php?controller=signupController'><h3 class='text-info'>Sign up now to gain access!</h3></a>
                           </p>
                         </div>
                       </div>
                     </div>
                      
                     <div class='container' style='clear:both; margin-top:30px;'>
                     <div class='row'>
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='http://jocktalkla.com/wp-content/uploads/2014/09/NFL-Meme.jpg' alt='arrest picture' style='height:300px;'>
                           <div class='caption'>
                             <h3> Arrests Dashboard </h3>
                             <p> Laugh at the stupidity of NFL players here.</p>
                           </div>
                         </div>
                       </div>
                       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='http://www.gannett-cdn.com/-mm-/156bb441e3f10c1dd098d7367505844135fe2c73/c=0-0-3088-2322&r=x404&c=534x401/local/-/media/2016/01/27/DetroitFreePress/DetroitFreePress/635894976697472847-AP-Redskins-Falcons-Football.jpg' style='height:300px;' alt='player list picture'>
                           <div class='caption'>
                             <h3> NFL Players </h3>
                             <p> Browse our list of players. </p>
                           </div>
                         </div>
                       </div>       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='https://captaincomeback.files.wordpress.com/2013/06/downgoesrex.jpg' style='height:300px;' alt='start / sit picture'>
                           <div class='caption'>
                             <h3> Start/Sit tool </h3>
                             <p> COMING SOON! </p>
                           </div>
                         </div>
                       </div>
                     </div>
                     </div>";
      return $this->html;
    }

  }


