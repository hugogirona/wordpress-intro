<?php

/*
Template Name: Page 'Recette'
*/

?>


<?php get_header(); ?>


<main>

    <style>
        .recipe{
            display: flex;
            flex-direction: row-reverse;
            justify-content: space-between;
        }

        .recipe__ingredients{
            width: 320px;
            padding: 20px;
            background-color: lightgray;
        }
    </style>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <h2><?= get_the_title(); ?></h2>
        <div class="recipe">
            <aside class="recipe__ingredients">
                <h3>
                    Ingrédients
                </h3>
                <p>
                    A completer
                </p>
            </aside>

            <section class="recipe__steps">
                <h3>Etapes</h3>
                <div><?= get_the_content() ?></div>
            </section>
        </div>


    <?php endwhile; else : ?>
        <p><?php esc_html_e('Cette recette n\'existe pas'); ?></p>
    <?php endif; ?>

    <?php get_footer(); ?>
