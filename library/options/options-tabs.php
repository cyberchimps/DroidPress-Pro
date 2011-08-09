<?php

/* 
	Options	Tabs
	Author: Tyler Cuningham
	Establishes the theme options tabs.
	Copyright (C) 2011 CyberChimps
	Version 2.0
	
*/

$shortname = $themeslug;

$optionlist = array (

array( "id" => $shortname,
	"type" => "open-tab"),

array( "type" => "open"),
array( "type" => "close"),

array( "type" => "close-tab"),

// General

array( "id" => "tab1",
	"type" => "open-tab"),

array( "type" => "open"),
   

array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_general_faq",  
    "type" => "general_faq",  
    "std" => ""),
    
    
array( "name" => "Logo URL",  
    "desc" => "Use the image uploader or enter your own URL into the input field to use an image as your logo. To display the site title as text, leave blank.",  
    "id" => $shortname."_logo",  
    "type" => "upload",  
    "std" => ""),  

array( "name" => "Header Contact Area",  
    "desc" => "Enter contact info such as phone number for the top right corner of the header. It can be HTML (to hide enter the word: hide).",  
    "id" => $shortname."_header_contact",  
    "type" => "textarea",
    "std" => ""),
    
array( "name" => "Custom Favicon",  
    "desc" => "A favicon is a 16x16 pixel icon that represents your site; paste the URL to a .ico image that you want to use as the image",  
    "id" => $shortname."_favicon",  
    "type" => "upload2",  
    "std" => ""),

array( "name" => "Google Analytics Code",  
    "desc" => "You can paste your Google Analytics or other tracking code in this box. This will be automatically be added to the footer.",  
    "id" => $shortname."_ga_code",  
    "type" => "textarea",  
    "std" => ""),  

    
array( "type" => "close"),

array( "type" => "close-tab"),

//Design

array( "id" => "tab2",
	"type" => "open-tab"),
 
array( "type" => "open"),

array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_design_faq",  
    "type" => "design_faq",  
    "std" => ""),
    
array( "name" => "Choose a Font:",  
    "desc" => "(Default is Cantarell)",  
    "id" => $shortname."_font",  
    "type" => "select2",  
    "std" => ""),

array( "name" => "Choose iMenu Color",
	"desc" => "(Default is Grey)",
	"id" => $shortname."_menu_color",
	"type" => "select1",
	"std" => ""),
	
array( "name" => "Choose a Menu Font:",  
    "desc" => "(Default is Cantarell)",  
    "id" => $shortname."_menu_font",  
    "type" => "select12",  
    "std" => ""),

array( "name" => "Menu Link Color",  
    "desc" => "Use the color picker to select the site menu link color (Default is FFFFFF)",  
    "id" => $shortname."_menulink_color",  
      "type" => "color3",  
    "std" => "false"),
    

array( "name" => "Custom Menu Icon",  
    "desc" => "Enter the link to your custom menu icon (optional).",  
    "id" => $shortname."_menuicon",  
    "type" => "upload3",  
    "std" => ""),
    
array( "name" => "Hide Home Icon",  
    "desc" => "Check this box to hide the home icon in the navigation",  
    "id" => $shortname."_hide_home_icon",  
      "type" => "checkbox",  
    "std" => "false"),

array( "name" => "Hide Menu Search",  
    "desc" => "Check this box to hide the search box in the navigation.",  
    "id" => $shortname."_hide_search",  
      "type" => "checkbox",  
    "std" => "false"),
    
array( "name" => "Site Title Color",  
    "desc" => "Use the color picker to select the site title color",  
    "id" => $shortname."_sitetitle_color",  
      "type" => "color1",  
    "std" => "false"),
    
array( "name" => "Site Description Color",  
    "desc" => "Use the color picker to select the site description (tagline) color",  
    "id" => $shortname."_tagline_color",  
      "type" => "color9",  
    "std" => "false"),    
    
array( "name" => "Link Color",  
    "desc" => "Use the color picker to select the site link color",  
    "id" => $shortname."_link_color",  
      "type" => "color2",  
    "std" => "false"),

array( "name" => "Post Title Color",  
    "desc" => "Use the color picker to select the post title color",  
    "id" => $shortname."_posttitle_color",  
      "type" => "color4",  
    "std" => "false"),

array( "name" => "Disable Header",  
    "desc" => "Check this box to disable the header",  
    "id" => $shortname."_hide_header",  
      "type" => "checkbox",  
    "std" => "false"),

array( "name" => "Enable Widget Title Background",  
    "desc" => "Check this box to enable the classic widget title backgrounds.",  
    "id" => $shortname."_widget_title_bg",  
      "type" => "checkbox",  
    "std" => "false"),

array( "name" => "Custom CSS",  
    "desc" => "Override default CSS here.",  
    "id" => $shortname."_css_options",  
    "type" => "customcss",  
    "std" => ""),  
    


