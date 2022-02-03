<?php
    get_header();
?>

<section class="border-bottom" id="features">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder"><?php the_title()?></h1>
        </div>
        <?php 
            if( have_posts()){
                while( have_posts() ){
                    the_post();
                    //the_content();
                    get_template_part('template-parts/content', 'page'); //this will look for content-article in the template-parts folder
                }
            }
        ?>
    </div>
</section>
<?php
    get_footer();
?>