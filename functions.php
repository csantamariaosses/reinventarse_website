<?php

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

$PATH_IMAGES = '\\wordpress\\wp-content\\uploads\\';
$PATH_PAGES = "\\wordpress";
function myglobalvar() {
    global $PATH_IMAGES;
    global $PATH_PAGES;
    global $arrNoticias;
}
add_action('after_setup_theme','myglobalvar');


class Noticia {
    public $posttitle;
    public $src;
    public $fileName;
    public $fecha;
};


function mi_funcion() {
    global $wpdb;
    global $arrNoticias;

    $desde    = $_POST["desde"];
    $cantidad = $_POST["cantidad"];
    $aparato  = $_POST["aparato"];

    global $wpdb;
    $sql = "select ID,post_title, post_content, post_date  from wp_posts where post_status = 'publish'  and post_type = 'post' order by post_date desc  limit ".$desde. ", ". $cantidad;

    $result = $wpdb->get_results( $sql );
    $cont = -1;
    foreach ($result as $top) {
        $postid = $top->ID;
        $posttitle = $top->post_title;
        $content = $top->post_content;
        $fecha   = $top->post_date;
        $imagen_ini = strpos( $content, '<img');
        $imagen_fin = strpos( $content, '/>');

        $imagen = substr( $content, $imagen_ini, $imagen_fin - $imagen_ini );

        $arr_img = explode(" ", $imagen);
        $src = $arr_img[1];
        $arr_src  = explode('"',$src);
        $src = $arr_src[1];


            
        $cont++;
        $arrNoticias[$cont] =  new noticia();
        $arrNoticias[$cont]->title = $posttitle;
        $arrNoticias[$cont]->fecha = $fecha;
        $arrNoticias[$cont]->src = $src;  
        
    }
    $desde = $desde + 1;

    if( $aparato == 'desk' ) {
        $str  = "<div class='row divNoticias' >";
        $str .= "   <div class='col-2 tituloNoticias'><br><br><br><br>Últimas<br>noticias<br></div>";
        $str .= "   <div class='col-6'>";
        $str .= "      <img src='". $arrNoticias[0]->src ."' class='imgNoticia'>";
        $str .= "      <p class='tituloNoticia'>". $arrNoticias[0]->title."</p>";
        $str .= "   </div>";
        $str .= "   <div class='col-3'>";
        $str .= "     <div>";
        $str .= "         <img src='". $arrNoticias[1]->src ."' class='imgNoticia'>";  
        $str .= "         <p class='tituloNoticia'>". $arrNoticias[1]->title ."</p>";    
        $str .= "     </div>";
        $str .= "     <div>";
        $str .= "         <img src='". $arrNoticias[2]->src ."'  class='imgNoticia'>";  
        $str .= "         <p class='tituloNoticia'>". $arrNoticias[2]->title ."</p>";    
        $str .= "     </div>";
        $str .= "   </div>";
        if( $cont == 2 ) {
            $str .= " <div class='col-1'><br><br><br><br><br><br><br><br><br><button class='btn btn-primary' onClick='sgteDesk(".$desde.");'>></div>";
        } else {
            $desde = 0;
            $str .= " <div class='col-1'><br><br><br><br><br><br><br><br><br><button class='btn btn-primary' onClick='sgteDesk(".$desde.");'>></div>";
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
        $str .= "  <div class='col-10'>";
        $str .= "      <img src='". $arrNoticias[0]->src ."' class='imgNoticia'>";
        $str .= "      <p class='tituloNoticiaMovil'>". $arrNoticias[0]->title."</p>";
        $str .= "  </div>";
        $str .= "<div class='col-1'></div>";        
        $str .= "</div>";

        $str .= "<div class='row'>";
        $str .= "  <div class='col-1'></div>";
        $str .= "  <div class='col-5'>";
        $str .= "    <img src='". $arrNoticias[1]->src ."' class='imgNoticia'>";  
        $str .= "    <p class='tituloNoticiaMovil'>". $arrNoticias[1]->title ."</p>";    
        $str .= "  </div>";
        $str .= "  <div class='col-5'> ";
        $str .= "    <img src='". $arrNoticias[2]->src ."'  class='imgNoticia'>";  
        $str .= "    <p class='tituloNoticiaMovil'>". $arrNoticias[2]->title ."</p>";    
        $str .= "  </div>";
        $str .= "  <div class='col-1'></div>";
        $str .= "</div>";

        $str .= "<div class='row'>";
        if( $cont == 2 ) {
            $str .= " <div class='col-xs-12 text-center'><button class='btn btn-primary' onClick='sgteMovil(".$desde.");'>></div>";
        } else {
            $desde = 0;
            $str .= " <div class='col-xs-12 text-center'><button class='btn btn-primary' onClick='sgteMovil(".$desde.");'>></div>";
        }    
        $str .= "</div>"; 
        
    }

    

    echo $str;
}

// Creando las llamadas Ajax para el plugin de WordPress  
add_action( 'wp_ajax_nopriv_mi_funcion', 'mi_funcion' );  
add_action( 'wp_ajax_mi_funcion', 'mi_funcion' );  

?>
