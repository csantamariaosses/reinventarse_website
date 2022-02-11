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
$PATH_IMAGES = '\\wordpress\\wp-content\\uploads\\2022\\01';
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
};

function getLatestPosts(){
    //echo "<br>getLatestPosts";

    
    global $wpdb;
    global $arrNoticias;

    //echo "wpdb:".$wpdb;
    $result = $wpdb->get_results("select ID,post_title, post_content  from wp_posts where post_status = 'publish'  and post_title like '%Noticia%' order by 'post_date' desc limit 3");
    $cont = -1;
    foreach ($result as $topfive) {
        $postid = $topfive->ID;
        $posttitle = $topfive->post_title;
        $content = $topfive->post_content;
        $imagen_ini = strpos( $content, '<img');
        $imagen_fin = strpos( $content, '/>');
        $imagen = substr( $content, $imagen_ini, $imagen_fin - $imagen_ini +2 );
        $arr_img = explode(" ", $imagen);
        $src = $arr_img[1];
        $arr_file = explode("/", $arr_img[1]);
        $arch = substr($arr_file[8],0, strlen( $arr_file[8]) -1);
    
        

        //echo "<br>Src:" . $src;
        //echo "<br>archivo:".$arch;
        


        
        $cont++;
        $arrNoticias[$cont] =  new Noticia();
        $arrNoticias[$cont]->title = $posttitle;
        $arrNoticias[$cont]->src = $src;
        
    }

    echo "   <div class='row'>";
    echo "      <div class='col-2 tituloUltimasNoticiaDesk'>";
    echo "             <div>Ultimas <br>Noticias</div>";
    echo "      </div>";
    echo "      <div class='col-6'>";
    echo "          <img ".$arrNoticias[0]->src." width='400'>";
    echo "          <div><span style='color:red;'>".$arrNoticias[0]->title."</span></div>";
    echo "      </div><br>";
    echo "      <div class='col-3'>";
    echo "          <div class='row'>";
    echo "               <div class='col-12'>";
    echo "                   <img ".$arrNoticias[1]->src." width='200' >";
    echo "               </div>";
    echo "               <div class='col-12'>";
    echo "                   <img ".$arrNoticias[2]->src." width='200' style='margin-top:20px'>";
    echo "               </div>";    
    echo "          </div>";
    echo "      </div>";
    echo "      <div class='col-1 flechaSgteUltimasNoticias'>";
    echo "             <div><a href='#'>></a></div>";
    echo "      </div>";
    echo "   </div>";
    echo "<br>";

    

    
    /*
    echo "   <div class='row'><br>";
    echo "      <div class='col-2 tituloUltimasNoticiaDesk'>";
    echo "             <div>Ultimas <br>Noticias</div>";
    echo "      </div>";
    echo "      <div class='col-6'><br>";
    echo "          <img ".$arrNoticias[1]->src." width='400'>";
    echo "      </div><br>";
    echo "      <div class='col-3'><br>";
    echo "          <div class='row'>";
    echo "               <div class='col-12'>";
    echo "                   <img ".$arrNoticias[2]->src." width='200' >";
    echo "               </div>";
    echo "               <div class='col-12'>";
    echo "                   <img ".$arrNoticias[3]->src." width='200' style='margin-top:20px'>";
    echo "               </div>";    
    echo "          </div>";
    echo "      </div>";
    echo "      <div class='col-1 flechaSgteUltimasNoticias'>";
    echo "             <div>></div>";
    echo "      </div>";
    echo "   </div>";
    echo "<br>";
*/
    

} 


function sgteNoticia() {
    alert("SgteNoticia");
}
?>