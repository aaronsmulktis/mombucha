<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71799294-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>

				<?php if( get_header_image() != '' ) : ?>

					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->

				<?php endif; // header image was removed ?>

				<?php if( !get_header_image() ) : ?>

					<div id="logo">
						<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
					</div><!-- end of #logo -->

				<?php endif; // header image was removed (again) ?>

			</div>
				<?php dazzling_header_menu(); ?>
		</div>
	</nav><!-- .site-navigation -->
        
        <div class="top-section">
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
        </div>
        <div id="content" class="site-content container">
            
            <div class="container main-content-area"><?php
            
                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
                <div class="row <?php echo $layout_class; ?>">
                    