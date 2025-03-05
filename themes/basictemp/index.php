<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Dynamic Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <h1>Blog</h1>
                <div class="container">
                    <div class="blog-items">
                        <?php 
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('parts/content');
                                }
                                the_posts_pagination();
                            }
                            else {
                                ?>
                                <p>Nothing to display.</p>
                            <?php }
                        ?>
                    </div>
                    <?php get_sidebar() ?>
                </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>