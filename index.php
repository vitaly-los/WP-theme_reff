<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()): the_post(); ?>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </div>
                                <div class="card-body">

                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('thumbnail', ['class' => 'float-left mr-4']); ?>
                                    <?php else : ?>
                                        <img src="https://picsum.photos/150/150" width="150" height="150" class="float-left mr-4" alt="">
                                    <?php endif; ?>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php the_posts_pagination(['type' => 'list']); ?>
                <?php else : ?>
                    <p>No post's yet...</p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>


    </div>
</div>

<?php
$query = new WP_Query('cat=27,29&posts_per_page=5');
if ($query->have_posts()) : while ($query->have_posts()): $query->the_post();
        ?>
        <h3><?php the_title(); ?></h3>
        <?php
    endwhile;
endif;
?>

<?php get_footer(); ?>