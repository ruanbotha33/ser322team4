<?php
    include'db.php';
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $city=$_POST['city'];
    $state=$_POST['State'];
    $n=new db();
    $n->connect();
    $n->insert($fname,$lname,$email,$phone,$city,$state);
?>