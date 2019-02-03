<?php get_header(); ?>

<div class="container">
    <div class="row">

        <?php if (have_posts()) : while (have_posts()): the_post(); ?>

                <div class="com-md-12">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                            <img src="https://picsum.photos/150/150" width="150" height="150" alt="">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <p>No post's yet...</p>
        <?php endif; ?>
        <?php get_footer(); ?>
    </div>
</div>