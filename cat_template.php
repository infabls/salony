<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $descr; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="generator" content="2018.0.0.379">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel='stylesheet' href='css/admin_icon.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Montserrat:400,700|Mr+De+Haviland|Open+Sans:300,400,600,700,800|Raleway:100,200,300,300i,400,400i,500,600,700,700i,800,900&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese' type='text/css' media='all' />
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css?ver=4.3.0' type='text/css' media='all' />
    <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/core.animation.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/instagram-widget.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/skin.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom-style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/skin.responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom.responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='js/vendor/grid.layout/grid.layout.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/core.messages.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/plugins.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/custom.css' type='text/css' media='all' />
</head>

<body class="ourstaff page body_filled theme_skin_less article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide preloader wpb-js-composer sc_responsive">
<div id="page_preloader"></div>
<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
		<?php include 'includes/mmenu.php'?>
        <header class="top_panel_wrap top_panel_style_7 scheme_original">
            <div class="top_panel_wrap_inner top_panel_inner_style_7 top_panel_position_above">
                <div class="top_panel_middle">
                    <div class="content_wrap">
                        <div class="column-1_3 contact_logo">
                            <div class="logo">
                                <a href="/">
                                    <img src="images/Logo.png" class="logo_main" alt="" width="238" height="56">
                                    <img src="images/Logo.png" class="logo_fixed" alt="" width="238" height="56">
                                </a>
                            </div>
                        </div>
<?php include 'includes/menu.php'?>
                    </div>
                </div>
            </div>
        </header>
        <section class="top_panel_image">
            <div class="top_panel_image_hover"></div>
            <div class="top_panel_image_header">
                <div class="top_panel_image_icon icon-book-open"></div>
                <h1 class="top_panel_image_title">Our Staff</h1>
                <div class="breadcrumbs">
                    <a class="breadcrumbs_item home" href="index.html">Home</a>
                    <span class="breadcrumbs_delimiter"></span>
                    <span class="breadcrumbs_item current">Our Staff</span>
                </div>
            </div>
        </section>
        <div class="page_content_wrap page_paddings_no">
            <div class="content_wrap">
                <div class="content">
<article class="post_item post_item_single page">
    <section class="post_content">
        <div class="sc_row row sc_row-fluid">
            <div class="column sc_column_container sc_col-sm-12">
                <div class="sc_column-inner ">
                    <div class="wrapper">
                        <div class="sc_empty_space em_height_7-5">
                            <span class="sc_empty_space_inner"></span>
                        </div>
                        <div class="sc_section sc_section_block">
                            <div class="sc_section_inner">
                        <h6 class="sc_section_subtitle sc_item_subtitle">Our Experts</h6>
                        <h2 class="sc_section_title sc_item_title line_hide">START YOUR TREATMENT TODAY!</h2>
                            <div class="sc_section_content_wrap">
                                <div id="sc_team_332_wrap" class="sc_team_wrap">
                                    <div id="sc_team_332" class="sc_team sc_team_style_team-3 aligncenter">
                    <div class="sc_columns columns_wrap">


        	                                      			<?php 
				// цикл вывода списка компаний
				for ($i=0; $i < $company_count; $i++) { 
					echo('	
        <div class="column-1_4 column_padding_bottom">
	
            <div id="sc_team_332_1" class="sc_team_item">
                <div class="sc_team_item_avatar">
                    <img alt="" src="images/370x370.jpg">
                    <div class="sc_team_item_hover">
                        <a href="single-team.html" class="sc_team_item_icon icon-email19"></a>
                    </div>
                </div>
                <div class="sc_team_item_info">
                    <h5 class="sc_team_item_title">
                        <a href="'. $company_data[$i]['url'] .'">' . $company_data[$i]['title'] . '</a>
                    </h5>
                    <div class="sc_team_item_position">Massagist</div>
                </div>
            </div>

        </div>
                   ');
				} 	
			?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
         
                                            <div class="sc_empty_space em_height_5">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-sc-full-width="true" data-sc-full-width-init="false" class="sc_row row sc_row-fluid sc_custom_1459347818729 inverse_colors">
                                <div class="column sc_column_container sc_col-sm-12">
                                    <div class="sc_column-inner ">
                                        <div class="wrapper">
                                            <div class="sc_empty_space em_height_11-4">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                            <div id="sc_call_to_action_765" class="sc_call_to_action sc_call_to_action_style_2 sc_call_to_action_align_center">
                                                <div class="sc_call_to_action_info">
                                                    <h6 class="sc_call_to_action_subtitle sc_item_subtitle">Our Special Offer</h6>
                                                    <h2 class="sc_call_to_action_title sc_item_title">You owe yourself this moment</h2>
                                                    <div class="sc_call_to_action_descr sc_item_descr">Visit one of our multiple sessions of relaxation.</div>
                                                </div>
                                                <div class="sc_call_to_action_buttons sc_item_buttons">
                                                    <div class="sc_call_to_action_button sc_item_button">
                                                        <a href="booking.html" class="sc_button sc_button_square sc_button_style_filled sc_button_size_base">
                                                            <div>
                                                                <span class="first">make an appointment</span>
                                                                <span class="second">make an appointment</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_empty_space em_height_10-5">
                                                <span class="sc_empty_space_inner"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_row-full-width"></div>
                        </section>
                    </article>
                    <section class="related_wrap related_wrap_empty"></section>
                </div>
            </div>
        </div>
<?php include 'includes/footer.php'?>
</body>

</html>