<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PKI-CA <?php if(isset($head_title)) echo " | $head_title"; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap.min.css');?>">
  <script type="text/javascript" src="<?php echo site_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
  <style>
    .box{
      border: 1px solid black;
      background-color: pink;
    }

  </style>
  <?php
    if(isset($cssScripts)) {
      foreach ($cssScripts as $cssScript) {
        echo "<link rel='stylesheet' type='text/css' href=".site_url("assets/css/$cssScript.css").">";
      }
    }
  ?>
</head>