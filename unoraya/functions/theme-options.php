<?php

add_action('init','themnific_options');  
function themnific_options(){
	
// VARIABLES
$themename = "Respo";
$shortname = "themnific";

// Populate option in array for use in theme 
global $themnific_options; 
$themnific_options = get_option('themnific_options');

$GLOBALS['template_path'] = get_template_directory_uri();;

//Access the WordPress Categories via an Array
$themnific_categories = array();  
$themnific_categories_obj = get_categories('hide_empty=0');
foreach ($themnific_categories_obj as $themnific_cat) {
    $themnific_categories[$themnific_cat->cat_ID] = $themnific_cat->cat_name;}
$categories_tmp = array_unshift($themnific_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$themnific_pages = array();
$themnific_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($themnific_pages_obj as $themnific_page) {
    $themnific_pages[$themnific_page->ID] = $themnific_page->post_name; }
$themnific_pages_tmp = array_unshift($themnific_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 


//Stylesheets Reader
$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}
// Set the Options Array
$bgurl =  get_template_directory_uri() . '/functions/images/bg';
//More Options
$all_uploads_path =  home_url() . '/wp-content/uploads/';
$all_uploads = get_option('themnific_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// THIS IS THE DIFFERENT FIELDS
$options = array();   

$options[] = array( "name" => "General Settings",
                    "type" => "heading");

$options[] = array( "name" => "Custom Logo",
					"desc" => "Upload a logo for your theme, or specify the image address of your online logo. (http://yoursite.com/logo.png)",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "upload");    

$options[] = array( "name" => "Custom Favicon",
					"desc" => "Upload a 16px x 16px Png/Gif image that will represent your website's favicon.",
					"id" => $shortname."_custom_favicon",
					"std" => "",
					"type" => "upload"); 
                                               
$options[] = array( "name" => "Tracking Code",
					"desc" => "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");        

$options[] = array( "name" => "Show Categories menu",
                    "desc" => "Check to show categories menu in header.",
                    "id" => $shortname."_cat_menu",
                    "std" => "false",
                    "type" => "checkbox");

					
$options[] = array( "name" => "Disable Shordcodes",
					"desc" => "Disable shordcodes if you don't want to use this feature. Improve Website performance.",
					"id" => $shortname."_disable_shortcodes",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => "Disable Google Webfonts",
					"desc" => "Disable webfonts if you don't want to use this feature. Improve Website performance.",
					"id" => $shortname."_dis_goofonts",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array("name" => "Main Title",
					"desc" => "Enter title heading.",
					"id" => $shortname."_tagline",
					"std" => "",
					"type" => "textarea");	
					
					

// general layout

$options[] = array( "name" => "General Layout",
					"type" => "heading");   

$options[] = array( "name" => "Disable Sidebar tabs",
					"desc" => "Check to disable area",
					"id" => $shortname."_dis_tabs",
					"std" => "false",
					"type" => "checkbox");

$options[] = array( "name" => "Disable Social Networks",
					"desc" => "Check to disable area",
					"id" => $shortname."_dis_social",
					"std" => "false",
					"type" => "checkbox");
					
$options[] = array( "name" => "Disable Footer Widgets",
					"desc" => "Check to disable area",
					"id" => $shortname."_dis_foowidgets",
					"std" => "false",
					"type" => "checkbox");
					                        
// primary styling

$options[] = array( "name" => " Primary Styling - Body",
					"type" => "heading");
					
					
$options[] = array( "name" => "General Text Font Style",
					"desc" => "Select the typography used in general text. <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_text",
					"std" => array('size' => '13','face' => 'Georgia, serif','style' => 'normal','color' => '#999999'),
					"type" => "typography"); 

					
$options[] = array( "name" =>  "Link Color",
					"desc" => "Pick a custom color for links. e.g. #585a66",
					"id" => "themnific_link_color",
					"std" => "#585a66",
					"type" => "color");     

$options[] = array( "name" =>  "Link Hover Color & Hover Border Color",
					"desc" => "Pick a custom color for links (hover). #73b8f5",
					"id" => "themnific_link_hover_color",
					"std" => "#73b8f5",
					"type" => "color"); 
					
$options[] = array( "name" =>  "Text Shadows",
					"desc" => "Pick a custom color for text shadows. e.g. #fff",
					"id" => "themnific_shadows_color",
					"std" => "#fff",
					"type" => "color");   
					
$options[] = array( "name" =>  "Borders",
					"desc" => "Pick a custom color for text shadows. e.g. #fff",
					"id" => "themnific_border_color",
					"std" => "#ddd",
					"type" => "color"); 
				
																					  
	
// secondary styling	
	
$options[] = array( "name" => "Secondary Styling - Header, Footer",
					"type" => "heading");
					
 
$options[] = array( "name" =>  "Slider & Footer Background Color",
					"desc" => "Pick a custom color for background color of the theme e.g. #32333d",
					"id" => "themnific_custom_color",
					"std" => "#353535",
					"type" => "color"); 

					
$options[] = array( "name" => "Secondary Text Font Style",
					"desc" => "Select the typography for header and footer <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_text_sec",
					"std" => array('size' => '14','face' => 'Arial, sans-serif','style' => 'normal','color' => '#fff'),
					"type" => "typography");  
     
					
$options[] = array( "name" =>  "Secondary Link Color",
					"desc" => "Pick a custom color for links in slider, footer and headings area. #f0f0f0",
					"id" => "themnific_sec_link_color",
					"std" => "#f0f0f0",
					"type" => "color");     

$options[] = array( "name" =>  "Secondary Link Hover Color",
					"desc" => "Pick a custom color for links (hover) in slider, footer and headings area. e.g. #fff",
					"id" => "themnific_sec_link_hover_color",
					"std" => "#fff",
					"type" => "color");       
					

$options[] = array( "name" =>  "Secondary Text Shadows",
					"desc" => "Pick a custom color for text shadows. e.g. #fff",
					"id" => "themnific_shadows_color_sec",
					"std" => "#000",
					"type" => "color");  

			

$options[] = array( "name" => "Secondary Background overlay",
                    "desc" => "Choose bg overlay.",
                    "id" => $shortname."_body_bg_sec",
					"type" => "select2",
					"options" => array(
					"" => "None",
					"bg-line1.png" => "Line 1",
					"bg-line2.png" => "Line 2", 
					"bg-line3.png" => "Line 3", 
					"bg-line4.png" => "Line 4", 
					"bg-line5.png" => "Line 5", 
					"bg-square1.png" => "Square 1",
					"bg-square2.png" => "Square 2",
					"bg-square3.png" => "Square 3",
					"bg-dots1.png" => "Dots",
					"bg-zig.png" => "Zig Zag", 
					) );
	

// other styling	
	
$options[] = array( "name" => "Other Styling - Elements & Alternatives",
					"type" => "heading");				     


$options[] = array( "name" =>  "Alternative Background Color",
					"desc" => "Pick a custom color for background color of the theme e.g. #32333d",
					"id" => "themnific_thi_body_color",
					"std" => "#b3ac9f",
					"type" => "color"); 

					
$options[] = array( "name" =>  "Alternative Text Color",
					"desc" => "Pick a custom color for text in alternative section. e.g. #fff",
					"id" => "themnific_text_color_alter",
					"std" => "#000",
					"type" => "color");  	

$options[] = array( "name" =>  "Alternative Link Color",
					"desc" => "Pick a custom color for links in alternative section. e.g. #fff",
					"id" => "themnific_link_color_alter",
					"std" => "#000",
					"type" => "color");  					
					
$options[] = array( "name" =>  "Alternative Link Hover Color",
					"desc" => "Pick a custom color for links (hover) in navigation. e.g. #fff",
					"id" => "themnific_thi_link_hover_color",
					"std" => "#fff",
					"type" => "color");       
					

$options[] = array( "name" =>  "Alternative Text Shadows",
					"desc" => "Pick a custom color for text shadows. e.g. #fff",
					"id" => "themnific_shadows_color_thi",
					"std" => "#fff",
					"type" => "color");  
					
					


// typography

$options[] = array( "name" => "Headings Typography",
					"type" => "heading");    

$options[] = array( "name" => "H1 Font Style",
					"desc" => "Select the typography you want for heading H1. <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_h1",
					"std" => array('size' => '28','face' => 'Georgia, serif','style' => 'normal','color' => '#222222'),
					"type" => "typography");  

$options[] = array( "name" => "H2 Font Style",
					"desc" => "Select the typography you want for heading H2. <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_h2",
					"std" => array('size' => '24','face' => 'Georgia, serif','style' => 'normal','color' => '#222222'),
					"type" => "typography");  

$options[] = array( "name" => "H3 Font Style",
					"desc" => "Select the typography you want for heading H3 <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_h3",
					"std" => array('size' => '20','face' => 'Georgia, serif','style' => 'normal','color' => '#222222'),
					"type" => "typography"); 

$options[] = array( "name" => "H4 Font Style",
					"desc" => "Select the typography you want for heading H4. <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_h4",
					"std" => array('size' => '16','face' => 'Georgia, serif','style' => 'normal','color' => '#222222'),
					"type" => "typography");  
					
$options[] = array( "name" => "H5 & H6 Font Style",
					"desc" => "Select the typography you want for heading H5 and H6. <br />* semi-safe font <br />** @font-face rule <br />*** Google Webfonts (Must be allowed in General Settings tab).",
					"id" => $shortname."_font_h5",
					"std" => array('size' => '14','face' => 'Georgia, serif','style' => 'normal','color' => '#222222'),
					"type" => "typography"); 



// static featured

$options[] = array( "name" => "Slider and featured sections",
					"type" => "heading");  
					


$options[] = array( "name" => "Slider Category (Homepage)",
					"desc" => "Select a Category for Slider 1. (upload images to the post content).",
					"id" => $shortname."_slider1_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $themnific_categories);

$options[] = array( "name" => "Disable Slider",
                    "desc" => "",
                    "id" => $shortname."_slider_dis",
                    "std" => "false",
                    "type" => "checkbox");					  



// social networks	

$options[] = array( "name" => "Social Networks",
    				"type" => "heading");


$options[] = array( "name" => "Facebook",
					"desc" => "",
					"id" => $shortname."_socials_fa",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Twitter",
					"desc" => "",
					"id" => $shortname."_socials_tw",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "You Tube",
					"desc" => "",
					"id" => $shortname."_socials_yo",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Vimeo",
					"desc" => "",
					"id" => $shortname."_socials_vi",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Tumblr",
					"desc" => "",
					"id" => $shortname."_socials_tu",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Deviant Art",
					"desc" => "",
					"id" => $shortname."_socials_de",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Flickr",
					"desc" => "",
					"id" => $shortname."_socials_fl",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Linked In",
					"desc" => "",
					"id" => $shortname."_socials_li",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Last FM",
					"desc" => "",
					"id" => $shortname."_socials_la",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Myspace",
					"desc" => "",
					"id" => $shortname."_socials_my",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Posterous",
					"desc" => "",
					"id" => $shortname."_socials_po",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Spotify",
					"desc" => "",
					"id" => $shortname."_socials_sp",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Skype",
					"desc" => "",
					"id" => $shortname."_socials_sk",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Yahoo",
					"desc" => "",
					"id" => $shortname."_socials_ya",
					"std" => "",
					"type" => "text");

$options[] = array( "name" => "Delicious",
					"desc" => "",
					"id" => $shortname."_socials_dl",
					"std" => "",
					"type" => "text");



					
// footer
$options[] = array( "name" => "Footer",
                    "type" => "heading");
					
					
$options[] = array( "name" => "Enable Custom Footer (Left)",
					"desc" => "Activate to add the custom text below to the theme footer.",
					"id" => $shortname."_footer_left",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Custom Text (Left)",
					"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
					"id" => $shortname."_footer_left_text",
					"std" => "<p></p>",
					"type" => "textarea");
	
						
$options[] = array( "name" => "Enable Custom Footer (Right)",
					"desc" => "Activate to add the custom text below to the theme footer.",
					"id" => $shortname."_footer_right",
					"std" => "false",
					"type" => "checkbox");    

$options[] = array( "name" => "Custom Text (Right)",
					"desc" => "Custom HTML and Text that will appear in the footer of your theme.",
					"id" => $shortname."_footer_right_text",
					"std" => "<p></p>",
					"type" => "textarea");





							                        
update_option('themnific_template',$options);      
update_option('themnific_themename',$themename);   
update_option('themnific_shortname',$shortname);

                                     
// Themnific Metabox Options
$themnific_metaboxes = array();

$themnific_metaboxes[] = array (	"name" => "image",
							"label" => "Image",
							"type" => "upload",
							"desc" => "Upload file here...");							
    
update_option('themnific_custom_template',$themnific_metaboxes);      

}

?>