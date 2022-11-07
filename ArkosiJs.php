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
       alert('Hello, Please add some Js code on the script tag, use your editor of preference :)');
    </script>
    <?php }  ,9999); ?>
