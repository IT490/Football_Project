<?php

  class signedInView extends View {

    public function getHTML() {
      //create the view
      session_start();
      $this->html = "<div class='page-header clearfix'>
                       <h3 class='text-left'> Welcome " . $_SESSION['user']  . "</h3>
                       <a href='index.php?controller=userAcctController' role='button' class='btn btn-info'>
                        <span><i class='fa fa-pencil-square-o'></i></span>&nbspEdit Account
                       </a>
                     </div>
                     <div class='jumbotron'>
                       <h3> This should be a newsfeed or past drafts maybe</h3>
                       <div class='embed-responsive embed-responsive-16b9'>
                         <iframe class='embed-responsive-item' src='http://www.youtube.com/nfl'></iframe>
                       </div>
                     </div>
                     <h4>Below here will be the tools to use</h4>
                     <div class='row'>
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='mock draft picture'>
                           <div class='caption'>
                             <h3> Mock Draft tool </h3>
                             <p> Description of mock draft...</p>
                             <p><a href='index.php?controller=draftOptionController' class='btn btn-primary' role='button'>Draft</a></p>
                           </div>
                         </div>
                       </div>
                       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='player list picture'>
                           <div class='caption'>
                             <h3> List of Players </h3>
                             <p> Description of player list...</p>
                             <p><a href='index.php?controller=playerListController' class='btn btn-primary' role='button'>Players</a></p>
                           </div>
                         </div>
                       </div>       
                       <div class='col-sm-6 col-md-4'>
                         <div class='thumbnail'>
                           <img src='#' alt='start / sit picture'>
                           <div class='caption'>
                             <h3> Start/Sit tool </h3>
                             <p> Description of Start / sit tool...</p>
                             <p><a href='index.php?controller=startSitController' class='btn btn-primary' role='button'>Start/Sit</a></p>
                           </div>
                         </div>
                       </div>
                     </div>";
      return $this->html;
    }

  }


