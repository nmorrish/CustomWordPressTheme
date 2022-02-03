<?php 
get_header();
?>

<header class="main-page-header">
    <div class="fade-layer"></div>
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="text-center my-5 main-page-headings">
                    <h1 class="display-5 fw-bolder text-white mb-2"><?php echo get_bloginfo('name'); //the_title()?></h1>
                    <h2 class="text-white mb-4"><?php echo get_bloginfo('description');?></h2>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
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
     ?>
      var images = [<?php //creates a js array of all images entered in customizer. Array omits null entries so first img is always images[0]
                        echo $img1 != "" ? '\'' . $img1 . '\',' : "";  
                        echo $img2 != "" ? '\'' . $img2 . '\',' : "";  
                        echo $img3 != "" ? '\'' . $img3 . '\',' : "";  
                        echo $img4 != "" ? '\'' . $img4 . '\',' : "";  
                        echo $img5 != "" ? '\'' . $img5 . '\',' : "";  
                        echo $img6 != "" ? '\'' . $img6 . '\',' : ""; ?>]

     //var i = 0;

      $('.main-page-header').css('background-image', 'url(' + images[0] + ')');

      function imageLoop(i) {
        setTimeout(function(){
          i == (images.length - 1) ? i = 0 : i += 1;
          $('.main-page-header').css('background-image', 'url(' + images[i] + ')');
          imageLoop(i)
        },4000);
      }

      imageLoop(0);

</script>
<?php
    get_footer(); 
?>

