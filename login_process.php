<?php
$id = $_POST['id'];
$pw = $_POST['pw'];
session_start();
$conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
$sql = "SELECT * FROM user WHERE id = '{$id}'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    if($row['id'] == $id){
        if($row['pw'] == $pw){
             $_SESSION['id'] = $id;
             ?>
             <script>
                 alert("로그인이 되셨습니다.");
                 location.href="index.php";
             </script>
        <?php
        }else{
            ?>
            <script>
                alert("아이디 혹은 비밀번호가 맞지않습니다.");
                location.href="index.php";
            </script>
            <?php
        }
        ?>
    <?php
    }else{
        ?>
            <script>
                alert("아이디 혹은 비밀번호가 맞지않습니다.");
                location.href="index.php";
            </script>
        <?php
    }
    ?>
    <?php
}else{
    ?>    
<script>
    alert("아이디 혹은 비밀번호가 맞지않습니다.");
    location.href="index.php";
</script>  
<?php
}
?>