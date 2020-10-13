<!DOCTYPE HTML>
<html "<?php language_attributes();?>">
<head>
<!-- Wordpress Theme Development---->
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name');?></title>
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<header class="main-header">
			<h2><a href="<?php echo 'home_uri();'?>"><?php bloginfo('name');?></a></h2>
			<h3><?php bloginfo('description');?></h3>
			<div class="cust_search">
			
			
			<?php get_search_form();?>
			
			
			</div>
			
			
			
			
		<nav class="main-menu">
			<div class="menu">
				<?php 
					$args=array(
						'theme_location' => 'primary',
						
					);
					wp_nav_menu( $args );
				?>
			</div>
		</nav>			
		</header>