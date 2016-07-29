<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($data["title"]); ?></title>
</head>
<body>
author:<?php echo ($data["poster"]); ?><br>
<?php echo (base64_decode($data["detail"])); ?>
<div><?php echo ($page); ?></div>
</body>
</html>