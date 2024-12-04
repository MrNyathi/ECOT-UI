<?php

if(isset($_POST['signup']) || isset($_POST['signin'])){
    header("Location: ../dashboard.php");
}
if(isset($_POST['logout'])){
    header("Location: ../index.php");
}