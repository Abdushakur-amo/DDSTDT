</div>
</div><!-- /main -->
<div class="footer"><p>URL: <a href="http://ddstdt.tj/">http://ddstdt.tj/</a> | Суроға: кӯчаи Айнӣ 31, шаҳри Душанбе,ҶТ | Администратор: <i class="icon-mail-2"></i> shakur@amo.tj</p></div>
</div><!-- wrapper -->
</div><!-- /container -->
<nav class="outer-nav right vertical">
  <a href="/index" ><i class="icon-home"></i> Саҳифаи Асосӣ</a>
  <?  
    if( $_SESSION['id'] and $_SESSION['admin'] > 0 ) {
      echo '
      <a href="/profile" ><i class="icon-user-male"></i> Утоқи шахсӣ</a>
      <a href="/donishju" ><i class="icon-user-plus"></i> Донишҷӯӣ нав</a>';
    } 
  ?>
  <a href="/info" ><i class="icon-info"></i> Инфарматсия о icon</a>
</nav>
</div><!-- /perspective -->
<script src="/assets/js/classie.min.js"></script>
<script src="/assets/js/menu.min.js"></script>
<script src="/assets/js/particales.min.js"></script>

<script>
  document.body.onload = function(){
    setTimeout(function(){
      var preloader = document.getElementById('page-loader');
      if( !preloader.classList.contains('done') ){
        preloader.classList.add('done');
      }
    }, 1000);
  }



  $(document).ready(function(){
    // Modal windows
	  $(".my_modal" ).click(function(){ 
      $('.container_show').toggleClass('container_showJS');
    });
	

});




</script>
</body>
</html>
