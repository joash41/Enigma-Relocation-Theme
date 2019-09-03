<div class="specWrap">
        <?php if(get_field('block_title')){;?>
            <h2 class="blockTitle textCenter"><?php the_field('block_title');?></h2>
        <?php };?>
    <section class="specItem">
            <h3 class="textCenter"><?php the_field('title');?><i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></h3>
            <div class="singleSpecItem topRow">
                <h4>Services Offered </h4>
                <div class="offerWrap">
                    <div class="block">Basic</div>
                    <div class="block">Standard</div>
                    <div class="block">Business</div>
                    <div class="block">Executive</div>
                    <div class="block">Delocation</div>
                </div>
            </div>
        <?php if( have_rows('accordion_row') ): ?>
            <?php while( have_rows('accordion_row') ): the_row(); ?>
                <div class="singleSpecItem">
                    <h4><?php the_sub_field('service_offered');?></h4>
                    <div class="offerWrap">
                        <!-- basic -->
                            <?php if(get_sub_field('basic')){;?>
                                <div class="block yes"><i class="fas fa-check"></i></div>
                            <?php }else{;?>
                                <div class="block no"></div>
                            <?php }?>
                        <!-- standard -->
                            <?php if(get_sub_field('standard')){;?>
                                <div class="block yes"><i class="fas fa-check"></i></div>
                            <?php }else{;?>
                                <div class="block no"></div>
                            <?php }?>
                        <!-- business -->
                            <?php if(get_sub_field('business')){;?>
                                <div class="block yes"><i class="fas fa-check"></i></div>
                            <?php }else{;?>
                                <div class="block no"></div>
                            <?php }?>
                        <!-- executive -->
                            <?php if(get_sub_field('executive')){;?>
                                <div class="block yes"><i class="fas fa-check"></i></div>
                            <?php }else{;?>
                                <div class="block no"></div>
                            <?php }?>
                        <!-- delocation -->
                            <?php if(get_sub_field('delocation')){;?>
                                <div class="block yes"><i class="fas fa-check"></i></div>
                            <?php }else{;?>
                                <div class="block no"></div>
                            <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>
</div>