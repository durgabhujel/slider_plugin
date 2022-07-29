<?php
/**
 * Plugin Name: Banner Slider
 */

if(!class_exists('WPS_Class')){


    class WPS_Class {
       var $bs_setting;


        function __construct(){
            $this -> define_constants();
           add_action( 'init', array( $this, 'wpbs_register_post_type' ) );
           add_action( 'add_meta_boxes', array( $this, 'wpbs_add_slides_metabox' ) ); //this for add meta boxes
           add_action( 'admin_enqueue_scripts', array($this, 'wpbs_register_admin_assets') );     //register admin css and js
           register_activation_hook(__FILE__, array($this, 'load_default_setting') );
           register_deactivation_hook(__FILE__, array($this, 'delete_default_setting') );
           add_action('admin_post_settings_actions',array($this, 'bs_setting_handler') );
           add_action('admin_footer', array($this, 'wpbs_admin_footer_function') );
        //    add_action('add_meta_boxes', array($this, 'wpbs_setting_metabox') ); //for general setting
           add_shortcode ('wpbs', array($this, 'banner_slider_shortcode_genarater') );
           add_action( 'admin_head-post-new.php', array( $this, 'wpbs_posttype_admin_css' ) );
           add_action( 'admin_head-post.php', array( $this, 'wpbs_posttype_admin_css' ) );
        }
        function wpbs_register_post_type(){
            include('inc/wpbs-register-post.php');
            register_post_type( 'banner_slider', $args );
        }
        function define_constants(){
            defined( 'WPBS_JS_DIR' ) or define( 'WPBS_JS_DIR', plugin_dir_url( __FILE__ ) . 'js' );
            defined( 'WPBS_CSS_DIR' ) or define( 'WPBS_CSS_DIR', plugin_dir_url( __FILE__ ) . 'css' );
            defined( 'WPBS_PATH') or define('WPBS_PATH', plugin_dir_path(__FILE__)); 
        }
        function wpbs_register_admin_assets( $hook ){

            global $post;
            wp_enqueue_media();
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_script( 'wp-color-picker');
            wp_enqueue_script( 'wp-color-picker-alpha', WPBS_JS_DIR. '/wp-color-picker-alpha.min.js', array( 'jquery', 'wp-color-picker' ), true);
            wp_enqueue_script( 'wpbs_admin_script' , WPBS_JS_DIR . 'wpbs_admin_script.js' , array('jquery') );
            wp_enqueue_style( 'wpbs-admin-style', WPBS_CSS_DIR . '/wpbs-admin-style.css', false);
        }
        function wpbs_add_slides_metabox( ){
            add_meta_box( 'wpbs-add-slides', __( 'Slides', 'banner-slider' ), array( $this, 'wpbs_add_slides_callback' ), 'banner_slider', 'normal', 'high' );
        }
       

        function wpbs_add_slides_callback($post){
            wp_nonce_field( basename(__FILE__), 'wpbs_slider_image_nonce' );
            $wbps_store_meta = get_post_meta($post->ID );
            include('inc/wpbs-slide-meta.php');

        }
        function wpbs_admin_footer_function(){
            global  $post;

            if ($post && $post -> post_type == 'banner_slider'){
              include_once(WPBS_PATH . 'inc/wpbs-form-footer.php');
            }
        }

       

        // function wpbs_setting_metabox(){
        //     add_meta_box( 'wpbs_setting_option', __('General Setting', 'wpbs-slder'), array($this, 'wpbs_setting_callback'), 'wpbsslider', 'side', 'default');
        // }

        // function wpbs_setting_callback(){
        //     wp_nonce_field( basename(__FILE__),'wpbs_setting_nonce');
        //     $wpbs_stored_meta_usage = get_post_meta($post -> ID);
        //     include('inc/wpbs-slide-general-setting.php');
        // }


        function banner_slider_shortcode_genarater($atts, $content = "null" ){
            global $post;
            extract( 'shortcode_atts' (array('id'=> '$post->ID'),atts) );


            $args = array(

                'post_type' => 'banner_slider',
                'post_status' => 'publish',
                'post_per_page' => 1
            );
            $banner_slider = new WP_Query( $args );
            if($banner_slider -> have_post() ):
                ob_start();
                include('inc/banner-slider-shortcode.php');
                $banner_slider = ob_get_contents();

            endif;
            wp_reset_query();

            ob_end_clean();
            return $banner_slider;

        }
        function load_default_setting(){
            $bs_setting = array();
            $bs_setting['title'] = __('hello');
            $bs_setting['image'] = __('image');
            $bs_setting['link_button'] = __('contact Us');
            if( ! get_option('bs_setting')){
                update_option('bs_setting','$bs_setting');
            }
        }
        function delete_default_setting(){
            if(get_option('bs_setting')){
                delete_option('bs_setting');
            }
        }
        function wpbs_posttype_admin_css(){
            global $post_type;
            $post_types = array(
                /* set post types */
                'banner_slider'
            );
            if ( in_array( $post_type, $post_types ) )
                echo '<style type="text/css">#post-preview, #view-post-btn, .updated a,#screen-meta-links .screen-meta-toggle
                {display: none;}</style>';
        }

      

    }//class end
    $wps_class_obj = new WPS_Class();
}//exits