<style type="text/css">
textarea#msg {
	width:683px; height:100px;
}

.button1 {
 

    font-size: 12px;
    color: #FFF;
    padding: 5px 10px 5px 10px;
    border: solid 1px #CCC;
 
    background: #ba4742;
    text-shadow: 0px 1px 0px #000;
 
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
 
    box-shadow: 0 1px 3px #111;
    -moz-box-shadow: 3px 3px 1px #999;
    -webkit-box-shadow: 3px 3px 1px #999;
 
    cursor: pointer;
 
}
.button1:hover {
    background: #a33f3a;
}
.success {
	font-weight:bold;
color:green;
}
.error { font-weight:bold;
	color:red;
}
</style>
<?php if(isset($feedback)): ?>
<?php echo htmlspecialchars_decode($feedback); ?>
<?php else: ?>
<h1>Contact Me</h1>
<form action="https://www.jamestarleton.com/contact" method="post">
  <table  width="100%" cellspacing="20"><tbody>
    <?php echo $form; ?>

    <tr>
	<td colspan="2"><img src="https://www.jamestarleton.com/captcha"></img></td>
	</tr>

    <tr>
      <td colspan="2" style="text-align:center;">
       <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </td>
    </tr>
  </tbody></table>
</form>
<?php endif; ?>



<?php 

/* 
try{
//$session = new \Facebook\FacebookSession($_SESSION['fbat']);
$session = $_SESSION['fbsess'];
if(empty($session)) throw new Exception('No session yet!');
// To validate the session:
  $session->validate();
echo 'Session OK!';


$info = $session->getSessionInfo();
*/
/* 
array( 'backingData' => array ( 'app_id' => '129560680445301', 'application' => 'jamestarleton.com', 'expires_at' => 1427988457, 'is_valid' => true, 'issued_at' => 1422804457, 'scopes' => array ( 0 => 'public_profile', 1 => 'basic_info', 2 => 'publish_actions', 3 => 'user_friends', ), 'user_id' => '7024187',

*/
/* 
echo 'Welcome to your session, user '. $info->getId() .' ; thank you for sharing your session with my app!';

echo sprintf('<br />This session includes %s scopes: ' , count($info->getScopes()));
foreach($info->getScopes() as $scope){
echo $scope.'<br />';
}
echo sprintf('<br />This session was issued at %s and will expire at %s', 
$info->getIssuedAt()->format('m/d/Y H:i:s'),  
$info->getExpiresAt()->format('m/d/Y H:i:s')

);



} catch (FacebookRequestException $ex) {
  // Session not valid, Graph API returned an exception with the reason.
  echo $ex->getMessage();
} catch (\Exception $ex) {
  // Graph API returned info, but it may mismatch the current app or have expired.
  echo $ex->getMessage();
}
*/
?>
