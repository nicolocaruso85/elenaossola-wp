<?php
/**
 * Plugin Name: Twitter Widget
 */


/*
<a class="twitter-timeline"  href="https://twitter.com/elenaossola"  data-widget-id="405722041615015936" data-chrome="nofooter" data-border-color="#AAAAAA" data-tweet-limit="3" data-link-color="#F00A71">Tweets di @elenaossola</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
*/

add_action( 'widgets_init', 'mvp_twitter_load_widgets' );

function mvp_twitter_load_widgets() {
	register_widget( 'mvp_twitter_widget' );
}

class mvp_facebook_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function mvp_twitter_widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'mvp_twitter_widget', 'description' => __('A widget that displays a Twitter Timeline.', 'mvp_twitter_widget') );

		/* Widget control settings. */
		$control_ops = array( 'limit' => 5, 'id_base' => 'mvp_twitter_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'mvp_twitter_widget', __('Braxton: Twitter Widget', 'mvp_twitter_widget'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$widget_id = $instance['widget_id']; //page_url
		$username = $instance['username']; 
		$nofooter = $instance['nofooter']; //faces
		$noheader = $instance['noheader'];//stream
		$border_color = $instance['border_color']; //width
		$link_color = $instance['link_color'];//height
		$limit = $instance['limit'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
		?>

		<iframe src="//www.facebook.com/plugins/likebox.php?href=<?php echo $page_url; ?>&amp;width=<?php echo $width; ?>&amp;height=<?php echo $height; ?>&amp;show_faces=<?php if($faces) { echo 'true'; } else { echo 'false'; } ?>&amp;colorscheme=light&amp;stream=<?php if($stream) { echo 'true'; } else { echo 'false'; } ?>&amp;show_border=true&amp;header=<?php if($header) { echo 'true'; } else { echo 'false'; } ?>" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:<?php echo $width; ?>; height:<?php echo $height; ?>px;" allowTransparency="true"></iframe>

		<a class="twitter-timeline"  href="https://twitter.com/<?php echo $username; ?>"  data-widget-id="<?php echo $widget_id; ?>" data-chrome="<?php if($nofooter){ echo 'nofooter';} if($noheader){ echo 'noheader';} if($trasparent){ echo 'trasparent';}?>" data-border-color="<?php if($border_color != ''){ echo $border_color;}?>" data-tweet-limit="echo $limit?>" data-link-color="<?php if($link_color != ''){ echo $link_color;}?>">Tweets di @elenaossola</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		<?php

		/* After widget (defined by themes). */
		echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['widget_id'] = $new_instance['widget_id'];
		$instance['username'] = $new_instance['username'];
		$instance['nofooter'] = $new_instance['nofooter'];
		$instance['noheader'] = $new_instance['noheader'];
		$instance['limit'] = $new_instance['limit'];
		$instance['border_color'] = $new_instance['border_color'];
		$instance['link_color'] = $new_instance['link_color'];

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => 'Twitter', 'widget_id' => '', 'username' => '', 'nofooter' => 'off', 'noheader' => 'off', 'border_color' => '', 'link_color' => '', 'limit' => 5 );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:90%;" />
		</p>

		<!-- Username -->
		<p>
			<label for="<?php echo $this->get_field_id( 'username' ); ?>">Twitter Username:</label>
			<input id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" style="width:90%;" />
			<small>Example: elenaossola</small>
		</p>
		
		<!-- Widget ID -->
		<p>
			<label for="<?php echo $this->get_field_id( 'widget_id' ); ?>">Widget ID:</label>
			<input id="<?php echo $this->get_field_id( 'widget_id' ); ?>" name="<?php echo $this->get_field_name( 'widget_id' ); ?>" value="<?php echo $instance['widget_id']; ?>" style="width:90%;" />
			<small>Example: 1254785698</small>
		</p>

		<!-- No Footer -->
		<p>
			<label for="<?php echo $this->get_field_id( 'nofooter' ); ?>">No Footer:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'nofooter' ); ?>" name="<?php echo $this->get_field_name( 'nofooter' ); ?>" <?php checked( (bool) $instance['nofooter'], true ); ?> />
		</p>

		<!-- No Header-->
		<p>
			<label for="<?php echo $this->get_field_id( 'noheader' ); ?>">No Header:</label>
			<input type="checkbox" id="<?php echo $this->get_field_id( 'noheader' ); ?>" name="<?php echo $this->get_field_name( 'noheader' ); ?>" <?php checked( (bool) $instance['noheader'], true ); ?> />
		</p>

		<!-- Limit -->
		<p>
			<label for="<?php echo $this->get_field_id( 'limit' ); ?>">Post Limit:</label>
			<input id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" value="<?php echo $instance['limit']; ?>" style="width:20%;" />
			<small>Example: 5</small>
		</p>

		<!-- Border Color -->
		<p>
			<label for="<?php echo $this->get_field_id( 'border_color' ); ?>">Border Color:</label>
			<input id="<?php echo $this->get_field_id( 'border_color' ); ?>" name="<?php echo $this->get_field_name( 'border_color' ); ?>" value="<?php echo $instance['border_color']; ?>" style="width:90%;" />
			<small>Example: #CCCCCC</small>
		</p>

		<!-- Link Color -->
		<p>
			<label for="<?php echo $this->get_field_id( 'link_color' ); ?>">link Color:</label>
			<input id="<?php echo $this->get_field_id( 'link_color' ); ?>" name="<?php echo $this->get_field_name( 'link_color' ); ?>" value="<?php echo $instance['link_color']; ?>" style="width:90%;" />
			<small>Example: #FF0000</small>
		</p>


	<?php
	}
}

?>