<?php global $PATH_IMAGES; ?>
<div class="container-fluid footer_csanta">
   <br>
   <div class="row mt-1">
      <div class="col-sm-5 col-xs-12">
         <div class="textoFooterDireccion"> <img src="<?php echo $PATH_IMAGES?>/VectorUbicacion.png" width="15px">&nbsp;&nbsp; Américo Vespucio Norte 0601, Cruce Lo Echevers Edificio K2 </div>
         <div class="textoFooterDireccion"><img src="<?php echo $PATH_IMAGES?>/Group100.png" width="15px">&nbsp;&nbsp;(+562) 2 365 32 76 </div>
         <div class="textoFooterDireccion"><img src="<?php echo $PATH_IMAGES?>/Email_1.png" width="15px">&nbsp;&nbsp;contacto@reinventarse.cl</div>
      </div>
      <div class="col-sm-3 col-xs-12 mt-2 menuFooter">
         <?php wp_nav_menu (array('theme_location' => 'footer-menu','menu_class' => 'nav-footer'));?>
         <div><button class="btn rounded-pill btnDonar">Donar</button></div>      
      </div>
      <div class="col-sm-4 col-xs-12 text-center">
      <img src="<?php echo $PATH_IMAGES?>/facebook_1.png" width="50px"><br><br>   
      <img src="<?php echo $PATH_IMAGES?>/logo32.png" width="210px"></div>
   </div>
   <BR><BR>
</div>
<?php wp_footer();?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>