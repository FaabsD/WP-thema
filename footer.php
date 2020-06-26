        <footer class="bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        &copy; <?php the_author()?> 
                        <small><?php echo date('Y')?></small>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('under')?>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>