<?php get_header() ?>
<h3>Search Result..</h3>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        </div>
    </div>
</div>
<header>
    <?php wp_nav_menu(); ?>
</header>
<h1><?php bloginfo('name'); ?></h1>
<span><?php bloginfo('description'); ?></span>

<?php if (have_posts()) : ?>
    <div class="archive-post">
        <?php while (have_posts()) : the_post(); ?>
            Post On: <?php the_time('F j, Y'); ?>
            <?php the_author(); ?>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

        <?php endwhile; ?>
    </div>
<?php endif ?>
<?php get_footer(); ?>