array( "type" => "close"),
array( "type" => "close-tab"),

//Blog

array( "id" => "tab3",
	"type" => "open-tab"),
 
array( "type" => "open"),

array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_blog_faq",  
    "type" => "blog_faq",  
    "std" => ""),

array( "name" => "",  
    "desc" => "",  
    "id" => $shortname."_blog_title",  
    "type" => "blog_title",  
    "std" => ""),

array( "name" => "Select the Sidebar Type",  
    "desc" => "Select the sidebar type for your blog page (default is Right).",  
    "id" => $shortname."_blog_sidebar",  
	"type" => "select8",  
    "std" => "false"),

array( "name" => "Post Excerpts",  
    "desc" => "Use the following options to control excerpts.",  
    "id" => $shortname."_excerpts",  
      "type" => "excerpts",  
    "std" => "false"),

array( "name" => "Featured Images",  
    "desc" => "Use the following options to control featured image alignment and size.",  
    "id" => $shortname."_featured_images",  
      "type" => "featured",  
    "std" => "false"),

array( "name" => "Hide Post Elements",  
    "desc" => "Use the following checkboxes to hide various post elements.",  
    "id" => $shortname."_hide_post_elements",  
    "type" => "post",  
    "std" => "false"),

array(  "name" => "Show Facebook Like Button",
	"desc" => "Check this box to show the Facebook Like Button on blog posts",
	"id" => $shortname."_show_fb_like",
	"type" => "checkbox",
	"std" => "false"),  
	
array(  "name" => "Show Google +1 button",
	"desc" => "Check this box to show the Google +1 Button on blog posts",
	"id" => $shortname."_show_gplus",
	"type" => "checkbox",
	"std" => "false"),  
	
array( "name" => "",  
    "desc" => "",  
    "id" => $shortname."_slider_title",  
    "type" => "slider_title",  
    "std" => ""),
    
array( "name" => "Hide the Slider",  
    "desc" => "Check this box to hide the Slider on your blog page.",  
    "id" => $shortname."_hide_slider_blog",  
	"type" => "checkbox",  
    "std" => "false"),

array( "name" => "Select the Slider Size",  
    "desc" => "Select the slider size for your blog page (default is Half-Width).",  
    "id" => $shortname."_slider_size",  
	"type" => "select9",  
    "std" => "false"),

array( "name" => "Select the Slider Type:",  
    "desc" => "(Choose between custom feature slides or a post category)",  
    "id" => $shortname."_slider_type",  
    "type" => "select4",  
    "std" => ""), 
    
array( "name" => "Show Posts From Blog Category:",  
    "desc" => "(Default is all)",  
    "id" => $shortname."_slider_category",  
    "type" => "select6",  
    "std" => ""),
    
array( "name" => "Show Posts From Custom Slide Category:",  
    "desc" => "(Default is default)",  
    "id" => $shortname."_customslider_category",  
    "type" => "select7",  
    "std" => ""),
    
array( "name" => "Number of Featured Blog Posts:",  
    "desc" => "(Default is 5)",  
    "id" => $shortname."_slider_posts_number",  
    "type" => "text",  
    "std" => ""),  
    
array( "name" => "Slider Height:",  
    "desc" => "(Default is 330)",  
    "id" => $shortname."_slider_height",  
    "type" => "text",  
    "std" => ""),

array( "name" => "Slider Delay Time (in milliseconds):",  
    "desc" => "(Default is 3500)",  
    "id" => $shortname."_slider_delay",  
    "type" => "text",  
    "std" => ""),
    
array( "name" => "Choose the Caption Style:",  
    "desc" => "(Default is Bottom)",  
    "id" => $shortname."_caption_style",  
    "type" => "select11",  
    "std" => ""),

array( "name" => "Choose the Slider Animation:",  
    "desc" => "(Default is random)",  
    "id" => $shortname."_slider_animation",  
    "type" => "select3",  
    "std" => ""), 
    
array( "name" => "Choose the Slider Navigation:",  
    "desc" => "(Default is dots)",  
    "id" => $shortname."_slider_nav",  
    "type" => "select10",  
    "std" => ""),   
    
array( "name" => "Disable Slider Navigation",  
    "desc" => "Check this box to hide the navigation arrows.",  
    "id" => $shortname."_hide_slider_arrows",  
	"type" => "checkbox",  
    "std" => "false"),
    
array( "name" => "Disable Slider Navigation Auto-Hide",  
    "desc" => "Check this box to keep the navigation arrows active at all times.",  
    "id" => $shortname."_disable_nav_autohide",  
	"type" => "checkbox",  
    "std" => "false"),
    
array( "name" => "Disable WordThumb Image Resizing",  
    "desc" => "Check this box to disable the use of TimThumb Image Resizing on the slider",  
    "id" => $shortname."_disable_wordthumb",  
	"type" => "checkbox",  
    "std" => "false"),
    
