<?php
  
  /**
   * Include style.css in the wordpress pipeline
   */ 
  function learningWordPress_resources() {
      wp_enqueue_style('style', get_stylesheet_uri());
  }
  
  
  /* include action to import the styles */
  add_action('wp_enqueue_scripts', 'learningWordPress_resources');