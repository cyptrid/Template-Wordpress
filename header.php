<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
    <?php bloginfo('name') ?> | 
    <?php is_front_page() ? bloginfo('description') :  wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <style>
      .post-thumb img{
        width:100%;
        height: auto;
        margin-bottom: 8px;
        }

.comments{
  border:1px #ccc solid;
  padding:10px;
  margin-bottom:20px;
  margin-top:10px;
}

.comments h3,.comments h2{
  background:#428bca;
  color:#fff;
  padding:5px;
}

.comment-body{
  border:#ccc solid 1px;
  margin-bottom:10px;
  padding:20px 10px;
}

.comment-meta{
  background:#428bca;
  color:#fff;
  padding:10px;
  overflow:auto;
}

.comment-meta a{
  color:#fff;
}

.comment-meta img{
  float:left;
  margin-right:10px;
}

.comment-reply-link{
  background:#428bca;
  color:#fff;
  display: inline-block;
  padding: 10px 15px;
}

.comment-form input, .comment-form textarea{
  width:100%;
  padding:4px;
  border:#ccc solid 1px;
  margin-bottom:15px;
}

    </style>
    <?php wp_head(); ?>
  </head> 
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>