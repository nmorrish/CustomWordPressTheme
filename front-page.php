<?php 
get_header();
?>
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2"><?php echo get_bloginfo('name'); //the_title()?></h1>
                    <p class="lead text-white-50 mb-4"><?php echo get_bloginfo('description');?></p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

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

