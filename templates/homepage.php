<?php /* Template Name: Home */?>
<?php get_header()?>
    <div>
        <img class="home_banner" src="<?php echo get_template_directory_uri(); ?>/images/Digital_Dubai_Skyline.png" />
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<div class="content">
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer()?>