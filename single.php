<?php get_header()?>

<div class="container">
    <div class="row">
        <main class="col-md-8">
            
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <!-- zaken met de posts -->
                        <h3><?php the_title() ?></h3>
                        <div><?php the_content() ?></div>
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