<?php
/* 
	Options	Select
	Author: Tyler Cuningham
	Establishes the theme options select arrays.
	Copyright (C) 2011 CyberChimps
	Version 2.0
	
*/

$select_featured_images = array(
'0' => array('value' => 'left','label' => __('Left (default)' )),'1' => array('value' => 'center','label' => __('Center')), '2' => array('value' => 'right','label' => __('Right')),

);

$select_callout_background = array(
	'0' => array('value' => 'default','label' => __('iFeature 2.0 (default)' )),'1' => array('value' => 'Blue','label' => __('Blue')), '2' => array('value' => 'Grey','label' => __('Grey')),'3' => array('value' => 'Orange','label' => __('Orange')),'4' => array('value' => 'Pink','label' => __('Pink')),'5' => array('value' => 'Red','label' => __('Red')),

);

$select_slider_caption = array(
	'0' => array('value' => 'bottom','label' => __('Bottom (default)' )),'1' => array('value' => 'left','label' => __('Left')), '2' => array('value' => 'right','label' => __('Right')),'3' => array('value' => 'none','label' => __('None')),

);

$select_sidebar_type = array(
	'0' => array('value' => 'right','label' => __('Right (default)' )),'1' => array('value' => 'none','label' => __('None')), '2' => array('value' => 'two-right','label' => __('Two Right')),'3' => array('value' => 'right-left','label' => __('Right and Left')),

);

$select_slider_navigation = array(
	'0' => array('value' => 'dots','label' => __('Dots (default)' )),'1' => array('value' => 'thumbs','label' => __('Thumbnails')), '2' => array('value' => 'none','label' => __('None')),

);

$select_slider_size = array(
	'0' => array('value' => 'half','label' => __('Half-Width (default)' )),'1' => array('value' => 'full','label' => __('Full-Width')), 
);

$select_menu_color = array(
	'0' => array('value' =>	'Grey','label' => __( 'Grey (default)' )),'1' => array('value' =>'Black','label' => __( 'Black' )),'2' => array('value' =>	'Blue','label' => __( 'Blue' )),'3' => array('value' =>	'Red','label' => __( 'Red' )),'4' => array('value' =>	'Orange','label' => __( 'Orange' )),'5' => array('value' =>	'Pink','label' => __( 'Pink' )),'6' => array('value' =>	'White','label' => __( 'White' )),'7' => array('value' =>	'picker','label' => __( 'Color Picker' )),            
);

