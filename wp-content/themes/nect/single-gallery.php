<?php  include('modules/header.php'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="imagebg height-80 intro" data-overlay=2>
        <div class="background-image-holder" style="background:url(<?= get_field('banner_image'); ?>);">
            <img alt="image" src="<?= get_field('banner_image'); ?>" />
        </div>
        <div class="container pos-vertical-center">
            <div class="row pt64">
                <div class="col-md-12 col-sm-12 text-center">
                    <h1><?php the_field('banner_title'); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <section class="image-gallery" id="gallery">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navTabsCustom__container">
                    <div class="navTabsCustom__item active"><?php the_title(); ?></div>
                </div>
            </div>
            <?php $images = get_field('image_gallery');
                if($images): ?>
                <?php foreach ( $images as $image ): ?>
                    <div class="col-md-4 col-sm-12">
                        <a href="<?php echo $image['url'] ?>" data-lightbox="true" data-title="<?php the_title(); ?>">
                            <article class="image-card">
                            <figure class="image--item">
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
                            </figure>
                            <div class="image-content">
                                <span class="image--title" style="font-size:14px; font-weight:500"> <?php echo $image['caption'] ?> </span>
                            </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php include('modules/footer.php'); ?>