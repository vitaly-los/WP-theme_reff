<?php get_header(); ?>

<h1>Hello, world!</h1>

<?php if (have_posts()) : while (have_posts()): the_post(); ?>
        <!-- post here -->
    <?php endwhile; ?>

<?php else : ?>
    <p>No post's yet...</p>
<?php endif; ?>
<?php get_footer(); ?>