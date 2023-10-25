<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<?php $is_tansparent = isset($args['isTransparent']) ? true : false; ?>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>
	<div id="headerCursor"> </div>
	<header class="<?= is_home() ? 'bg_purple' : '' ?> <?php if ($is_tansparent) echo 'is-transparent' ?>">
		<div class="container">
			<div class="menu">

				<?php wp_nav_menu([
					'container_class' => 'header_menu_container',
					'container_id' => 'headerMenu',
					'theme_location' => 'header'
				]) ?>
			</div>
			<div class="icon-menu-mobile">
				<i class="icon-menu-hamburger"></i>
			</div>
			<div class="logo">
				<?php the_custom_logo() ?>
			</div>
			<div class="search">
				<form action="/" method="get">
					<div class="form_control">
						<button type="submit">
							<i class="icon-search"></i>
						</button>
						<input type="search" name="s" placeholder="اینجا بگرد دنبالش" id="search" value="<?php the_search_query() ?>" />
					</div>
				</form>
			</div>
			<div class="icon-search-mobile">
				<i class="icon-search"></i>
			</div>


		</div>
		<div class="menu-mobile-clicked">
			<div class="bg-color-menu-mobile"></div>
			<div class="container-icons-menu">
				<div class="container-icon-group-mobile">
					<div class="icon-close-mobile"><i class="icon-close2"></i></div>
					<div><?php the_custom_logo() ?></div>
				</div>
				<?php wp_nav_menu([
					'theme_location' => 'header'
				]) ?>
			</div>
		</div>
		<div class="search-mobile-clicked">
			<div class="bg-color-search-mobile"></div>
			<div class="search-bar-mobile">
				<i class="icon-search"></i>
				<input type="search" placeholder="اینجابگرد دنبالش">
			</div>
		</div>
	</header>