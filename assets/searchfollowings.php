<?php
session_start();
 include "../assets/dbconnect.php";
$uid = $_SESSION['userid'];
$q = $_REQUEST['q'];
?>  

    <title>
      
        Profile &middot; 
      
    </title>
 <?php
    include "../header.php";
   ?>
    <link rel="shortcut icon" href="../img/logo4.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/toolkit.css" rel="stylesheet">
    <link href="../assets/css/application.css" rel="stylesheet">
    <link rel="stylesheet" href="../hover/css/hover.css">
    <link rel="stylesheet" href="../hover/css/animation.css">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="with-top-navbar">
  


<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <button type="button" class="btn btn-sm btn-primary pull-right app-new-msg js-newMsg">New message</button>
        <h4 class="modal-title">Messages</h4>
      </div>

      <div class="modal-body p-a-0 js-modalBody">
        <div class="modal-body-scroller">
          <div class="media-list media-list-users list-group js-msgGroup">
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </span>
                <div class="media-body">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="media-body-secondary">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </span>
                <div class="media-body">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="list-group-item">
              <div class="media">
                <span class="media-left">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </span>
                <div class="media-body">
                  <strong>Dave Gamache</strong>
                  <div class="media-body-secondary">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="hide m-a js-conversation">
            <ul class="media-list media-list-conversation">
              <li class="media media-current-user m-b-md">
                <div class="media-body">
                  <div class="media-body-text">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <a class="media-right" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </a>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="media-body-text">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="media-body-text">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="media-body-text">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media media-current-user m-b-md">
                <div class="media-body">
                  <div class="media-body-text">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <a class="media-right" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-dhg.png">
                </a>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="media-body-text">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="media-body-text">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="media m-b">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="../assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="media-body-text">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="growl" id="app-growl"></div>

<nav class="navbar navbar-inverse navbar-fixed-top app-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.html">
        <img src="../img/nlogo.png" alt="brand">
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse-main">

        <ul class="nav navbar-nav hidden-xs">
          <li>
            <a href="../home.php">Home</a>
          </li>
          <li class="active">
            <a href="../profile/index.php">Profile</a>
          </li>
          <li>
            <a data-toggle="modal" href="#">Messages</a>
          </li>
    
        </ul>

        <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
          <li >

            <a class="app-notifications" href="../notifications/index.php">
              <span class="icon icon-bell">
                     <?php
                    $conn = dbConnect();
                     $count = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE  frienduserid = '$uid' and status =0");
                      $count->execute();
                      $results = $count->fetch(PDO::FETCH_ASSOC);
                      $badge = $results['notif'];
                      if($badge>0){
                        echo '<span class="badge" style="background-color:red;margin-left:-15px; margin-top:-20px;">'.$badge.'</span>';
                      }else{

                      }
                ?>
              </span>
            </a>
          </li>
          <li>
            <button class="btn btn-default navbar-btn navbar-btn-avitar" data-toggle="popover">
              <img class="img-circle" src="../img/<?php 
      
            

              $uid = $_SESSION['userid'];
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
              $account->execute();
              $result = $account->fetch(PDO::FETCH_ASSOC);
              //echo "SELECT * FROM  tbluser WHERE userid = '$uid'";
              echo $result['profileP'];
            ?>"  >
            </button>
          </li>
        </ul>

        <form class="navbar-form navbar-right app-search" role="search" action="search.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" data-action="grow" placeholder="Search" name = "search">
          </div>
        </form>

        <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
          <li><a href="../home.php">Home</a></li>
          <li><a href="index.php">Profile</a></li>
          <li><a href="../notifications/index.php">Notifications</a></li>
          <li><a data-toggle="modal" href="#">Messages</a></li>   
          <li><a href="#" data-action="growl">Growl</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>

        <ul class="nav navbar-nav hidden">
          <li><a href="#" data-action="growl">Growl</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
  </div>
</nav>
<?php  

              
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE firstname LIKE '%$q%'");
              $account->execute();
              $result = $account->fetch(PDO::FETCH_ASSOC);
              //echo "SELECT * FROM  tbluser WHERE userid = '$uid'";


?>

