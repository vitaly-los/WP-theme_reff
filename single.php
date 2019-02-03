<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="com-md-12">
                <div class="card">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h1 class="card-title"><?php the_title(); ?></h1>
                        <p class="card-text"><?php the_content(''); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php get_footer(); ?>
    </div>
</div>