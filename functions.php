<?php
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails');
        add_post_type_support('page', 'excerpt');
    }

    add_action( 'after_setup_theme', 
    'mytheme_post_thumbnails');
    add_action('init', 'portfolio_post_types');


    
    function wpdocs_custom_excerpt_length(  ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


    function portfolio_post_types(){
            register_post_type('9_02vsTemple', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail'),
                'rewrite' => array('slug' => '9_02vsTemple'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "902vsTemple",
                    'add_new_item' => "Add New 902vsTemple Post",
                    'edit_item' => "Edit 902vsTemple Post",
                    'all_items' => "All 902vsTemple Posts",
                    'singular_name' => "902vsTemple Post"
                ),
                'menu_icon' => "dashicons-portfolio"
            ));   
            register_post_type('9-17vsAT', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail',),
                'rewrite' => array('slug' => '9-17vsAT'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "9-17vsAT ",
                    'add_new_item' => "Add New 9-17vsAT Post",
                    'edit_item' => "Edit  9-17vsAT Posts",
                    'all_items' => "All  9-17vsAT Posts",
                    'singular_name' => "politic"
                ),
                'menu_icon' => "dashicons-portfolio"
            )); 

            register_post_type('10-01vsVA', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail',),
                'rewrite' => array('slug' => '10-01vsVA'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "10-01vsVA",
                    'add_new_item' => "Add New 10-01vsVA",
                    'edit_item' => "Edit 10-01vsVA Post",
                    'all_items' => "All 10-01vsVA Post",
                    'singular_name' => "10-01vsVA Post"
                ),
                'menu_icon' => "dashicons-portfolio"
            ));

            
            register_post_type('10-15vsUNC', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail',),
                'rewrite' => array('slug' => '10-15vsUNC'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "10-15vsUNC",
                    'add_new_item' => "Add New 10-15vsUNC",
                    'edit_item' => "Edit 10-15vsUNC Post",
                    'all_items' => "All 10-15vsUNC Post",
                    'singular_name' => "10-15vsUNC Post"
                ),
                'menu_icon' => "dashicons-portfolio"
            ));


            register_post_type('11-12vsVT', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail',),
                'rewrite' => array('slug' => '11-12vsVT'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "11-12vsVT",
                    'add_new_item' => "Add New 11-12vsVT",
                    'edit_item' => "Edit 11-12vsVT Post",
                    'all_items' => "All 11-12vsVT Post",
                    'singular_name' => "11-12vsVT Post"
                ),
                'menu_icon' => "dashicons-portfolio"
            ));


            register_post_type('11-26vsWakeForest', array(
                'taxonomies'  => array( 'category' ),
                'show_in_rest' => true, 
                'supports' => array('title', 'editor', 'excerpt','thumbnail',),
                'rewrite' => array('slug' => '11-26vsWakeForest'),
                'has_archive' => true,
                'public' => true,
                'show_in_rest' => true,
                'labels' => array(
                    'name' => "11-26vsWakeForest",
                    'add_new_item' => "Add New 11-26vsWakeForest",
                    'edit_item' => "Edit 11-26vsWakeForest Post",
                    'all_items' => "All 11-26vsWakeForest Post",
                    'singular_name' => "11-26vsWakeForest Post"
                ),
                'menu_icon' => "dashicons-portfolio"
            ));

        
        }

  

    
?>