<div class="profile-header text-center" 
     style="background-image: url(
       ../img/<?php
              echo $result['coverP'];
            ?>  
     );">

  <div class="container">
    <div class="container-inner" >
      <form action="../assets/saveimagep.php" enctype="multipart/form-data" method="post">
      <div class="dropdown">
      <img class="img-circle media-object hrv-float-shadow dropdown-toggle "  data-toggle="dropdown" aria-hidden="true" 
          id = "updatephotos" src="../img/<?php echo $result['profileP'];?>">
            <ul class="dropdown-menu " role="menu" aria-labelledby="updatephotos" style=";width:200px;position:absolute; z-index:13; margin-left:50px;" >
              <li role="presentation"><a role="menuitem" >
                <input name="uploadedimage" type="file">
              </a>
              </li>
              <li role="presentation"><a role="menuitem" >  
                <input name="Upload Now" type="submit" value="Upload Image">
                          </a>
              </li>
            </ul>


            <style>
                 #updatephotos:hover{
                  cursor:pointer;

                  }
          </style>
        </div>
      </form>


      <h3 class="profile-header-user"><?php echo $result['firstname']." ".$result['lastname'];?></h3>
      <p class="profile-header-bio">
        I wish i was a little bit taller, wish i was a baller, wish i had a girl… also.
      </p>
    </div>
    
      <?php
        $conn = dbConnect();
        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist,tbluser WHERE tblfriendlist.mainuserid = tbluser.userid and tblfriendlist.frienduserid = '$uid' and tbluser.firstname LIKE '%$q%' or tblfriendlist.mainuserid = '$uid' and tblfriendlist.frienduserid = tbluser.userid");
        $account->execute();
        $results = $account->fetch(PDO::FETCH_ASSOC);

        $account = $conn->prepare("SELECT * FROM tblfriendlist,tbluser WHERE tblfriendlist.mainuserid = tbluser.userid and tblfriendlist.frienduserid = '$uid' and tbluser.firstname LIKE '%$q%'");
        $account->execute();
        $resulta = $account->fetch(PDO::FETCH_ASSOC);
        $valid = $results['notif'];
        $frienduserid = $resulta['userid'];
       

   
        
       if($valid>0){
          echo '<form action="../assets/deletefollowings.php" method="POST">';
          echo '<input type="hidden" name="frienduid" id="frienduid" value="'.$frienduserid.'">';
          echo '<button class="btn btn-primary-outline btn-sm id="change" type="submit">';
          echo '<span class="icon icon-cog"></span>Unfollow</button>';
          echo '</form>';


        }else{
          $account = $conn->prepare("SELECT * FROM tbluser WHERE firstname LIKE '%$q%'");
          $account->execute();
          $result = $account->fetch(PDO::FETCH_ASSOC);

          $fuid = $result['userid'];
          //echo $fuid;
          echo '<form action="../assets/insertf.php" method="POST">';
          echo '<input type="hidden" name="fuid" id="fuid" value="'.$fuid.'">';
          echo            '<button class="btn btn-primary-outline btn-sm id="change" type="submit">';
          echo               '<span class="icon icon-add-user"></span> Follow</button>';
          echo '</form>';
          echo    '</div>';
       
        }
      ?>

