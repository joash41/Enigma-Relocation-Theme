<?php get_header();?>
<div class="pageWrapper" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/pagetop.png');">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="<?php echo the_field('page_width');?>">
			<h1 class="pageTitle textCenter textUpper"><?php the_title();?></h1>
			<?php the_content(); ?>
        </div>
	<?php endwhile; endif; ?>
</div>
<?php get_footer();?>