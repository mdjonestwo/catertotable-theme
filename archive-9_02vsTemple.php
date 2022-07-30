<?php get_header()?>
    <div class="wrapper">
        <div class="title">
            <h1>Main Entree</h1>
            <h4>Click the entree you would like to order</h4>
        </div>
        <div class="game-days">  
        <?php 
        $blogpost = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => '9_02vsTemple'
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