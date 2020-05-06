<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
$nickname = $_POST['nickname'];
$sex = $_POST['sex'];
var_dump($id);

$conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
$sql = "INSERT INTO user (id,pw,nickname,sex) VALUES ('{$id}','{$pw}','{$nickname}','{$sex}')";
$result = mysqli_query($conn,$sql);
?>
<script>
    location.href="index.php";
</script>