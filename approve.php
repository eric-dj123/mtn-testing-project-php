<?php
$conn=new mysqli("localhost","root","","mobile");
$id=$_GET['id'];
$number=1;
$sql="UPDATE `payement` SET `status`='$number' WHERE id=$id";
if ($conn->query($sql))
 {
    echo"<script>alert('Has been approved');window.location='admin.php';</script>";
}
else
{
    echo"<script>alert('samething went wrong');window.location='admin.php';</script>";
}
?>