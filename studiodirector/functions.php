<?php
function tourForm()
{
?>
<script>
jQuery("span").on("click",".wpcf7-not-valid-tip",function(){
		jQuery(this).remove();
})
</script>
<?php
}
add_action("wp_footer","tourForm");

function change_blog_archive_style() {	
	global $avia_config;
	if(!is_single()){ $avia_config['blog_content'] = "excerpt_read_more"; }
}
add_action('get_header', 'change_blog_archive_style');