<?php 
/*
    Template Name: General Template
*/
?>

<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<!-- Dynamic Content -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="general-template">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                ?>
                                <article>
                                    <h2><?php the_title() ?></h2>
                                    <?php the_content(); ?>
                                </article>
                                <?php
                            }
                        }
                        else {
                            ?>
                            <p>Nothing to display.</p>
                        <?php }
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>