<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Funcy</title>
    <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body class="error">
<?php
/**
 * The template for displaying the 404 template in the New Funcy theme.
 *
 * @package WordPress
 * @subpackage New_Funcy
 * @since New Funcy 0.2
 */

get_header();
?>
<!-- Aqui va el 404 -->
<div>
    <h1>Mira, mi pagina esta totalmente actualizada</h1>
    <h1>Asi que deja de buscar <span class="eg">easter eggs</span> porque no vas a <a href="<?php echo get_stylesheet_directory_uri() ?>/images/middle_finger.gif">encontrar</a> nada</h1>
    <img class="gif" src="<?php echo get_stylesheet_directory_uri() ?>/images/rotate_head.gif">
    <h1>Ahora haz el favor de hacer algo productivo con tu dinero y dona algo a la comunidad de gamers de Touhou</h1>
    <img class="gif2" src="<?php echo get_stylesheet_directory_uri() ?>/images/give-me-money.gif">
    <br>
    <br>
    <form action="https://www.paypal.com/es/home" target="_blank">
        <button class="boton">Paypal</button>
        <button class="boton">MasterCard</button>
        <button class="boton">Visa</button>
    </form>


</div>

</body>
</html>