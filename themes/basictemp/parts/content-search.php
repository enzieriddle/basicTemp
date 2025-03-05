<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if (get_post_type() == 'post') { ?>
            <div class="meta-info">
                <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                <?php if (has_category()) { ?>
                <p>Categories: <?php the_category(' '); ?></p>
                <?php } ?>
                <?php if (has_tag()) {?>
                <p>Tags: <?php the_tags(' ', ', '); ?></p>
                <?php } ?>    
            </div>
        <?php } ?>
        
    </header>
    <div class="content">
        <?php the_excerpt(); ?>
    </div>
</article>