$select_font = array(
	'0' => array('value' =>'Cantarell','label' => __('Cantarell (default)')), '1' => array('value' =>'Arial','label' => __('Arial')),'2' => array('value' =>'Courier New','label' => __('Courier New')),'3' => array('value' =>'Georgia','label' => __('Georgia')),'4' => array('value' =>'Lucida Grande','label' => __('Lucida Grande')),'5' => array('value' =>'Tahoma','label' => __('Tahoma')),'6' => array('value' =>'Times New Roman','label' => __('Times New Roman')),'7' => array('value' =>'Verdana','label' => __('Verdana')),'8' => array('value' =>'Allan','label' => __('Allan')),'9' => array('value' =>'Allerta','label' => __('Allerta')),'10' => array('value' =>'Allerta+Stencil','label' => __('Allerta Stencil')),'11' => array('value' =>'Amaranth','label' => __('Amaranth')),'12' => array('value' =>'Annie+Use+Your+Telescope','label' => __('Annie Use Your Telescope')),'13' => array('value' =>'Anonymous+Pro','label' => __('Anonymous Pro')),'14' => array('value' =>'Anton','label' => __('Anton')),'15' => array('value' =>'Architects+Daughter','label' => __('Architects Daughter')),'16' => array('value' =>'Arimo','label' => __('Arimo')),'17' => array('value' =>'Arvo','label' => __('Arvo')),'18' => array('value' =>'Astloch','label' => __('Astloch')),'19' => array('value' =>'Bangers','label' => __('Bangers')),'20' => array('value' =>'Bentham','label' => __('Bentham')),'21' => array('value' =>'Bevan','label' => __('Bevan')),'22' => array('value' =>'Buda','label' => __('Buda')),'23' => array('value' =>'Cabin','label' => __('Cabin')),'24' => array('value' =>'Cabin+Sketch','label' => __('Cabin Sketch')),'25' => array('value' =>'Calligraffitti','label' => __('Calligraffitti')),'26' => array('value' =>'Candal','label' => __('Candal')),'27' => array('value' =>'Cardo','label' => __('Cardo')),'28' => array('value' =>'Cherry+Cream+Soda','label' => __('Cherry Cream Soda')),'29' => array('value' =>'Chewy','label' => __('Chewy')),'30' => array('value' =>'Coda','label' => __('Coda')),'31' => array('value' =>'Coming+Soon','label' => __('Coming Soon')),'32' => array('value' =>'Copse','label' => __('Copse')),'33' => array('value' =>'Corben','label' => __('Corben')),'34' => array('value' =>'Cousine','label' => __('Cousine')),'35' => array('value' =>'Covered+By+Your+Grace','label' => __('Covered By Your Grace')),'36' => array('value' =>'Crafty+Girls','label' => __('Crafty Girls')),'37' => array('value' =>'Crimson+Text','label' => __('Crimson Text')),'38' => array('value' =>'Crushed','label' => __('Crushed')),'39' => array('value' =>'Cuprum','label' => __('Cuprum')),'40' => array('value' =>'Dancing+Script','label' => __('Dancing Script')),'41' => array('value' =>'Dawning+of+a+New+Day','label' => __('Dawning of a New Day')),'42' => array('value' =>'Droid+Sans','label' => __('Droid Sans')),'43' => array('value' =>'Droid+Sans+Mono','label' => __('Droid Sans Mono')),'44' => array('value' =>'Droid+Serif','label' => __('Droid Serif')),'45' => array('value' =>'EB+Garamond','label' => __('EB Garamond')),'46' => array('value' =>'Expletus+Sans','label' => __('Expletus Sans')),'47' => array('value' =>'Fontdiner+Swanky','label' => __('Fontdiner Swanky')),'48' => array('value' =>'Geo','label' => __('Geo')),'49' => array('value' =>'Goudy+Bookletter+1911','label' => __('Goudy Bookletter 1911')),'50' => array('value' =>'Gruppo','label' => __('Gruppo')),'51' => array('value' =>'Homemade+Apple','label' => __('Homemade Apple')),'52' => array('value' =>'Inconsolata','label' => __('Inconsolata')),'53' => array('value' =>'Indie+Flower','label' => __('Indie Flower')),'54' => array('value' =>'Irish+Grover','label' => __('Irish Grover')),'55' => array('value' =>'Josefin+Sans','label' => __('Josefin Sans')),'56' => array('value' =>'Josefin+Slab','label' => __('Josefin Slab')),'57' => array('value' =>'Just+Another+Hand','label' => __('Just Another Hand')),'58' => array('value' =>'Just+Me+Again+Down+Here','label' => __('Just Me Again Down Here')),'59' => array('value' =>'Kenia','label' => __('Kenia')),'60' => array('value' =>'Kranky','label' => __('Kranky')),'61' => array('value' =>'Kreon','label' => __('Kreon')),'62' => array('value' =>'Kristi','label' => __('Kristi')),'63' => array('value' =>'Lato','label' => __('Lato')),'64' => array('value' =>'League+Script','label' => __('League Script')),'65' => array('value' =>'Lekton','label' => __('Lekton')),'66' => array('value' =>'Lobster','label' => __('Lobster')),'67' => array('value' =>'Luckiest+Guy','label' => __('Luckiest Guy')),'68' => array('value' =>'Maiden+Orange','label' => __('Maiden Orange')),'69' => array('value' =>'Meddon','label' => __('Meddon')),'70' => array('value' =>'MedievalSharp','label' => __('MedievalSharp')),'71' => array('value' =>'Merriweather','label' => __('Merriweather')),'72' => array('value' =>'Michroma','label' => __('Michroma')),'73' => array('value' =>'Miltonian','label' => __('Miltonian')),'74' => array('value' =>'Miltonian+Tattoo','label' => __('Miltonian Tattoo')),'75' => array('value' =>'Molengo','label' => __('Molengo')),'76' => array('value' =>'Mountains+of+Christmas','label' => __('Mountains of Christmas')),'77' => array('value' =>'Neucha','label' => __('Neucha')),'78' => array('value' =>'Neuton','label' => __('Neuton')),'79' => array('value' =>'Nobile','label' => __('Nobile')),'80' => array('value' =>'OFL+Sorts+Mill+Goudy+TT','label' => __('OFL Sorts Mill Goudy TT')),'81' => array('value' =>'Old+Standard+TT','label' => __('Old Standard TT')),'82' => array('value' =>'Orbitron','label' => __('Orbitron')),'83' => array('value' =>'Oswald','label' => __('Oswald')),'84' => array('value' =>'Pacifico','label' => __('Pacifico')),'85' => array('value' =>'Permanent+Marker','label' => __('Permanent Marker')),'86' => array('value' =>'Philosopher','label' => __('Philosopher')),'87' => array('value' =>'Puritan','label' => __('Puritan')),'88' => array('value' =>'Quattrocento','label' => __('Quattrocento')),'89' => array('value' =>'Quattrocento+Sans','label' => __('Quattrocento Sans')),'90' => array('value' =>'Radley','label' => __('Radley')),'91' => array('value' =>'Raleway','label' => __('Raleway')),'92' => array('value' =>'Reenie+Beanie','label' => __('Reenie Beanie')),'93' => array('value' =>'Rock+Salt','label' => __('Rock Salt')),'94' => array('value' =>'Schoolbell','label' => __('Schoolbell')),'95' => array('value' =>'Six+Caps','label' => __('Six Caps')),'96' => array('value' =>'Slackey','label' => __('Slackey')),'97' => array('value' =>'Smythe','label' => __('Smythe')),'98' => array('value' =>'Sniglet','label' => __('Sniglet')),'99' => array('value' =>'Special+Elite','label' => __('Special Elite')),'100' => array('value' =>'Sue+Ellen+Francisco','label' => __('Sue Ellen Francisco')),'101' => array('value' =>'Sunshiney','label' => __('Sunshiney')),'102' => array('value' =>'Syncopate','label' => __('Syncopate')),'103' => array('value' =>'Terminal+Dosis+Light','label' => __('Terminal Dosis Light')),'104' => array('value' =>'The+Girl+Next+Door','label' => __('The Girl Next Door')),'105' => array('value' =>'Tinos','label' => __('Tinos')),'106' => array('value' =>'Ubuntu','label' => __('Ubuntu')),'107' => array('value' =>'Unkempt','label' => __('Unkempt')),'108' => array('value' =>'VT323','label' => __('VT323')),'109' => array('value' =>'Vibur','label' => __('Vibur')),'110' => array('value' =>'Vollkorn','label' => __('Vollkorn')),'111' => array('value' =>'Waiting+for+the+Sunrise','label' => __('Waiting for the Sunrise')),'112' => array('value' =>'Walter+Turncoat','label' => __('Walter Turncoat')),'113' => array('value' =>'Yanone+Kaffeesatz','label' => __('Yanone Kaffeesatz')),

);

