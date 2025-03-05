<?php getheader(); ?>
       <!-- Dynamic Content -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                        <div class="container">
                            <div class="page-item">
                                <?php 
                                        while (have_posts()) {
                                            the_post();
                                            ?>
                                            <article>
                                                <header>
                                                <h1><?php the_title() ?></h1>z
                                                </header>
                                                
                                                <?php the_content(); ?>
                                            </article>
                                            <?php
                                        }
                                ?>
                            </div>
                        </div>
                </main>
            </div>
        </div>
<?php getfooter(); ?>