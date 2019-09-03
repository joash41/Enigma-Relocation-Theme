<section class="packagesCta">
    <h2 class="packageTitle"><?php the_field('cta_title');?></h2>
    <div class="imgWrap">
        <?php 
        $link = get_field('button');
        $images = get_field('icons');
        foreach ($images as $image) {;?>
            <a class="textCenter" href="<?php echo esc_url($link['url']); ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php echo $image['title']; ?>
            </a>
        <?php } ?>
    </div>
    <a class="button grey" href="<?php echo esc_url($link['url']); ?>"><?php echo $link['title']; ?></a>
</section>