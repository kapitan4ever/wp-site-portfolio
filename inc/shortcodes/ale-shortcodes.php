<?php
class AleShortcodes {

    function __construct() 
    {	
    	require_once get_template_directory() . '/inc/shortcodes/shortcodes.php';
        define('ALE_TINYMCE_URI', get_template_directory_uri() .'/inc/shortcodes/tinymce');
        define('ALE_TINYMCE_DIR',  get_template_directory() .'/inc/shortcodes/tinymce');
		
        add_action('init', array(&$this, 'init'));
        add_action('admin_init', array(&$this, 'admin_init'));
	}
	
	/**
	 * Registers TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
	function init()
	{
		if( ! is_admin() )
		{
			wp_enqueue_style( 'ale-shortcodes',  get_template_directory_uri() .'/inc/shortcodes/shortcodes.css' );
			wp_enqueue_script( 'jquery-ui-accordion' );
			wp_enqueue_script( 'jquery-ui-tabs' );
			wp_enqueue_script( 'ale-shortcodes-lib',  get_template_directory_uri() .'/inc/shortcodes/js/ale-shortcodes-lib.js', array('jquery', 'jquery-ui-accordion', 'jquery-ui-tabs') );
		}
		
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	
		if ( get_user_option('rich_editing') == 'true' )
		{
			add_filter( 'mce_external_plugins', array(&$this, 'add_rich_plugins') );
			add_filter( 'mce_buttons', array(&$this, 'register_rich_buttons') );
		}
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Defins TinyMCE rich editor js plugin
	 *
	 * @return	void
	 */
	function add_rich_plugins( $plugin_array )
	{
        if (version_compare(get_bloginfo('version'), '3.9', '>=')) {
            $plugin_array['aleShortcodes'] = get_template_directory_uri() .'/inc/shortcodes/tinymce/plugin.js';
        } else{
            $plugin_array['aleShortcodes'] = get_template_directory_uri() .'/inc/shortcodes/tinymce/plugin.old.js';
        }
        return $plugin_array;
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Adds TinyMCE rich editor buttons
	 *
	 * @return	void
	 */
    function register_rich_buttons( $buttons )
    {
        array_push( $buttons, "|", 'ale_button' );
        return $buttons;
    }
	
	/**
	 * Enqueue Scripts and Styles
	 *
	 * @return	void
	 */
	function admin_init()
	{
		// css
		wp_enqueue_style( 'ale-popup',  get_template_directory_uri() .'/inc/shortcodes/tinymce/css/popup.css', false, '1.0', 'all' );
		
		// js
		wp_enqueue_script( 'jquery-ui-sortable' );
		wp_enqueue_script( 'jquery-livequery',  get_template_directory_uri() .'/inc/shortcodes/tinymce/js/jquery.livequery.js', false, '1.1.1', false );
		wp_enqueue_script( 'jquery-appendo',  get_template_directory_uri() .'/inc/shortcodes/tinymce/js/jquery.appendo.js', false, '1.0', false );
		wp_enqueue_script( 'base64',  get_template_directory_uri() .'/inc/shortcodes/tinymce/js/base64.js', false, '1.0', false );

        if (version_compare(get_bloginfo('version'), '3.9', '>=')) {
            wp_enqueue_script( 'ale-popup',  get_template_directory_uri() .'/inc/shortcodes/tinymce/js/popup.js', false, '1.0', false );
        } else{
            wp_enqueue_script( 'ale-popup',  get_template_directory_uri() .'/inc/shortcodes/tinymce/js/popup.old.js', false, '1.0', false );
        }
		
		wp_localize_script( 'jquery', 'AleShortcodes', array('plugin_folder' =>  get_template_directory_uri() .'/inc/shortcodes') );
	}
    
}
$ale_shortcodes = new AleShortcodes();

?>