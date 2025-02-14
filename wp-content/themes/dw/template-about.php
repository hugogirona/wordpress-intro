<?php

/*
Template Name: Page 'A propos'
*/

?>


<?php get_header(); ?>


    <main>
    <aside>
        <h2> A propose de moi</h2>
    </aside>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div><?= get_the_content(); ?> </div>

<?php endwhile; else : ?>
    <p><?php esc_html_e('La page est vide.'); ?></p>
<?php endif; ?>

    <?php get_footer(); ?>