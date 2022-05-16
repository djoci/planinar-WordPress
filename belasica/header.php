<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Planinarenje">
    <meta name="keywords" content="WordPress tema">
    <meta name="author" content="Zorica Mitrovic">
    <link rel="shortcut icon" href="wp-content/themes/belasica/theme-template/img/mountain-logo.png">

    <?php
	wp_head();
	?>

</head>

<body>
    <header>

    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="logo">

<a class="navbar-brand" href="https://planinar.rs/">
    <?php
if(function_exists('the_custom_logo')) {
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id);
}
?>
    <img src="<?php echo $logo[0] ?>" alt="Logo">
</a>
<a class="navbar-brand" href="https://planinar.rs/">
        <?php echo get_bloginfo('name'); ?>
    </a>
</div>

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
     
    </div>
</nav>
    </header>
    
        