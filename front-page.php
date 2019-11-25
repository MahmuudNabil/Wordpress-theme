<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 
get_header(); ?>
 

<!--  start slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mysitehealthwordpresscom.000webhostapp.com/wp-  content/themes/mahmoud/img/2.jpeg" alt="First slide">
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="https://mysitehealthwordpresscom.000webhostapp.com/wp-content/themes/mahmoud/img/3.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mysitehealthwordpresscom.000webhostapp.com/wp-content/themes/mahmoud/img/8.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--  End slider -->





<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
        <?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
        
        <?php get_template_part('slider');?>
        <?php
            // Show the selected front page content.
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/page/content', 'front-page' );
                endwhile;
            else :
                get_template_part( 'template-parts/post/content', 'none' );
            endif;
        
                
		?>
        

	</main><!-- #main -->
</div><!-- #primary -->


