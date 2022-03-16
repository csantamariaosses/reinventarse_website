<?php

/**
 * encolar estilos y script
 * 
 */

function testmegamenu_enqueue_style() {
    wp_enqueue_style( 'my-theme', get_stylesheet_directory_uri().'/style.css', 
    '', 
    '1.0', 
    true);
}
 
function testmegamenu_enqueue_script() {
    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri().'/script.js', 
    '', 
    '1.0', 
    true );
}
 
add_action( 'wp_enqueue_scripts', 'testmegamenu_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'testmegamenu_enqueue_script' );




/**
 * Variable globales
 */
global $PATH_IMAGES;
global $PATH_PAGES;
global $arrNoticias;
global $desde;

$desde = 0;

$PATH_IMAGES = "\\wp-content\\uploads\\";
$PATH_PAGES = "\\wordpress";
function myglobalvar() {
    global $PATH_IMAGES;
    global $PATH_PAGES;
    global $arrNoticias;
}
add_action('after_setup_theme','myglobalvar');


/* Manejo de noticias con ajax*/
class Noticia {
    public $posttitle;
    public $src;
    public $fileName;
    public $fecha;
};


function mi_funcion() {
    global $wpdb;
    global $arrNoticias;

    $pagina  = $_POST["pagina"];
    $cantidad = $_POST["cantidad"];
    $aparato = $_POST["aparato"];

    

    $args = array(
        "posts_per_page" => $cantidad, 
        "paged"          => $pagina,
        "orderby"        => "post_date"
    );


    $posts_array = get_posts($args);
    $cont = -1;
    foreach($posts_array as $post)
    {
      $title = $post->post_title;
      $content = $post->post_content; 
      $imagen_ini = strpos( $content, '<img');
      $imagen_fin = strpos( $content, '/>');

      $imagen = substr( $content, $imagen_ini, $imagen_fin - $imagen_ini );

      $arr_img = explode(" ", $imagen);
      $src = $arr_img[1];
      $arr_src  = explode('"',$src);
      $src = $arr_src[1];
      $src_arr = explode("/",$src);
      $arch = $src_arr[  count($src_arr ) - 1 ]; 

      /* Parrafo */
      $parrafo_ini = strpos( $content, '<p>');
      $parrafo_fin = strpos( $content, '</p>');
      $parrafo     = substr( $content, $parrafo_ini, $parrafo_fin - $parrafo_ini );

      $fecha = $post->post_date;

      $cont++;
      $arrNoticias[$cont]           =  new noticia();
      $arrNoticias[$cont]->title    = $title;
      $arrNoticias[$cont]->fecha    = $fecha;
      $arrNoticias[$cont]->fileName = $src; 
    } 

   
    $pagina = $pagina + 1;

    if( $aparato == 'desk' ) {
        $str  = "<div class='row divNoticias' >";
        $str .= "   <div class='col-2 tituloNoticias'><br><br><br><br>Últimas<br>noticias<br></div>";
        $str .= "   <div class='col-6'>";
        $str .= "      <div>";
        $str .= "      <img src='".$arrNoticias[0]->fileName ."' class='imgNoticia'>";
        $str .= "      <p class='tituloNoticia'>". $arrNoticias[0]->title."</p>";
        $str .= "      </div>";
        //$str .= "      <div class='tituloNoticia'>".$arrNoticias[0]->title."</div>";
        $str .= "   </div>";
        $str .= "   <div class='col-3'>";
        $str .= "     <div>";
        $str .= "         <img src='". $arrNoticias[1]->fileName ."' class='imgNoticia'>";  
        $str .= "         <p class='tituloNoticia'>". $arrNoticias[1]->title ."</p>";    
        $str .= "     </div>";
        $str .= "     <div>";
        $str .= "         <img src='". $arrNoticias[2]->fileName ."'  class='imgNoticia'>";  
        $str .= "         <p class='tituloNoticia'>". $arrNoticias[2]->title ."</p>";    
        $str .= "     </div>";
        $str .= "   </div>";
        if( $cont == 2 ) {
            $str .= " <div class='col-1'><br><br><br><br><br><br><br><br><br><button class='btn btn-primary' onClick='sgteDesk(".$pagina.");'>></div>";
        } else {
            $pagina = 1;
            $str .= " <div class='col-1'><br><br><br><br><br><br><br><br><br><button class='btn btn-primary' onClick='sgteDesk(".$pagina.");'>></div>";
        }    
        $str .= "</div>";


    }



    if( $aparato == 'movil' ) {
        $str  = "<div class='row fondoNegro' >";
        $str .= "<hr>";
        $str .= "</div>";

        $str .= "<div class='row mt-4' >";
        $str .= " <div class='col-xs-12 tituloUltimasNoticiasMovil'>Últimas noticias</div>";
        $str .= "</div>";

        $str .= "<div class='row' >";
        $str .= "<div class='col-1'></div>";
        $str .= "  <div class='col-10 text-center laminaNoticia'>";
        $str .= "      <div>";
        $str .= "      <img src='". $arrNoticias[0]->fileName ."' class='imgNoticia'>";
        //$str .= "      <p class='tituloNoticiaMovil'>". $arrNoticias[0]->title."</p>";
        $str .= "      <div>".$arrNoticias[0]->title."</div>";
        $str .= "      </div>";
        $str .= "  </div>";
        $str .= "<div class='col-1'></div>";        
        $str .= "</div>";

        $str .= "<div class='row'>";
        $str .= "  <div class='col-1'></div>";
        $str .= "  <div class='col-5'>";
        $str .= "    <img src='". $arrNoticias[1]->fileName ."' class='imgNoticia'>";  
        $str .= "    <p class='tituloNoticiaMovil'>". $arrNoticias[1]->title ."</p>";    
        $str .= "  </div>";
        $str .= "  <div class='col-5'> ";
        $str .= "    <img src='". $arrNoticias[2]->fileName ."'  class='imgNoticia'>";  
        $str .= "    <p class='tituloNoticiaMovil'>". $arrNoticias[2]->title ."</p>";    
        $str .= "  </div>";
        $str .= "  <div class='col-1'></div>";
        $str .= "</div>";

        $str .= "<div class='row'>";
        if( $cont == 2 ) {
            $str .= " <div class='col-xs-12 text-center'><button class='btn btn-primary' onClick='sgteMovil(".$pagina.");'>></div>";
        } else {
            $pagina = 1;
            $str .= " <div class='col-xs-12 text-center'><button class='btn btn-primary' onClick='sgteMovil(".$pagina.");'>></div>";
        }    
        $str .= "</div>"; 
        
    }    
    echo $str;
}

// Creando las llamadas Ajax para el plugin de WordPress  
add_action( 'wp_ajax_nopriv_mi_funcion', 'mi_funcion' );  
add_action( 'wp_ajax_mi_funcion', 'mi_funcion' );  

?>
