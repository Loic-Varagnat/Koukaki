<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
           <div class="header-barre"> <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
            <button id="menu-toggle" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="cross"></span>
            </button>
            </div>
            <ul>
            <li>
        <img class="orchid-header rotate-flower position-header" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/orchid.png" alt="orchid violette">
        <img class="logo-header" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/logo-header.png" alt="logo du site">
    </li>

    <li>
        <img class="kawaneko-header position-header float" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/Kawaneko-header.png" alt="personnage Kawaneko">
        <a class="menu-toggle" href="#story">Histoire</a>
        <img class="sunflower-header rotate-flower position-header" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/Sunflower.png" alt="Sunflower">
    </li>

    <li>
        <a class="menu-toggle" href="#characters">Personnages</a>
        <img class="random_flower-header position-header rotate-flower" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/random_flower.png" alt="random flower">
    </li>
    
    <li>
        <img class="flower-header position-header rotate-flower" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/flower.png" alt="flower">    
        <a class="menu-toggle" href="#place">Lieu</a>
        <img class="jaakuna-header float position-header" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/Jaakuna-header.png" alt="Jaakuna">
    </li>
    <li><a class="menu-toggle" href="#studio">Studio Koukaki</a></li>
    <li>
        <img class="orenjiiro-header float position-header" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/Orenjiiro-header.png" alt="">
        <a class="menu-toggle studio-bot-header" href="#studio">STUDIO KOUKAKI</a>
        <img class="hibicus-header position-header rotate-flower" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/hibiscus_footer.png" alt="">
    </li>
            </ul>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
