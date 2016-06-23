<?php/*Template Name: sidebar-contenido-sidebar */ ?>

<?php get_header(); ?>

<!-- Container (Portfolio Section) -->
<div class="container-fluid  bg-grey">
  
  <div class="row ">
  <div class="col-sm-2">
    
    <br><?php  get_sidebar('left')?>
  </div>
    <div class="col-sm-8">

      <div class="row escuela_img">
  
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!-- post -->


                            <article >
                                
                                <header class="text-center" >
                                    <h2 style="color:#4CAF50;"><i class="fa fa-arrow-right" ></i>
<strong><?php the_title(); ?></strong><h2>
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
    <div class="col-sm-2">
      <br><?php  get_sidebar('right')?>
    </div>
  </div>
</div>


<?php get_footer(); ?>