
<?php
	
include("header.php");

include("topnav.php");

?>
<title>
      
        Home 
      
    </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0,">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="hover/css/hover.css">
<link rel="stylesheet" href="hover/css/animation.css">


<div class="container p-t-md">
  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default panel-profile m-b-md">
        <div class="panel-heading" style="background-image: url(
           img/<?php 
              $uid = $_SESSION['userid'];
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
              $account->execute();
              $result = $account->fetch(PDO::FETCH_ASSOC);
              //echo "SELECT * FROM  tbluser WHERE userid = '$uid'";
              echo $result['coverP'];
            ?>  


        );">
      </div>
        <div class="panel-body text-center">
          <a href="profile/index.php">
          
               <img class="panel-profile-img" src="img/<?php
              $uid = $_SESSION['userid'];
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
              $account->execute();
              $result = $account->fetch(PDO::FETCH_ASSOC);
              //echo "SELECT * FROM  tbluser WHERE userid = '$uid'";
              echo $result['profileP'];
            ?>"  >


          </a>

          <h5 class="panel-title">
            <a class="text-inherit" href="profile/index.php"><?php echo $result['firstname']." ".$result['lastname'];?></a>
          </h5>

          <p class="m-b-md"><?php echo $result['motto'];?></p>

          <ul class="panel-menu">
            <li class="panel-menu-item">
              <a href="profile/index.php" class="text-inherit">
                Polyes
                <h5 class="m-y-0">
                   <div class = "itolang">
                    <?php
                        include_once 'assets/dbconnect.php';
                        $uid = $_SESSION['userid'];
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblpost WHERE userid = '$uid'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                    ?>
                     <div class = "itolang">
                </h5>
              </a>
            </li>

            <li class="panel-menu-item">
              <a href="profile/following.php" class="text-inherit">
               Following
                <h5 class="m-y-0">
                  <div class = "flws">
                  <?php
                        include_once 'assets/dbconnect.php';
                        $uid = $_SESSION['userid'];
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE mainuserid = '$uid'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                        ?>
                  </div>
                </h5>
              </a>
            </li>
            <li class="panel-menu-item">
              <a href="profile/followers.php" class="text-inherit">
                Followers
                <h5 class="m-y-0">
                   
                      <?php
                        include_once 'assets/dbconnect.php';
                        $uid = $_SESSION['userid'];
                        $conn = dbConnect(); 
                        $account = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE frienduserid = '$uid'");
                            $account->execute();
                            $results = $account->fetch(PDO::FETCH_ASSOC);
                            echo $results['notif'];
                        ?>
                      
                </h5>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="panel panel-default visible-md-block visible-lg-block">
        <div class="panel-body">
          <h5 class="m-t-0">About <small>· <a href="#">Edit</a></small></h5>
          <ul class="list-unstyled list-spaced">
            <li><span class="text-muted icon icon-calendar m-r"></span>Went to <a href="#"><?php echo $result['travel'];?></a>
            <li><span class="text-muted icon icon-briefcase m-r"></span>Worked at <a href="#"><?php echo $result['work'];?></a>
            <li><span class="text-muted icon icon-home m-r"></span>Lives in <a href="#"><?php echo $result['address'];?></a>
            <li><span class="text-muted icon icon-location-pin m-r"></span>From <a href="#"><?php echo $result['currentadd'];?></a>
          </ul>
        </div>
      </div>

       <div class="panel panel-default visible-md-block visible-lg-block">
        <div class="panel-body">
          <h5 class="m-t-0">Photos <small>· <a href="#">Edit</a></small></h5>
          <div data-grid="images" data-target-height="150">
            <?php 
              $uid = $_SESSION['userid'];
              $conn = dbConnect(); 
              $account = $conn->prepare("SELECT * FROM  tbluser WHERE userid = '$uid'");
              $account->execute();
              while($result = $account->fetch(PDO::FETCH_ASSOC)){
              //echo "SELECT * FROM  tbluser WHERE userid = '$uid'";
              $profilePitures=$result['profileP'];
              $coverPhotos=$result['coverP'];
              echo '<div>
                      <img data-width="640" data-height="640" data-action="zoom" src="img/'.$profilePitures.'">
                    </div>';
              echo '<div>
                      <img data-width="640" data-height="640" data-action="zoom" src="img/'.$coverPhotos.'">
                    </div>';
            }
            ?>"  


            

            
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <ul class="list-group media-list media-list-stream">

        <li class="media list-group-item p-a">
          <div class="input-group">

           

            <input type="text" placeholder="What's Up?" id = "comment" class="form-control" name="comment" placeholder="Message">
            <input type="hidden" name="uid" id="uid" value="<?php echo $_SESSION['userid']; ?>">
            <div class="input-group-btn">
              <button type="button" name = "submit"  class="btn btn-default" id ="show">
                <span><img src="img/send.png" width="20px" height="20px"></span>
              </button>
            </div>

              <script type="text/javascript">
              jQuery(document).ready(function($) {
                $('#show').click(function(){
                  makeAjaxRequest();
                });
                
                
                function posting() {
                  makeAjaxRequest();
                }
                
                function makeAjaxRequest() {
                  $.ajax({
                    url:    'assets/posting.php',
                    type: 'post',
                    data: {uid: $('input#uid').val(), comment: $('input#comment').val()},
                    success: function(response) {
                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                      $('#post-container').load(document.URL +  ' #post-container');
                      $('.itolang').load(document.URL +  ' .itolang');
                      //$('#comment').text = "";
                      document.getElementById('comment').value = "";
                    }
                  }); 

                }
              });


           function conversation(){
          $.ajax({
                    url: 'assets/convo.php',
                    type: 'post',
                    data: {convo: $('input#convo').val(),uid: $('input#uid').val(), fid: $('input#fid').val()},
                    success: function(response) {
                      //console.log();
                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                     //alert(response);
                      $('#convoarea').load("assets/chatquery.php");
                     
                      
                    }
                  }); 
                }







            </script>

          </div>
        </li>

           
          
              
              <div id ="post-container"  >

                <?php

