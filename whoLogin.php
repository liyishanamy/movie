<?php
if (isset($_POST['user'])){
    $home_url = './login.php';
    header('Location:'.$home_url);


}
if(isset($_POST['admin'])){
    $home_url = './administratorLogin.php';
    header('Location:'.$home_url);
}