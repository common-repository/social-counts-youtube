<?php
    //Add Scripts
    function scs_add_scripts()
    {
        //Add Main CSS
        wp_enqueue_style('scs-main-style',plugins_url(__FILE__)."/css/style.css");
        //Add Main JS
        wp_enqueue_script('scs-main-script',plugins_url(__FILE__)."/js/main.js");
        //Add Google Script
        wp_register_script('google',"https://apis.google.com/js/platform.js");
        wp_enqueue_script('google');

    }

    add_action('wp_enqueue_scripts','scs_add_scripts');

