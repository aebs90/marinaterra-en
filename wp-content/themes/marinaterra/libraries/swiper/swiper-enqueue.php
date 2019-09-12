<?php
wp_enqueue_style( 'swiper', get_stylesheet_directory_uri() . '/libraries/swiper/swiper.min.css', array(), null );
wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/libraries/swiper/swiper.jquery.min.js', array( 'jquery' ), null, true );