$select_slider_effect = array(
	'0' => array('value' => 'random', 'label' => __( 'Random (default)')), '1' => array('value' => 'sliceDown', 'label' => __( 'Slice Down')), '2' => array('value' => 'sliceDownLeft', 'label' => __('Slice Down-Left')), '3' => array('value' => 'sliceUp', 'label' =>__('Slice Up')), '4' => array('value' => 'sliceUpLeft', 'label' => __('Slice Up-Left')), '5' => array('value' => 'sliceUpDown', 'label' => __('Slice Up-Down')), '6' => array('value' => 'sliceUpDownLeft', 'label' => __('Slice Up-Down-Left')),'7' => array('value' => 'fold', 'label' => __('Fold')), '8' => array('value' => 'fade', 'label' => __('Fade')), '9' => array('value' => 'slideInRight', 'label' => __('Slide In-Right')), '10' => array('value' => 'slideInLeft', 'label' => __('Slide In-Left')), '11' => array('value' => 'boxRandom', 'label' => __('Box Random')), '12' => array('value' => 'boxRain', 'label' => __('Box Rain')), '13' => array('value' => 'boxRainReverse', 'label' => __('Box Rain-Reverse')), '14' => array('value' => 'boxRainGrow', 'label' => __('Box Rain-Grow')), '15' => array('value' => 'boxRainGrowReverse', 'label' => __('Box Rain-Grow-Reverse')),

  
);

$select_slider_type = array(
	'0' => array('value' => 'posts', 'label' => __('Post Categeory')), '1' => array('value' => 'custom', 'label' => __( 'Custom Slides')), 
);

$select_slider_placement = array(
	'0' => array('value' => 'feature', 'label' => __( 'iFeature Pro Homepage')), '1' => array('value' => 'blog', 'label' => __('Default (Post) Template')),
	
);
?>
