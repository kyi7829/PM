      <section>
          <div class="best-menu">
             
          </div>
          <div class="menu-select">
          <button>단품</button><button>조합</button>
          </div>
          <div class="menu-search">
          <input type="radio">FreshFood <input type="radio">Juice/Cofee <input type="radio">Dessert/Icecream 
          가격대<input type="text"> ~ <input type="text"> <button>검색</button>
          </div>
          <?= getfood() ?>
          <div class="menu-footer">
             <div>
             <p>
             <input class="writing" type="button" value="글쓰기" onclick="location.href='write.php'">
             </p>
             </div>
          </div>
       </section>