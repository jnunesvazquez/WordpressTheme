<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Funcy</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body class="main">

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div id="cuerpo"></div>
<?php

echo "<h1 class='verde'>Hola Funcy</h1>"

?>
<div class="cuerpo">
    <div class="prueba">
        <?php

        echo "<h1 class='texto'>No pienso trabajar</h1>"

        ?>
    </div>
    <div class="prueba">
        <?php

        echo "<h1 class='texto'>Mas de lo que estoy haciendo</h1>"

        ?>
    </div>
</div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



    <div class="entry">
        <div class="image">
            <?php the_post_thumbnail([200, 200]);?>
        </div>
        <div class="content">
            <div class="title">
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="resume">
                <?php the_excerpt();?>
                <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            </div>
        </div>
    </div>
    <?php endwhile; else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php get_footer() ?>
</body>
</html>
