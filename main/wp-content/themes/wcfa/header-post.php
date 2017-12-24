<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body style="background: #212121">

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo get_home_url() ?>"><img class="img-fluid" src="<?php echo
        get_theme_file_uri('/img/wcfalogo.png')
        ?>" alt="WCFA"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse nav-content" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('/blog') ?>">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Events/Travel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('result');
                ?>">Results</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo get_post_type_archive_link('superstar'); ?>">Roster</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shows/Pay-Per-View</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Shop WCFA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">WCFA Channel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-search"></i> Search</a>
            </li>
        </ul>
    </div>
</nav>