<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MUSIC CART</title>
<script src="<?php echo base_url();?>js/jquery.min.js" type="text/javascript"></script>
<?php 
$them = $this->session->userdata('themes');
$tm=$them['theme'];
if($tm=='brk'){
	?>
	<link href="<?php echo base_url();?>css/breakeven_font1.css" rel="stylesheet" type="text/css" />
	<link href='<?php echo base_url();?>css/breakeven_font2.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url();?>css/breakeven_style.css" rel="stylesheet" type="text/css" media="screen" />
	<?php 
}elseif($tm=='wrop'){
	?>
	<link href="<?php echo base_url();?>css/waterdrop.css" rel="stylesheet" type="text/css" media="screen" />
	<?php 
}else{
	?>
	<link href="<?php echo base_url();?>css/breakeven_font1.css" rel="stylesheet" type="text/css" />
	<link href='<?php echo base_url();?>css/breakeven_font2.css' rel='stylesheet' type='text/css'>
	<link href="<?php echo base_url();?>css/breakeven_style.css" rel="stylesheet" type="text/css" media="screen" />
	<?php 
}		
?>

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#">MUSIC CART</a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="#"><?php echo $language['home'];?></a></li>
					<li><a href="#"><?php echo $language['about']?></a></li>
					<li><a href="#"><?php echo $language['login']?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end #header -->






