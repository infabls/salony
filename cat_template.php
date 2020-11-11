<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<?php include 'includes/head.php'?>
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
                        <h2 class="sc_section_title sc_item_title line_hide"><?php echo $title; ?></h2>
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
                    <img alt="" src="https://zapis.kz'.$company_data[$i]['avatarUrl'].'">
                    <div class="sc_team_item_hover">
                        <a href="'. $company_data[$i]['urlKey'] . ' " class="sc_team_item_icon icon-email19"></a>
                    </div>
                </div>
                <div class="sc_team_item_info">
                    <h5 class="sc_team_item_title">
                        <a href="'. $company_data[$i]['url'] .'">' . $company_data[$i]['title'] . '</a>
                    </h5>
                    <div class="sc_team_item_position">'.$company_data[$i]['name'].'</div>
                </div>
            </div>

        </div>
                   ');
				} 	
			?>
            <nav id="pagination" class="pagination_wrap pagination_pages">
                        <?php $page = (intval($_GET['page'])); ?>
                        <?php if (!isset($_GET['page'])): ?>
                        <span class="pager_current active ">1</span>
                        <a href="?page=2">2</a>
                        <a href="?page=3">3</a>
                        <a href="?page=2" class="pager_next "></a>
<!--                         <a href="?page=" class="pager_last "></a>
 -->                        <?php endif ?>
                        <?php if (isset($_GET['page'])): ?>
                            <a href="?page=<?php echo $page - 1 ?>" class="pager_prev "></a>
                            <a href="?page=<?php echo $page -1; ?>"><?php echo $page -1; ?></a>
                            <span class="pager_current active "><?php echo $page; ?></span>
                            <a href="?page=<?php echo $page +1; ?>"><?php echo $page +1; ?></a>
                            <a href="?page=<?php echo $page + 1; ?>" class="pager_next "></a>
                            <!-- <a href="#" class="pager_last "></a> -->
                        <?php endif ?>
                    </nav>
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
                                                <span class="sc_empty_space_inner">
                                                </span>
                                            </div>
                                        <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                <div id="map" style="width:500px; height:400px"></div>
                <script type="text/javascript">
                var map;
                DG.then(function () {
                    map = DG.map('map', {
                        center: [43.223976, 76.953636],
                        zoom: 11
                    });
                    <?php 
                        for ($i=0; $i < $company_count; $i++) { 
                        echo(
                            'DG.marker([' . $company_data[$i]['markerY'] . ', ' . $company_data[$i]['markerX'] . ']).addTo(map).bindPopup(\'<a target="_blank" href="https://www.instagram.com/'.$company_data[$i]['instagramProfile'].'">'.$company_data[$i]['name'].'</a>\');'
                        );
                        }
                    ?>
                    var popup = DG.popup()
                        .setLatLng(latlng)
                        .setContent('')
                        .openOn(map);
                    // DG.marker([49.965929, 82.583435]).addTo(map);
                });
            </script>
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