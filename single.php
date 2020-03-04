<?php get_header()?>
<h1><?php bloginfo('name'); ?></h1>
    <span><?php bloginfo('description'); ?></span>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <header>
        <?php wp_nav_menu();?>
    </header>
   
    <?php while (have_posts()) : ?>
        <?php the_post(); ?>
        <div class="container text-left">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            Writen by <?php the_author(); ?> Date<?php the_date(); ?><br><br>
            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail(); ?>
            <?php else : echo "Not Found" ?>
            <?php endif ?>
            <div class="row mt-5">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</body>

</html>