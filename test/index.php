<?php
$ModuleManager = new \TJM\OOFrontEndModules\OOFrontEndModuleManager('config.yml');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>OO Front End Modules TestL</title>
		<style>
			<?=$ModuleManager->renderAllStyles()?>
		</style>
		<script>
			<?=$ModuleManager->renderAllScripts()?>
		</script>
	</head>
	<body>
		<?=$ModuleManager->render(':', Array('tag'=> 'div', 'id'=> 'main', 'classes'=> Array('big', 'red'), 'onclick'=> 'console.log("foo");', 'content'=> 'Lorem Ipsum'))?>

		<?=$ModuleManager->renderContent(':', Array('tag'=> 'div', 'id'=> 'main', 'classes'=> Array('big', 'red'), 'onclick'=> 'console.log("foo");'))?>
		Lorem Ipsum
		<?=$WebWidget->endRender()?>

		<div id="main" class="big red" onclick="console.log(\"foo\");">Lorem Ipsum</div>


		<img src="image.jpg" alt="" />


		<?=$WebWidget->render(':img', Array('src'=> 'image.jpg'))?>
		<?=$WebWidget->render('tjm:img', Array('src'=> 'image.jpg'))?>
		<?=$WebWidget->render('tjb:img', Array('src'=> 'image.jpg'))?>
	</body>
</html>
