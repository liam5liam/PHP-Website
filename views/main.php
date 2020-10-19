<html>
<head>
	<title>Shareboard</title>
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.css.map"> -->
  <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
	<nav >
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  href="#">Shareboard</a>
        </div>
        <div id="navbar">
          <ul >
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>

          <ul >
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
              <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
              <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
            <?php else : ?>
              <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
              <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
            <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

    <div class="row">
      <?php Messages::display(); ?>
      <?php require($view); ?>
    </div><!-- /.container -->
</body>
</html>