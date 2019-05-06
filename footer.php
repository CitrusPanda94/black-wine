<footer>
    &copy Copyright <?php echo date('Y'); ?> Black Wine. <br>
    <em>All rights reserved. Powered by WordPress.</em>
    <?php wp_nav_menu(array('theme_location' => 'footer-menu'));   ?>
</footer>
    <?php wp_footer(); ?>
    <script>
        var nav = responsiveNav(".nav-collapse");
    </script>
    </body>
</html>