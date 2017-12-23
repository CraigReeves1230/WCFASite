<?php

get_header('post');
?>

<?php
    while(have_posts()) { the_post();
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-heading"><?php the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <img class="img-fluid" src="<?php the_field('profile_image'); ?>" alt="">
                    <a class="button-main btn-block text-center" href="<?php echo get_post_type_archive_link('superstar');
                    ?>"><i class="fa fa-home"></i> Superstars Home</a>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 second-column">
                    <div class="row">
                        <div class="col-sm-12 superstar-stats">
                            <h3 class="superstar-stat">Height: <?php echo get_field('height'); ?></h3>
                            <h3 class="superstar-stat">Hometown: <?php the_field('hometown'); ?></h3>
                            <h3 class="superstar-stat">Signature Move: <?php the_field('signature_move'); ?></h3>
                            <h3 class="superstar-stat">Finishing Move: <?php the_field('finishing_move'); ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 social-media-links">
                            <?php display_twitter_link(); ?>
                            <?php display_facebook_link(); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Bio:</h4>
                            <p><?php the_field('bio'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $related_news = new WP_Query([
                    'post_type' => ['post', 'result', 'feature'], 'posts_per_page' => 5,
                    'meta_query' => [
                        ['key' => 'featured_superstars', 'compare' => 'LIKE', 'value' => '"' . get_the_ID() . '"']
                    ]
                ]);
            ?>
            <?php if($related_news->have_posts()) { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="post-heading">Recent News, Results and Features</h1>
                        <hr class="post-hr">
                    </div>
                </div>

                <?php while($related_news->have_posts()){ $related_news->the_post(); ?>
                    <div class="row">
                        <div class="col-sm-12 related-headline">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </div>
                    </div>
                <?php } ?>

            <?php } ?>

        <?php
        } wp_reset_postdata();
        ?>
    </div>
<?php
get_footer();
