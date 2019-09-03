<section class="packagesInfo">
    <div class="imgWraps">
        <?php
        $packages = get_field('packages'); ?>
        <?php foreach ($packages as $package) {;?>
            <div class="package_icon_wrapper">
                <?php $image = $package['package_icon'];?>
                <img src="<?php echo $image['url']; ?>" alt="" />
                <h4><?php echo $image['title'];?></h4>
            </div>
        <?php }; ?>
    </div>
    <?php foreach ($packages as $package) {;?>
            <div class="package_content_wrapper">
                <?php echo $package['package_content']; ?>
            </div>
        <?php }; ?>
</section>