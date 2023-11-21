<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
require '../connect.php';

$sql = "insert into message(name,phone,message)
value ('$name','$phone','$message')";
mysqli_query($connect, $sql);
echo "<script>alert('Cảm ơn bạn đã liên hệ với chúng tôi');location='../index.php'; </script>"

?>