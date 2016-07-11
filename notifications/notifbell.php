   <?php
    include "../header.php";
   ?>
<?php

 include "../assets/dbconnect.php";
$uid = $_SESSION['userid'];
?>
<?php

$conn = dbConnect();
$account = $conn->prepare("SELECT *  
FROM tbllikes, tblpost, tbluser
WHERE tbllikes.postid = tblpost.postid
AND tblpost.userid = tbluser.userid
AND tbluser.userid = '$uid'");
$account->execute();
while($row = $account->fetch(PDO::FETCH_ASSOC)){
// while($row = $account->fetch_assoc(PDO::FETCH_ASSOC)) {
$npostid = $row['postid'];

$upd = $conn->prepare("Update tbllikes Set seen='1' where postid = '$npostid'");
$upd->execute();
$dateup = $upd->fetch(PDO::FETCH_ASSOC);

}




?>



    <title>
      
        Notifications &middot Likes
      
    </title>
    <link rel="shortcut icon" href="../img/logo4.png">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/toolkit.css" rel="stylesheet">
    
    <link href="../assets/css/application.css" rel="stylesheet">

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
  




<nav class="navbar navbar-inverse navbar-fixed-top app-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../home.php">
        <img src="../img/nlogo.png" alt="brand">
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse-main">

        <ul class="nav navbar-nav hidden-xs">
          <li>
            <a href="../home.php">Home</a>
          </li>
          <li>
            <a href="../profile/index.php">Profile</a>
          </li>
          <li>
            <a data-toggle="modal" href="#msgModal">Messages</a>
          </li>
         
        </ul>

        <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
          <li class="active">
            <a class="app-notifications" href="index.php">
              <?php

                      $conn = dbConnect();
                      $coun = $conn->prepare("SELECT * FROM tblpost");
                      $coun->execute();
                      while($results = $coun->fetch(PDO::FETCH_ASSOC)){
                        $postid = $results['postid'];

                      }
              ?>
              <span class="icon icon-user">
                 <?php
                      
                      $conn = dbConnect();
                      $count = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE  frienduserid = '$uid' and status = 0 ");
                      $count->execute();
                      $results = $count->fetch(PDO::FETCH_ASSOC);
                      $badge = $results['notif'];
                      if($badge>0){
                        echo '<span class="badge" style="background-color:red;margin-left:-12px; margin-top:-16px;">'.$badge.'</span>';
                      }else{
                        
                      }
                      ?>

              </span>
            </a>
          </li>
          <li>
            <a class="app-notifications" href="notifbell.php">
              <span class="icon icon-bell">

                   <?php
                      
                      $conn = dbConnect();
                      //comments
                       $count = $conn->prepare("SELECT COUNT( * ) AS notif FROM tblcomment, tblpost WHERE tblcomment.postid = tblpost.postid
                                                AND tblcomment.postid ='$postid' AND tblpost.userid ='$uid' AND tblcomment.userid !='$uid'");
                      $count->execute();
                      while($com = $count->fetch(PDO::FETCH_ASSOC)){
                      $comment = $com['notif'];
                     
                   
                    

                    }
                      //likes
                      $counts = $conn->prepare("SELECT COUNT(*) AS notif FROM tblpost,tbllikes
                      WHERE tbllikes.postid = tblpost.postid and tbllikes.userid != '$uid' and tblpost.userid = '$uid' and tbllikes.seen = 0");
                      $counts->execute();
                      while($resultss = $counts->fetch(PDO::FETCH_ASSOC)){
                      $likes = $resultss['notif'];
                     
                    

                    }
                    $total = $comment + $likes;
                      if($total>0){
                        echo '<span class="badge" style="background-color:red;margin-left:-15px; margin-top:-20px;">'.$total.'</span>';
                      }else{

                      }

                ?>

              </span>
            </a>
          </li>
          <li>
            <?php  

             
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
              $account->execute();
              $result = $account->fetch(PDO::FETCH_ASSOC);

              ?>
            <button class="btn btn-default navbar-btn navbar-btn-avitar" data-toggle="popover">
              <img class="img-circle" src="../img/<?php echo $result['profileP'];?>">
            </button>
          </li>
        </ul>

          <form class="navbar-form navbar-right app-search" role="search" action="../search.php" method="POST">
          <div class="form-group">

          <input type="text" list = "browsers"class="form-control" data-action="grow" id = "search" name = "search" placeholder="Search">
                    <datalist id="browsers">
                <?php
                  $conn = dbConnect();
                  $account = $conn->prepare("SELECT * FROM tbluser limit 5");
                  $account->execute();
                  while($result = $account->fetch(PDO::FETCH_ASSOC)){
                    $name = $result['firstname'].' '.$result['lastname'];
                    $prof = $result['profileP'];
                    $useid = $result['userid'];

                  
                    echo '<option value="'.$name.'"></option>';
              
                    
                  } 
                    echo '</datalist>';

                ?>    
        
                    
                

          </div>
        </form>


        <ul class="nav navbar-nav hidden-sm hidden-md hidden-lg">
          <li><a href="../home.php">Home</a></li>
          <li><a href="../profile/index.php">Profile</a></li>
          <li><a href="index.php">Notifications</a></li>
          <li><a data-toggle="modal" href="#msgModal">Messages</a></li>
          
          
          <li><a href="../index.php">Logout</a></li>
        </ul>

        <ul class="nav navbar-nav hidden">
        
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </div>
  </div>
</nav>

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


<div class="container p-t-md">
  <div class="row">
    <div class="col-md-3">

      <div class="list-group m-b-md">
        <a href="#" class="list-group-item">
          <span class="icon icon-chevron-thin-right pull-right"></span>
          Notifications
        </a>
        <a href="#" class="list-group-item">
          <span class="icon icon-chevron-thin-right pull-right"></span>
          Mentions
        </a>
      </div>

       <!--  <div class="panel panel-default visible-md-block visible-lg-block">
        <div class="panel-body">
          <h5 class="m-t-0">Photos <small>· <a href="#">Edit</a></small></h5>
          <div data-grid="images" data-target-height="150">
            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_5.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_6.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_7.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_8.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_9.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_10.jpg">
            </div>
          </div>
        </div>
      </div>

    <div class="panel panel-default visible-md-block visible-lg-block">
        <div class="panel-body">
          <h5 class="m-t-0">Trending Searches <small>· <a href="#">Change</a></small></h5>
          <ul class="list-unstyled list-spaced">
            <li><a href="#">#Bootstrap</a>
            <li><a href="#">Mdo for pres</a>
            <li><a href="#">#fatsux</a>
            <li><a href="#">#buyme</a>
            <li><a href="#">#designishard</a>
            <li><a href="#">#helpawesomepeople</a>
            <li><a href="#">#doawesomestuff</a>
            <li><a href="#">Tom Brady</a>
            <li><a href="#">Magna Carta</a>
            <li><a href="#">Mark Otto</a>
            <li><a href="#">Dave Gamache</a>
            <li><a href="#">Jacob Thornton</a>
          </ul>
        </div>
      </div>-->
    </div>

    <div class="col-md-6">
      <ul class="list-group media-list media-list-stream">
        <li class="list-group-item p-a">
          <h3 class="m-a-0">Notifications</h3>
        </li>
              <!--liked and commented notification-->
                      <?php

function timeAgo($time_ago){

$cur_time   = date('Y-m-d H:i:s');
$curr_time = strtotime($cur_time) - 25200;
//echo $curr_time;
$time_elapsed   = $curr_time - $time_ago;
$seconds  = $time_elapsed;
$minutes  = floor($time_elapsed / 60 );
$hours    = floor($time_elapsed / 3600);
$days     = floor($time_elapsed / 86400 );
$weeks    = floor($time_elapsed / 604800);
$months   = floor($time_elapsed /  2600640 );
$years    = floor($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){ 
  echo "just now";
}
//Minutes
else if($minutes <=60){
  if($minutes==1){
    echo "one minute ago";
  }
  else{
    echo "$minutes minutes ago";
  }
}
//Hours
else if($hours <=24){
  if($hours==1){
    echo "an hour ago";
  }else{
    echo "$hours hours ago";
  }
}
//Days
else if($days <= 7){
  if($days==1){
    echo "yesterday";
  }else{
    echo "$days days ago";
  }
}
//Weeks
else if($weeks <= 4.3){
  if($weeks==1){
    echo "a week ago";
  }else{
    echo "$weeks weeks ago";
  }
}
//Months
else if($months <=12){
  if($months==1){
    echo "a month ago";
  }else{
    echo "$months months ago";
  }
}
//Years
else{
  if($years==1){
    echo "one year ago";
  }else{
    echo "$years years ago";
  }
}
}?>                
                    <?php   
                      $conn = dbConnect();                    
                      $account = $conn->prepare("SELECT * 
                          FROM tblpost, tbluser
                          WHERE tbluser.userid = tblpost.userid
                          AND tblpost.userid =  ");
                      $account->execute();
                      ////"SELECT * FROM tblfriendlist WHERE frienduserid = '$uid' "
                      $results = $account->fetch(PDO::FETCH_ASSOC);
                    ?>

                    <?php   
                      $conn = dbConnect();
                     
                      $account = $conn->prepare("SELECT * 
                            FROM tbllikes, tblpost, tbluser
                            WHERE tbllikes.postid = tblpost.postid
                            AND tbllikes.userid = tbluser.userid
                            AND tblpost.userid =  '$uid'");
                      $account->execute();
                      ////"SELECT * FROM tblfriendlist WHERE frienduserid = '$uid' "
                      
                      while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $imahe = $result['profileP'];
                        $request = $result['firstname']." ".$result['lastname'];
                        $message = $result['pmessage'];
                        $piid= $result['postid'];
                          echo'   <li class="list-group-item media p-a">
                                    <div class="media-body">
                                      <small class="pull-right text-muted">';
                                       $time = $conn->prepare("SELECT * 
                                        FROM tbllikes where postid = '$piid'");
                                        $time->execute();
                                        $resulta = $time->fetch(PDO::FETCH_ASSOC);
                                        $oldtime = date("Y-m-d H:i:s", strtotime($resulta['currentDate']));
                        //$mydate=date('F j, Y g:i A');
                        //echo $oldtime;
                        //echo 'asdasd';
                        $curenttime= $oldtime;
                        $time_ago =strtotime($curenttime);
                        timeAgo($time_ago);
                          echo     '</small>
                                        <div class="media-heading">
                                          <div class="media-left"> ';
                          echo             '<strong>"'.$message.'"</strong>';
                          echo              '<br />';
                          echo                '<a href="../search.php?search='.$request.'"><strong>'.$request.'</strong></a>, 
                                                 liked your post
                                          </div>
                                        </div>
                                    </div>
                                  </li>';                                        
                                                  
                      
                      }          
                          
                    ?>
                  
                      
        
<!--
        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-game-controller text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">3 min</small>
            <div class="media-heading">
              <a href="#"><strong>Mark Otto</strong></a> played destiny
            </div>

          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-user text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">34 min</small>
            <div class="media-heading">
              <a href="#"><strong>Fat</strong></a> and <a href="#"><strong>1 other</strong></a> followed you
            </div>
            <ul class="avatar-list">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-fat.jpg">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-dhg.png">
            </ul>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-camera text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">3 min</small>
            <div class="media-heading">
              <a href="#"><strong>Dave Gamache</strong></a> uploaded a photo
            </div>

            <div class="media-body-inline-grid" data-grid="images">
              <img style="display: none" data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_3.jpg">
            </div>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-flag text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">3 min</small>
            <div class="media-heading">
              <a href="#"><strong>Mark Otto</strong></a> flagged your post
            </div>

            <div class="panel panel-default m-t">
              <div class="panel-body">
                <div class="media">
                  <a class="media-left" href="#">
                    <img
                      class="media-object img-circle"
                      src="../assets/img/avatar-fat.jpg">
                  </a>
                  <div class="media-body">
                    <div class="media-body-text">
                      <div class="media-heading">
                        <small class="pull-right text-muted">1 hr</small>
                        <h5 class="m-b-0">Jacob Thornton</h5>
                      </div>
                      Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-heart text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">4 hr</small>
            <div class="media-heading">
              <a href="#"><strong>Mark Otto</strong></a> and <a href="#"><strong>2 others</strong></a> favorited your post
            </div>
            <ul class="avatar-list">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-dhg.png">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-mdo.png">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-fat.jpg">
            </ul>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-user text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">30 min</small>
            <div class="media-heading">
              You followed <a href="#"><strong>Jacob Thornton</strong></a> and <a href="#"><strong>1 other</strong></a>
            </div>

            <div class="m-t">
              <div class="row">
                <div class="col-md-6">
                  <div class="panel panel-default panel-profile">
                    <div class="panel-heading"
                         style="background-image: url(../assets/img/instagram_4.jpg);"></div>
                    <div class="panel-body text-center">
                      <img class="panel-profile-img" src="../assets/img/avatar-fat.jpg">

                      <h5 class="panel-title">Jacob Thornton</h5>
                      <p class="m-b-md">Big belly rude boy, million dollar hustler. Unemployed.</p>

                      <button class="btn btn-primary-outline btn-sm">
                        <span class="icon icon-add-user"></span> Follow
                      </button>
                    </div>
                  </div>
                </div>

                 <div class="col-md-6">
                  <div class="panel panel-default panel-profile">
                    <div class="panel-heading"
                         style="background-image: url(../assets/img/instagram_1.jpg);"></div>
                    <div class="panel-body text-center">
                      <img class="panel-profile-img" src="../assets/img/avatar-mdo.png">

                      <h5 class="panel-title">Mark Otto</h5>
                      <p class="m-b-md">GitHub and Bootstrap. Formerly at Twitter. Huge nerd.</p>

                      <button class="btn btn-primary-outline btn-sm">
                        <span class="icon icon-add-user"></span> Follow
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-cog text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">30 min</small>
            <div class="media-heading">
              <a href="#"><strong>Jacob Thornton</strong></a> and <a href="#"><strong>1 other</strong></a> updated their settings
            </div>
            <ul class="avatar-list">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-fat.jpg">
              <li class="avatar-list-item"><img class="img-circle" src="../assets/img/avatar-dhg.png">
            </ul>
          </div>
        </li>

        <li class="list-group-item media p-a">
          <div class="media-left">
            <span class="icon icon-creative-commons-noncommercial-us text-muted"></span>
          </div>

          <div class="media-body">
            <small class="pull-right text-muted">1 min</small>
            <div class="media-heading">
              <a href="#"><strong>Jacob Thornton</strong></a> quit his job
            </div>

          </div>
        </li>
      </ul>
    </div>-->
  </div>
    <div class="col-md-3">
        
          <div class="panel panel-default m-b-md hidden-xs">
            <div class="panel-body">
            <h5 class="m-t-0">Likes <small>· <a href="../viewall.php">View All</a></small></h5>
              
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
                      echo      '<a class="media-left" href="../search.php?search='.$friendsname.'">';
                      echo        '<img class="media-object img-circle" src="../img/'.$imahes.'">';
                      echo      '</a>';
                      echo    '<div class="media-body">';
                      echo      '<a class="media-left" href="../search.php?search='.$friendsname.'">';
                      echo      '<strong>'.$friendsname.'</strong></a> @"'.$friendemail.'"';
                      //echo '<input type="hidden" name="mainuid" id="mainuid" value="<?php echo $mainuserid;?">';
                      echo '<input type="hidden" name="frienduid" id="frienduid" value="'.$frienduserid.'">';
                      echo '<input type="hidden" name="status" id="status" value="'.$status.'">';
                      echo        '<div class="media-body-actions">';
                      echo            '<button class="btn btn-primary-outline btn-sm id="insert" type="submit" onclick="posting('.$frienduserid.')" >';
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
              Find New Friend for more interaction and to get know each other.
            </div>
          </div>

          <div class="panel panel-default panel-link-list">
            <div class="panel-body">
              © 2016 Polyglot
              <a href="#">About</a>
              <a href="#">Help</a>
              <a href="#">Terms</a>
              <a href="#">Privacy</a>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>


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

