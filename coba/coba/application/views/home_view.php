<!doctype html>
<html>

  <head>
    <title>Jumbotron</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
      body {
        padding-top: 50px;
        padding-bottom: 20px;
      }
    </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SevenLayer Security</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#contact">SSL Trial</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">SSL Certificates<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Email Protection</a>
                </li>
                <li>
                  <a href="#">Domain Valodation</a>
                </li>
                <li>
                  <a href="#">Organization Validation</a>
                </li>
                <li>
                  <a href="#">(Un)Extended Validation</a>
                </li>
                <li class="divider"></li>
                <li class="dropdown-header">For Developer</li>
                <li>
                  <a href="#">Intermediate CA</a>
                </li>
                <li>
                  <a href="#">Code Signing Certificate</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right">
        <?php if($user_access==1){ ?>
                <div class="form-group">
		<label class="control-label">Hello, user</label>
		</div>
		<button type="submit" class="btn btn-success">Sign in</button>
	<?php } else {?>
                <div class="form-group">
		<input type="text" placeholder="Username" class="form-control">
		</div>
		<div class="form-group">
		<input type="password" placeholder="Password" class="form-control">
		</div>
		<button type="submit" class="btn btn-success">Sign out</button>
                <?php } ?>
          </form>
        </div>
        <!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>SevenLayer Security</h1>
        <p>SevenLayer Security is an upstart company which offering security solution for your digital content and digital services. As we grow, we will provide our best in our service. Our service includes managed certificate authority with reliable security.</p>
        <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Certificates for Webservice</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Email-signing Certificates</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Developer Zone</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div>
      </div>
      <hr>
      <footer>
        <p>&copy; LayerSix Security Inc. 2015</p>
      </footer>
    </div>
    <!-- /container -->
  </body>
</html>
