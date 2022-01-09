<?php
    get_header();
?>
<section class="py-5 border-bottom" id="features">
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
<?php
    get_footer();
?>