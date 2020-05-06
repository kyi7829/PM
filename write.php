<?php
session_start();

function getNickname(){
   $conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
   $sql = "SELECT * FROM user WHERE id = '{$_SESSION['id']}'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   echo $row['nickname'];
}

?>
<!DOCTYPE html>
<html lang="kr">
<?php require_once 'piece/head.php' // head파일 ?>

<body>
<?php require_once 'piece/top.php' // 메뉴 정리 ?>
  <div class="article">
  <aside>ad</aside>
        <section>
            <input type="text">
            
        </section>
       <aside>
       <?php if(!isset($_SESSION['id'])): ?>
         <form action="login_process.php" method="POST">
            <input type="text" placeholder="아이디" name="id">
            <input type="password" placeholder="비밀번호" name="pw">
            <input type="submit" value="로그인">
         </form>
         <p class="join"><a href="join.php">회원가입</a></p>
         <p class="join"><a href="#">아이디 찾기</a></p>
         <p class="join"><a href="#">비밀번호 찾기</a></p>
      </div>  
       <?php else: ?>
         <p>welcome <?= getNickname() ?> </p>
         <p><a href="logout.php">로그아웃</a></p>
       <?php endif ?>
          ad
       </aside>
  </div>
  <footer></footer>
</body>
</html>