<?php $serviceImg = get_field('image'); $align = get_field('align'); $services = get_field('service'); global $i;?>
<?php if ($i==''){ $i = 1;}?>
<div class="services <?php echo $align;?>" style="background-image:url(<?php echo $serviceImg;?>)">
    <?php if($services){ ?>
        <?php foreach ($services as $service) {;?>
            <section id="service<?php echo $i;?>" class="service">
                <label for="option<?php echo $i;?>"><?php echo $service['title'];?><i class="fas fa-plus"></i></label>
                <article>
                    <div class="spaceMe"></div>
                    <div class="serviceContent"><?php echo $service['text'];?></div>
                </article>
        </section>
        <?php $i++; }?>
    <?php };?>
</div>