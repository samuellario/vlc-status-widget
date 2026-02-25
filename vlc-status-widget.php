<?php
/**
 * Plugin: VLC System Status Tracker Pro
 * Description: Arquitectura modular para Velmont Lario & Co.
 * Version: 2.0
 * DESCRIPCIÓN: Gestiona la detección de IP en el lado del servidor y la 
 * inyección de activos para el widget de terminal institucional.
 * © 2026 VELMONT LARIO & CO.
*/

// Solo permite que el código corra si es llamado por el propio sistema de WordPress
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Registro de activos principales utilizando ganchos de alta prioridad
 * para garantizar la disponibilidad de CSS/JS durante el ciclo de renderizado del DOM.
*/
function vlc_enqueue_assets() {
    // Busca el archivo de diseño en la carpeta css y lo carga carrgalo en la web
    wp_enqueue_style('vlc-terminal-style', plugins_url('css/style.css', __FILE__));
    // Carga en el footer (true) para optimizar el 'First Contentful Paint' (FCP).
    wp_enqueue_script('vlc-terminal-script', plugins_url('js/script.js', __FILE__), array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'vlc_enqueue_assets');

/**
 * Shortcode: [vlc_status]
 * Genera la interfaz de terminal segura con detección de dirección remota en tiempo real.
*/
function vlc_status_shortcode() {
    // La variable ipUsuario sacará la IP del usuario que visite la página web en ese momento
    $ipUsuario = $_SERVER['REMOTE_ADDR'];
    
    // Solo devuelve el HTML
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