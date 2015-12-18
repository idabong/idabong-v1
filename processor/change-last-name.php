<?php session_start(); 
include('../includes/mysqli_connect_local.php');
include('../includes/functions.php');

//Check if user logged in?
is_logged_in();

if(isset($_GET['last_name']) && preg_match('/^[a-z0-9A-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ \'-]{2,40}$/u', trim($_GET['last_name']))) {

    $last_name= mysqli_real_escape_string($db_connect, trim($_GET['last_name']));
    $query = "UPDATE user SET last_name= '{$last_name}' WHERE uid = {$_SESSION['uid']} LIMIT 1";
    $result = mysqli_query($db_connect, $query);
    if(mysqli_affected_rows($db_connect) == 1) {
        echo $last_name;
    } else {
      echo 'NO';
    }

} else {
  echo 'NO';
}
?>