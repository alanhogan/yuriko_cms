<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo assets::all(); ?>

<title>Zeelot's Special Sandbox!</title>
</head>

<body>
	<div id="header">
		<?php if(count($sections[1]) > 0): ?>
		<!-- BEGIN SECTION -->
		<div class="container_16">
			<div class="grid_16 section header">
				 <?php foreach($sections[1] as $header_node): ?>
					<?php $header_node->render(); ?>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- END SECTION -->
		<?php endif; ?>
	</div>
	<div id="content_container">
		<div class="container_16" id="main_frame">
			<div class="grid_16">
				<?php echo notice::render(); ?>
			</div>
			<?php if(count($sections[2]) > 0): ?>
			<!-- BEGIN SECTION -->
			<div class="grid_12 section content">
				<?php foreach($sections[2] as $content_node): ?>
					<?php $content_node->render(); ?>
				<?php endforeach; ?>
			</div>
			<!-- END SECTION -->
			<?php endif; ?>
			<?php if(count($sections[3]) > 0): ?>
			<!-- BEGIN SECTION -->
			<div class="grid_4 section side_panel">
				<?php foreach($sections[3] as $side_node): ?>
					<?php $side_node->render(); ?>
				<?php endforeach; ?>
			</div>
			<!-- END SECTION -->
			<?php endif; ?>
			<div class="clear"></div>
		</div>
	</div>
	<div id="gutter">
		<div class="container_16">
			<?php if(count($sections[4]) > 0): ?>
			<!-- BEGIN SECTION -->
			<div class="grid_16">
				<?php foreach($sections[4] as $gutter_node): ?>
					<?php $gutter_node->render(); ?>
				<?php endforeach; ?>
			</div>
			<!-- END SECTION -->
			<?php endif; ?>
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>