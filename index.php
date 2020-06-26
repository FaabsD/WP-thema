<?php get_header()?>

<div class="container">
    <div class="row">
        <main class="col-md-8">
            
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- zaken met de posts -->
                        <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                        <div><?php the_excerpt() ?></div>
                    <?php endwhile ?>
                <?php else : ?>
                    <p>Geen berichten gevonden</p>
                <?php endif ?>
        </main>
        <aside class="bg-light col-md-4">
          <?php dynamic_sidebar('aside');?>
        </aside>
    </div>
</div>
<?php get_footer()?>
<!-- TODO verder vanaf video 11: https://blanken5.home.xs4all.nl/WP_themaMaken.html# -->