<?php get_header();?>
<?php global $PATH_PAGES;?>
<?php global $PATH_IMAGES;?>
<?php global $arrNoticias;?>
<?php //echo $PATH_PAGES;?>

<div class="container-fluid">
<div class="row mt-4">
  <div class="col-sm-12">
      <h3>Conócenos ****</h3>
      
      <?php echo do_shortcode ("[timeline-history]");?>
<hr>
      <?php echo do_shortcode ("[cool-timeline layout='default' skin='default' date-format='F j' icons='YES' show-posts='20' order='DESC' story-content='full']");?>
 </div>            
</div>
<?php get_footer()?>