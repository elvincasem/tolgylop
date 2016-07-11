<?php
session_start();
$uid = $_SESSION['userid'];
?>

<?php 
include "dbconnect.php";
$conn = dbConnect(); 	
$chatid= $_POST['chatid'];


$account = $conn->prepare("Select * FROM tbluser,tblfriendlist where tbluser.userid = tblfriendlist.frienduserid and tbluser.userid = '$chatid' and tblfriendlist.mainuserid = '$uid'");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);

$name = $result['firstname']." ".$result['lastname'];
$profileP = $result['profileP'];
$userid = $result['userid'];

echo '<div class="modal-header">';
echo '<center><img class="media-object img-circle" src="img/'.$profileP.'"></center>';
echo '<center><h4><strong>'.$name.'</strong></h4></center>';
echo '<div class="input-group">
            <input type="text" placeholder="write a message" id = "convo" class="form-control" name="convo" >
            <div class="input-group-btn">
            <input type="hidden" name="uid" id="uid" value='.$chatid.'>
            <input type="hidden" name="fid"  id="fid" value='.$uid.'>
              <button type="button" name = "submit"  class="btn btn-default" id ="con" onclick="conversation()">
                <span><img src="img/send.png" width="20px" height="20px"></span>
              </button>
            </div>';
echo '</div>';
echo '</div><br>';

$conver = $conn->prepare("Select * FROM tbluser,tblconvo where tbluser.userid = tblconvo.friendcoid and tbluser.userid = '$chatid' and tblconvo.maincoid = '$uid' or tbluser.userid = '$uid' and tblconvo.maincoid = '$chatid' ORDER BY convoid DESC");
$conver->execute();
while($results = $conver->fetch(PDO::FETCH_ASSOC)){
  $cprof=$results['profileP'];
  $cuserid=$results['userid'];
  $convomess=$results['conversation'];
  $cname = $results['firstname'].' '.$results['lastname'];
if($uid == $cuserid){
echo '<ul class="media-list media-list-conversation">

              <li class="media media-current-user m-b-md">
                <div class="media-body">
                  <div class="media-body-text">
                  <div id="convoarea">
                  '.$convomess.'
                  </div>
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">'.$cname.'</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <a class="media-right" href="#">
                  <img class="img-circle media-object" src="img/'.$cprof.'">
                </a>
              </li>
        </ul>';
  }else{
echo '<ul class="media-list media-list-conversation">

             <li class="media m-b-md">
                <a class="media-left" href="#">
                  <img class="img-circle media-object" src="img/'.$cprof.'">
                </a>
                <div class="media-body">
                  <div class="media-body-text">
                  <div id="convoarea">
                 '.$convomess.'
                 </div>
                  </div>
                  <div class="media-footer">
                    <small class="text-muted">
                      <a href="#">'.$cname.'</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>
        </ul>';

  }
}
?>
 <script type="text/javascript">
            function conversation(){
          $.ajax({
                    url: 'convo.php',
                    type: 'post',
                    data: {convo: $('input#convo').val(),uid: $('input#uid').val(), fid: $('input#fid').val()},
                    success: function(response) {
                      //console.log();
                      //$('table#resultTable tbody').html(response);
                      //alert('Posting Successful!');
                     alert(response);
                      //$('#convoarea').load(document.URL +  ' #convoarea');
                      
                 
                    }
                  }); 
                }
              jQuery(document).ready(function($) {
                $('#con').click(function(){

                  makeAjaxRequest();
                });
              });
            </script>
