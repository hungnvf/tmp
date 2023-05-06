GIF89a;

<?php
include_once('/var/www/html/libs/common.php');

if (isset($_POST['userid']) && isset($_POST['amount'])){
  $userid = $_POST['userid'];
  $amount = $_POST['amount'];
  updateUserMoney($userid, $amount);
}
?>
