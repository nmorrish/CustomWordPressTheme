<?php
    get_header();

    if( have_posts()){
        while( have_posts() ){
            the_post();
            //the_content();
            get_template_part('template-parts/content', 'article'); //this will look for content-article in the template-parts folder
        }
    }

    get_footer();
?>