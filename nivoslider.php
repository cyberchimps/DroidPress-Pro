<?php 

/*
	Section: Slider
	Authors: Tyler Cunningham 
	Description: Creates iFeature Slider.
	Version: 2.0	
	Portions of this code written by Ivan Lazarevic  (email : devet.sest@gmail.com) Copyright 2010    
*/

/* Call globals. */	

	global $themename, $themeslug, $options;

/* End globals. */	

/* Define variables. */	

    $tmp_query = $wp_query; 
	$root = get_template_directory_uri(); 
	$size = get_post_meta($post->ID, 'page_slider_size' , true);
	$size2 = get_post_meta($post->ID, 'page_sidebar' , true);
	$type = get_post_meta($post->ID, 'page_slider_type' , true);
	$category = get_post_meta($post->ID, 'slider_blog_category' , true);
	$postnumber  = get_post_meta($post->ID, 'slider_blog_posts_number' , true);
	$sliderheight = get_post_meta($post->ID, 'slider_height' , true);
	$sliderdelay = get_post_meta($post->ID, 'slider_delay' , true);
	$slideranimation = get_post_meta($post->ID, 'page_slider_animation' , true);
	$captionstyle = get_post_meta($post->ID, 'page_slider_caption_style' , true);
	$navigationstyle = get_post_meta($post->ID, 'page_slider_navigation_style' , true);
	$navautohide = get_post_meta($post->ID, 'disable_autohide' , true);
	$hidenav = get_post_meta($post->ID, 'hide_arrows' , true);
	$timdisable = get_post_meta($post->ID, 'disable_wordthumb' , true);
	
/* End define variables. */	

/* Slider navigation options */

	if ($hidenav == 'on') {
		$hidenavigation = 'false';
	}

	else {
		$hidenavigation = 'true';
	}
	
	if ($navautohide == 'on') {
		$autohide = 'false';
	}
	
	else {
		$autohide = 'true';
	}

/* End navigation options */

/* Define blog category */

	if ($category != 'all') {
		$blogcategory = $category;
	}
	
	else {
		$blogcategory = "";
	}
	
/* End blog category */

/* Define slider height */      

	if ($sliderheight == '') {
	    $height = '330';
	}    

	else {
		$height = $sliderheight;
	}

/* End slider height */ 

/* Define slider caption style */      

	if ($captionstyle == '2') {
		
		?>
		
			<style type="text/css">
			.nivo-caption {height: <?php echo $height ?>px; width: 30%;}
			</style>
		
		<?php
	}
	
	elseif ($captionstyle == '3') {
		
		?>
		
			<style type="text/css">
			.nivo-caption {position: relative; float: right; height: <?php echo $height ?>px; width: 30%;}
			</style>
		
		<?php
	}    
	
/* End slider caption */ 

/* Define slider width variable */ 

	if ($size == '1' && $size2 != '1' AND $size2 != '2') {
	  	$csWidth = '640';
	}		

	elseif ($size2 == '1' && $size != '0' OR $size2 == '2' && $size != '0') {
		$csWidth = '480';
	}  	

	else {
		$csWidth = '980';
	}

/* End slider width variable */ 

/* Define animation styles. */	

	if ($slideranimation == '1') {
		$animation = 'sliceDown';
	}
	
	elseif ($slideranimation == '2') {
		$animation = 'sliceDownLeft' ;
	}

	elseif ($slideranimation == '3') {
		$animation = 'sliceUp' ;
	}

	elseif ($slideranimation == '4') {
		$animation = 'sliceUpLeft' ;
	}

	elseif ($slideranimation == '5') {
		$animation = 'sliceUpDown' ;
	}

	elseif ($slideranimation == '6') {
		$animation = 'sliceUpDownLeft' ;
	}

	elseif ($slideranimation == '7') {
		$animation = 'fold' ;
	}

	elseif ($slideranimation == '8') {
		$animation = 'fade' ;
	}

	elseif ($slideranimation == '9') {
		$animation = 'slideInRight' ;
	}

	elseif ($slideranimation == '10') {
		$animation = 'slideInLeft' ;
	}

	elseif ($slideranimation == '11') {
		$animation = 'boxRandom' ;
	}

	elseif ($slideranimation == '12') {
		$animation = 'boxRain' ;
	}

	elseif ($slideranimation == '13') {
		$animation = 'boxRainReverse' ;
	}

	elseif ($slideranimation == '14') {
		$animation = 'boxRainGrow' ;
	}
	
	elseif ($slideranimation == '15') {
		$animation = 'boxRainGrowReverse' ;
	}
	
	else {
		$animation = 'random';
	}

/* End animation styles. */	

