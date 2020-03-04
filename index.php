<?php get_header(); ?>
<h1><?php bloginfo('name'); ?></h1>
<span><?php bloginfo('description'); ?></span>
<form action="<?php $_PHP_SELF ?>" method="post">
    <button type="submit" class="btn btn-success">Search..</button>
        <input type="text" class="btn btn-info" name="s" placeholder="Search...">
</form>
<header>
    <?php wp_nav_menu(); ?>
</header>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="container text-left">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif ?>
                        The Date: <?php the_time('F j, Y g:i a'); ?>&nbsp;
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a>
                        <?php
                                $caters = get_the_category();
                                $output = "";
                                if ($caters) {
                                    foreach ($caters as $cater) {
                                        $output = '<a href="' . get_category_link($cater->term_id) . '">' . $cater->cat_name . '<a>';
                                    }
                                }
                                echo $output;
                                ?>
                        <?php the_tags(); ?>
                        <div class="row mt-5">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php else : echo "Post Not Found" ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer();?>