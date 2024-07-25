<?php

/**
 * Cache Master - Post types.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 * @since 1.2.1
 * @version 1.3.0
 */

if (!defined('SCM_INC')) {
	die;
}

$option_post_types = get_option('scm_option_post_types');

$post_types = get_post_types([], 'objects');

$option_list = array();

foreach ($post_types as $post_type) {
	$option_list[$post_type->name] = $post_type->label;
}

?>

<div>
	<?php foreach ($option_list as $k => $v) : ?>
		<div class="scm-option-item">
			<input type="checkbox" name="scm_option_post_types[<?php echo $k; ?>]" id="cache-master-post-type-option-<?php echo $k; ?>" value="yes" <?php if (isset($option_post_types[$k])) : ?> <?php checked($option_post_types[$k], 'yes'); ?> <?php endif; ?>>
			<label for="cache-master-post-type-option-<?php echo $k; ?>">
				<?php echo $v; ?><br />
				<label>
		</div>
	<?php endforeach; ?>
</div>
<p><em><?php _e('What type of post would you like to cache?', 'cache-master'); ?></em></p>