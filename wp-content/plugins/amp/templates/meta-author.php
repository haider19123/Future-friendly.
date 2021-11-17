<?php
/**
 * Post author template part.
 *
 * 🚫🚫🚫
 * DO NOT EDIT THIS FILE WHILE INSIDE THE PLUGIN! Changes You make will be lost when a new version
 * of the AMP plugin is released. You need to copy this file out of the plugin and put it into your
 * custom theme, for example. To learn about how to customize these Reader-mode AMP templates, please
 * see: https://amp-wp.org/documentation/how-the-plugin-works/classic-templates/
 * 🚫🚫🚫
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */

$post_author = $this->get( 'post_author' );
?>
<?php if ( $post_author ) : ?>
	<div class="amp-wp-meta amp-wp-byline">
		<?php if ( function_exists( 'get_avatar_url' ) ) : ?>
			<amp-img src="<?php echo esc_url( get_avatar_url( $post_author->user_email, [ 'size' => 24 ] ) ); ?>" alt="<?php echo esc_attr( $post_author->display_name ); ?>" width="24" height="24" layout="fixed"></amp-img>
		<?php endif; ?>
		<span class="amp-wp-author author vcard"><?php echo esc_html( $post_author->display_name ); ?></span>
	</div>
<?php endif; ?>
