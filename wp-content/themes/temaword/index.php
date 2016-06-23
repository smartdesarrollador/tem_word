<?php get_header(); ?>

<!-- Container (Portfolio Section) -->
<div class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center">
  <div class="col-sm-3">
    
    <?php  get_sidebar('left')?>
  </div>
    <div class="col-sm-6">

      <div class="row">
  
        <div class="col-sm-6">
            <div class="thumbnail">
            <img src="http://lorempixel.com/400/200/sports" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Yes, we built Paris</p>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="thumbnail">
            <img src="http://lorempixel.com/400/200/sports" alt="San Francisco" width="400" height="300">
            <p><strong>San Francisco</strong></p>
            <p>Yes, San Fran is ours</p>
            </div>
        </div>




        <div class="col-sm-6">
            <div class="thumbnail">
            <img src="http://lorempixel.com/400/200/sports" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Yes, we built Paris</p>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="thumbnail">
            <img src="http://lorempixel.com/400/200/sports" alt="San Francisco" width="400" height="300">
            <p><strong>San Francisco</strong></p>
            <p>Yes, San Fran is ours</p>
            </div>
        </div>



  
        <div class="col-sm-12">
            <div class="thumbnail">
            <img src="http://lorempixel.com/400/200/sports" alt="Paris" width="400" height="300">
            <p><strong>Paris</strong></p>
            <p>Yes, we built Paris</p>
            </div>
        </div>

      </div>
      
  
   
    
      
    </div>
    <div class="col-sm-3">
      <?php  get_sidebar('right')?>
    </div>
  </div>
</div>


<?php get_footer(); ?>