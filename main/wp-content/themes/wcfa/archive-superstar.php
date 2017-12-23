<?php

get_header('post');

?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-heading">Superstars</h1>
            </div>
        </div>
        <div class="row">
            <?php while(have_posts()) { the_post(); ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php the_field('profile_image'); ?>"></a>
                        <div class="card-block">
                            <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>


<?php

get_footer();

?>
