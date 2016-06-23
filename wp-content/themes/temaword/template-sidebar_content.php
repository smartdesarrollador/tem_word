<?php/*Template Name: sidebar-content */ ?>

<?php get_header(); ?>

<!-- Container (Portfolio Section) -->
<div class="container-fluid  bg-grey">
  
  <div class="row text-center">
  <div class="col-sm-2">
    
    <?php  get_sidebar('left')?>
  </div>
    <div class="col-sm-10">

      <div class="row well escuela_img">
  
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
  
  </div>
</div>


<?php get_footer(); ?>