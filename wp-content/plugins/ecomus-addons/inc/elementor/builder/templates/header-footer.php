<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

\Elementor\Plugin::$instance->frontend->add_body_class( 'elementor-template-full-width' );

get_header();
/**
 * Before Header-Footer page template content.
 *
 * Fires before the content of Elementor Header-Footer page template.
 *
 * @since 2.0.0
 */
do_action( 'elementor/page_templates/header-footer/before_content' );


$classes = apply_filters('ecomus_builder_classes', '');
$classes = ! empty( $classes ) ? implode( ' ', $classes ) : '';
?>
<div class="<?php echo esc_attr( $classes ); ?>">
    <?php \Elementor\Plugin::$instance->modules_manager->get_modules( 'page-templates' )->print_content(); ?>
</div>
<?php
/**
 * After Header-Footer page template content.
 *
 * Fires after the content of Elementor Header-Footer page template.
 *
 * @since 2.0.0
 */
do_action( 'elementor/page_templates/header-footer/after_content' );

get_footer();
