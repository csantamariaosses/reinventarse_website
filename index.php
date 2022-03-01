<?php get_header();?>
<?php global $PATH_PAGES;?>
<?php global $PATH_IMAGES;?>
<?php global $arrNoticias;?>
<?php //echo $PATH_PAGES;?>

<div class="container-fluid">

    <div class="row mt-4 queHacemosDesk">
        <div class="col-sm-2"></div>
            <div class="col-sm-2">
                <span class="imgQuehacemos">
                    <img src="<?php echo $PATH_IMAGES."/teamwork_1.png";?>" width="80">                   
                </span>
            </div>
            <div class="col-sm-6">
                <p><h4 class="tituloQueHacemos">Qué hacemos</h4></p>
                <span class="glosaQuehacemos">Nuestra fundación está orientada en contribuir a una sociedad más justa e inclusiva, en la que todas y todos se sientan legitimizados y con oportunidades de desarrollar sus potencialidades.</span>
            </div>            
        <div class="col-sm-2"></div>
    </div>        

    <div class="row mt-4 queHacemosMovil">
        <div class="col-xs-12">
            <p><h4 class="tituloQueHacemos">Qué hacemos</h4></p>
            <p class="glosaQuehacemosMovil">Nuestra fundación está orientada en contribuir a una sociedad más justa e inclusiva, en la que todas y todos se sientan legitimizados y con oportunidades de desarrollar sus potencialidades.</p>
        </div>            
            

        <div class="col-xs-12 text-center mt-3">
            <span class="imgQueHacemosMovil">
            <img src="<?php echo $PATH_IMAGES."/teamwork_1.png";?>" width="100px">                   
            </span>
        </div>
    </div>   



    <div class="row mt-4 casosDeExitoPpal">
        <div class="col-sm-6 flexbox divTituloCasosDeExito">
            <span class="tituloCasosDeExito">Casos de éxito</span>
        </div>
        <div class="col-sm-6 ">
            <div class="contenedorCasosExito">
                <div class="slideShowCasosExitoMovil">
                    <div class="slide slideCasoExito">
                        <div class="contenedor-laminas-casos-exito">
                            <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_01.png";?>" width="20px" class="laminaCasoDeExito">    
                        </div>
                    </div>
                    <div class="slide slideCasoExito">
                        <div class="contenedor-laminas-casos-exito">
                            <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_02.png";?>" width="210px"  class="laminaCasoDeExito">
                        </div>
                    </div>
                    <div class="slide slideCasoExito">
                        <div class="contenedor-laminas-casos-exito">
                            <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_03.png";?>" width="210px"  class="laminaCasoDeExito">
                        </div>
                    </div>
                    <div class="slide slideCasoExito">
                        <div class="contenedor-laminas-casos-exito">
                            <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_04.png";?>" width="210px"  class="laminaCasoDeExito">
                        </div>
                    </div>  
                    <div class="slide slideCasoExito">
                        <div class="contenedor-laminas-casos-exito">
                            <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_05.png";?>" width="210px"  class="laminaCasoDeExito">
                        </div>
                    </div>                                                                                     
                </div>
            </div>
        </div>
    </div>




    <div class="row mt-5 casosDeExitoTituloMovil">
        <div class="col-xs-12 text-center">
            <span class="">Casos de Exito - Movil</span>
        </div>
    </div>
    <div class="row casosDeExitoContenedorMovil">
        <div class="col-xs-12 text-center">

        <div class="slideShowCasosExitoMovil">
                <div class="slide slideCasoExitoMovil">
                    <div class="">
                        <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_01.png";?>" width="250px" class="laminaCasoDeExito">    
                    </div>
                </div>
                <div class="slide slideCasoExitoMovil">
                    <div class="">
                        <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_02.png";?>" width="250px"  class="laminaCasoDeExito">
                    </div>
                </div>
                <div class="slide slideCasoExitoMovil">
                    <div class="">
                        <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_03.png";?>" width="250px"  class="laminaCasoDeExito">
                    </div>
                </div>
                <div class="slide slideCasoExitoMovil">
                    <div class="">
                        <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_04.png";?>" width="250px"  class="laminaCasoDeExito">
                    </div>
                </div>  
                <div class="slide slideCasoExitoMovil">
                    <div class="">
                        <img src="<?php echo $PATH_IMAGES."/reinventarse_caso_exito_05.png";?>" width="250px"  class="laminaCasoDeExito">
                    </div>
                </div>                                                                                     
            </div>
        </div>
    </div>


    <div class="row text-center estadisticasDesk">
        <div class="col-sm-4">
            <p class="cifra"><span name="valor_1" id="valor_1">0</span></p>
            <p class="glosa">Jóvenes capacitados</p>
        </div>
        <div class="col-sm-4">
            <p class="cifra"><span name="valor_2" id="valor_2">0</span></p>
            <p class="glosa">Contrataciones</p>
        </div>
        <div class="col-sm-4">
            <p class="cifra"><span name="valor_3" id="valor_3">0</span></p>
            <p class="glosa">Cursos realizados</p>
        </div>
    </div>

    <div class="row text-center estadisticasMovil">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                    <p class="cifra"><span name="valorMovil_1" id="valorMovil_1">0</span></p>
                    <p class="glosa">Jóvenes capacitados</p>
                </div>
                <div class="col-4">
                    <p class="cifra"><span name="valorMovil_2" id="valorMovil_2">0</span></p>
                    <p class="glosa">Contrataciones</p>
                </div>
                <div class="col-4">
                    <p class="cifra"><span name="valorMovil_3" id="valorMovil_3">0</span></p>
                    <p class="glosa">Cursos realizados</p>
                </div>                                        
            </div>
        </div>            
    </div>     
    

    <div class="row mt-4 text-center">
        <div class="col-sm-12">
            <span class="tituloNuestrosProgramas">Nuestros programas</span>
        </div>
    </div> 

    <div class="row">
        <div class="col-sm-4 text-center lamina-programa">
            <div>                                        
                <img src="<?php echo $PATH_IMAGES."/nuestrosProgramas_01.png";?>"  height="250px" width="300px">
                <div class="centrado">Programa integral de habilitación laboral</div>
            </div>
        </div>
        <div class="col-sm-4 text-center lamina-programa">
            <div>                    
                
                <img src="<?php echo $PATH_IMAGES."/nuestrosProgramas_02.png";?>"  height="250px" width="300px">
                <div class="centrado">Programa de intermediación laboral</div>
            </div>
        </div>
        <div class="col-sm-4 text-center lamina-programa">
            <div>
                
                <img src="<?php echo $PATH_IMAGES."/nuestrosProgramas_01.png";?>"  height="250px" width="300px">
                <div class="centrado">Programa integral de habilitación laboral</div>
            </div>                    
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12 divBtnVer">
            <button class="btn rounded-pill btnVerTodosLosProgramas">Ver todos los programas</button>
        </div>
    </div>  

    <div class="row mt-4 text-center fondo-oscuro alto-100 tituloAlianzasDesk">
        <div class="col-sm-12">
            <span class="spanTituloAlianzasDesk">Nuestras alianzas Desk</span>
        </div>            
    </div> 

    <div class="row fondo-oscuro alianzasDesk">
            <div class="col-sm-12">
                <div class="contenedorAlianzasDesk">
                    <div class="slideShow">
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_01.png";?>" width="200px" class="imgAlianza">    
                            </div>
                        </div>                        
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_02.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_03.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_04.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>  
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_05.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>                      
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_06.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>                      
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_07.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>  
                        <div class="slide slide1">
                            <div class="contenedor-laminas">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_08.png";?>" width="200px" class="imgAlianza">
                            </div>
                        </div>                                
                    </div>
                </div>

            </div>
        </div>    


        <div class="row mt-5 tituloAlianzasMovil">
            <div class="col-xs-12 text-center">
                <span class="">Nuestras alianzas - Movil</span>
            </div>
        </div>

        <div class="row alianzasContenedorMovil">
            <div class="col-xs-12 text-center">
    
                <div class="slideShowCasosExitoMovil">
                        <div class="slide slideCasoExitoMovil">
                            <div class="contenedor-laminas-alianzas-movil">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_movil_1.png";?>" width="350px" class="lamina-alianzas-movil">    
                            </div>
                        </div>
                        <div class="slide slideCasoExitoMovil">
                            <div class="contenedor-laminas-alianzas-movil">
                                <img src="<?php echo $PATH_IMAGES."/alianzas_movil_2.png";?>" width="350px"  class="lamina-alianzas-movil">
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-2"></div>
            <div class="col-8 text-left">
                <span class="tituloContactaConNosotros">Contacta con nosotros</span>
            </div>
            <div class="col-2"></div>
        </div>  


        <?php echo do_shortcode ("[contact-form-7 id='34' title='Formulario de contacto 1']"); ?>


