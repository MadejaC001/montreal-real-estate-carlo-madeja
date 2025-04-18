<?php
if ( !defined( 'ABSPATH' ) )
exit;
?>

<footer>

<nav>
    <?php wp_nav_menu( array(
        'theme_location' => 'footer-menu',
        'container_class' => 'footer-nav'
    ) );
    ?>
</nav>

<nav>
    <?php wp_nav_menu( array(
        'theme_location' => 'social-menu',
        'container_class' => 'footer-social'
    ) );
    ?>
</nav>

<p class = 'copyright'>&copy;
<?php echo bloginfo( 'name' ) ?>, <?php echo date( 'Y' );
?></p>

</footer>

<?php wp_footer();
?>

</body>

</html>