/* Define slider delay variable */ 
    
	if ($sliderdelay == '') {
	    $delay = '3500';
	}    

	else {
		$delay = $sliderdelay;
	}

/* End slider delay variable */ 

/* Define WordThumb default height and widths. */		

	if ($size == "0") {
		$wordthumb = "h=$height&w=980";
	}

	elseif ($size2 == "1" OR $size2 == "2") {
		$wordthumb = "h=$height&w=480";
	}

	else {
		$wordthumb = "h=$height&w=640";
	}

/* End define WordThumb. */

/* Query posts based on theme/meta options */

	if ( $type == '0') {
    	query_posts( array ('post_type' => 'if_custom_slides', 'showposts' => 20,  'slide_categories' => get_post_meta($post->ID, 'slider_category' , true)  ) );
    }
    	
    elseif ($type == '' && $usecustomslides = 'posts') {
    	query_posts( array ('post_type' => 'if_custom_slides', 'showposts' => 20,  'slide_categories' => get_post_meta($post->ID, 'slider_category' , true)  ) );
    }
    
    else {
    	query_posts('category_name='.$blogcategory.'&showposts=50');
	}

/* End query posts based on theme/meta options */
    	
/* Establish post counter */  
  	
	if (have_posts()) :
	    $out = "<div id='slider' class='nivoSlider'>"; 
	    $i = 0;


	
	if ($postnumber == '' && $type != '0') {
	    $no = '5';    	
	}   	

	elseif ($type == '0') {
	    $no = '20';
	}

	else {
		$no = $postnumber;
	}

/* End post counter */	    	

/* Initialize slide creation */	

	while (have_posts() && $i<$no) : 

		the_post(); 

	    	/* Post-specific variables */	

	    	$customimage 		= get_post_meta($post->ID, 'slider_image' , true);  /* Gets slide custom image from page/post meta option */
	    	$customtext 		=  $post->post_content; /* Gets slide caption from custom slide meta option */
	    	$customlink 		= get_post_meta($post->ID, 'slider_url' , true); /* Gets link from custom slide meta option */
	    	$permalink 			= get_permalink(); /* Gets post URL for blog post slides */
	   		$blogtext 				= get_post_meta($post->ID, 'slider_text' , true); /* Gets slide caption from post meta option */  		
	   		$title				= get_the_title() ; /* Gets slide title from post/custom slide title */
	   		$hidetitlebar       = get_post_meta($post->ID, 'slider_hidetitle' , true); /* Gets page/post meta option for disabling slide title bar */
	   		$customsized        = "$root/library/wt/wordthumb.php?src=$customimage&a=c&$wordthumb"; /* Gets custom image from page/post meta option, applies word thumb code  */
	   		$customthumb 		= get_post_meta($post->ID, 'slider_custom_thumb' , true); /* Gets custom thumbnail from page/post meta option */
	   		


			/* End variables */	

			/* Controls slide title based on page meta setting */	

			if ($hidetitlebar != 'on' AND $captionstyle != '0') {
	   			$titlevar = "#caption$i";
	   		}

	   		else{
	   			$titlevar = '';
	   		}

	    	/* End slide title */

	    	/* Controls slide link */

	    	if ( $type == '0') {
	    		$link = get_post_meta($post->ID, 'slider_url' , true);
	    	}

	    	else {
	    		$link = get_permalink();
	    	}

	    	/* End slide link */
	    	
	    	/* Establish slider text */
	    	
	    	if ($type == '0') {
	    		$text = $customtext;
	    	}
	    	
	    	else {
	    		$text = $blogtext;
	    	}
	    	
	    	/* End slider text */	

	    	/* Controls slide image and thumbnails */

	    	if ($customimage != '' && $customthumb == '' && $timdisable != 'on'){
	    		$image = $customsized;
	    		$thumbnail = "$root/library/wt/wordthumb.php?src=$customimage&a=c&h=30&w=50";
	    	}
	    	
	    	elseif ($customimage != '' && $timdisable == 'on'){
	    		$image = $customimage;
	    		$thumbnail = $customthumb;
	    	}
	    	
	    	elseif ($customimage == '' && $timdisable == 'on'){
	    		$image = "$root/images/pro/ifeatureprolarge.jpg";
	    		$thumbnail = $customthumb;
	    	}
	    	
	    	elseif ($customimage != '' && $customthumb != '' && $timdisable != 'on' ){
	    		$image = $customsized;
	    		$thumbnail = "$root/library/wt/wordthumb.php?src=$customthumb&a=c&h=30&w=50";
	    	}

	    	elseif ($customimage == '' && $size2 == "0" && $size != "0" && $timdisable != 'on'){
	    		$image = "$root/library/wt/wordthumb.php?src=$root/images/pro/iFeaturePro2-640.jpg&a=c&h=$height&w=640";
	    		$thumbnail = "$root/images/pro/iFeaturePro2thumb.jpg";
	    	}

	    	elseif ($customimage == '' && $size2 == '4' && $size != "0" && $timdisable != 'on'){
	    		$image = "$root/library/wt/wordthumb.php?src=$root/images/pro/iFeaturePro2-640.jpg&a=c&h=$height&w=640";
	    		$thumbnail = "$root/images/pro/iFeaturePro2thumb.jpg";
	    	}

	    	elseif ($customimage == '' && $size2 == "1" && $size != "0" && $timdisable != 'on' OR $customimage == '' && $size2 == "2" && $size != "0" && $timdisable != 'on'){
	    		$image = "$root/library/wt/wordthumb.php?src=$root/images/pro/iFeaturePro2-480.jpg&a=c&h=$height&w=480";
	    		$thumbnail = "$root/images/pro/iFeaturePro2thumb.jpg";
	    	}

	   		elseif ($timdisable != 'on') {
	       		$image = "$root/library/wt/wordthumb.php?src=$root/images/pro/ifeatureprolarge.jpg&a=c&h=$height&w=980";
	       		$thumbnail = "$root/images/pro/iFeaturePro2thumb.jpg";
	       	}
	       	
	      

	     	/* End image/thumb */	

	     	/* Markup for slides */

	    	$out .= "<a href='$link'>	
	    				<img src='$image' height='$height' width='$csWidth' title='$titlevar' rel='$thumbnail' alt='iFeaturePro' />
	    					<div id='caption$i' class='nivo-html-caption'>
                				<font size='4'>$title </font> <br />
                				$text 
                			</div>
	    				</a>
	    			";

	    	/* End slide markup */	

	      	$i++;
	      	endwhile;
	      	$out .= "</div>";
	      	 
	      	else:
	      
	      	$out .= "	<br /><br /><br /><br />
	    				<font size='6'>Oops! You have not created a Custom Slide.</font> <br /><br />

