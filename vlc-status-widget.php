<?php
/**
 * Plugin Name: VLC System Status Tracker Pro
 * Description: Modular architecture for Velmont Lario & Co.
 * Version: 2.0
 * Author: Velmont Lario & Co.
 */

// Solo permite que el código corra si es llamado por el propio sistema de WordPress
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Registro de activos principales
*/
function vlc_enqueue_assets() {
    wp_enqueue_style('vlc-terminal-style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('vlc-terminal-script', plugins_url('js/script.js', __FILE__), array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'vlc_enqueue_assets');

/**
 * Shortcode: [vlc_status]
*/
function vlc_status_shortcode() {
    $ipUsuario = $_SERVER['REMOTE_ADDR'];
    
    return '
    <div id="vlc-terminal">
        <div class="vlc-header">
            <span class="vlc-dot"></span>
            <span class="vlc-title">NETWORK_ENCRYPTION_STATUS</span>
        </div>
        <div class="vlc-body">
            <span class="vlc-prompt">></span>
            <span id="vlc-status-text">INITIALIZING...</span>
            <span class="vlc-cursor"></span>
        </div>
        <div class="vlc-footer">
            CONNECTED_FROM: <span class="vlc-ip">' . $ipUsuario . '</span>
        </div>
    </div>';
}
add_shortcode('vlc_status', 'vlc_status_shortcode');