<article>
    <h2><?php the_title() ?></h2>
    <div class="meta-info">
        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link() ?></p>
        <p>Categories: <?php the_category(' ') ?></p>
        <p>Tags: <?php the_tags(' ', ', ') ?></p>
    </div>
    <?php the_content(); ?>
</article>