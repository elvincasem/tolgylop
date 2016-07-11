<?php
    include "../header.php";
   ?>
<?php
 include "../assets/dbconnect.php";
$uid = $_SESSION['userid'];
?>  

    <title>
      
        Profile &middot; 
      
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
            <a class="app-notifications" href="../notifications/notifbell.php">
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
        <?php echo $result['motto'];?>
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
                          <input type="text" class="form-control"  placeholder=" Your motto" id="answer"  name="motto" value="<?php echo $results['motto'];?>" style="text-transform: capitalize;"><br />
                         
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
      <li class="active">
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
      <li>
        <a href="followers.php">Followers<br>
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
                           <input type="hidden" class="form-control"   id="userid" value="<?php echo $_SESSION['userid']?>" name="userid" required><br />   
                          <input type="text" class="form-control"  placeholder="Went to" id="answers" value="" name="travel" required><br />   
                          <input type="text" class="form-control"  placeholder="Where do you work?" id="answers" value="" name="work" required><br /> 
                          <input type="text" class="form-control"  placeholder="Your Address" id="answers" value="" name="address" required><br /> 
                          <input type="text" class="form-control"  placeholder="Current Address" id="answers" value="" name="currentadd" required><br />                     
                    </div>
                    <div class="modal-footer">
                               <button type="submit" name="register" class="btn btn-danger"  data-target="#myModal">Update</button>
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
             <ul class="nav nav-tabs">
              <li class="">
               <a href="index.php">Polyes</a>
              </li>
              <li class="active">
               <a href="savedpost.php">Saved Posts</a>
              </li>
              <li class="">
               <a href="#">Media</a>
              </li>
            </ul>

        </li>
           
        <li class="media list-group-item p-a">
          <?php

