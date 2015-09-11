<?php
/**
 * Created by PhpStorm.
 * User: wissilesogoyou
 * Date: 9/11/15
 * Time: 4:12 PM
 *
 * Plugin Name: Material Design
 * Plugin URI: http://www.sogoyou.org
 * Description: Material Design
 * Author: Wissile Sogoyou
 * Author URI: http://www.sogoyou.org
 * Version: 1.0
 */

// function for wordpress script & stylesheet enqueue
function theme_enqueue_material(){

    wp_enqueue_style('materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css');

    wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' , array(), false, true);
    wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js' , array(), false, true);


}
add_action('wp_enqueue_scripts', 'theme_enqueue_material');
