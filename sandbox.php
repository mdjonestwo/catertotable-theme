<?php get_header()?>
    <div class="wrapper">
        <div class="title">
            <h1>Game Day</h1>
            <h4>Select you game day to start your day</h4>
        </div>
        <div class="game-days">  
        <?php 
        $blogpost = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => '11-26vsWakeForest'
        ));

        while($blogpost->have_posts()){
            $blogpost->the_post(); ?>     
            <a href="<?php the_permalink() ?>">
                <h2> <?php the_title(); ?></h2>
                <div class="entree-list">
                   <p><?php the_excerpt(); ?></p>
                </div>
            </a>
            <?php }
                ?>
        </div>

    </div>
<?php get_footer()?>




<?php


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

    