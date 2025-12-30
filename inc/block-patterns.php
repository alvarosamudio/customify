<?php
/**
 * Customify Block Patterns
 *
 * @package customify
 */

/**
 * Register Block Patterns
 */
function customify_register_block_patterns() {
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'customify',
			array( 'label' => __( 'Customify', 'customify' ) )
		);
	}

	if ( function_exists( 'register_block_pattern' ) ) {
		// Vibrant Hero Pattern
		register_block_pattern(
			'customify/vibrant-hero',
			array(
				'title'       => __( 'Vibrant Hero', 'customify' ),
				'description' => _x( 'A vibrant hero section with a call to action.', 'Block pattern description', 'customify' ),
				'categories'  => array( 'customify', 'header' ),
				'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size" style="line-height:1.1">' . __( 'Unleash Your Creative Potential', 'customify' ) . '</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">' . __( 'Build stunning, high-performance websites with the most customizable theme.', 'customify' ) . '</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-vibrant-btn"} -->
<div class="wp-block-button is-style-vibrant-btn"><a class="wp-block-button__link wp-element-button">' . __( 'Get Started Today', 'customify' ) . '</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
			)
		);
	}
}

add_action( 'init', 'customify_register_block_patterns' );
