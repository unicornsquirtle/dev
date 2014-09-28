<?php
/* Template variables */
$template = array(
    'name'          => 'DesignSlap',
    'version'       => '1.0',
    'author'        => 'madjake45',
    'robots'        => 'noindex, nofollow',
    'title'         => 'DesignSlap - The Custom Made Order Platform',
    'description'   => 'DesignSlap Order Platform is a Responsive Order Platform made for DesignSlap. By DesignSlap (Well To Be Precise madjake45)',
    // 'navbar-default'         for a light header
    // 'navbar-inverse'         for a dark header
    'header_navbar' => 'navbar-inverse',
    // ''                       empty for a static header
    // 'navbar-fixed-top'       for a top fixed header / fixed sidebars
    // 'navbar-fixed-bottom'    for a bottom fixed header / fixed sidebars
    'header'        => 'navbar-fixed-top',
    // ''                                               for a full main and alternative sidebar hidden by default (> 991px)
    // 'sidebar-visible-lg'                             for a full main sidebar visible by default (> 991px)
    // 'sidebar-partial'                                for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-partial sidebar-visible-lg'             for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-alt-visible-lg'                         for a full alternative sidebar visible by default (> 991px)
    // 'sidebar-alt-partial'                            for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
    // 'sidebar-alt-partial sidebar-alt-visible-lg'     for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)
    // 'sidebar-partial sidebar-alt-partial'            for both sidebars partial which open on mouse hover, hidden by default (> 991px)
    // 'sidebar-no-animations'                          add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!
    'sidebar'       => 'sidebar-partial sidebar-visible-lg',
    // ''                       empty for a static footer
    // 'footer-fixed'           for a fixed footer
    'footer'       => 'footer-fixed',
    // ''                       empty for default style
    // 'style-alt'              for an alternative main style (affects main page background as well as blocks style)
    'main_style'    => '',
    // 'night', 'amethyst', 'modern', 'autumn', 'flatie', 'spring', 'fancy', 'fire' or '' leave empty for the Default Blue theme
    'theme'         => 'flatie',
    // ''                       for default content in header
    // 'horizontal-menu'        for a horizontal menu in header
    // This option is just used for feature demostration and you can remove it if you like. You can keep or alter header's content in page_head.php
    'header_content'=> '',
    'active_page'   => basename($_SERVER['PHP_SELF'])
);

