<?php

/*
	Section: Meta
	Authors: Trent Lapinski, Tyler Cunningham 
	Description: Creates post meta content.
	Version: 2.0	
*/

/* Call globals. */	

	global $themename, $themeslug, $options;

/* End globals. */		 

?>

<?php 
		$author = $options[$themeslug.'_hide_author'];
		$category = $options[$themeslug.'_hide_categories'];
		$date = $options[$themeslug.'_hide_date'];
		$comments = $options[$themeslug.'_hide_comments'];
?>


<div class="meta">
<?php if ($author != '1'):?>Published by <?php the_author_posts_link(); ?> <?php endif;?> <?php if ($category != '1'):?>in <?php the_category(', ') ?> <?php endif;?><?php if ($date != '1'):?> on <a href="<?php the_permalink() ?>"><?php the_time('F jS, Y') ?></a><?php endif;?></div>
