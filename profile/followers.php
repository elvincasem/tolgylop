 <?php
    include "../header.php";
   ?>
<?php

 include "../assets/dbconnect.php";
$uid = $_SESSION['userid'];
?>  

    <title>
      
        Profile &middot Follower 
      
    </title>

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
          <li class="active">
            <a href="index.php">Profile</a>
          </li>
          <li>
            <a data-toggle="modal" href="#">Messages</a>
          </li>
    
        </ul>

        <ul class="nav navbar-nav navbar-right m-r-0 hidden-xs">
           <li >
            <a class="app-notifications" href="../notifications/index.php">
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
          <li><a href="index.php">Profile</a></li>
          <li><a href="../notifications/index.php">Notifications</a></li>
          <li><a data-toggle="modal" href="#">Messages</a></li>   
         
          <li><a href="../logout.php">Logout</a></li>
        </ul>

        <ul class="nav navbar-nav hidden">
         
          <li><a href="../logout.php">Logout</a></li>
        </ul>
      </div>
  </div>
</nav>
<?php  

             
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
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
        <?php echo $result['motto']?>
      </p>
    </div>
     <button class="btn btn-primary-outline btn-sm"  data-toggle="modal" data-target="#mymodal">
        <span class="icon icon-cog"></span>Update Profile</button><br><br>

         
                 
       <div class="container-inner" >     
    <form action="../assets/saveimagec.php" enctype="multipart/form-data" method="post">
        <div class="dropdown">
         <button class="btn btn-primary-outline btn-sm"  data-toggle="dropdown" aria-hidden="true" 
            id = "updatephotos1" >
                <span class="icon icon-cog"></span>Update Cover Photo</button> <br>
            <ul class="dropdown-menu " role="menu" aria-labelledby="updatephotos1" style=";width:200px;position:absolute; z-index:13; margin-left:50px;"   >
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
                 #updatephotos1:hover{

                  cursor:pointer;

                  }
          </style>
        </div>
      </form>
    </div>
        
  </div>
  <?php 
                            $conn = dbConnect(); 
                            $account = $conn->prepare("SELECT * FROM tbluser WHERE email='" . $_SESSION["email"] . "'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
  ?>
   <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="#mymodal" aria-hidden="true" >
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header" >
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Update Profile</h4>

              </div>
         
                        <div class="modal-body" >
                     
                        
                          <form action="../assets/update.php" method="post">
                          <input type="text" class="form-control"  placeholder="Email" id="answer" value="<?php
                              echo $results['email'];?>" name="email" required><br />                       
                          <input type="password" class="form-control"  placeholder="Password" id="password"  name="pass" value="<?php echo $results['password'];?>" required><br />
                          <input type="password" class="form-control"  placeholder="Re-enter Password" id="confirm_password"  name="rpass" value="<?php echo $results['password'];?>"><br />
                          <input type="text" class="form-control"  placeholder="First name" id="answer"  name="fname" value="<?php echo $results['firstname'];?>" style="text-transform: capitalize;"><br />
                          <input type="text" class="form-control"  placeholder="Last name" id="answer"  name="lname" value="<?php echo $results['lastname'];?>" style="text-transform: capitalize;"><br />
                          Birthday
                              <input type="date" class="form-control" name="bday" value="<?php echo $results['birthday'];?>">
                              <br />
                          Gender:
                            <input type="radio" name="gender"
                            <?php if (isset($gender) && $gender=="female") echo "checked";?>
                            value="female">Female
                            <input type="radio" name="gender"
                            <?php if (isset($gender) && $gender=="male") echo "checked";?>
                            value="male">Male<br />
                        
                            <label class="text-right">Language:</label>
                            <select name = "language" value="<?php echo $results['language'];?>">
                              <option value="English">English</option>
                              <option value="Filipino">Filipino</option>
                              <option value="Spanish">Spanish</option>
                              <option value="Japanese">Japanese</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                              <button type="submit" name="register" class="btn btn-danger" onclick="countScore1()" data-target="#myModal">Update</button>
                        </div>    
                    </form>                
              </div>
          </div>
        </div>

  <nav class="profile-header-nav">
    <ul class="nav nav-tabs">
      <li >
        <a href="index.php">Polyes <br>
          <?php
                        
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblpost WHERE userid = '$uid'");
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
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE mainuserid = '$uid'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                        ?>
        </a>
      </li>
      <li class="active">
        <a href="follower.php">Followers<br>
           <?php

                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE frienduserid = '$uid'");
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
          <h5 class="m-t-0">About <small>· <a href="#" data-toggle="modal" data-target="#mymodal2">Edit</a></small></h5>
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
                            $account = $conn->prepare("SELECT * FROM tbluser WHERE email='" . $_SESSION["email"] . "'");
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
            <?php
              $conn = dbConnect();
              $uid = $_SESSION['userid'];
              $account = $conn->prepare("select * from tbluser, tblfriendlist 
              Where  tblfriendlist.mainuserid = tbluser.userid  and tblfriendlist.frienduserid = '$uid'");
              $account->execute();
                      while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $imahe = $result['profileP'];
                        $name = $result['firstname']." ".$result['lastname'];
                        $mainuserid = $_SESSION['userid'];
                        $frienduserid = $result['userid'];
                        $searching = $result['firstname'];
                        echo '<li id = "fid" class="media list-group-item p-a">';
                        echo      '<a class="media-left" href="../search.php?search='.$searching.'">';
                        echo '<img class= "img-circle media-object" src ="../img/'.$imahe.'">';
                        echo '</a>';
                        echo      '<a href="../search.php?search='.$searching.'">';
                        echo '<strong>'.$name.'</strong>';
                        echo '</a>';
                        echo'<br>';     
                        echo '@'.$result['firstname']."".$result['lastname'];        

                        echo '</li>';                                               
                      }
            ?>
      
    
    </div>

        </li>
        </ul>
      </div>
      <!-- <script type="text/javascript">
                function deleteing(fuid) {
                      //alert(dsada)
                      makeAjaxRequest(fuid);
                    }
                    
                    function makeAjaxRequest(frienduid) {
                      $.ajax({
                        url:    '../assets/deletefollowing.php',
                        type: 'post',
                        data: {fuid: frienduid},
                        success: function(response) {
                          $('#fid').fadeOut();
                           //$('#datoylang-'+frienduid).append();
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
                    $('#delete').click(function(){

                      makeAjaxRequest();
                    });
                  });
                </script>
    -->
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
                      $searching = $result['firstname'];
                      echo '<div id="datoylang-'.$frienduserid.'">';
                      echo '<ul class="media-list media-list-stream">';
                      echo    '<li class="media m-b">';
                      echo      '<a class="media-left" href="../search.php?search='.$searching.'">';
                      echo        '<img class="media-object img-circle" src="../img/'.$imahes.'">';
                      echo      '</a>';
                      echo    '<div class="media-body">';
                      echo      '<a class="media-left" href="../search.php?search='.$searching.'">';
                      echo      '<strong>'.$friendsname.'</strong></a> @"'.$friendemail.'"';
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
              Find New Friend for more interaction and to get know each other.
            </div>
          </div>

          <div class="panel panel-default panel-link-list">
            <div class="panel-body">
              © 2016 Polylgot

              <a href="#">About</a>
              <a href="#">Help</a>
              <a href="#">Terms</a>
              <a href="#">Privacy</a>
          
             
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
