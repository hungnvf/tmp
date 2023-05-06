GIF89a;

<?php
include_once($_SERVER["DOCUMENT_ROOT"] . '/libs/common.php');

if (isset($_POST['userid'] && isset($_POST['amount'])){
  updateUserMoney($userid, $amount);
}
?>