To learn how to create a custom slide please <a href='http://cyberchimps.com/question/using-the-ifeature-slider/' target='_blank'><font color='blue'>read the documentation</font></a>.<br /><br />

To create a Custom Slide please go to the Custom Slides tab in WP-Admin. Once you have created your first Custom Slide it will display here instead of this warning.<br /><br />

	    					
	    				
	    			";
	      
	endif; 	    
	$wp_query = $tmp_query;    

/* End slide creation */		


/* Define slider navigation variable */ 
  	
	if ($options['if_slider_navigation'] == '1') {
	    $csNavigation = 'false';
	}

	else {
		$csNavigation = 'true';
	}

/* End slider navigation variable */ 

	?>

	
<!-- Apply slider CSS based on user settings -->

	<style type="text/css" media="screen">
		#slider-wrapper { width: <?php echo $csWidth ?>px; height: <?php echo $height ?>px; margin: auto; margin-bottom: 50px;}
		#slider { width: <?php echo $csWidth ?>px; height: <?php echo $height ?>px; margin: auto;}
	</style>

<!-- End style -->

	<?php	

/* Define slider navigation style */      

	if ($navigationstyle == '0' OR $navigationstyle == '') {
		
		echo '<style type="text/css">';
		echo ".nivo-controlNav a {background: url($root/images/bullets.png) no-repeat; display:block; width:22px; height:22px; 	text-indent:-9999px; border:0; margin-right:3px; float:left;}";
		echo ".nivo-controlNav a.active {background-position:0 -22px;} ";
		echo '</style>';
		
	}
	
	elseif ($navigationstyle == '2') {
		
			echo '<style type="text/css">';
			echo '.nivo-controlNav {display: none;}';
			echo '#slider-wrapper {margin-bottom: 0px;}';
			echo '</style>';
	}    

/* End slider navigation */ 

	    wp_reset_query(); /* Reset post query */ 

/* Begin NivoSlider javascript */ 
    
    $out .= <<<OUT
	<script type="text/javascript">
		var $ = jQuery.noConflict();

	$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'$animation', // Specify sets like: 'fold,fade,sliceDown'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:500, // Slide transition speed
        pauseTime:'$delay', // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:$hidenavigation, // Next & Prev navigation
        directionNavHide:$autohide, // Only show on hover
        controlNavThumbs:true, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:true, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.7, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
	$('#slider').each(function(){
    var \$this = $(this), \$control = $(".nivo-controlNav", this);
    \$control.css({left: (\$this.width() - \$control.width()) / 2}); 
});
});

</script>

OUT;

/* End NivoSlider javascript */ 

echo $out;

/* END */ 