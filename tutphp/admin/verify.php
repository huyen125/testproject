<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include '../config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT idu,email,password,fname,type from users order by idu asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password && $obj->type === "admin") {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['idu'] = $obj->idu;
      $_SESSION['fname'] = $obj->fname;
      header("location:index.php");
    } else {

        if($flag === 'true'){
          redirect();
          $flag = 'false';
        }
    }
  }
}

function redirect() {
  echo '<h4>Đăng nhập không hợp lệ! Đang chuyển hướng ...</h4>';
  header("Refresh: 2; url=login.php");
}


?>
