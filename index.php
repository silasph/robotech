<?php require_once('conf.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- meta-tags -->
	<?php require_once(PATH.'/static/meta-tags.php'); ?>

	<!-- styles -->
	<?php require_once(PATH.'/static/styles.php'); ?>
</head>

<body id="top">
	<!-- header -->
	<?php require_once(PATH.'/header.php'); ?>

	<!-- content -->
	<?php require_once(PATH.'/'.$pagina.'.php'); ?>

	<!-- footer -->
	<?php require_once(PATH.'/footer.php'); ?>

	<!-- scripts -->
	<?php require_once(PATH.'/static/scripts.php'); ?>
</body>
</html>
