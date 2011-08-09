<?php
/*

	Section: Callout
	Authors: Trent Lapinski, Tyler Cunningham
	Description: Creates the Callout Section.
	Version: 2.0
	
*/

/* Define variables. */	

	$root = get_template_directory_uri();  
	$calloutbgcolor = get_post_meta($post->ID, 'callout_background_color' , true);
	$bcolor = get_post_meta($post->ID, 'custom_callout_button_color' , true);
	$tcolor = get_post_meta($post->ID, 'custom_callout_text_color' , true);
	$ticolor = get_post_meta($post->ID, 'custom_callout_title_color' , true);
	$title = get_post_meta($post->ID, 'callout_title' , true);
	$text = get_post_meta($post->ID, 'callout_text' , true);
	$btext = get_post_meta($post->ID, 'callout_button_text' , true);
	$link = get_post_meta($post->ID, 'callout_url' , true);
	$image = get_post_meta($post->ID, 'callout_image' , true);
	$customcalloutbgcolor = get_post_meta($post->ID, 'custom_callout_color' , true);

/* End variable definition. */	

/* Define background colors. */	

	if ($calloutbgcolor == '1') {
		$calloutbg = 'calloutBlue.png';
	}
	
	elseif ($calloutbgcolor == '2') {
		$calloutbg = 'calloutGrey.png';
	}
	
	elseif ($calloutbgcolor == '3') {
		$calloutbg = 'calloutOrange.png';
	}

	elseif ($calloutbgcolor == '4') {
		$calloutbg = 'calloutPink.png';
	}
	
	elseif ($calloutbgcolor == '5') {
		$calloutbg = 'calloutRed.png';
	}
	
	else {
		$calloutbg = $customcalloutbgcolor;
	}
	
/* End define background colors. */		

/* Echo custom button color. */

	if ($bcolor != "") {
	
		echo '<style type="text/css" media="screen">';
		echo ".calloutbutton {background: $bcolor ;}";
		echo '</style>';
	
	}
	

/* End custom button color. */

/* Echo custom text color. */

	if ($tcolor != "") {
	
		echo '<style type="text/css" media="screen">';
		echo ".callout_text {color: $tcolor ;}";
		echo '</style>';
	
	}
	
/* Echo custom title color. */

	if ($ticolor != "") {
	
		echo '<style type="text/css" media="screen">';
		echo ".callout_title {color: $ticolor ;}";
		echo '</style>';
	
	}
	

/* End custom text color. */

/* Echo background color CSS. */	

	if ($calloutbgcolor != '6' AND $calloutbgcolor != '0'){
	
		echo '<style type="text/css" media="screen">';
		echo "#calloutwrap {background: url($root/images/pro/$calloutbg) no-repeat top center; height: 100px; border: none;}";
		echo '</style>';
	}
	
	elseif ($calloutbgcolor == '6'){
	
		echo '<style type="text/css" media="screen">';
		echo "#calloutwrap {background: $calloutbg ;}";
		echo '</style>';
	
	}
		
/* End CSS. */	

/* Define Callout title. */	

	if ($title == '') {
		$callouttitle = 'This is the Callout Section';
	}

	else {
		$callouttitle = $title;
	}
	
/* End define Callout title. */	

/* Define Callout text. */	

	if ($text == '') {
		$callouttext = 'iFeature Pro 2 gives you the tools to turn WordPress into a modern feature rich Content Management System (CMS)';
	}

	else {
		$callouttext = $text;
	}
	
/* End define Callout title. */	

/* Define Callout button text. */

	if ($btext == '') {
		$calloutbuttontext = 'Buy Now';
	}

	else {
		$calloutbuttontext = $btext;
	}

/* End define Callout button text. */	

/* Define Callout button image. */

	if ($image != '') {
		$calloutimage = $image;
	}

/* End define Callout button image. */

/* Define Callout button link. */

	if ($link == '') {
		$calloutlink = 'http://cyberchimps.com';
	}

	else {
		$calloutlink = $link;
	}

/* End define Callout button link. */	

?>

<div id="calloutwrap"><!--id="calloutwrap"-->

	<div class="callout_text">
		<h2 class="callout_title"><?php echo $callouttitle ?></h2>
		<p class="calloutp"><?php echo $callouttext  ?></p>
	</div>
		
<?php if ($image == ''): ?>
	<div class="calloutbutton">
		<a href="<?php echo $calloutlink ?>"><?php echo $calloutbuttontext ;?></a>
	</div>
<?php endif;?>

<?php if ($image != ''): ?>
	<div class="calloutimg">
		<a href="<?php echo $calloutlink ?>"><img src="<?php echo $image?>" alt="Callout" /></a>
	</div>
<?php endif;?>

</div><!--end calloutwrap-->