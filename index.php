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
      echo $row['orderNum'];
   }
}

?>
<!DOCTYPE html>
<html lang="kr">
<?php require_once 'piece/head.php' // head파일 ?>

<body>
<?php require_once 'piece/top.php' // 메뉴 정리 ?>
  <div class="article">
  <aside class="L-aside">
   
      <div class="L-aside1">
      
      </div>

       <div class="L-aside2">
      ad
      </div>
  </aside>
<?php require_once 'piece/section.php' // 가운데 메뉴 및 목록 정리 ?>
       <aside class="R-aside">
         <div class="R-aside1">
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
          <div class="R-aside2">
          ad
          </div>
       </aside>
  </div>
  <footer>
      <p> 
      <a class="ablack" href="#" >BI-COMPANY</a>   &nbsp;&nbsp;|&nbsp;&nbsp;   
      <a class="ablack" href="#" >개발자</a>  &nbsp;&nbsp;|&nbsp;&nbsp;  
      <a class="ablack" href="#" >제휴안내</a>  &nbsp;&nbsp;|&nbsp;&nbsp;  
      <a class="ablack" href="#" >광고안내</a>  &nbsp;&nbsp;|&nbsp;&nbsp;  
      <a class="ablack" href="#" >사이트정책</a>
      </p>
       Copyright ㉾ 2020 - 2020 PRM.All rights reserved
  </footer>
</body>
</html>