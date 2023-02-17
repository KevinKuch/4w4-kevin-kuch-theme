<?php 
/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>category.php</h3>
    <div>
        <img src="./medias/patternpad.png" alt="test">
    </div>
        <section class="blocFlex">
            <?php 
                if(have_posts()) : 
                    while(have_posts()) : the_post(); ?>
                    <article>
                    <h1>
                        <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                    </h1>

                    <?php // the_content() // affiche le contenu complet de l'article?>
                    <?php the_excerpt(); // affiche le résumé de l'article?> 
                    <p><?= wp_trim_words(get_the_excerpt(), 10, " &#10148") ?></p>

                    <hr>
                    </article>
            <?php    endwhile;
            endif;
        
        ?>
        </section>
</main>
<?php get_footer(); ?>
