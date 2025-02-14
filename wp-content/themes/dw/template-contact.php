<?php

/*
Template Name: Page 'Contact'
*/

?>


<?php get_header(); ?>


    <main>
    <aside>
        <ul style="list-style-type:none; display: flex; flex-direction: row; padding: 1.5em 3em ; background-color: rgba(49,49,49); color: white;">
            <li style="margin-right: 2em; font-size: 1.2em; flex-grow: 1">Me contacter</li>
            <li style="margin-right: 2em">Github</li>
            <li style="margin-right: 2em">Instagram</li>
            <li>LinkedIn</li>
        </ul>
    </aside>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div><?= get_the_content(); ?> </div>

<?php endwhile; else : ?>
    <p><?php esc_html_e('La page est vide.'); ?></p>
<?php endif; ?>

    <?php get_footer(); ?>