function timeAgo($time_ago){

$cur_time   = date('Y-m-d H:i:s');
$curr_time = strtotime($cur_time) + 3600;
//echo $curr_time;
$time_elapsed   = $curr_time - $time_ago;
$seconds  = $time_elapsed;
$minutes  = floor($time_elapsed / 60 );
$hours    = floor($time_elapsed / 3600);
$days     = floor($time_elapsed / 86400 );
$weeks    = floor($time_elapsed / 604800);
$months   = floor($time_elapsed / 2600640 );
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
                      $uid = $_SESSION['userid'];
                      $account = $conn->prepare("Select * from tblsavedpost,tbluser where tblsavedpost.mainuserid = '$uid' and tblsavedpost.frienduserid = tbluser.userid");
                    
                      $account->execute();
                      while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $name = $result['firstname']." ".$result['lastname'];
                        $profilepic = $result['profileP'];
                        $postid = $result['postid'];
                        $optionc = $result['userid'];
                        echo '<li class="media list-group-item p-a">
                              <a class="media-left" href="../search.php?search='.$name.'">
                                <img class="media-object img-circle" src="../img/'.$profilepic.'">
                              </a>
                              ';

                        echo '<div class="media-body">';
                        echo  '<div class="media-body-text">';
                        echo    '<div class="media-heading">';
                        echo       '<small class="pull-right text-muted">';
                        $oldtime = date("Y-m-d H:i:s", strtotime($result['currentDate']));
                        //$mydate=date('F j, Y g:i A');
                        $curenttime= $oldtime;
                        $time_ago =strtotime($curenttime);
                        timeAgo($time_ago);
                        echo       '</small>';
                        echo '<a href href="../search.php?search='.$name.'">';
                        echo       '<h5>'.$name.'</h5></a>';
                        echo    '</div>';//end of media heading
                        echo        '<p><div id="messagecontent-'.$postid.'">';
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
                        echo        '</div></p>';//end of messagecontent
                        echo   '</div>';//end of media-body-text
                        // translate
                        echo '<div class="media-body-inline-grid">';
                        echo '     &nbsp<div class ="hvr-float-shadow pull-right text-muted" data-toggle="tooltip"  title="Translate" 
                                          id="translate-'.$postid.'" style="text-align:right;  width:30px; height:30px;"onclick="trans('.$postid.')">
                                          <img src="../img/gtranslate.png" width="30px" height="30px">
                                        </div>';
                        echo '        <div id="translation-'.$postid.'" 
                                              style="
                                                    margin-top:-30px; 
                                                    font-style:italic; 
                                                    width:100%; 
                                                    font-size:12px; 
                                                    color: orange; 
                                                    font-weight: bold;">';
        
                        echo          '</div>';
                          //start of btn like etc....
                        echo'</div>';//
                        echo '<div class="media-body-actions">';
                        echo '<div class="row">';
                        echo '  <div id = "like" style="display: inline-block;   vertical-align: bottom;" class="col-md-3">';
                          $stats = $conn->prepare("Select count(*) as statuslike FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'");
                          //echo "Select count(*) FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'";
                          //echo "Select count(*) as statuslike FROM tbllikes WHERE postid = '$postid' AND userid = '$uid'";
                          $stats->execute();
                          //$status = $account->fetch(PDO::FETCH_ASSOC);
                          while($stat = $stats->fetch(PDO::FETCH_ASSOC)){
                            $display= $stat['statuslike'];
                              if($stat['statuslike'] >= 1){
                                $status ="Unlike";
                                $src="../img/thumbb.png";
                                $display="";
                              }else{
                                $status = "Like";
                                $src="../img/thumbu.png";
                                $display="";
                                
                              }
                          }                         

                        echo      '<input type="hidden" id="like-'.$postid.'" name = "like" value ="'.$status.'">
                                    <div onclick="likeUnlike('.$postid.')" id="likes-'.$postid.'" name="action">';
                        echo          '<img id="likeimg-'.$postid.'" class="like hvr-float-shadow" src="'.$src.'" width="15px" height="15px">';                                           
                        echo        '</div>';

                          echo '<div class ="counts-container-'.$postid.'">';
                          $numlike = $conn->prepare("Select count(*) as statuslike FROM tbllikes WHERE postid = '$postid'");
                          $numlike->execute();
                          $clike = $numlike->fetch(PDO::FETCH_ASSOC);
                          $countlike = $clike['statuslike'];
                         
                          if($countlike==1){
                            
                             echo '<div id = "likecounts" style= "color:black; margin-left:20px;margin-top:-20px;">'.$countlike.'</div>';
                          
                          }else if($countlike>=1){
                     
                             echo '<div id = "likecounts" style= "color:black; margin-left:20px;margin-top:-20px;">'.$countlike.'</div>';
                           
                          }else if($countlike==0){
                            
                          }
                           echo'</div>';
                          echo '</div>'; //like end
                          
                          echo '  <div id = "reply-'.$postid.'" style="display: inline-block;  margin-right: 10px; vertical-align: bottom;" class="col-md-3">';
                          echo       '<img src="../img/comment.png" width ="15px" height="15px" class ="reply hvr-float-shadow" data-toggle="modal" data-target="#mymodal-'.$postid.'">';                 
                         
                         echo '<div id ="counts-'.$postid.'">'; 
                          $numlike = $conn->prepare("Select count(*) as commetlike FROM tblcomment WHERE postid = '$postid'");
                          $numlike->execute();
                          $clike = $numlike->fetch(PDO::FETCH_ASSOC);
                          $countlike = $clike['commetlike'];

                          
                          if($countlike==1){
                             echo '<div id = "likecount" style= "color:black;margin-top:-20px; margin-left:20px; ">'.$countlike.'</div>';
                          }else if($countlike>=1){
                             echo '<div id = "likecount" style= "color:black; margin-top:-20px;margin-left:20px;">'.$countlike.'</div>';
                          }else if($countlike==0){
                            
                          }
                          echo '</div>';
                           echo '  </div>';// end comments
                        

                           //option

                         
                  
                    echo '  <div id = "option-'.$postid.'" style="display: inline-block;  margin-right: 10px; vertical-align: bottom;" class="col-md-3">';
                    echo       '<img src="../img/option.png" width ="25px" height="25px" class=" hvr-float-shadow " data-toggle="modal" data-target="#mymodal2-'.$postid.'">'; 
                    echo '  </div>';    
               
                     echo '<div class="modal fade " id="mymodal2-'.$postid.'" tabindex="-1" role="dialog" aria-labelledby="#mymodal" aria-hidden="true" >
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                      <div class="modal-header" >
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center>             
                                            <strong> <img class="media-object img-circle" src="../img/'.$profilepic.'">                                     
                                              '.$name.'</strong></br>
                                              '.$mpost.'
                                              
                                        
                                      </div>';
                                  $saved = $conn->prepare("Select count(*) AS savedpost FROM tblsavedpost WHERE postid = '$postid' and mainuserid = '$uid' and frienduserid = '$optionc'");
                                  $saved->execute();
                                  $res = $saved->fetch(PDO::FETCH_ASSOC);
                                  $checkSaved = $res['savedpost'];
                                 
                                  
                                  if($checkSaved == 0){
                                  echo'<div class = "modal-body">
                                  <center>
                                      <form action="../assets/savedpostprof.php" method="POST">
                                        <input type="hidden" name="pid" id="pid" value="'.$postid.'">
                                        <input type="hidden" name="frienduserid" id="frienduserid" value="'.$optionc.'">
                                        <input type="hidden" name="mainuserid" id="mainuserid" value="'.$uid.'">
                                        <input type="hidden" name="pmessage" id="pmessage" value="'.$mpost.'">
                                        <button class="glyphicon glyphicon-bookmark btn btn-primary-outline btn-sm" id="insert" type="submit"> SAVE</button>
                                      
                                      </form>
                                      </center>
                                      </div>';
                                    }else{
                                       echo'<div class = "modal-body">
                                      <center>
                                        <h5>Post Saved</h5>
                                        <form action="../assets/deletesavedprof.php" method="POST">
                                        <input type="hidden" name="pid" id="pid" value="'.$postid.'">
                                        <input type="hidden" name="frienduserid" id="frienduserid" value="'.$optionc.'">
                                        <input type="hidden" name="mainuserid" id="mainuserid" value="'.$uid.'">
                                        <input type="hidden" name="pmessage" id="pmessage" value="'.$mpost.'">
                                           <button class="glyphicon glyphicon-bookmark btn btn-default-outline btn-sm" id="insert" type="submit"> UNSAVE</button>
                                     
                                      </form>
                                      </center>
                                      </div>';
                                    }
                                if($optionc == $uid){
                                  echo '
                                      <div class = "modal-body">
                                      <center>
                                        <form action="../assets/deletesavedprof.php" method="POST">
                                          <input type="hidden" name="pid" id="pid" value="'.$postid.'">
                                          <input type="hidden" name="frienduserid" id="frienduserid" value="'.$optionc.'">
                                        <input type="hidden" name="mainuserid" id="mainuserid" value="'.$uid.'">
                                        <input type="hidden" name="pmessage" id="pmessage" value="'.$mpost.'">
                                             <button class="glyphicon glyphicon-remove btn btn-danger-outline btn-sm" id="insert" type="submit"> DELETE</button>
                                       
                                        </form>
                                        </center>
                                      </div>';
                                  }else{
                                   echo'  <div class = "modal-body">
                                   <center>
                                        <form action="#" method="POST">
                                          <input type="hidden" name="pid" id="pid" value="'.$postid.'">
                                             <button class="glyphicon glyphicon-question-sign btn btn-danger-outline btn-sm" id="insert" type="submit"> REPORT</button>
                                       
                                        </form>
                                        </center>
                                      </div>';
                                  }
                               echo'</center>    </div>
                                  </div>
                                </div>';
                                




                          // echo $postid;
                          echo '<div class="modal fade" id="mymodal-'.$postid.'" tabindex="-1" role="dialog" aria-labelledby="#mymodal" aria-hidden="true" >
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header" >
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        
                                            <center><strong> <img class="media-object img-circle" src="../img/'.$profilepic.'">                                     
                                              '.$name.'</strong></br>
                                              '.$mpost.'
                                            </center>
                                        
                                      </div>


                                         
                                        
                                          <center> <h4 class="modal-title">Comments</h4></center> <br/>
                                          <div id="commen-'.$postid.'">';
                                             // echo $postid;
                                              $comments = $conn->prepare("SELECT * FROM tblcomment,tbluser where tblcomment.postid = '$postid' and tblcomment.userid = tbluser.userid  ORDER BY commentid ASC");                        
                                              $comments->execute();
                                              while($stat = $comments->fetch(PDO::FETCH_ASSOC)){
                                               $name = $stat['firstname'].''.$stat['lastname'];
                                               $com =  $stat['comments'];
                                               $pp = $stat['profileP'];
                                               $cuid = $stat['userid'];
                                               $puid = $stat['postid'];
                                           
                                              if($cuid == $uid){
                                              echo '  
                                              
                                              <div class="m-a js-conversation">
                                                <ul class="media-list media-list-conversation">
                                                  <li class="media media-current-user m-b-md">
                                                    <div class="media-body">                               
                                                      <div class="media-body-text">
                                                        
                                                           '.$com.'
                                                       
                                                      </div>
                                                      <div class="media-footer">
                                                        <small class="text-muted">
                                                            <a href="#">'.$name.'</a> at 4:28PM
                                                        </small>
                                                      </div>
                                                    </div>                                                     
                                                    <a class="media-right">
                                                       <img class="media-object img-circle" src="../img/'.$pp.'"> 
                                                    </a>
                                                  </li>
                                                </ul>
                                                </div>
                                                ';


                                              }else{
                                                echo '    
                                               
                                                 <div class="m-a js-conversation">
                                                    <ul class="media-list media-list-conversation">
                                                      <li class="media- m-b-md">
                                                        <a class="media-left">
                                                          <img class="media-object img-circle" src="../img/'.$pp.'"> 
                                                        </a>
                                                        <div class="media-body">                               
                                                          <div class="media-body-text">
                                                            '.$com.'
                                                          </div>
                                                          <div class="media-footer">
                                                            <small class="text-muted">
                                                               <a href="#">'.$name.'</a> at 4:28PM
                                                            </small>
                                                        </div>
                                                      </div>
                                                  </li>
                                                </ul>
                                              </div>
                                           ';

                                              }
                                      }
                          echo ' </div>';
                         
                         echo '
                                    
                                      <div class="modal-footer" >
                                       <div class="input-group" >
                                        <input type="text" placeholder="Say Something" id = "comments-'.$postid.'" class="form-control" name="comments" placeholder="Message">
                                            <input type="hidden" name="uid" id="uid" value='.$uid.'>
                                            <input type="hidden" name="puid" id="puid" value='.$postid.'>
                                              <div class="input-group-btn">
                                                 <button type="button" name = "submit"  class="btn btn-default" id ="shows" onclick="comment('.$postid.')" >
                                                    <span><img src="../img/send.png" width="20px" height="20px"></span>
                                                </button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>';
                      
                
                     

                         
                          
                 
                    
                     

                   

                      }
                  ?>

