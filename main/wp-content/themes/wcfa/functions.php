<?php

//functions
$background_color = '';

function get_main_story_image_url(){
    $image = get_field('post_image');
    $main_story_image = $image['sizes']['MainStoryImage'];
    return $main_story_image;
}

function get_main_story(){
    $main_story = new WP_Query([
        'posts_per_page' => 1
    ]);
    return $main_story;
}

function get_other_news_stories(){
    $other_stories = new WP_Query([
            'posts_per_page' => 6,
            'offset' => 1
        ]);
    return $other_stories;
}

function get_results(){
    $results = new WP_Query([
        'posts_per_page' => 4,
        'post_type' => 'result'
    ]);
    return $results;
}

function get_featured_articles(){
    $features = new WP_Query([
        'posts_per_page' => 4,
        'post_type' => 'feature'
    ]);
    return $features;
}

function get_youtube_videos(){
    $videos = new WP_Query([
            'posts_per_page' => 4,
            'post_type' => 'youtube'
        ]);
    return $videos;
}

function change_background_color($color){
    global $background_color;
    $background_color = $color;
}

function display_twitter_link() {
    if(get_field('twitter_url')){
        echo "<a class='twitter-link' href='" . get_field('twitter_url') . "'><i class='fa fa-twitter'></i></a>";
    }
}

function display_facebook_link() {
    if(get_field('facebook_url')){
        echo "<a class='facebook-link' href='" . get_field('facebook_url') . "'><i class='fa fa-facebook'></i></a>";
    }
}

// Actions
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('bootstrap-4', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Abel|Barlow+Condensed:400|Rubik|Roboto');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_stylesheet', get_theme_file_uri('/css/main.css'));
    /* wp_enqueue_script('javascript', 'http://code.jquery.com/jquery-3.2.1.min.js', false, '3.2', true);
    wp_enqueue_script('javascript', 'http://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', false, '1.4',
        true);
    wp_enqueue_script('javascript', 'http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', false,
        '1.12', true);
    wp_enqueue_script('javascript', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', false,
        '4.0', true); */

    wp_register_script( 'jQuery', 'http://code.jquery.com/jquery-3.2.1.min.js', null, null, true );
    wp_register_script( 'Tether', 'http://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', null, null,
        true );
    wp_register_script( 'Tether', 'http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', null, null,
        true );
    wp_register_script( 'Bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', null, null,
        true );
});

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('TestImage', 400, 300, true);
    add_image_size('MainStoryImage', 599, 400, true);
});

add_action('pre_get_posts', function($query){
    if(!is_admin() && is_post_type_archive('superstar') && is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
});