<br>

        <div id="salida">Salida</div>
        <?php

        //getLatestPosts();
       
         //echo "<br>".$arrNoticias[0]->title;
         //echo "<br>".$arrNoticias[0]->src;
         
        ?>
        <br><br>
<?php //if ( function_exists( 'wpsp_display' ) ) wpsp_display( 102 ); ?>
xxxx
<?php echo do_shortcode( '[smart_post_show id="122"]' ); ?> 
<?php if ( function_exists( 'wpsp_display' ) ) wpsp_display( 141 ); ?>
xxxx
<?php //echo do_shortcode('[shortcodeTituloNoticias]'); ?>


</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url')?>/js/slick.min.js"></script> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/scroll-utility.min.js"></script> 
<script>
  $(document).ready(function(){
      //alert("jQuery");

    
      
    $('.slideShow').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $('.slideShowCasosExito').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    
    $('.slideShowCasosExitoMovil').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    $('.slideShowAlianzas').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });

    

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true
    });

    $.ajax({
        type:"POST",
        url: "http://localhost/wordpress/wp-admin/admin-ajax.php?action=mi_funcion",
        data: {
            desde:2,
            cantidad:3
        },
        success: function( resp ) {
            $("#salida").html( resp );
        }


    });

    
  });  

  var contador_1 = 0;    
  var contador_2 = 0;    
  var contador_3 = 0;  

  function ShowContador_1(){
        if( contador_1 < 200 ) {
           let temporizador_1 = setInterval( () => {
               contador_1 +=3;
               document.querySelector('#valor_1').innerHTML = contador_1;
               document.querySelector('#valorMovil_1').innerHTML = contador_1;
               if( contador_1 > 180) {
                  clearInterval( temporizador_1 );
                  document.querySelector('#valor_1').innerHTML = "200";
                  document.querySelector('#valorMovil_1').innerHTML = "200";
                  ShowContador_2();
               }
           }, 80);
        }  else {
            clearInterval( temporizador_1 );
            contador_1 = 0;
        }  
  }


         
  function ShowContador_2(){
        if( contador_2 < 100 ) {
            let temporizador_2 = setInterval( () => {
               contador_2 +=2;
               document.querySelector('#valor_2').innerHTML = contador_2;
               document.querySelector('#valorMovil_2').innerHTML = contador_2;
               if( contador_2 > 95) {
                  clearInterval( temporizador_2 );
                  document.querySelector('#valor_2').innerHTML = "100";
                  document.querySelector('#valorMovil_2').innerHTML = "100";
                  ShowContador_3();
               }
           }, 100);
        }  else {
            clearInterval( temporizador_2 );
            contador_2 = 0;
        }  
  }

      
  function ShowContador_3(){
        if( contador_3 < 15 ) {
            let temporizador_3 = setInterval( () => {
               contador_3 +=1;
               document.querySelector('#valor_3').innerHTML = contador_3;
               document.querySelector('#valorMovil_3').innerHTML = contador_3;
               if( contador_3 > 13) {
                  clearInterval( temporizador_3 );
                  document.querySelector('#valor_3').innerHTML = "15+";
                  document.querySelector('#valorMovil_3').innerHTML = "15+";
               }
           }, 100);
            

        }  else {            
            clearInterval( temporizador_3 );
            contador_3 = 0;
        }  
  }
 


  window.onscroll = function (){
    // Obtenemos la posicion del scroll en pantall
    var scroll = document.documentElement.scrollTop || document.body.scrollTop;

    // Realizamos alguna accion cuando el scroll este entre la posicion 300 y 400
    console.log( "scroll:" + scroll );
    console.log("width:" + screen.width);
    if(scroll > 100 && scroll < 600 && screen.width > 700 ){
        if( contador_1 == 0 ) {
            ShowContador_1();
        }
    }

    if(scroll > 200 && scroll < 1000 && screen.width < 600 ){
        if( contador_1 == 0 ) {
            ShowContador_1();
        }
    }
}



var imgNotic01 = document.getElementById('imgNotic01')
var imgNotic02 = document.getElementById('imgNotic02')
var imgNotic03 = document.getElementById('imgNotic03')


</script>
<?php get_footer()?>