<!-- translate js-->
 <script type="text/javascript">

            function comment(pid){
                  // alert(pid);
                   //alert(document.getElementById('comments').value);
           var comments = document.getElementById('comments-'+pid).value;
          // alert(comments);
                  //makeAjaxRequest(pid);
          $.ajax({
                    url:    '../assets/postings.php',
                    type: 'post',
                    data: {uid: $('input#uid').val(),puid: pid, comments: comments},
                    success: function(response) {
                      //console.log();
                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                     //alert(response);
                      $('#commen-'+pid).load(document.URL +  ' #commen-'+pid);
                       $('#counts-'+pid).load(document.URL +  ' #counts-'+pid);
                      //$('#comment').text = "";
                      document.getElementById('comments-'+pid).value = "";
                    }
                  }); 
                }

                






              jQuery(document).ready(function($) {
                $('#shows').click(function(){

                  makeAjaxRequest();
                });
                
                

              });
            </script>
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
                    //alert(postid);
                    var action ;
                    
                    action = document.getElementById("like-"+postid).value;
                   
                    $.ajax({
                    url: '../assets/numClicks.php',
                    type: 'GET',
                    data: {action: action, postid: postid },
                    success: function(response) {
                       $('.counts-container-'+postid).load(document.URL +  ' .counts-container-'+postid);
                      //$('#comment').text = "";
                      //alert(response);
                  
                      if(response == "Unlike"){
                        document.getElementById('likeimg-'+postid).src="../img/thumbb.png";
                        $('#likecounts-'+postid).load(document.URL +  ' #likecounts-');

                        
                       
                        }else{
                          document.getElementById('likeimg-'+postid).src="../img/thumbu.png";
                         

                        
                       
                        }

                       

                        document.getElementById('like-'+postid).value = response;
                    


                        }
                    }); 
                  }
                </script>
        </li>
      </ul>
</div>
<div class="col-md-3">


          <div class="panel panel-default m-b-md hidden-xs">
            <div class="panel-body">
            <h5 class="m-t-0">Likes <small>· <a href="../viewall.php">View All</a></small></h5>
            <div id="datoylang">
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
                      echo            '<button class="btn btn-primary-outline btn-sm id="insert" type="submit" onclick="posting('.$frienduserid.')">';
                      echo               '<span class="icon icon-add-user"></span> Follow</button>';
                      echo         '</div>';
                      echo    '</div>';
                      echo   '</li>';
                      echo '</ul>';
                      
                   
                      }
                    ?>
                 </div>
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
                          $('#datoylang').load(document.URL + ' #datoylang').fadeIn;
                          //$('#datoylang-'+frienduid).fadeOut();
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
