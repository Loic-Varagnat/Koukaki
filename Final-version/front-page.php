<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner fade-in top-anim">
        <img class="banner__img float " src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
        <img class="banner__mobile" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/banner.png" alt="bannière">
        <video class="banner__video" width="100%" autoplay muted loop>
            <source src="<?php echo get_theme_file_uri() . '/assets/images/Studio+Koukaki-vidéo+header.mp4'; ?>" type="video/mp4">
        </video>
    </section>

    <section id="story" class="story bot-anim ">
        <h2>
            <span class="animated-title big-title">L'histoire</span>
        </h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key' => '_main_char_field',
    'orderby' => 'meta_value_num',
);
$characters_query = new WP_Query($args);

if ($characters_query->have_posts()) : ?>
    <article id="characters">
        <h3>
            <span class="animated-title">Les personnages</span>
        </h3>
        <!-- Swiper container -->
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <?php
                while ($characters_query->have_posts()) {
                    $characters_query->the_post();
                    ?>
                    <div class="swiper-slide">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                        <figcaption><?php echo get_the_title(); ?></figcaption>
                    </div>
                <?php } ?>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </article>

    <article id="place">
    <img class="big_cloud move-clouds" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/big_cloud.png" alt="">
    <img class="little_cloud move-clouds" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/little_cloud.png" alt="">    
    <div>
            <h3> 
                <span class="animated-title">Le Lieu</span>
            </h3>
            <p><?php echo get_theme_mod('place'); ?></p>
        </div>
    </article>

<?php
else :
    echo '<p>Aucun personnage trouvé.</p>';
endif;
wp_reset_postdata();
?>

    </section>

    <section class="bot-anim" id="studio">
        <h2>
            <span class="animated-delay1-title big-title">Studio</span>
            <span class="animated-delay2-title big-title">Koukaki</span>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui crée, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>
    <section class="nomination bot-anim">
        <div class="nomination-title">
            <img src="http://koukaki.local/wp-content/themes/foce-child/assets/images/orange_nomination_bg.png" alt="fond orange de titre nomination">
            <h3> <span class="animated-delay2-title">Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</span></h3>
</div>

    <img class="nomination-img" src="http://koukaki.local/wp-content/themes/foce-child/assets/images/oscars-2024.png" alt="Nomination Oscars 2024">

    </section>
</main><!-- #main -->
<?php
get_footer();
?>
