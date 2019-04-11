<footer class="container-fluid text-center">
  <a href="#myPage"  class="scrollup">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Quatrerodes SL</a></p>		
</footer>

<script>

   $(document).ready(function(){
  
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
  
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
  
    });
</script>

</body>
</html>