<?php
	/*
	Plugin name: Charlie and Pickle Extend
	Version: 0.1
	Description: Creates a onscroll sticky header and removes the footer for the TwentyTwenty WordPress theme.
	Author: WJ Carey
	Author URI: https://wjcarey.io
	Plugin URI: https://github.com/wjcarey/CandP-extend
	License: Apache License 2.0
	*/

	class Char_Pick_Extend {

		function __construct() { 
            add_action( 'wp_enqueue_scripts', array(&$this, 'register_cp_scripts') );
            add_action( 'wp_enqueue_scripts', array(&$this, 'load_cp_scripts') );
        }
        
        public function register_cp_scripts() {
            wp_register_style( 'CandP-extend', plugins_url( 'CandP-extend/css/candp.css' ) );
            wp_register_script( 'CandP-extend', plugins_url( 'CandP-extend/js/candp.js' ) );
        }

        public function load_cp_scripts() {
            wp_enqueue_style( 'CandP-extend' );
            wp_enqueue_script( 'CandP-extend' );
        }
	}

	$candp = new Char_Pick_Extend();
?>