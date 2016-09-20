  <?php get_header();?>

    <div class="container">

       <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="slide">
      <div class="container slideimg">
        <img src="<?php bloginfo('template_url')?>/img/slide1.png" class="imagen">
        <img src="<?php bloginfo('template_url')?>/img/slide2.png" class="imagen">
        <img src="<?php bloginfo('template_url')?>/img/slide3.png" class="imagen">
      </div>
    </div>
    <img src="<?php bloginfo('template_url')?>/img/bannercontexto.png" class="bannercontexto">

      <!-- Example row of columns -->
          <div class="row noticias">
        <div class=" row borde-noticias">
          <h4>Ultimas Noticias</h4>
          <?php 
          $args=array(
            'showposts'=> 3,
          );

          $my_query = new WP_Query($args)
          ?>

          <?php if ($my_query->have_posts() ) : while ( $my_query->have_posts() ) :$my_query-> the_post(); ?>
       
          <div class="col-md-4">
            <h2><?php the_title();?></h2>
            <p><?php the_excerpt();?></p>
            <p><a class="btn btn-default boton" href="<?php the_permalink();?>" role="button">Ver mas &raquo;</a></p>
          </div>
       
          <?php endwhile; else: ?>
           
              <h2>No hay noticias para mostrar</h2>
           
          <?php endif; ?>

        </div>
      </div>
      
  

       


<?php get_footer();?>