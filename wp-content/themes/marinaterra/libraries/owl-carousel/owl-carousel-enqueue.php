<?php
wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/libraries/owl-carousel/assets/owl.carousel.min.css', array(), null );
wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/libraries/owl-carousel/owl.carousel.min.js', array( 'jquery' ), null );
