<?php
/**
 * The template for displaying a comment topic when the user has selected one.
 *
 */
?>
<div id="comments" class="comment-respond">
	<h3 style="margin-left:20px;">Hozzászólás a fórumban: </h3>
	<a name="respond"></a>
	<div class="entry-content">
		<?php do_action( 'bbp_template_before_single_topic' ); ?>


		<?php
			global $bbp, $bbp_post_topics;




			/** Fix pagination for replies */
			add_filter( 'bbp_replies_pagination', create_function( '$args', '$args["base"] = add_query_arg( "paged", "%#%" ); return $args;') );

			if( is_object($bbp) && isset($bbp->shortcodes) ) {
				/** bbPress 2.0.x */
				echo $bbp->shortcodes->display_topic(array('id'=>$bbp_post_topics->topic_ID));
			} else {
				/** bbPress 2.1.x */
				echo bbpress()->shortcodes->display_topic(array('id'=>$bbp_post_topics->topic_ID));
			}

		?>

		<style type="text/css">
		<?php echo '#post-'.$bbp_post_topics->topic_ID; ?> {
				display: none;
		}
		</style>

		<style type="text/css">
		.bbp-reply-position-1{
				display: none;

		}
		.bbp-header{

			display:none;
		}
		</style>
		<?php do_action( 'bbp_template_after_single_topic' ); ?>
	</div><!-- .entry-content -->
</div><!-- #comments -->
<?php
	/** Hide pagination and form when we are only displaying a certain number of posts */
	global $bbp_post_topics, $post;
	$settings = $bbp_post_topics->get_topic_options_for_post( $post->ID );
	if($settings['display'] == 'xreplies') {
		?>
		<style type="text/css">
			.bbp-pagination, .bbp-reply-form {
				display: none;
			}

		</style>
		<?php
	}
?>
