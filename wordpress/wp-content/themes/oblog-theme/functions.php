
<?php
if (!function_exists('oblog_scripts')) :
    function oblog_scripts()
    {
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#wp_enqueue_style
        // J'ajoute à WordPress mes fichiers de css
        
        wp_enqueue_style( 'bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );
        wp_enqueue_style( 'style', get_theme_file_uri('assets/css/style.css'), [], '1.0.0');
        wp_enqueue_script( 'bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js' );
        // wp_enqueue_style( 'reset', get_theme_file_uri('assets/css/reset.css'), [], '4.0.0');
    }
    
endif;
add_action('wp_enqueue_scripts', 'oblog_scripts');
// https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#fonctionnalit%C3%A9s-de-th%C3%A8me
// Je vérifie si la fonction n'existe pas déjà
// peut sembler superflux mais indispensable en cas de child-thème ;)
if (!function_exists('oblog_setup')) :
    // Je déclare ma fonction.
    // la bonne pratique consiste à préfixer
    // les noms de nos fonction par le nom du thème
    function oblog_setup() 
    {
        // https://github.com/O-clock-Alumni/fiches-recap/blob/master/wordpress/themes/setup-theme.md#title-tag
        // Je demande à WordPress de gérer tout seul les titres de mes pages
        add_theme_support( 'title-tag' );
        // Supprime WP EMOJI
        remove_action( 'wp_head', 'print_emoji_detection_script', 7);
        remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
        remove_action( 'admin_print_styles', 'print_emoji_styles' );
        remove_action( 'wp_print_styles', 'print_emoji_styles');
        
        // Supprime le lien vers Windows Live Editor Manifest
        remove_action( 'wp_head', 'wlwmanifest_link' );
        
        // Supprime le lien RSD + XML
        remove_action( 'wp_head', 'rsd_link' ); 
        
        // Supprime la meta generator
        remove_action( 'wp_head', 'wp_generator' ); 
        
        // Supprime les extra feed rss
        remove_action( 'wp_head', 'feed_links_extra', 3 ); 
        
        // Supprime les feeds des Posts et des Commentaires
        remove_action( 'wp_head', 'feed_links', 2 ); 
    }
endif;

// Ajout d'une action au Hook 'after_setup_theme'
add_action( 'after_setup_theme', 'oblog_setup' );


