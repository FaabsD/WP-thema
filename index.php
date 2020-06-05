<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <!-- zaken met de posts -->
        <h3><?php the_title() ?></h3>
        <div><?php the_content() ?></div>
    <?php endwhile ?>
<?php else : ?>

<?php endif ?>

<!-- TODO verder vanaf video 3: https://blanken5.home.xs4all.nl/WP_themaMaken.html# -->