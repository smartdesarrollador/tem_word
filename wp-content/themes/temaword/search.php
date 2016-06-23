<?php get_header(); ?>

<!-- Container (Portfolio Section) -->
<div class="container-fluid ">
  
  <div class="row ">
  <div class="col-sm-3">
    
    <?php  get_sidebar('left')?>
  </div>
    <div class="col-sm-9">

      <div class="row ">
  
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!-- post -->


                            <article >
                                
                                <header>
                                    <h2><?php the_title(); ?></h2>
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