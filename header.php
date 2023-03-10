<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<?php 
$nouvelle_classe = "";
if(is_front_page()){
    $nouvelle_classe = "no-aside";
}
?>

<body class="site <?= $nouvelle_classe ?>">
   <header class="site__header">
    <section class="site__header__logo">
        <?php the_custom_logo(); ?>
        <div class="logomenu">
            <input type="checkbox" id="chkMenu">
            <?php wp_nav_menu(array(
            "menu" => "entete",
            "container" => "nav"
            )) ?>
        </div>
        <?php  get_search_form(); ?>
        <button class="burger" for="chkMenu"><img src="https://s2.svgbox.net/hero-solid.svg?ic=menu" alt="menu" width="32" height="32"></button>
    </section>
    <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
    <h1 class="titre-web">Création d'interface et Développement Web</h1>
   </header>
  
   <?php 
    if ( ! is_front_page()){
    get_template_part("template-parts/aside"); 
    }
    ?>
</aside>