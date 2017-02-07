<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <title>psidaqx</title>
	  
	  <?php 
	  $css = isset($css) ? $css : NULL;

	  if(!is_null($css)){
	  	foreach ($css as $cssData) {
	  		?>
	  		<link rel="stylesheet" href="<?php echo $cssData["local"] ? "../../assets/$cssData[path]$cssData[fileName].css" : "$cssData[path]$cssData[fileName].css"; ?>" />
	  		<?php
	  	}
	  }

	  ?>

	  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	  <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
</head>
<body class="hold-transition skin-purple-light sidebar-mini">