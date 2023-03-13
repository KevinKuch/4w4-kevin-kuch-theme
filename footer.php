<footer class="site__footer">
    <section><?php the_custom_logo(); ?></section>
    <section>
    <h1>Liens</h1>
    <?php wp_nav_menu(array(
            "menu" => "footer",
            "container" => "nav"
            )) ?>
    </section>
    <section><h1>© Automne Hiver 2023 Kevin Kuch</h1></section>
    <section class="medias-sociaux">
        <h1>Médias sociaux</h1>
        <ul class="lien-sociaux">
            <li><a href="#" target="_blank"><img src="https://s2.svgbox.net/social.svg?ic=facebook" alt="facebook" width="25" height="25"></a></li>
            <li><a href="#" target="_blank"><img src="https://s2.svgbox.net/social.svg?ic=instagram" alt="instagram" width="25" height="25"></a></li>
            <li><a href="#" target="_blank"><img src="https://s2.svgbox.net/social.svg?ic=twitter" alt="twitter" width="25" height="25"></a></li>
            <li><a href="#" target="_blank"><img src="https://s2.svgbox.net/social.svg?ic=tiktok" alt="tiktok" width="25" height="25"></a></li>
        </ul>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>