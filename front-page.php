<?php 
get_header();
$button1Class = 'btn-' . (get_theme_mod('water_home_action_button_1_outline','primary') != 1 ? 'outline-' : '') . get_theme_mod('water_home_action_button_1_color','primary');
$button1Text = get_theme_mod('water_home_action_button_1_uri','Get Started');
$button1URI = get_theme_mod('water_home_action_button_1_text','#');

$button2Class = 'btn-' . (get_theme_mod('water_home_action_button_2_outline','primary') != 1 ? 'outline-' : '') . get_theme_mod('water_home_action_button_2_color','primary');
$button2Text = get_theme_mod('water_home_action_button_2_text','Get Started');
$button2URI = get_theme_mod('water_home_action_button_2_uri','#');

$button3Class = 'btn-' . (get_theme_mod('water_home_action_button_3_outline','primary') != 1 ? 'outline-' : '') . get_theme_mod('water_home_action_button_3_color','primary');
$button3Text = get_theme_mod('water_home_action_button_3_text','Get Started');
$button3URI = get_theme_mod('water_home_action_button_3_uri','#');

?>

<header class="main-page-header">
    <div class="fade-layer-1"></div>
    <div class="fade-layer-2"></div>
    <div class="tint-layer"></div>
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="text-center my-5 main-page-headings">
                    <h1 class="display-5 fw-bolder text-white mb-2"><?php echo get_bloginfo('name'); //the_title()?></h1>
                    <h2 class="text-white mb-4"><?php echo get_bloginfo('description');?></h2>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn <?= $button1Class?> btn-lg px-4 me-sm-3" href="<?= $button1Text ?>"><?= $button1URI?></a>
                        <?php 
                            if($button2Text != ''){
                                echo '<a class="btn ' . $button2Class . ' btn-lg px-4 me-sm-3" href="'. $button2URI . '">' . $button2Text . '</a>';
                            }
                            if($button3Text != ''){
                                echo '<a class="btn ' . $button3Class . ' btn-lg px-4 me-sm-3" href="'. $button3URI . '">' . $button3Text . '</a>';
                            }
                        ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>

<section class="py-5 border-bottom main-page-content" id="features">
    <div class="container px-5 my-5">
        <?php 
            if( have_posts()){
                while( have_posts() ){
                    the_post();
                    the_content();
                }
            }
        ?>
    </div>
</section>

<script>
     <?php 
        $img1 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_1',''),'large');
        $img2 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_2',''),'large');
        $img3 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_3',''),'large');
        $img4 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_4',''),'large');
        $img5 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_5',''),'large');
        $img6 = wp_get_attachment_image_url(get_theme_mod('water_home_slider_image_6',''),'large');
        echo 'var slideTime = ' . get_theme_mod('water_home_slider_image_time_between','5500') . '; ';
        echo 'var fadeTime = ' . get_theme_mod('water_home_slider_image_time_fade','1000'). '; ';
     ?>
      var images = [<?php //creates a js array of all images entered in customizer. Array omits null entries so first img is always images[0]
                        echo $img1 != "" ? '\'' . $img1 . '\',' : "";  
                        echo $img2 != "" ? '\'' . $img2 . '\',' : "";  
                        echo $img3 != "" ? '\'' . $img3 . '\',' : "";  
                        echo $img4 != "" ? '\'' . $img4 . '\',' : "";  
                        echo $img5 != "" ? '\'' . $img5 . '\',' : "";  
                        echo $img6 != "" ? '\'' . $img6 . '\',' : ""; ?>]


      $('.fade-layer-1').css('background-image', 'url(' + images[0] + ')');
      
      function imageLoop(i, images) {
        setTimeout(function(){
            i == (images.length - 1) ? i = 0 : i += 1;
            $('.fade-layer-2').css('background-image', 'url(' + images[i] + ')');
            $('.fade-layer-1').fadeOut(fadeTime,imageLoopNextLayer(i, images))
        }, slideTime);
      }

      function imageLoopNextLayer(i, images) {
        setTimeout(function(){
            i == (images.length - 1) ? i = 0 : i += 1;
            $('.fade-layer-1').css('background-image', 'url(' + images[i] + ')');
            $('.fade-layer-1').fadeIn(fadeTime,imageLoop(i, images))
        }, slideTime);
      }

      imageLoop(0, images);

</script>
<?php
    get_footer(); 
?>

