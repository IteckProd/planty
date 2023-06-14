<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function afficher_lien_admin_menu() {
    if (is_user_logged_in()) {
        // L'utilisateur est connecté, affichez le lien vers l'admin
        ?>
        <li class="admin_button" ><a href="<?php echo admin_url(); ?>">Admin</a></li>
        <?php
    }
}
function ajouter_lien_admin_menu($items, $args) {
    ob_start();
    afficher_lien_admin_menu();
    $lien_admin_menu = ob_get_clean();

    // Remplacer le lien vers l'admin à la fin du menu par le début du menu
    $items = str_replace($lien_admin_menu, '', $items);
    $items = $lien_admin_menu . $items;
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);
// END ENQUEUE PARENT ACTION
