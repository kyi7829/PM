<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>편의점 마스터</title>
    <link rel="stylesheet" href="index.css" />
</head>

<body>
   <header>
      <h1 class="top1">
         편의점 마스터
      </h1>
   </header>
  <nav>
      <h2 class="top2">
        <ul>
         <li><a class="whitetext" href="#">개념글</a></li>
         <li><a class="whitetext" href="#">통합</a></li>
         <li><a href="#"><span id="cu">CU</span></a></li>
         <li><a href="#"><span id="gs">gs</span><span id="gs2">25</span></a></li>
         <li><a href="#"><span class="em">e<span id="em2">mart</span>24</span></a></li>
         <li><a href="#"><span id="mi">Mini Stop</span></a></li>
         <li><a href="#"><span id="sev">7</span><span id="sev2">-ELEVEN</span></a></li>
      </ul>
         
      </h2>
  </nav>
  <div class="article">

       <aside>ad</aside>

       <section>
          <div class="best-menu">
             
          </div>
          <div class="food">
             <div class="foodImg"><img src="img/ramen.jpg" height="150px" width="150px"></div>
             <div class="foodEX">
                <div class="foodInfo">
                   <div class="num" >1</div>
                   <div class="foodLogo">CU</div>
                   <div class="foodName"><b>튼튼정식</b></div>
                </div>
                <div class="foodExplain">맛과 가성비 , 영양까지 챙긴 식단</div>
                <div class="tag">웰빙,댕쟝꾹맛,개꿀</div>
                <div class="start">☆☆☆☆☆</div>
             </div>
             <div class="foodPrice">가격은 <br>$4.5</div>
          </div>
       </section>
    
       <aside>
          <div class="login">
             <form action="login_process" method="POST">
                <input type="text" placeholder="아이디">
                <input type="password" placeholder="비밀번호">
                <input type="submit" value="로그인">
             </form>
             <p class="join"><a href="join.php">회원가입</a></p>
             <p class="join"><a href="#">아이디 찾기</a></p>
             <p class="join"><a href="#">비밀번호 찾기</a></p>
          </div>
          ad
       </aside>
  </div>
  <footer></footer>
</body>
</html>