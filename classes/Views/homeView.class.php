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
                           <p class='big-font style='clear:both; width:300px;'>
                               The most embarrasing news and arrests</h4>
                               all in one place for your viewing pleasure.
                               Sign up to gain access to arrest graphs,
                               news feeds, and the use of our player arrest
                               database that provides information on current
                               active players.
                           </p>
                         </div>
                       </div>
                     </div>
                     <div class='container' style='clear:both; margin-top:30px;'>
                     <div class='row'>
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='mock draft picture'>
                           <div class='caption'>
                             <h3> Arrests Dashboard </h3>
                             <p> Laugh at the stupidity of NFL players here.</p>
                             <p><a href='index.php?controller=draftOptionController' class='btn btn-primary' role='button'>Arrests</a></p>
                           </div>
                         </div>
                       </div>
                       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='player list picture'>
                           <div class='caption'>
                             <h3> NFL Players </h3>
                             <p> Browse our list of players. </p>
                             <p><a href='index.php?controller=playerListController' class='btn btn-primary' role='button'>Players</a></p>
                           </div>
                         </div>
                       </div>       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='start / sit picture'>
                           <div class='caption'>
                             <h3> Start/Sit tool </h3>
                             <p> COMING SOON! </p>
                             <p><a href='index.php?controller=startSitController' class='btn btn-primary' role='button'>Start/Sit</a></p>
                           </div>
                         </div>
                       </div>
                     </div>
                     </div>";
      return $this->html;
    }

  }


