<?php/*Template Name: content-sidebar */ ?>

<?php get_header(); ?>

<!-- Container (Portfolio Section) -->
<div class="container-fluid  ">
  
  <div class="row text-center">

    <div class="col-sm-9">

      <div class="row escuela_img">
  
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!-- post -->


                            <article >
                                
                                <header class="text-center">
                                    <h2 style="color:#4CAF50;"><strong><?php the_title(); ?></strong></h2>
                                </header>
                                <?php the_content(); ?>
                             </article>

                             <?php endwhile; ?>
                                <!-- post navigation -->
                            <?php else: ?>
                                <!-- no posts found -->
                                <p>No hay nada para mostrar</p>
                             <?php endif; ?>


  

      </div>
      
  
   
    
      
    </div>
    <div class="col-sm-3">
      <?php  get_sidebar('right')?>
    </div>
  </div>
</div>


<?php get_footer(); ?>