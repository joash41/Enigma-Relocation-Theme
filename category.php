<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <a href="<?php the_permalink() ?>">
      <div class="post-wrap"><!--wrapping container to hold all the elements and to be used as the main hover element-->
        
        <div class="image-wrap"><!--contains the featured image and the overlay with the excerpt inside it-->
          
          <?php the_post_thumbnail('recipe-thumbnails'); ?>
          
          <div class="recipe-overlay"><!--This overlay is hidden and will only display when the main post-wrap div is hovered over-->
          
            <?php the_excerpt(); ?>
          
          </div>
        
        </div>
                        
        <h3><?php the_title(); ?></h3>
      
      </div>
    </a>
              
                
<?php endwhile; ?>
<?php endif; ?>
<style>
.image-wrap {
  position: relative;
  line-height: 0; /*when there is only an image in a div some browsers leave a little space below the image. This gets rid of that space*/
  }
  
.image-wrap img {
  width: 100%;
  height: auto;
  }
    
.overlay {
  position: absolute; /*absolute position so that this div can sit over the image*/
  top: 100%; /*pushes the div to the bottom of the relatively positioned image-wrap div*/
  background: #000;
  width: 90%; /*width and height are offset by the padding. Total should add to 100% if you want the overlay to cover the entire image*/
  height: 90%;
  padding: 5%;
  color: #fff;
  transition:200ms; /*This is the speed you want the overlay to retract when moving the mouse off*/
  -webkit-transition:200ms;
  -moz-transition:200ms;
  -o-transition:200ms;
  }
  
.post-wrap:hover > .image-wrap .overlay {
  top: 0; /*when the post-wrap div is hovered, the overlay div moves from it's original position (top:100%) to this position*/
  transition:300ms; /*This is the speed you want the overlay to slide up on hover*/
  -webkit-transition:300ms;
  -moz-transition:300ms;
  -o-transition:300ms;
  }
  </style>
<?php get_footer(); ?>