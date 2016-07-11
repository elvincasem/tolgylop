<?php

 include "assets/dbconnect.php";
$uid = $_SESSION['userid'];
?>
<body class="with-top-navbar">
  


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
      <a class="navbar-brand" href="index.php">
        <img src="img/nlogo.png" alt="brand">
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse-main">

        <ul class="nav navbar-nav hidden-xs">
          <li class="active">
            <a href="home.php">Home</a>
          </li>
          <li>
            <a href="profile/index.php">Profile</a>
          </li>
          <li>
            <a data-toggle="modal" href="#msgModal">Messages</a>
          </li>

        </ul>

        <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
          <li >
            <a class="app-notifications" href="notifications/index.php">
              <?php

                      $conn = dbConnect();
                      $coun = $conn->prepare("SELECT * FROM tblpost");
                      $coun->execute();
                      while($r = $coun->fetch(PDO::FETCH_ASSOC)){
                        $postid = $r['postid'];
                      
                      }
              ?>
              <span class="icon icon-user">
                 <?php

                      $conn = dbConnect();
                      $count = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE  frienduserid = '$uid' and status =0");
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
            <a class="app-notifications" href="notifications/notifbell.php">

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
            <button class="btn btn-default navbar-btn navbar-btn-avitar" data-toggle="popover">
              <img class="img-circle" src="img/<?php 
         
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
          <li><a href="home.php">Home</a></li>
          <li><a href="profile/index.php">Profile</a></li>
          <li><a href="notifications/index.php">Notifications</a></li>
          <li><a data-toggle="modal" href="#msgModal">Messages</a></li>
          <li><a href="docs/index.html">Docs</a></li>
          <li><a href="#" data-action="growl">Growl</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>

        <ul class="nav navbar-nav hidden">
       
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
  </div>
</nav>

<div class="modal fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="msgModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="js-msgGroup">
    
      </div>
        <h4 class="modal-title">Messages</h4>
      </div>

      <div class="modal-body p-a-0 js-modalBody">
        <div class="modal-body-scroller">
          <div class="media-list media-list-users list-group js-msgGroup">
                   <?php
                  $conn = dbConnect();
                  $friends = $conn->prepare("SELECT * FROM tblmessage,tbluser WHERE tblmessage.mainmesid = '$uid' and tblmessage.friendmesid = tbluser.userid");
                  $friends->execute();
                  while($res=$friends->fetch(PDO::FETCH_ASSOC)){
                    $name = $res['firstname'];
                    $imahe = $res['profileP'];
                    $uids = $res['userid'];

                    
          echo '          <a href="#" class="list-group-item" id="chatclick" onclick="display('.$uids.')">
              <div class="media" >
                <span class="media-left">
                  <img class="img-circle media-object" src="img/'.$imahe.'">
                    </span>
                      <div class="media-body">
                        <strong>'.$name.'</strong>';
          echo '   <div class="media-body-secondary">
                    Send a message
                  </div>
                </div>
              </div>
            </a>';     

            
                  } 

                ?>    
          
             
  
          </div>

          <div class="hide m-a js-conversation" id = "chatcontent">


<script type="text/javascript">

              function display(id) {
              


                  $.ajax({
                    url: 'assets/chatsquery.php',
                    type: 'post',
                    data: {chatid: id},
                    success: function(response) {
                      console.log(response);

                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                      $('#convoarea').load(document.URL +  ' #convoarea');
                      //$('#comment').text = "";
                      document.getElementById('chatcontent').innerHTML = response;
                     
                    }
                  }); 


                }
              
            </script>


             <!--   </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="assets/img/avatar-fat.jpg">
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
                  <img class="img-circle media-object" src="assets/img/avatar-mdo.png">
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
                  <img class="img-circle media-object" src="assets/img/avatar-dhg.png">
                </a>
              </li>

              <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="assets/img/avatar-fat.jpg">
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
                  <img class="img-circle media-object" src="assets/img/avatar-mdo.png">
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
              </li>-->
     
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Users</h4>
      </div>

      <div class="modal-body p-a-0">
        <div class="modal-body-scroller">
          <ul class="media-list media-list-users list-group">
            <li class="list-group-item">
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object img-circle" src="assets/img/avatar-fat.jpg">
                </a>
                <div class="media-body">
                  <button class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-user"></span> Follow
                  </button>
                  <strong>Jacob Thornton</strong>
                  <p>@fat - San Francisco</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object img-circle" src="assets/img/avatar-dhg.png">
                </a>
                <div class="media-body">
                  <button class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-user"></span> Follow
                  </button>
                  <strong>Dave Gamache</strong>
                  <p>@dhg - Palo Alto</p>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <a class="media-left" href="#">
                  <img class="media-object img-circle" src="assets/img/avatar-mdo.png">
                </a>
                <div class="media-body">
                  <button class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-user"></span> Follow
                  </button>
                  <strong>Mark Otto</strong>
                  <p>@mdo - San Francisco</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
