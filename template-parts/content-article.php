<section class="py-5 border-bottom">
    <div class="container px-5 my-5">

    <header class="content-header">
        <div class="meta mb-3 text-muted">
            <span class="date"><?php the_date();?></span>
            <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>&nbsp;', '</span><span class="tag"><i class="fa fa-tag"></i>&nbsp;', '</span>');?></span>
            <span class="comment"><a href="#comments"><?php comments_number();?></a></span>
        </div>
    </header>

<?php
    the_content();

    comments_template();
?>

</div>
</section>