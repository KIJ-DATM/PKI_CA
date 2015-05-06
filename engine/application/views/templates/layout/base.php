<!doctype html>
<html lang="en">

<?php if(isset($head))echo $head; ?>

<body>

	<div class="container-fluid">

		<p>Hellow World</p>
		<?php if(isset($content))echo $content; ?>



	</div>

  
  <script type="text/javascript" src="<?php echo site_url('assets/js/bootstrap.min.js'); ?>"></script>
  <?php
    if(isset($jsScripts)) {
      foreach ($jsScripts as $jsScript) {
        echo "<script type='text/javascript' src='".site_url("assets/js/$jsScript.js")."'></script>";
      }
    }
  ?>

</body>

</html>