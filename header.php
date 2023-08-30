<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open() ?>

	<div id="headerCursor"> </div>
	<header class="bg_purple">
		<div class="container">
			<div class="menu">

				<?php wp_nav_menu( [ 
					'container_class' => 'header_menu_container',
					'container_id' => 'headerMenu',
					'theme_location' => 'header'
				] ) ?>
			</div>
			<div class="logo">
				<?php the_custom_logo() ?>
			</div>
			<div class="search">
				<form action="/" method="get">
					<div class="form_control">
						<button type="submit">
							<i class="search-icon"></i>
						</button>
						<input type="search" name="s" placeholder="اینجا بگرد دنبالش" id="search"
							value="<?php the_search_query() ?>" />
					</div>
				</form>
			</div>
		</div>
	</header>