<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
   <header>
      <h1 class="join_top1">
         편의점 마스터
      </h1>
   </header>
  
  <div class="article">

       <aside></aside>

       <section class="section">
       <h4 id="kbjb">기본 정보 입력</h4>
        <div class="section_1">
       <form action="join_process.php" method="POST">
        <p>아이디 입력 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="ID" name="id"></p>
        <br>
        <p>비밀번호 입력 &nbsp;&nbsp;&nbsp;<input type="password" placeholder="PW" name="pw"></p>
        <br>
        <p>닉네임 입력 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Nickname" name="nickname"> 
        <input type="submit" value="중복체크"><input type="checkbox" style="width:16px; height:16px;" > </p>
        <br>
        <p><input type="radio" name="sex" vlaue="man">남자<input type="radio" name="sex" value="woman">여자</p>
        <br><br>
        <p style="text-align:center;"><input type="submit" value="회원가입"> <input type="submit" value="이전"></p>
 
        </form>
         </div>
       </section>
    
       <aside>
         
          
       </aside>
  </div>
  <footer></footer>
        
     
</body>
</html>