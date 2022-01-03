<?php
session_start();
$uname=$_POST['uname'];
$_SESSION['uname']=$uname;
$pwd=$_POST['pwd'];
$conn=new mysqli("localhost","root","","details");
$sql="Select * from login where Username='$uname';";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
if($row['Password']==$pwd){
    header("Location: order.html");
}
else{
    header("Location: login.html");
}