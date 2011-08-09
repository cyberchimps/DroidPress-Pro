<?php
/*

	Section: Twitter
	Authors: Trent Lapinski, Tyler Cunningham
	Description: Creates the Twitter Bar section.
	Version: 0.1
	
*/ 
    $handle = get_post_meta($post->ID, 'twitter_handle' , true);
	$tdurl = get_template_directory_uri();
?>
	
<div id="twitterbar"><!--id="twitterbar"-->
	<div class="twittertext">
		<a href=" http://twitter.com/<?php echo $handle ; ?>" > <img src="<?php echo "$tdurl/images/twitterbird.png" ?>" /> <?php echo $handle ;?> - </a><?php twitter_messages($handle); ?>
	</div>
</div><!--end twitterbar-->
