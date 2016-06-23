<?php
	class cwpConfig{
		public static $admin_page_menu_name ;
		public static $admin_page_title;
		public static $admin_page_header;
		public static $admin_template_directory ;
		public static $admin_template_directory_uri ;
		public static $admin_uri;
		public static $admin_path;
		public static $menu_slug;
		public static $structure;
		public static $review_categories_array;
		public static $categories_array;
		public static $shortname;
		public static $all_review_categories_array;
		public static $all_categories_array;
		public static $categories_ids;

		public static function init(){
			self::$admin_page_menu_name 	 = "Theme Options";
			self::$admin_page_title 		 = "Theme Options";
			self::$admin_page_header	 	 = "Reviewgine Theme Options";
			self::$shortname 			     = "cwp";
			self::$admin_template_directory_uri  = get_template_directory_uri() . '/admin/layout';
			self::$admin_template_directory  = get_template_directory() . '/admin/layout';
			self::$admin_uri  		= 	get_template_directory_uri() . '/admin/'; 
			self::$admin_path 	 	= 	get_template_directory() . '/admin/';
			self::$menu_slug  		= 	"theme_options";
			self::$all_categories_array = array();
			self::$all_review_categories_array = array();
			self::$categories_array = array();
			self::$categories_array = get_categories('hide_empty=0');
			self::$review_categories_array = get_categories('hide_empty=0');

			foreach (self::$categories_array as $categs) {
				self::$all_categories_array[$categs->slug] = $categs->name;
			}
			
			foreach (self::$review_categories_array as $categs) {
				self::$all_review_categories_array[$categs->slug] = $categs->name;
			}

			self::$structure	= array(
						array(
							 "type"=>"tab",
							 "name"=> __("General Options", "cwp"),
							 "options"=>array(

								array(
									"type"=>"title",
									"name"=>__("General", "cwp")
								),

								array(
									
									"type"=>"image",
									"name"=>__("Logo", "cwp"),
									"description"=>__("Upload your logo file. (Recommended: PNG File / Width: 240px - Height: 45px)", "cwp"),
									"id"=>self::$shortname . "_logo",
									"default"=>"/img/" 
								),

								array(
									
									"type"=>"image",
									"name"=>__("Favicon", "cwp"),
									"description"=>__("Upload your favicon file. This icon will appear in your browser's tab left corner.", "cwp"),
									"id"=>self::$shortname . "_favicon",
									"default"=>"" 
								),

								array(
									
									"type"=>"textarea",
									"name"=>__("Custom CSS", "cwp"),
									"description"=>__("This feature allows you to add your own custom CSS code to overwrite or extend the current style.", "cwp"),
									"id"=>self::$shortname . "_custom_css",
									"default"=>""
								),

								array(
									"type"=>"title",
									"name"=>"Home Page"
								),

								array(
									
									"type"=>"select",
									"name"=>__("Main Page Template", "cwp"),
									"description"=>__("Select your prefered main page template. Consult the documentation for more details.", "cwp"),
									"id"=>self::$shortname . "_mpt_template",
									"options"=>array(
										"mpt_review"=>"Default Review Template",
										"mpt_blog_style"=>"Blog Style Review Template",
										"mpt_custom_static_page" => "Custom Static Page"
									),
									"default"=>"mpt_review"
								),

								 array(
									"type"=>"select",
									"name"=>__("Main Page Featured Review Category", "cwp"),
									"description"=>__("Select which review category do you want to be used as Featured.","cwp"),
									"id"=>"cwp_site_categories2",
									"options" =>self::$all_review_categories_array,
									"default" => "uncategorized"
								),

								array(
									"type"=>"radio",
									"name"=>__("Display Carousel on Homepage Template ?","cwp"),
									"description"=>__("Select if you want to display the carousel at the bottom of every homepage template or not.","cwp"),
									"id"=>self::$shortname . "_homepage_templates_carousel",
									"options"=>array(
										"yes"=>__("Display","cwp"),
										"no"=>__("Don't Display","cwp"),
									),
									"default"=>"yes"
								),

								 array(
									"type"=>"select",
									"name"=>__("Homepage Carousel Posts Category","cwp"),
									"description"=>__("From which category do you want the carousel to get the posts ? (Note: You must have at least 5 posts in that category in order for the carousel to display properly)","cwp"),
									"id"=>self::$shortname . "_carousel_posts_category",
									"options"=>self::$all_categories_array,
									"default"=> "uncategorized"
								),
							
							 )
						),

						array(
							"type"=>"tab",
							"name"=>__("Social Networks Configuration","cwp"),
							"options"=>array(
								array(
									 "type"=>"input_text",
									 "name"=>__("Facebook","cwp"),							 
									 "description"=>__("Paste your Facebook Profile URL below:","cwp"),
									 "id"=>self::$shortname . "_social_facebook",
									 "default"=>""
								   ),

								array(
									 "type"=>"input_text",
									 "name"=>__("Twitter","cwp"),							 
									 "description"=>__("Paste your Twitter Profile URL below:","cwp"),
									 "id"=>self::$shortname . "_social_twitter",
									 "default"=>""
								   ),

								array(
									 "type"=>"input_text",
									 "name"=>__("Google+",	"cwp"),						 
									 "description"=>__("Paste your Google+ Profile URL below:","cwp"),
									 "id"=>self::$shortname . "_social_google",
									 "default"=>""
								   ),

								array(
									 "type"=>"input_text",
									 "name"=>__("Pinterest","cwp"),							 
									 "description"=>__("Paste your Pinterest Profile URL below:","cwp"),
									 "id"=>self::$shortname . "_social_pinterest",
									 "default"=>""
								   ),

								array(
									 "type"=>"input_text",
									 "name"=>__("YouTube","cwp"),							 
									 "description"=>__("Paste your YouTube Profile URL below:","cwp"),
									 "id"=>self::$shortname . "_social_youtube",
									 "default"=>""
								   )


												)
						),
						array(
							"type"=>"tab",
							"name"=>__("Layout Settings","cwp"),
							"options"=>array(
								array(
									"type"=>"title",
									"name"=>__("Review Template","cwp")
								),

								
								array(									
									"type"=>"radio",
									"name"=>__("Sticky Post Badge","cwp"),
									"description"=>__("Would you like to display a ribbon on sticky posts?","cwp"),
									"id"=>"cwp_sticky_posts_badge",
									"options"=>array(
										"yes"=>__("Display","cwp"),
										"no"=>__("Don't Display","cwp"),
									),
									"default"=>"yes"
								),

								array(									
									"type"=>"radio",
									"name"=>__("Use and display Slider Revolution Plugin ?","cwp"),
									"description"=>__("Would you like to use and display the Slider Revolution Plugin?","cwp"),
									"id"=>"cwp_use_slider",
									"options"=>array(
										"yes"=>__("Use","cwp"),
										"no"=>__("Don't Use","cwp"),
									),
									"default"=>"no"
								),

								array(
								 "type"=>"input_text",
								 "name"=>__("Footer Copyright Message","cwp"),							 
								 "description"=>__("What message would you like to be displayed in the footer bar.","cwp"),
								 "id"=>"cwp_footer_message",
								 "default"=>"Copyright (C) 2015"
							   ),


												)
						),
											array(
							"type"=>"tab",
							"name"=>"Advertise Settings",
							"options"=>array(
								array(									
									"type"=>"radio",
									"name"=>__("Header 468 x 60 Banner","cwp"),
									"description"=>__("Would you like to display the header banner?","cwp"),
									"id"=>self::$shortname . "_header_banner_bool",
									"options"=>array(
										"yes"=>__("Yes","cwp"),
										"no"=>__("No","cwp"),
									),
									"default"=>"yes"
								),

								array(
									
									"type"=>"image",
									"name"=>__("Header Banner Image","cwp"),
									"description"=>__("Upload the image you want to be displayed in the header's ad spot. Required size: 468px x 60px.","cwp"),
									"id"=>self::$shortname . "_banner_image",
									"default"=> get_stylesheet_directory_uri() . "/images/main-header-ad.jpg" 
								),

								array(
								 "type"=>"input_text",
								 "name"=>__("Header Banner Alternative","cwp"),							 
								 "description"=>__("Short description, this will improve SEO and User Accesibility.","cwp"),
								 "id"=>self::$shortname . "_header_banner_alt",
								 "default"=>"http://"
							   ),

								array(
								 "type"=>"input_text",
								 "name"=>__("Header Banner Link","cwp"),							 
								 "description"=>__("Specify the banner's URL","cwp"),
								 "id"=>self::$shortname . "_header_banner_url",
								 "default"=>"http://"
							   )
							)
						),
						array(
							"type"=>"tab",
							"name"=>__("Integration","cwp"),
							"options"=>array(
								array(
									
									"type"=>"textarea_html",
									"name"=>__("Header Code","cwp"),
									"description"=>__("This feature allows you to add code inside the head.","cwp"),
									"id"=>"cwp_custom_head_code",
									"default"=>""
								),

								array(
									
									"type"=>"textarea_html",
									"name"=>__("Body Code","cwp"),
									"description"=>__("This feature allows you to add code below the body closing tag.","cwp"),
									"id"=>"cwp_custom_body_code",
									"default"=>""
								),

							)
						),

						array(
							"type"=>"tab",
							"name"=>__("Colors","cwp"),
							"options"=>array(

								array(
									"type"=>"title",
									"name"=>__("General","cwp")
								),

								array(
									"type"=>"title",
									"name"=>__("Top Bar","cwp")
								),

								array(	
									"type"=>"color",
									"name"=>__("Header Top Bar Color","cwp"),
									"description"=>__("Select what color do you want to be used for the top bar.","cwp"),
									"id"=>"cwp_templates_topbar_colorid",
									"default"=>"#22262a"
								),

								array(	
									"type"=>"color",
									"name"=>__("Header Top Bar Link Color","cwp"),
									"description"=>__("Select what color do you want to be used for the top bar links.","cwp"),
									"id"=>"cwp_templates_topbar_link_colorid",
									"default"=>"#7f8c97"
								),

								array(
									"type"=>"title",
									"name"=>__("Header","cwp")
								),

								array(	
									"type"=>"color",
									"name"=>__("Header Background Color","cwp"),
									"description"=>__("Select what color do you want to be used as a header background color.","cwp"),
									"id"=>"cwp_templates_header_background_colorid",
									"default"=>"#282e33"
								),

								array(	
									"type"=>"color",
									"name"=>__("Link Hover Color","cwp"),
									"description"=>__("Select what color do you want to be used on hover.","cwp"),
									"id"=>"cwp_link_hover_color",
									"default"=>"#50c1e9"
								),

								array(	
									"type"=>"color",
									"name"=>__("Link Hover Color","cwp"),
									"description"=>__("Select what color do you want to be used on hover.","cwp"),
									"id"=>"cwp_button_hover_color",
									"default"=>"#50c1e9"
								),
							)
						),

		
					);


			 
		}	 
	
	} 
