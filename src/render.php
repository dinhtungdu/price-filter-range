<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<p <?php echo get_block_wrapper_attributes(); ?>>
	<?php esc_html_e( 'Price Filter Range – hello from a dynamic block!', 'price-filter-range' ); ?>
</p>
<p>And here is your context</p>
<pre>
<?php print_r( $block->context ); ?>
</pre>
