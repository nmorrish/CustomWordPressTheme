<?php
    get_header();
?>

<section class="border-bottom" id="features">
    <div class="container px-5 my-5">
        <?php 
            if( have_posts()){
                while( have_posts() ){
                    the_post();
                    //the_content();
                    get_template_part('template-parts/content', 'archive');
                }
            }
        ?>
    </div>
    <?php the_posts_pagination()?>
</section>
<?php
    get_footer();
?>