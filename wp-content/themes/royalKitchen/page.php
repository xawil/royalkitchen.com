<?php

/*
template name: Default Page
*/

get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">

    <div class="col-xs-12 col-sm-9">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
      <?php get_template_part('includes/sidebar'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
