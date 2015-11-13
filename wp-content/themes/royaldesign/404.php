<?php

get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">

    <div class="col-xs-12">
      <div id="content" role="main">
        <div class="alert alert-warning">
          <h1><i class="glyphicon glyphicon-warning-sign"></i> <?php _e('Error', 'bst'); ?> 404</h1>
          <p><?php _e('The page you were looking for does not exist.', 'bst'); ?></p>
        </div>
      </div><!-- /#content -->
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
