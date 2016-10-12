<?php
/*
  Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>


<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <hr />
        <?php the_content(); ?>

      <?php endwhile; endif; ?>

    </div>
  </div>
</section>

<section class="row no-max pad">
     <div class="small-6 medium-4 large-3 columns grid-item">
       <a href="item.html"><img src="assets/img/temp/item-01.png" alt=""></a>
     <!-- </div> -->



<?php get_footer(); ?>
