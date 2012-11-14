<?php
/*
Template Name: Template - Full Width
*/
get_header(); 
do_atomic( 'before_content' ); // supreme_before_content
if ( current_theme_supports( 'breadcrumb-trail' ) ) breadcrumb_trail( array( 'separator' => '&raquo;' ) ); ?>

<div id="content" class="multiple full_width">
  <?php do_atomic( 'open_content' ); // supreme_open_content ?>
  <div class="hfeed">
    <?php  if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
    <!-- Content  2 column - Right Sidebar  -->
    <?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
    <?php the_content(); ?>
    <!-- /Content -->
    <?php		endwhile;endif;
	  ?>
  </div>
  <?php do_atomic( 'close_content' ); // supreme_close_content ?>
</div>
<?php do_atomic( 'after_content' ); // supreme_after_content ?>
<!--Page full width #end  -->
<?php get_footer(); ?>
