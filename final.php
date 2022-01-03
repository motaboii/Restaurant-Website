<?php
session_start();
if(isset($_POST['Delete'])){
  $uname=$_SESSION['uname'];
  $conn=new mysqli("localhost","root","","details");
  $sql="DELETE from ord where Username='$uname';";
  $conn->query($sql);
  header("Location: order.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Thanks</title>
  </head>
  <body>
    <?php
    $uname=$_SESSION['uname'];
    $conn=new mysqli("localhost","root","","details");
    $sql="SELECT Name from login where Username='$uname';";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();
    $name=$row['Name'];
    ?>
    <p class="tu">Thank You, <?php echo "$name";?></p>
    <center>
      <img
        height="300"
        width="300"
        src="https://media.istockphoto.com/vectors/green-tick-checkmark-vector-icon-for-checkbox-marker-symbol-vector-id1079725292?k=6&m=1079725292&s=612x612&w=0&h=CyTRYX2cgWX0VVGRCXNG2mloAUU6I5EMu_RITggZN5U="
        alt="image not available"
      />
    </center>
    <center>
      <p class="tu1">
        <?php
        echo "Your total amount is Rs. ".$_SESSION['total'].".<br>";
        ?>
        Thanks a bunch for placing your order with us. If you want to delete
        your order click on the button below.
        <br><br>
      </p>
      <form action="final.php" method="post" >
        <input type="submit" name="Delete" value="Delete Order">
      </form>
    </center>
  </body>
</html>
