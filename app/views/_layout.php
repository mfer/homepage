<!DOCTYPE html>
<html lang="<?php echo $this->request->lang; ?>">
    <head>
        <title><?php echo $this->meta->title; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="description" content="<?php echo $this->meta->description; ?>">
        <meta name="keywords" content="<?php echo $this->meta->keywords; ?>">
        <meta name="author" content="<?php echo $this->meta->author; ?>">
        <link rel="image_src" href="<?php echo $this->meta->image; ?>"/>
        <meta property="og:title" content="<?php echo $this->meta->title; ?>" />
        <meta property="og:image" content="<?php echo $this->meta->image; ?>" />
        <meta name="twitter:title" content="<?php echo $this->meta->title; ?>">
        <meta name="twitter:image" content="<?php echo $this->meta->image; ?>">
        <link rel="stylesheet" type="text/css" href="../app/css/bootstrap.min.css" />
        <?php $this->render_styles(); ?>
        <?php $this->render_scripts(); ?>

        <link rel="stylesheet" type="text/css" href="../app/css/site.css" />

    </head>
    <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $this->route_url('index', 'home'); ?>">Homepage</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="<?php echo $this->route_url('index', 'About'); ?>">About</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <?php $this->render_body(); ?>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">Button example &raquo;</a>
        </p>
      </div>
    </div> <!-- /container -->

    <div class="footer">
      <p>Homepage by <a href="https://github.com/mfer">mfer</a>.</p>
      <p><?php echo time()."s desde a Era Unix.";?></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>

    </body>
</html>