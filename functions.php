<?php

function no_theme_theme_support() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'no_theme_theme_support' );
