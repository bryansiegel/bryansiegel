<?php get_header(); ?>


<?php if (have_posts()) : ?>
<div id="post-area">
<?php while (have_posts()) : the_post(); ?>	

   		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php if ( has_post_thumbnail() ) { ?>
         <div class="gridly-image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'summary-image' );  ?></a></div>
          <div class="gridly-category"><p><?php the_category(', ') ?></p></div>
       
		  <?php } ?>
       			<div class="gridly-copy"><h2><span class="title_color"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></span></h2>
                <p class="gridly-date"><?php the_time(get_option('date_format')); ?>  - by Bryan Siegel</p>

<?php the_excerpt(); ?> 

               <p class="gridly-link"><?php //put something here ?></p>
         </div>
       </div>
       
       

<?php endwhile; ?>
</div>
<?php else : ?>
<?php endif; ?>
    
<?php next_posts_link('<p class="view-older">Older Posts Here</p>') ?>
    
 
<?php get_footer(); ?>