function timeAgo($time_ago){

$cur_time   = date('Y-m-d H:i:s');
$curr_time = strtotime($cur_time) - 3600;
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
                      $uid = $_SESSION['userid'];
                      //$account = $conn->prepare("SELECT tblpost.userid,pmessage,postid,firstname,lastname,email FROM tblpost,tbluser
                      //              WHERE tblpost.userid = tbluser.userid and tblpost.userid = '$uid'
                      //              ORDER BY postid DESC");
                      $count = $conn->prepare("SELECT count(*) as notif FROM tblfriendlist WHERE mainuserid = '$uid' and status = 1");
                      $count->execute();
                      $results = $count->fetch(PDO::FETCH_ASSOC);
                      $FC = $results['notif'];
                      if($FC>0){
                      $account = $conn->prepare("select * from tblpost,tbluser 
                                    where tblpost.userid = tbluser.userid 
                                    AND tblpost.userid IN (SELECT frienduserid FROM tblfriendlist
                                    where mainuserid = '$uid' and status = 1 or frienduserid = '$uid' and status =1 )ORDER BY postid DESC");
                     // $sql = "SELECT tblfriendlist.mainuserid,frienduserid,status,tblpost.userid,pmessage,postid,firstname,lastname,email FROM tblfriendlist,tblpost,tbluser WHERE tblfriendlist.mainuserid = tblpost.userid AND tblpost.userid = tbluser.userid and tblpost.userid = '1' AND tblfriendlist.status='1'ORDER BY postid DESC";
                      $sql = "select * from tblpost,tbluser 
                                    where tblpost.userid = tbluser.userid 
                                    AND tblpost.userid IN (SELECT frienduserid FROM tblfriendlist
                                    where mainuserid = '$uid' and status = 1 or frienduserid = '$uid' and status =1 )ORDER BY postid DESC";
                      }else{
                       $account = $conn->prepare("Select * from tblpost,tbluser where tbluser.userid= '$uid' and tblpost.userid='$uid' ORDER BY postid DESC");
                      }
                      $account->execute();
                      while($result = $account->fetch(PDO::FETCH_ASSOC)){
                        $name = $result['firstname']." ".$result['lastname'];
                        $fname = $result['firstname'];
                        $profilepic = $result['profileP'];
                        $postid = $result['postid'];
                        $optionc = $result['userid'];
                        

                        //echo $sql;
                      
                        echo '<li class="media list-group-item p-a">
                              <a class="media-left" href="search.php?search='.$name.'">
                                <img class="media-object img-circle" src="img/'.$profilepic.'">';
                                  //print_r($result);
                                
                       echo'       </a>
                              ';

                        echo '<div class="media-body">';
                        echo  '<div class="media-body-text">';
                        echo    '<div class="media-heading">';
 
                        echo       '<small class="pull-right text-muted">';
                        //$account = $conn->prepare("SELECT * FROM tblpost WHERE userid = '$uid' AND postid = '$postid'");
                        //$account->execute();
                        //$results = $account->fetch(PDO::FETCH_ASSOC);
                        $oldtime = date("Y-m-d H:i:s", strtotime($result['currentDate']));
                        //$mydate=date('F j, Y g:i A');
                        $curenttime= $oldtime;
                        $time_ago =strtotime($curenttime);
                        timeAgo($time_ago);

                       // echo $time_ago;
                        //echo $oldtime;
                       // echo $mydate;
                        //if($oldtime == $mydate){
                        //        echo "just now";
                        //}else{
                        
                  
                         //   echo $oldtime;
                       //}


                        echo '</small>';





                        echo '<a href="search.php?search='.$name.'">';
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
                                          <img src="img/gtranslate.png" width="30px" height="30px">
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
                                $src="img/thumbb.png";
                                $display="";
                              }else{
                                $status = "Like";
                                $src="img/thumbu.png";
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
                          echo       '<img src="img/comment.png" width ="15px" height="15px" class ="reply hvr-float-shadow" data-toggle="modal" data-target="#mymodal-'.$postid.'">';                 
                         
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
                    echo       '<img src="img/option.png" width ="25px" height="25px" class=" hvr-float-shadow " data-toggle="modal" data-target="#mymodal2-'.$postid.'">'; 
                    echo '  </div>';    

                     echo '<div class="modal fade" id="mymodal2-'.$postid.'" tabindex="1" role="dialog" aria-labelledby="#mymodal" aria-hidden="true"  >
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                      <div class="modal-header" >
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <center>     
                                            <strong> <img class="media-object img-circle" src="img/'.$profilepic.'">                                     
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
                                      <form action="assets/savedpost.php" method="POST">
                                        <input type="hidden" name="pid" id="pid" value="'.$postid.'">
                                        <input type="hidden" name="frienduserid" id="frienduserid" value="'.$optionc.'">
                                        <input type="hidden" name="mainuserid" id="mainuserid" value="'.$uid.'">
                                        <input type="hidden" name="pmessage" id="pmessage" value="'.$mpost.'">
                                        
                                        <span class="glyphicon glyphicon-bookmark btn btn-primary-outline btn-sm" id="insert" type="submit"> SAVE</span>
                                      

                                      </form>
                                  </center>   
                                      </div>
                                    ';
                                    }else{
                                       echo'<div class = "modal-body">
                                      <center>   
                                        <h5>Post Saved</h5>
                                        <form action="assets/deletesaved.php" method="POST">
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
                                        <form action="assets/delete.php" method="POST">
                                          <input type="hidden" name="pid" id="pid" value="'.$postid.'">
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
                                                        
                                            <center><strong> <img class="media-object img-circle" src="img/'.$profilepic.'">                                     
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
                                               $comtime = date("H:i A", strtotime($stat['current']));
                                         
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
                                                            <a href="#">'.$name.'</a> at '.$comtime.'
                                                        </small>
                                                      </div>
                                                    </div>                                                     
                                                    <a class="media-right">
                                                       <img class="media-object img-circle" src="img/'.$pp.'"> 
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
                                                          <img class="media-object img-circle" src="img/'.$pp.'"> 
                                                        </a>
                                                        <div class="media-body">                               
                                                          <div class="media-body-text">
                                                            '.$com.'
                                                          </div>
                                                          <div class="media-footer">
                                                            <small class="text-muted">
                                                               <a href="#">'.$name.'</a> at '.$comtime.'
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
                                                    <span><img src="img/send.png" width="20px" height="20px"></span>
                                                </button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>';
                      
                
                     

                         
                          
                 
                    
                     

                   

                      
                      }

                  ?>

    </div>

      <script type="text/javascript">

            function comment(pid){
                  // alert(pid);
                   //alert(document.getElementById('comments').value);
				   var comments = document.getElementById('comments-'+pid).value;
				  // alert(comments);
                  //makeAjaxRequest(pid);
				  $.ajax({
                    url:    'assets/postings.php',
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
            <!--  <script type="text/javascript">
                  function deletepost(pid) {
                   // alert(pid);
                    $.ajax({
                    url: 'assets/delete.php',
                    type: 'post',
                    data: {pid: pid},
                    success: function(response) {

                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                      $('#post-container').load(document.URL +  ' #post-container');
                      $('#option-'+postid).load(document.URL +  ' #option-'+postid);
                      //$('#comment').text = "";
                      document.getElementById('postid').value = "";
                        }
                    }); 
                  }
              
                  jQuery(document).ready(function($) {
                    $('del').click(function(){
                    makeAjaxRequest();
                    });
                
                
                //function deletepost(pid) {
                  
                //}
              
                
                

                /*$('form').submit(function(e){
                  e.preventDefault();
                  makeAjaxRequest();
                  return false;
                }); */

                function makeAjaxRequest() {
                  

                }
              });
            </script>-->

         

                <script>
                function trans(postid){
                   document.getElementById("translate-"+postid).disabled=true;
                 }
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
                            $(" #translate-"+postid_global).hide();
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
                    //alert(action);
                    $.ajax({
                    url: 'assets/numClicks.php',
                    type: 'GET',
                    data: {action: action, postid: postid },
                    success: function(response) {
                       $('.counts-container-'+postid).load(document.URL +  ' .counts-container-'+postid);
                      //$('#comment').text = "";
                      //alert(response);
                     // alert(postid);
                      if(response == "Unlike"){
                        document.getElementById('likeimg-'+postid).src="img/thumbb.png";
                        $('#likecounts-'+postid).load(document.URL +  ' #likecounts-');

                        
                       
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
            <ul class="list-group media-list media-list-stream">
              <!--
                 <li class="media list-group-item p-a">
                  Load More... <img src = "img/spinner2.gif" class = "img-circle media-object pull-right text-muted">
                </li>-->
          
            </ul>
          </div>
        </li>
      </ul>

 
   

                                     







    <div class="col-md-3">
    <!--  <div class="alert alert-warning alert-dismissible hidden-xs" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <a class="alert-link" href="profile/index.html">Visit your profile!</a> Check your self, you aren't looking too good.
      </div>

      <div class="panel panel-default m-b-md hidden-xs">
        <div class="panel-body">
          <h5 class="m-t-0">Sponsored</h5>
          <div data-grid="images" data-target-height="150">
            <img class="media-object" data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_2.jpg">
          </div>
          <p><strong>It might be time to visit Iceland.</strong> Iceland is so chill, and everything looks cool here. Also, we heard the people are pretty nice. What are you waiting for?</p>
          <button class="btn btn-primary-outline btn-sm">Buy a ticket</button>
        </div>
      </div>-->

      <div class="panel panel-default m-b-md hidden-xs">
        <div class="panel-body">
        <h5 class="m-t-0">Likes <small>· <a href="viewall.php">View All</a></small></h5>
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

                  echo '<ul class="media-list media-list-stream">';
                  echo    '<li class="media m-b">';
                  echo '';
                  echo      '<a class="media-left" href="search.php?search='.$friendsname.'">';
                  echo        '<img class="media-object img-circle" src="img/'.$imahes.'">';
                  echo      '</a>';
                  echo    '<div class="media-body">';
                  echo     '<a href="search.php?search='.$friendsname.'">';
                  echo      '<strong>'.$friendsname.'</strong> </a>@"'.$friendemail.'"';

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
                    url:    'assets/insertTblfriend.php',
                    type: 'post',
                    data: {fuid: frienduid, status: $('input#status').val()},
                    success: function(response) {
                      //$('#datoylang-'+frienduid).fadeOut();
                       //$('#datoylang-'+frienduid).append();
                      //$("#datoylang").load(location.href + " #datoylang");
                      //document.getElementById("datoylang").remove();
                      //$("#datoylang-"+frienduid).replaceWith("#datoylang-"+frienduid);
                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                      $('#datoylang').load(document.URL + ' #datoylang');
                      $('.flws').load(document.URL + ' .flws');
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


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/toolkit.js"></script>
    <script src="assets/js/application.js"></script>
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

