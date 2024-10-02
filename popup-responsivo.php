<?php
/*
Plugin Name: Popup Alegre
Description: Muestra un pop-up en el ángulo inferior izquierdo de la pantalla en la versión de escritorio.
Version: 1.0
Author: A. Cambronero Blogpocket.com
*/

function popup_responsivo_enqueue_scripts() {
    if ( ! wp_is_mobile() ) {
        // Encolar el CSS del plugin
        wp_enqueue_style( 'popup-responsivo-style', plugin_dir_url( __FILE__ ) . 'css/popup-responsivo.css' );
        // Encolar el JavaScript del plugin
        wp_enqueue_script( 'popup-responsivo-script', plugin_dir_url( __FILE__ ) . 'js/popup-responsivo.js', array('jquery'), null, true );
        // Encolar el CSS del editor de bloques para estilos coherentes
        wp_enqueue_style( 'wp-block-library' );
    }
}
add_action( 'wp_enqueue_scripts', 'popup_responsivo_enqueue_scripts' );

function popup_responsivo_mostrar_popup() {
    if ( ! wp_is_mobile() ) {
       if ( current_user_can( 'read' ) ) {    
           // ID de la página que contiene el contenido del pop-up
           $pagina_id = absint( 123 ); // Asegura que el ID sea un entero positivo
           $contenido_post = get_post( $pagina_id );
           if ( $contenido_post ) {
              $contenido = apply_filters( 'the_content', $contenido_post->post_content );
              echo '<div id="popup-responsivo">';
              echo '<button id="cerrar-popup">&times;</button>';
              echo wp_kses_post( $contenido );
              echo '</div>';
           }    
        }
    }
}

add_action( 'wp_footer', 'popup_responsivo_mostrar_popup' );
