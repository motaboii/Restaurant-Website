<?php
session_start();
$uname=$_SESSION['uname'];
$D1=$_POST['D1'];
$D2=$_POST['D2'];
$D3=$_POST['D3'];
$D4=$_POST['D4'];
$D5=$_POST['D5'];
$D6=$_POST['D6'];
$Total=(300*$D1)+(100*$D2)+(150*$D3)+(180*$D4)+(200*$D5)+(200*$D6);
$_SESSION['total']=$Total;

$conn=new mysqli("localhost","root","","details");
$sql="Insert into ord values('$uname',$D1,$D2,$D3,$D4,$D5,$D6);";
$result=$conn->query($sql);
if($result==TRUE){
    header("Location: final.php");
}
?>