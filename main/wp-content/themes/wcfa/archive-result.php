<?php

get_header('post');
?>

    <div class="container">
        <h1 class="page-heading">Results</h1>

        <?php while(have_posts()) {
            the_post(); ?>

            <div class="row news-list-item">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <img class="img-fluid news-list-caption" src="<?php echo get_main_story_image_url(); ?>">
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9 news-list-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?><span class="posted-date">Posted on <?php the_time('M. d, Y'); ?></span></p>
                        </div>
                    </div>
                    <div class="row">
                        <a class="button-main text-align-center" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            </div>

        <?php } ?>

        <div class="pagination-links">
            <?php
            echo paginate_links();
            ?>
        </div>

    </div>

<?php
get_footer();