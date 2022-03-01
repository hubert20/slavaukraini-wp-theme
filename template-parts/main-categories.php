<section class="main-categories py-3 py-lg-5" id="main-categories">
    <div class="container">
        <h2 class="text-center mea-culpa-font playfair-title-2 text-brown-brand mb-3 mb-lg-5"></h2>
        <div class="row">
            <?php
            $args = array('parent' => 18);
            $cats = get_categories($args);
            foreach ($cats as $cat) : ?>
                <?php
                $this_category = get_category($cat);
                $cat_link = get_category_link($cat->cat_ID);
                $args = array(
                    'category__in' => array($cat->term_id),
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'order_by' => 'date',
                    'order' => 'desc'
                );
                $my_query = new WP_Query($args);
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="main-categories__item mb-3 mb-lg-4">
                        <figure class="main-categories__item-img m-0">
                            <a class="text-white" href="<?= $cat_link; ?>" data-category-type="<?= $cat->slug; ?>" title="Title - <?= $cat->name; ?>">
                                <h3 class="text-center mea-culpa-font playfair-title-3"><?= $cat->name; ?></h3>
                                <?php if (function_exists('z_taxonomy_image_url')) : ?>
                                    <img src="<?php echo z_taxonomy_image_url($cat->term_id, 'large'); ?>" class="img-fluid" alt="<?= $cat->name; ?>">
                                <?php endif; ?>
                                <!-- Img in first post in category -->
                                <?php /*if ($my_query->have_posts()) : ?>
                                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <?php if (has_post_thumbnail($post->ID)) : ?>
                                            <?php
                                            $imgID  = get_post_thumbnail_id($post->ID);
                                            $image  = wp_get_attachment_image_src($imgID, 'large', false, '');
                                            $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                            ?>
                                            <img src="<?php echo $image[0]; ?>" alt="<?php echo $imgAlt; ?>" class="img-fluid">
                                        <?php else : ?>
                                            <img src="<?php bloginfo('template_directory'); ?>/images/test.jpg" class="img-fluid">
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; */ ?>
                            </a>
                        </figure>
                        <div class="main-categories__item-action">
                        <i class="far fa-arrow-alt-circle-right"></i>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>