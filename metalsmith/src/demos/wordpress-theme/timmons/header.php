<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php //if(wp_title('', false)) { echo ' :'; } ?? <?php bloginfo('name'); //Disrupts Yoast WordPress SEO. ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<script>
            // conditionizr.com
            // configure environment tests
            conditionizr.config({
                assets: '<?php echo get_template_directory_uri(); ?>',
                tests: {}
            });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper shadow shadow-inset">

			<!-- header -->
			<header class="header clear" role="banner">

                    <!-- profiles -->
                    <div id = "header-profile" class="clear">

                        <!-- logo -->
                        <div class="logo">
                            <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo( 'description', 'display' ); ?>" class="logo-img">
                                <?php //svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/timmons-logo.svg" alt="Logo">
                            </a>
                        </div>
                        <!-- /logo -->

                        <!-- social -->
                        <div id="header-social" class="clear">
                            <a href="https://github.com/davidtimmons" title="David Timmons on GitHub" target="_blank" class="github">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/github-mark.svg" alt="My GitHub">
                            </a>
                            <a href="https://www.linkedin.com/in/davidtimmons" title="David Timmons on LinkedIn" target="_blank" class="linkedin">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-mark.svg" alt="My LinkedIn">
                            </a>
                        </div>
                        <!-- /social -->

                    </div>
                    <!-- /profiles -->

                    <?php get_template_part('searchform'); ?>

					<!-- nav -->
					<nav class="nav shadow" role="navigation">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
