<?php
/**
 * @package plugin_Météo
 * @version 1.0.0
 */
/*
Plugin Name: plugin Météo
Plugin URI: http://localhost/wordpress/
Description:Ceci est mon premier Plugin.
Author: Ahmed GHANEM
Version: 1.0.0
Author URI: http://http://localhost/wordpress/
*/

// In plugin main file
add_action( 'admin_menu', 'menu_items' );
/**
 * Registers our new menu item
 */
function menu_items() {
    // Create a top-level menu item.
    $hookname = add_menu_page(
        'Météo',                                   // Page title
        'Météo_plugin',                            // Menu title
        'manage_options',                          // Capabilities
        'idget_meteo',                             // Slug
        'widget_meteo_markup',                     // Display callback
        'dashicons-cloud',                         // Icon
        66                                         // Priority/position. Just after 'Plugins'
    );
}

add_action( 'admin_init', 'Meteo_setting' );
/**
 * Registers a single setting
 */
function Meteo_setting(){
    register_setting( 
        'Meteo_settings',                          // Settings group.
        'Meteo_setting',                          // Setting name
        'sanitize_field'                          // Sanitize callback.
    );
    // Register a section to house our widget meteo setting
    add_settings_section(
        'widget_meteo_section',                    // Section ID
        'Bienvenue sur votre plugin de météo.',    // Title
        'widget_meteo_section_markup',             // Callback or empty string
        'widget_meteo'                               // Page to display the section in.
    );
    // Register the first field
    add_settings_field( 
        'API_key_field',                            // Field ID
        'Entrez votre clé API',                     // Title
        'API_key_field_markup',                     // Callback to display the field
        'widget_meteo',                              // Page
        'widget_meteo_section'                     // Section
    );
    // Register the second field
    add_settings_field(
        'id_city_field',                                // Field ID
        'Entrez l\'id de la ville',                     // Title
        'id_city_field_markup',                         // Callback to display the field
        'widget_meteo',                                  // Page
        'widget_meteo_section'                         // Section
    );

    // Register the third field
    add_settings_field(
        'widget_choice_field',                          // Field ID
        'Choisissez votre widget',                      // Title
        'widget_choice_field_markup',                   // Callback to display the field
        'widget_meteo',                                  // Page
        'widget_meteo_section'                         // Section
    );
    /**
     * Displays our setting field
     * 
     * @param  array  $args  Arguments passed to corresponding add_settings_field() call
     */
    function API_key_field_markup()
    {
        $setting = get_option('Meteo_setting');
        $value   = $setting['api'] ?? '';
?>
        <input class="regular-text" type="text" name="Meteo_setting[api]" id="api" value="<?php echo esc_attr($value); ?>">
    <?php
    };

    function id_city_field_markup()
    {
        $setting = get_option('Meteo_setting');
        $value   = $setting['city'] ?? '';
        $name = $value;
    ?>
        <input class="regular-text" type="text" name="Meteo_setting[city]" value="<?php echo esc_attr($value); ?>">
    <?php
    };

    function widget_choice_field_markup()
    {
        $setting = get_option('Meteo_setting');
        $value   = $setting['widget'] ?? '';
    ?>
        <input class="regular-text" type="text" name="Meteo_setting[widget]" value="<?php echo esc_attr($value); ?>">
    <?php
    };

    function widget_meteo_section_markup()
    {
        wp_enqueue_script( 'api_script', plugin_dir_url(__FILE__).'script.js', array(), '1.0.0', true );
       $value = get_option('Meteo_setting');
       $key = $value['api'];
       wp_localize_script('api_script', 'value' ,$value );
       
    };
    add_action('admin_init','widget_meteo_section_markup');


}
// function sanitize_field($args){
//     return $args;
// }





/**
 * Markup callback for the settings page
 */
function widget_meteo_markup()
{
    ?>
    <div class="wrap">
        <!-- Affiche le titre de la page -->
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="POST">
            <?php
            settings_fields('Meteo_settings');
            do_settings_sections('widget_meteo');
            // Affiche le bouton submit
            submit_button();
            ?>
        </form>
    </div>
<?php
}
?>
