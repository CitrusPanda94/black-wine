<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php do_action('add_head_attributes'); ?>>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montaga" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="logo">
        <?php the_custom_logo(); ?>
    </div>
    <nav class="nav-collapse">
        <?php wp_nav_menu(array('theme_location' => 'primary-menu')) ?>
    </nav>
   
    <?php if(is_page('contact')) : ?>
    <!-- <h1>I am a page.</h1> -->
    <?php endif; ?>

    <?php if(is_page('home')) : ?>
    <!-- <h1>I am the homepage(blog).</h1> -->
    <?php endif; ?>
</header>

