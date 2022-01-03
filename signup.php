<?php
session_start();
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$phno=$_POST['phno'];
$add=$_POST['add'];

$conn=new mysqli("localhost","root","","details");
$sql="Insert into login values('$name','$uname','$email','$pwd',$phno,'$add');";
$result=$conn->query($sql);
if($result==TRUE){
    header("Location: login.html");
}
?>