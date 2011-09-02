<?php 

/*
	Section: Carousel
	Authors: Tyler Cunningham 
	Description: Creates DroidPress Carousel.
	Version: 2.0	 
*/

/* Call globals. */	

	global $themename, $themeslug, $options;

/* End globals. */	

/* Define variables. */	

    $tmp_query = $wp_query; 
	$root = get_template_directory_uri(); 
	$timdisable = get_post_meta($post->ID, 'disable_wordthumb' , true);
	$default = "$root/images/pro/droidlogo.jpg";
	
/* End define variables. */	


/* Query posts  */

    query_posts( array ('post_type' => 'dp_featured_posts', 'showposts' => 20, true)  );

/* End query posts based on theme/meta options */
    	
/* Establish post counter */  
  	
	if (have_posts()) :
	    $out = "<div class='slider'>
	    <ul>
	    
	    "; 
	    $i = 0;

		    $no = '20';


/* End post counter */	    	

/* Initialize slide creation */	

	while (have_posts() && $i<$no) : 

		the_post(); 

	    	/* Post-specific variables */	

	    	$image 		= get_post_meta($post->ID, 'post_image' , true);  
	    	$title 		= get_post_meta($post->ID, 'post_title' , true);  
	    	$link 		= get_post_meta($post->ID, 'post_link' , true);
	    	$imagesized = "$root/library/wt/wordthumb.php?src=$image&a=c&h=150&w=150";

			/* End variables */	

	     	/* Markup for carousel */

	    	$out .= "
	    	
				<li>
	    			<a href='$link' title='$title'>	
	    				<img src='$imagesized' alt='$title' class='captify'/>
	    			</a>
	    		</li>
	    	
	    	";

	    	/* End slide markup */	

	      	$i++;
	      	endwhile;
	      	$out .= "</ul></div>";	 
	      	
	      	else:
	      
	      	$out .= "	<div class='slider'>
	    <ul>
	      			<li>
	      				
	    				<img src='$default' alt='Post 1' class='captify'/>
	    				
	    			</li>
					<li>
	    				<img src='$default' alt='Post 2' class='captify'/>
	    			</li>
					<li>
	    				<img src='$default' alt='Post 3' class='captify'/>
	    			</li>
					<li>
	    				<img src='$default' alt='Post 4' class='captify'/>
	    			</li>
					<li>
	    				<img src='$default' alt='Post 5' class='captify'/>
	    			</li>

	      				
	    			</ul>
	    				</div>		
	    				
	    			";
     
	endif; 	    
	$wp_query = $tmp_query;    

/* End slide creation */		

	    wp_reset_query(); /* Reset post query */ 

/* Begin Carousel javascript */ 
    
    $out .= <<<OUT
	<script type="text/javascript">
		$(function() {
    		$(".slider").jCarouselLite({
        		btnNext: ".next",
        		btnPrev: ".prev",
        		visible: 5
    		});
		});

		$(document).ready(function(){
			$('img.captify').captify({
				// all of these options are… optional
				// ---
				// speed of the mouseover effect
				speedOver: 'fast',
				// speed of the mouse out effect
				speedOut: 'normal',
				// how long to delay the hiding of the caption after mouse out (ms)
				hideDelay: 500,	
				// 'fade', 'slide', 'always-on'
				animation: 'always-on',		
				// text/html to be placed at the beginning of every caption
				prefix: '',		
				// opacity of the caption on mouse over
				opacity: '0.7',					
				// the name of the CSS class to apply to the caption box
				className: 'caption-bottom',	
				// position of the caption (top or bottom)
				position: 'bottom',
				// caption span % of the image
				spanWidth: '100%'
			});
		});

	</script>
OUT;

/* End Carousel javascript */ 

echo $out;

/* END */ 