array( "name" => "",  
    "desc" => "",  
    "id" => $shortname."_seo_title",  
    "type" => "seo_title",  
    "std" => ""),
    
array( "name" => "Home Description",  
    "desc" => "Enter the META description of your homepage here.",  
    "id" => $shortname."_home_description",  
    "type" => "textarea",  
    "std" => ""),
    
array( "name" => "Home Keywords",  
    "desc" => "Enter the META keywords of your homepage here (separated by commas).",  
    "id" => $shortname."_home_keywords",  
    "type" => "textarea2",  
    "std" => ""),
    
array( "name" => "Optional Home Title",  
    "desc" => "Enter an alternative title of your homepage here (default is site tagline).",  
    "id" => $shortname."_home_title",  
    "type" => "text2",  
    "std" => ""),

array( "type" => "close"),
array( "type" => "close-tab"),

// Social

array( "id" => "tab4",
	"type" => "open-tab"),
 
array( "type" => "open"),

array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_social_faq",  
    "type" => "social_faq",  
    "std" => ""),

array( "name" => "Facebook URL",  
    "desc" => "Enter your Facebook page URL for the Facebook social icon.",  
    "id" => $shortname."_facebook",  
    "type" => "facebook",  
    "std" => "http://facebook.com"),

array( "name" => "Twitter URL",  
    "desc" => "Enter your Twitter URL for Twitter social icon.",  
    "id" => $shortname."_twitter",  
    "type" => "twitter",  
    "std" => "http://twitter.com"),
    
array( "name" => "Google Plus URL",  
    "desc" => "Enter your Google Plus url (we recommend using the http://gplus.to/ shortener).",  
    "id" => $shortname."_gplus",  
    "type" => "gplus",  
    "std" => "https://plus.google.com"),
    
array( "name" => "LinkedIn URL",  
    "desc" => "Enter your LinkedIn URL for the LinkedIn social icon.",  
    "id" => $shortname."_linkedin",  
    "type" => "linkedin",  
    "std" => "http://linkedin.com"),  
    
array( "name" => "YouTube URL",  
    "desc" => "Enter your YouTube URL for the YouTube social icon.",  
    "id" => $shortname."_youtube",  
    "type" => "youtube",  
    "std" => "http://youtube.com"),  
    
array( "name" => "Google Maps URL",  
    "desc" => "Enter your Google Maps URL for the Google Maps social icon.",  
    "id" => $shortname."_googlemaps",  
    "type" => "googlemaps",  
    "std" => "http://google.com/maps"),  

array( "name" => "Email",  
    "desc" => "Enter your contact email address for email social icon.",  
    "id" => $shortname."_email",  
    "type" => "email",  
    "std" => "no@way.com"),
    
array( "name" => "Custom RSS Link",  
    "desc" => "Enter Feedburner URL, or leave blank for default RSS feed.",  
    "id" => $shortname."_rsslink",  
    "type" => "rss",  
    "std" => ""),   
     
array( "type" => "close"),

array( "type" => "close-tab"),


// Footer

array( "id" => "tab5",
	"type" => "open-tab"),

array( "type" => "open"),
  
array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_footer_faq",  
    "type" => "footer_faq",  
    "std" => ""),

array( "name" => "Footer Copyright",  
    "desc" => "Enter Copyright text used on the right side of the footer. It can be HTML (default is your blog title)",  
    "id" => $shortname."_footer_text",  
    "type" => "textarea",  
    "std" => ""),
    
array( "name" => "Footer Color",  
    "desc" => "Use the color picker to select a custom footer color (default is 222)",  
    "id" => $shortname."_footer_color",  
    "type" => "color8",  
    "std" => ""),    
    
array( "name" => "Hide Our Link",  
    "desc" => "Check this box to hide the link back to CyberChimps.com.",  
    "id" => $shortname."_hide_link",  
      "type" => "checkbox",  
    "std" => "false"),
    
array( "type" => "close"),

array( "type" => "close-tab"),

// Import/Export

array( "id" => "tab6",
	"type" => "open-tab"),

array( "type" => "open"),

array( "name" => "Help",  
    "desc" => "",  
    "id" => $shortname."_import_faq",  
    "type" => "import_faq",  
    "std" => ""),
  
array( "name" => "Import Options Settings",  
    "desc" => "To import your settings, Paste the export code here and press Save Settings.",  
    "id" => $shortname."_import_code",  
    "type" => "import",  
    "std" => ""), 
    
array( "name" => "Export Options Settings",  
    "desc" => "Copy the following code, Paste it into a text file and save it. This code can be used to import your settings into another site.",  
    "id" => $shortname."_export_code",  
    "type" => "export",  
    "std" => ""), 
    
array( "type" => "close"),

array( "type" => "close-tab"),


);  

?>