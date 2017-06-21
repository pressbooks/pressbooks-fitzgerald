<?php
/**
 * @author  Pressbooks <code@pressbooks.com>
 * @license GPLv2 (or any later version)
 */

function fitzgerald_theme_setup() {
    add_theme_support( 'pressbooks_global_typography', 'grc' );
}

add_action( 'after_setup_theme', 'fitzgerald_theme_setup' );
