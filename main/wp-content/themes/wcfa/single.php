<?php

get_header('post');

?>

<?php while(have_posts()){ ?>
    <?php the_post() ?>
    <section class="post">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="post-image">
                            <img src="<?php echo get_main_story_image_url() ?>" class="post-image">
                        </div>
                    </div>
                    <div class="row">
                        <a class="button-main btn-block text-center" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home"></i> News Home</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h1 class="post-heading"><?php the_title(); ?></h1>
                    <p class="post-content"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php } wp_reset_postdata() ?>
h

<?php get_footer(); ?>