</div>

  <?php 
                            $conn = dbConnect(); 
                            $account = $conn->prepare("SELECT * FROM tbluser WHERE firstname LIKE '%$q%'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
  ?>
  
  <nav class="profile-header-nav">
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="index.php">Polyes <br>
          <?php
                        
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblpost,tbluser WHERE tblpost.userid = tbluser.userid and tbluser.firstname LIKE '%$q%'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                    ?>


        </a>
      </li>
      <li>
        <a href="following.php">Following<br>
           <?php
                        
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist,tbluser WHERE tblfriendlist.mainuserid = tbluser.userid and tbluser.firstname LIKE '%$q%'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                        ?>
        </a>
      </li>
      <li>
        <a href="followers.php">Follower<br>
           <?php

                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist,tbluser WHERE tblfriendlist.frienduserid = tbluser.userid and tbluser.firstname LIKE '%$q%'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                        ?>
        </a>
      </li>

    </ul>
  </nav>

</div>
      <div class="col-md-3">
         <br>
      <div class="panel panel-default visible-md-block visible-lg-block">
        <div class="panel-body">
          <h5 class="m-t-0">About <small> <a href="#" data-toggle="modal" data-target="#"></a></small></h5>
               <div class="modal fade" id="mymodal2"  role="dialog" aria-labelledby="#mymodal2" aria-hidden="true" >
                 <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" >
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">About You</h4>
                    </div>
                    <div class="modal-body">
                        <form action="../assets/updateOthers.php" method="post">
                          <input type="text" class="form-control"  placeholder="Travel@" id="answers" value="" name="travel" required><br />   
                          <input type="text" class="form-control"  placeholder="Where do you work?" id="answers" value="" name="work" required><br /> 
                          <input type="text" class="form-control"  placeholder="Your Address" id="answers" value="" name="address" required><br /> 
                          <input type="text" class="form-control"  placeholder="Current Address" id="answers" value="" name="currentadd" required><br />                     
                    </div>
                    <div class="modal-footer">
                               <button type="submit" name="register" class="btn btn-danger" onclick="countScore1()" data-target="#myModal">Update</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>

              <?php
                            $conn = dbConnect(); 
                            $account = $conn->prepare("SELECT * FROM tbluser WHERE firstname LIKE '%$q%'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
              ?>

          <ul class="list-unstyled list-spaced">
            <li><span class="text-muted icon icon-calendar m-r"></span>Went to <a href="#"><?php echo $results['travel'];?></a>
            <li><span class="text-muted icon icon-github m-r"></span>Worked at <a href="#"><?php echo $results['work'];?></a>
            <li><span class="text-muted icon icon-home m-r"></span>Lives in <a href="#"><?php echo $results['address'];?></a>
            <li><span class="text-muted icon icon-location-pin m-r"></span>From <a href="#"><?php echo $results['currentadd'];?></a>
          </ul>
        </div>
      </div>
      </div>
    <br>

     <div class="col-md-6">
      <ul class="list-group media-list media-list-stream">

        <li class="media list-group-item p-a">
             <ul class="nav nav-tabs">
              <li class="">
               <a href="#">Polyes</a>
              </li>
              <li class="">
               <a href="#">Polyes&Replies</a>
              </li>
              <li class="">
               <a href="#">Media</a>
              </li>
            </ul>

        </li>

      
          
   
              
                  <?php   
                      
                      $conn = dbConnect();
                      $uid = $_SESSION['userid'];
                      //$account = $conn->prepare("SELECT tblpost.userid,pmessage,postid,firstname,lastname,email FROM tblpost,tbluser
                      //              WHERE tblpost.userid = tbluser.userid and tblpost.userid = '$uid'
                      //              ORDER BY postid DESC");
                       $account = $conn->prepare("Select * from tblpost,tbluser where tbluser.userid LIKE '%$q%' and tblpost.userid LIKE '%$q%' ORDER BY postid DESC");
                     
                      //SELECT tblfriendlist.mainuserid,frienduserid,status,tblpost.userid,pmessage,postid,firstname,lastname,email FROM tblfriendlist,tblpost,tbluser WHERE tblfriendlist.mainuserid = tblpost.userid AND tblpost.userid = tbluser.userid and tblpost.userid = '1' AND tblfriendlist.status='1'ORDER BY postid DESC
                      $account->execute();
                      while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $name = $result['firstname']." ".$result['lastname'];
                        $profilepic = $result['profileP'];
                        $postid = $result['postid'];
                        echo '<div id ="post-container">';
                        echo '<li class="media list-group-item p-a">
                              <a class="media-left" href="#">
                                <img class="media-object img-circle" src="../img/'.$profilepic.'">
                              </a>
                              ';

                        echo '<div class="media-body">';
                        echo    '<div class="media-heading">';
                        echo       '<small class="pull-right text-muted">4 min</small>';
                        echo       '<h5>'.$name.'</h5>';
                        echo    '</div>';
                        echo '<div id="messagecontent-'.$postid.'">';
                                $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                                       // The Text you want to filter for urls
                                $mpost = $result['pmessage'];
                                       // Check if there is a url in the text
                                if(preg_match($reg_exUrl, $mpost, $url)) {
                                      // make the urls hyper links
                                      echo preg_replace($reg_exUrl, '<a href="'.$url[0].'" rel="nofollow">'.$url[0].'</a>', $mpost);
                                           } else {
                                      // if no urls in the text just return the text
                                        echo $mpost;
                                  }
                        echo '</div>';
                        // translate
                        echo '<div class="media-body-inline-grid">';
                        echo '    &nbsp<div class ="hvr-float-shadow pull-right text-muted" data-toggle="tooltip"  title="Translate" id="translate-'.$postid.'" style="text-align:right;  width:30px; height:30px;"onclick="trans('.$postid.')">
                                        <img src="../img/gtranslate.png" width="30px" height="30px">
                                      </div>';
                        echo '        <div id="translation-'.$postid.'" 
                                              style="
                                                    margin-top:-30px; 
                                                    font-style:italic; 
                                                    width:100%; 
                                                    font-size:14px; 
                                                    color: orange; 
                                                    font-weight: bold;">';
                        //end of translate
                              
                        echo '</div>';
                          //start of btn like etc....
                        echo '<div class="media-body-inline-grid">';
                        echo '  <div id = "reply">';
                          $stats = $conn->prepare("Select count(*) as statuslike FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'");
                          //echo "Select count(*) FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'";
                          $stats->execute();
                          //$status = $account->fetch(PDO::FETCH_ASSOC);
                          while($stat = $stats->fetch(PDO::FETCH_ASSOC)){
                              if($stat['statuslike'] >= 1){
                                $status ="Unlike";
                                $src="../img/thumbb.png";
                                //$display="You liked this";
                              }else{
                                $status = "Like";
                                $src="../img/thumbu.png";
                                //$display='';
                              }
                          }

                          
                          echo'<input type="hidden" id="like-'.$postid.'" name = "like" value ="'.$status.'">
                                <div onclick="likeUnlike('.$postid.')" id="likes-'.$postid.'" name="action">';
                          echo '<img id="likeimg-'.$postid.'" class="like" src="'.$src.'" width="15px" height="15px" style="margin-left:50px; margin-top:30px;">';
                         echo '</div>';
                          
                       //end of btn like etc...                 
                        echo '<div class="media-body-inline-grid" data-grid="images"> ';
                          


                        echo'      </div>';
                        echo '</div>';
                       
                          
                        echo '</li>';
                        echo '</div>';

                      }
                  ?>

<!-- translate js-->
                <script>
                          var postid_global;
                          function translateText(response) {
                           //alert("aaa");
                           //alert("aaa");
                          //alert(postid_global);
                            document.getElementById("translation-"+postid_global).innerHTML += 
                            "<p>~translated to</p>"+ response.data.translations[0].translatedText;
                            document.getElementById("translate-"+postid_global).disabled=true;
                            }
                </script>

                <script>  
                         function trans(postid){
                          postid_global = postid;
                            var newScript = document.createElement('script');
                            newScript.type = 'text/javascript';
                            var sourceText = escape(document.getElementById("messagecontent-"+postid).innerHTML);
                            //alert(sourceText);
                            //var source = 'https://www.googleapis.com/language/translate/v2?key=AIzaSyBKW9NPxbuAyJ20dFTgrh5hLMzF2SF-czA&source=en&target=de&callback=translateText&q=' + sourceText;   
                            var source = 'https://www.googleapis.com/language/translate/v2?key=AIzaSyBKW9NPxbuAyJ20dFTgrh5hLMzF2SF-czA&source=ar&target=en&callback=translateText&q=' + sourceText;
                                newScript.src = source;
                            document.getElementsByTagName('head')[0].appendChild(newScript);
                            }
                </script>
<!--end translate js-->
<!--changing when click the like button-->
                <script>
                     function likeUnlike(postid){
                      alert(postid);
                      var action ; 
                          action = document.getElementById("like-"+postid).value;
                          alert(action);
                          $.ajax({
                          url: 'assets/numClicks.php',
                          type: 'GET',
                          data: {action: action, postid: postid },
                              success: function(response) {
                                console.log(response);
                              //$('#post-container').load(document.URL +  '#post-container');
                              //$('#comment').text = "";
                              // alert(response);
                               alert(postid);
                                if(response == "Unlike"){
                                   document.getElementById('likeimg-'+postid).src="img/thumbb.png";
                            
                                }else{
                                   document.getElementById('likeimg-'+postid).src="img/thumbu.png";
                            
                                }
                                  document.getElementById('like-'+postid).value = response;
                           }
                        }); 
                  }
                </script>
<!--End changing when click the like button-->
      <!--      <ul class="media-list m-b">
              <li class="media">
                <a class="media-left" href="#">
                  <img
                    class="media-object img-circle"
                    src="assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <strong>Jacon Thornton: </strong>
                  Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                </div>
              </li>
              <li class="media">
                <a class="media-left" href="#">
                  <img
                    class="media-object img-circle"
                    src="assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <strong>Mark Otto: </strong>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                </div>
              </li>
            </ul>-->
       

            </ul>
          </div>
        </li>
      </ul>

</div>
<div class="col-md-3">


          <div class="panel panel-default m-b-md hidden-xs">
            <div class="panel-body">
            <h5 class="m-t-0">Likes <small>· <a href="#">View All</a></small></h5>
              
                  <?php //include_once "assets/dbconnect.php";
                    //$uid = $_SESSION['userid'];
                    $conn = dbConnect(); 
                    $account = $conn->prepare("SELECT * FROM tbluser WHERE email !='" . $_SESSION["email"] ."' AND userid NOT IN(SELECT frienduserid FROM tblfriendlist where mainuserid=$uid)  limit 3");
                    $account->execute();
                    //$result = $account->fetch(PDO::FETCH_ASSOC);
                    //$results = mysql_query("SELECT * FROM user WHERE email !='" . $_SESSION["email"] ."' limit 3");
                    while($result = $account->fetch(PDO::FETCH_ASSOC)){   
                      $mainuserid = $_SESSION['userid'];
                      $frienduserid = $result['userid'];
                      $status = 0;                 
                      $imahes = $result['profileP'];
                      $friendsname = $result['firstname']." ".$result['lastname'];
                      $friendemail = $result['firstname'].$result['lastname'];
                      echo '<div id="datoylang-'.$frienduserid.'">';
                      echo '<ul class="media-list media-list-stream">';
                      echo    '<li class="media m-b">';
                      echo      '<a class="media-left" href="#">';
                      echo        '<img class="media-object img-circle" src="../img/'.$imahes.'">';
                      echo      '</a>';
                      echo    '<div class="media-body">';
                      echo      '<strong>'.$friendsname.'</strong> @"'.$friendemail.'"';
                      //echo '<input type="hidden" name="mainuid" id="mainuid" value="<?php echo $mainuserid;?">';
                      echo '<input type="hidden" name="frienduid" id="frienduid" value="'.$frienduserid.'">';
                      echo '<input type="hidden" name="status" id="status" value="'.$status.'">';
                      echo        '<div class="media-body-actions">';
                      echo            '<button class="btn btn-primary-outline btn-sm id="insert" type="submit" onclick="posting('.$frienduserid.')">';
                      echo               '<span class="icon icon-add-user"></span> Follow</button>';
                      echo         '</div>';
                      echo    '</div>';
                      echo   '</li>';
                      echo '</ul>';
                      echo '</div>';
                   
                      }
                    ?>
                 
               <script type="text/javascript">
                function posting(fuid) {
                       //alert("fd");
                       //alert(fuid);
                      makeAjaxRequest(fuid);
                    }
                    
                    function makeAjaxRequest(frienduid) {
                      $.ajax({
                        url:    '../assets/insertTblfriend.php',
                        type: 'post',
                        data: {fuid: frienduid, status: $('input#status').val()},
                        success: function(response) {
                          $('#datoylang-'+frienduid).fadeOut();
                           //$('#datoylang-'+frienduid).append();
                          //$("#datoylang").load(location.href + " #datoylang");
                          //document.getElementById("datoylang").remove();
                          //$("#datoylang-"+frienduid).replaceWith("#datoylang-"+frienduid);
                          //$('table#resultTable tbody').html(response);
                          //alert('Posting Successful!');
                          //$('#datoylang-'+frienduid).replaceWith(document.URL + '#datoylang-'+frienduid);
                          //$('#comment').text = "";
                          
                        }
                      }); 

                    }






                  jQuery(document).ready(function($) {
                    $('#insert').click(function(){

                      makeAjaxRequest();
                    });
                    
                    

                  });
                </script>
             
            </div>
            <div class="panel-footer">
              Dave really likes these nerds, no one knows why though.
            </div>
          </div>

          <div class="panel panel-default panel-link-list">
            <div class="panel-body">
              © 2015 Bootstrap

              <a href="#">About</a>
              <a href="#">Help</a>
              <a href="#">Terms</a>
              <a href="#">Privacy</a>
              <a href="#">Cookies</a>
              <a href="#">Ads </a>

              <a href="#">info</a>
              <a href="#">Brand</a>
              <a href="#">Blog</a>
              <a href="#">Status</a>
              <a href="#">Apps</a>
              <a href="#">Jobs</a>
              <a href="#">Advertise</a>
            </div>
          </div>
        </div>
      </div>
    </div>


        <link rel="shortcut icon" href="../img/logo4.png">
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/chart.js"></script>
    <script src="../assets/js/toolkit.js"></script>
    <script src="../assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>
