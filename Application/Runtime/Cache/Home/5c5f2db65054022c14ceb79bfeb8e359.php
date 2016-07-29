<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo ($data["title"]); ?></title>
</head>
<body>
<tbody>
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
       <td><?php echo ($vo["writetime"]); ?></td>
       <td><a href="<?php echo U('bugs/show');?>/id/<?php echo ($vo["itemid"]); ?>"><?php echo ($vo["title"]); ?></a></td>
       <td>author:<?php echo ($vo["poster"]); ?></td><br><!--author -->
       </tr><?php endforeach; endif; ?>
 </tbody>
<div><?php echo ($page); ?></div>
</body>
</html>