<?php change_background_color(''); ?>
<?php get_header(); ?>

<section id="main-banner">
    <a href="#"><img src="<?php echo get_theme_file_uri('/img/pgbanner.png') ?>" alt="Planet Gold"></a>
</section>

<!-- news section -->
<section id="news">
    <div class="container-fluid">
        <div class="row no-gutters">

            <!-- main story -->
            <?php $main_story = get_main_story() ?>
            <?php while($main_story->have_posts()){ ?>
                <?php $main_story->the_post() ?>
                <div id="main-story" class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card my-0" style="border-style: none;">
                        <a href="<?php the_permalink() ?>"><img class="card-img-top main-story-img" src="<?php echo
                            get_main_story_image_url()
                            ?>" alt="Card image cap"></a>
                        <div class="card-block">
                            <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                            <p class="card-text"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

            <!-- other stories -->
            <div id="other-stories" class="col-sm-12 col-md-12 col-lg-6">
                <h1>MORE HEADLINES</h1>
                <div class="row no-gutters">
                    <ul>
                        <?php $other_news = get_other_news_stories(); ?>
                        <?php while($other_news->have_posts()) { ?>
                            <?php $other_news->the_post() ?>
                            <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                        <?php } wp_reset_postdata(); ?>
                    </ul>
                </div>
                <div class="row no-gutters justify-content-center more-button">
                    <button type="submit" class="button-main">MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- results -->
<section id="results" class="feature-set">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 col-lg-3 col-sm-12 feature-set-heading">
                <h1>Results</h1>
            </div>
        </div>
        <div class="row justify-content-center cards">
            <?php $results = get_results(); ?>
            <?php while($results->have_posts()) { ?>
                <?php $results->the_post(); ?>
                <div class="col-md-6 col-sm-12">
                    <div class="card">
                        <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo
                            get_main_story_image_url() ?>" alt="Card image cap"></a>
                        <div class="card-block">
                            <a href="<?php the_permalink() ?>"><h4 class="card-title"><?php the_title() ?></h4></a>
                            <p class="card-text"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

        </div>
        <button class="button-main">MORE</button>
    </div>
</section>

<!-- wcfa on youtube -->
<section id="youtube">
    <div class="container-fluid">
        <a href="#"><h1>WCFA on Youtube</h1></a>
        <div class="row">
            <?php
                $videos = get_youtube_videos();
                while($videos->have_posts()) {
                    $videos->the_post();
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3 video">
                <?php
                    $title = get_field('url');
                    $link = str_replace('https://www.youtube.com/watch?v=', 'http://www.youtube.com/embed/', $title);
                ?>
                <iframe src="<?php echo $link ?>" frameborder="1" allowfullscreen></iframe>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<!-- features -->
<section id="features" class="feature-set">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-3 col-lg-3 col-sm-12 feature-set-heading">
                <h1>Features</h1>
            </div>
        </div>
        <div class="row justify-content-center cards">
            <?php $features = get_featured_articles() ?>
            <?php while($features->have_posts()) {
                $features->the_post();
                ?>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="<?php echo
                        get_main_story_image_url(); ?>" alt="Los Angeles"></a>
                    <div class="card-block">
                        <a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(); ?>
        </div>
        <button class="button-main">MORE</button>
    </div>
</section>

<?php get_footer(); ?>

