<?php
  get_header(); //returns default header, define header.php to override it.

  if(have_posts()):
        while(have_posts()): the_post(); ?>
          
          <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
          </article>
  <?php  endwhile;
  
  else:
      echo 'No content at all! :S';
  endif;    

  get_footer(); // returns default wp footer, define footer.php to override it
?>