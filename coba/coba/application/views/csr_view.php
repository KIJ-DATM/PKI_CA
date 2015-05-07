<!doctype html>
<html>

  <head>
    <title>Home - SL Security</title>
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
              <a href="<?php echo base_url('home'); ?>">Home</a>
            </li>
            <li>
              <a href="<?php echo base_url('home/about'); ?>">About</a>
            </li>
            <li>
              <a href="<?php echo base_url('home/csr'); ?>">SSL Trial</a>
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
          <?php echo form_open('home/login',array('class' => 'navbar-form navbar-right')); ?>
        <?php if($user_access==1){ ?>
                <div class="form-group">
		<p class="control-label">Hello, user</p>
                <input type="hidden" name="username" value="logout">
		</div>
		<button type="submit" class="btn btn-success">Sign out</button>
	<?php } else {?>
                <div class="form-group">
                  <input type="text" placeholder="Username" class="form-control" name="username">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
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
        <div class="col-xs-6 col-lg-6">
          <form>
            <div class="form-group">
            <label class="control-label">CSR Textfield</label>
            <div class="controls">
              <textarea rows="7" class="form-control"></textarea>
            </div>
            <br><br>
            <label class="control-label">Cert type</label>
            <div class="controls">
              <select class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn">Sign</button>
          </form>
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
