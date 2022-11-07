<?php
/**
 * Plugin Name: ArkosiJavascript
 * PLUGIN URI: NONE
 * Description: This plugin allows you to add javascript on the footer
 * Version: 1.0
 * Author: Arkosi
 */

add_action('wp_footer', function(){?>

    <script>
       alert('Hola');
    </script>
    <?php }  ,9999); ?>