/* Primary navigation array (the primary navigation will be created automatically based on this array, up to 3 levels deep) */
$primary_nav = array(
    array(
        'name'  => 'Dashboard',
        'url'   => 'index.php',
        'icon'  => 'gi gi-stopwatch'
    ),
    array(
        'name'  => 'Widget Kit',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>' .
                   '<a href="javascript:void(0)" data-toggle="tooltip" title="Create the most amazing pages with the widget kit!"><i class="gi gi-lightbulb"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Statistics',
        'url'   => 'page_widgets_stats.php',
        'icon'  => 'gi gi-charts'
    ),
    array(
        'name'  => 'Social',
        'url'   => 'page_widgets_social.php',
        'icon'  => 'gi gi-share_alt'
    ),
    array(
        'name'  => 'Media',
        'url'   => 'page_widgets_media.php',
        'icon'  => 'gi gi-film'
    ),
    array(
        'name'  => 'Design Kit',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
        'url'   => 'header'
    ),
    array(
        'name'  => 'User Interface',
        'icon'  => 'gi gi-certificate',
        'sub'   => array(
            array(
                'name'  => 'Grid &amp; Blocks',
                'url'   => 'page_ui_grid_blocks.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'page_ui_typography.php'
            ),
            array(
                'name'  => 'Buttons &amp; Dropdowns',
                'url'   => 'page_ui_buttons_dropdowns.php'
            ),
            array(
                'name'  => 'Navigation &amp; More',
                'url'   => 'page_ui_navigation_more.php'
            ),
            array(
                'name'  => 'Horizontal Menu',
                'url'   => 'page_ui_horizontal_menu.php'
            ),
            array(
                'name'  => 'Progress &amp; Loading',
                'url'   => 'page_ui_progress_loading.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'page_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => 'Forms',
        'icon'  => 'gi gi-notes_2',
        'sub'   => array(
            array(
                'name'  => 'General',
                'url'   => 'page_forms_general.php'
            ),
            array(
                'name'  => 'Components',
                'url'   => 'page_forms_components.php'
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'page_forms_validation.php'
            ),
            array(
                'name'  => 'Wizard',
                'url'   => 'page_forms_wizard.php'
            )
        )
    ),
    array(
        'name'  => 'Tables',
        'icon'  => 'gi gi-table',
        'sub'   => array(
            array(
                'name'  => 'General',
                'url'   => 'page_tables_general.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'page_tables_responsive.php'
            ),
            array(
                'name'  => 'Datatables',
                'url'   => 'page_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => 'Icon Sets',
        'icon'  => 'gi gi-cup',
        'sub'   => array(
            array(
                'name'  => 'Font Awesome',
                'url'   => 'page_icons_fontawesome.php'
            ),
            array(
                'name'  => 'Glyphicons Pro',
                'url'   => 'page_icons_glyphicons_pro.php'
            )
        )
    ),
    array(
        'name'  => 'Page Layouts',
        'icon'  => 'gi gi-show_big_thumbnails',
        'sub'   => array(
            array(
                'name'  => 'Static',
                'url'   => 'page_layout_static.php'
            ),
            array(
                'name'  => 'Static + Fixed Footer',
                'url'   => 'page_layout_static_fixed_footer.php'
            ),
            array(
                'name'  => 'Fixed Top Header',
                'url'   => 'page_layout_fixed_top.php'
            ),
            array(
                'name'  => 'Fixed Top Header + Footer',
                'url'   => 'page_layout_fixed_top_footer.php'
            ),
            array(
                'name'  => 'Fixed Bottom Header',
                'url'   => 'page_layout_fixed_bottom.php'
            ),
            array(
                'name'  => 'Fixed Bottom Header + Footer',
                'url'   => 'page_layout_fixed_bottom_footer.php'
            ),
            array(
                'name'  => 'Partial Main Sidebar',
                'url'   => 'page_layout_static_main_sidebar_partial.php'
            ),
            array(
                'name'  => 'Visible Main Sidebar',
                'url'   => 'page_layout_static_main_sidebar_visible.php'
            ),
            array(
                'name'  => 'Partial Alternative Sidebar',
                'url'   => 'page_layout_static_alternative_sidebar_partial.php'
            ),
            array(
                'name'  => 'Visible Alternative Sidebar',
                'url'   => 'page_layout_static_alternative_sidebar_visible.php'
            ),
            array(
                'name'  => 'No Sidebars',
                'url'   => 'page_layout_static_no_sidebars.php'
            ),
            array(
                'name'  => 'Both Sidebars Partial',
                'url'   => 'page_layout_static_both_partial.php'
            ),
            array(
                'name'  => 'Animated Sidebar Transitions',
                'url'   => 'page_layout_static_animated.php'
            )
        )
    ),
    array(
        'name'  => 'Develop Kit',
        'opt'   => '<a href="javascript:void(0)" data-toggle="tooltip" title="Quick Settings"><i class="gi gi-settings"></i></a>',
        'url'   => 'header',
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'fa fa-wrench',
        'sub'   => array(
            array(
                'name'  => '3 Level Menu',
                'sub'   => array(
                    array(
                        'name'  => 'Link 1',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Link 2',
                        'url'   => '#'
                    )
                )
            ),
            array(
                'name'  => 'Maps',
                'url'   => 'page_comp_maps.php'
            ),
            array(
                'name'  => 'Charts',
                'url'   => 'page_comp_charts.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'page_comp_gallery.php'
            ),
            array(
                'name'  => 'Carousel',
                'url'   => 'page_comp_carousel.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'page_comp_calendar.php'
            ),
            array(
                'name'  => 'CSS3 Animations',
                'url'   => 'page_comp_animations.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'page_comp_syntax_highlighting.php'
            )
        )
    ),
    array(
        'name'  => 'Ready Pages',
        'icon'  => 'gi gi-brush',
        'sub'   => array(
            array(
                'name'  => 'Errors',
                'sub'   => array(
                    array(
                        'name'  => '400',
                        'url'   => 'page_ready_400.php'
                    ),
                    array(
                        'name'  => '401',
                        'url'   => 'page_ready_401.php'
                    ),
                    array(
                        'name'  => '403',
                        'url'   => 'page_ready_403.php'
                    ),
                    array(
                        'name'  => '404',
                        'url'   => 'page_ready_404.php'
                    ),
                    array(
                        'name'  => '500',
                        'url'   => 'page_ready_500.php'
                    ),
                    array(
                        'name'  => '503',
                        'url'   => 'page_ready_503.php'
                    )
                )
            ),
            array(
                'name'  => 'Get Started',
                'sub'   => array(
                    array(
                        'name'  => 'Blank',
                        'url'   => 'page_ready_blank.php'
                    ),
                    array(
                        'name'  => 'Blank Alternative',
                        'url'   => 'page_ready_blank_alt.php'
                    )
                )
            ),
            array(
                'name'  => 'Search Results (4)',
                'url'   => 'page_ready_search_results.php'
            ),
            array(
                'name'  => 'Article',
                'url'   => 'page_ready_article.php'
            ),
            array(
                'name'  => 'User Profile',
                'url'   => 'page_ready_user_profile.php'
            ),
            array(
                'name'  => 'Contacts',
                'url'   => 'page_ready_contacts.php'
            ),
            array(
                'name'  => 'e-Learning',
                'sub'   => array(
                    array(
                        'name'  => 'Courses',
                        'url'   => 'page_ready_elearning_courses.php'
                    ),
                    array(
                        'name'  => 'Course - Lessons',
                        'url'   => 'page_ready_elearning_course_lessons.php'
                    ),
                    array(
                        'name'  => 'Course - Lesson Page',
                        'url'   => 'page_ready_elearning_course_lesson.php'
                    )
                )
            ),
            array(
                'name'  => 'Message Center',
                'sub'   => array(
                    array(
                        'name'  => 'Inbox',
                        'url'   => 'page_ready_inbox.php'
                    ),
                    array(
                        'name'  => 'Compose Message',
                        'url'   => 'page_ready_inbox_compose.php'
                    ),
                    array(
                        'name'  => 'View Message',
                        'url'   => 'page_ready_inbox_message.php'
                    )
                )
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'page_ready_timeline.php'
            ),
            array(
                'name'  => 'FAQ',
                'url'   => 'page_ready_faq.php'
            ),
            array(
                'name'  => 'Pricing Tables',
                'url'   => 'page_ready_pricing_tables.php'
            ),
            array(
                'name'  => 'Invoice',
                'url'   => 'page_ready_invoice.php'
            ),
            array(
                'name'  => 'Forum (3)',
                'url'   => 'page_ready_forum.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'page_ready_lock_screen.php'
            ),
            array(
                'name'  => 'Login',
                'url'   => 'login.php'
            ),
            array(
                'name'  => 'Register',
                'url'   => 'login.php#register'
            )
        )
    )
);