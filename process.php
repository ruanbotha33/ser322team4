<?php
    include'db.php';
    $fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phonenumber'];
    $city=$_POST['city'];
    $state=$_POST['State'];
	$name = $fname + " " + $lname;
    $n=new db();
    $n->connect();
    $n->insert($name,$age,$email,$phone,$city,$state);
?>