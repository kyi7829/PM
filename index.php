<?php
session_start();

function getNickname(){
   $conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
   $sql = "SELECT * FROM user WHERE id = '{$_SESSION['id']}'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_assoc($result);
   echo $row['nickname'];
}
function getfood(){
   $conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
   $sql = "SELECT * FROM foodkinds";
   $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($result)){
      echo "<div class=\"food\"><div class=\"foodImg\"><img src=\"{$row['imgurl']}\" height=\"150px\" width=\"150px\"></div>
      <div class=\"foodEX\">
         <div class=\"foodInfo\">
            <div class=\"num\" >{$row['orderNum']}</div>
            <div class=\"foodLogo\">{$row['foodBrand']}</div>
            <div class=\"foodName\"><b>{$row['foodName']}</b></div>
         </div>
         <div class=\"foodExplain\">{$row['foodExplain']}</div>
         <div class=\"tag\">{$row['foodTag']}</div>
         <div class=\"start\">☆☆☆☆☆</div>
      </div>
      <div class=\"foodPrice\">가격은 <br>{$row['foodPrice']}</div>
   </div>";
   }
}

?>
<!DOCTYPE html>
<html lang="kr">
<?php require_once 'piece/head.php' // head파일 ?>

<body>
<?php require_once 'piece/top.php' // 메뉴 정리 ?>
  <div class="article">
  <aside>ad</aside>
<?php require_once 'piece/section.php' // 가운데 메뉴 및 목록 정리 ?>
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