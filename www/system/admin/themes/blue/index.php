<?php
$skin_prefix = 'blue';
ob_start();
?>

<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=main" title="������� �������� �������"><?php echo t('�������'); ?></a></td>
<td>|</td>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=addnews" title="���������� �������"><?php echo t('��������'); ?></a></td>
<td>|</td>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=editnews" title="�������������� ��������"><?php echo t('�������������'); ?></a></td>
<td>|</td>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=options" title="��������� ���������� �������"><?php echo t('���������'); ?></a></td>
<td>|</td>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=help" title="������� � ������ �� ������������� �������"><?php echo t('������'); ?></a></td>
<td>|</td>
<?php /*if ($config['cache']){*/ ?>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=main&amp;action=clearcache" title="������� ���� �������"><?php echo t('�������� ���'); ?></a></td>
<td>|</td>
<?php /*}*/ ?>
<td><a class="nav" href="<?php echo $PHP_SELF; ?>?mod=logout" title="����� �� �������"><?php echo t('�����'); ?></a></td>
<td>|</td>
<td><a target="_blank" class="nav" href="<?php echo $config['http_home_url']; ?>" title="������� �� ������� �������� �����"><?php echo t('�� ����'); ?></a></td>
</tr>
<tr id="options-submenu" style="display: none;">
<td colspan="7"></td>
<td colspan="7"><?php echo options_submenu(); ?></td>

<?php
$skin_menu = ob_get_clean();
ob_start();
?>

<!-- ����� ������ -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $config['charset']; ?>">
<title><?php echo $config['home_title']." ".$config['delitel']; ?> <?php echo t('����������'); ?></title>
<link href="admin/themes/<?php echo $skin_prefix; ?>/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="data/java/prototype.js"></script>
<script type="text/javascript" src="data/java/ajax.js"></script>
<script type="text/javascript" src="data/java/cute.js"></script>
<script type="text/javascript" src="data/java/tooltip.js"></script>
</head>

<body>

<table border="0" align="center" cellpadding="2" cellspacing="0" width="100%">
<tr>
<td class="bborder">
<table border="0" cellpadding="0" cellspacing="0" width="98%" align="center">
<tr>
<td align="center" height="24" class="main">
<table border="0" cellspacing="0" cellpadding="5" width="70%">
<tr>
<td>{menu}</td>
</tr>
</table>
<tr>
<td height="19">
<table border="0" cellpading="0" cellspacing="15" width="100%">
<tr>
<td>
<div class="header"><img border="0" src="admin/themes/<?php echo $skin_prefix; ?>/images/{image-name}.gif" align="absmiddle">�{header-text}</div>


<table border="0" cellpading="0" cellspacing="10" width="100%">
<tr>

<?php if ($is_logged_in){ ?>
<td width="175" valign="top" class="admmenu" style="padding: 5px 0px 5px 2px; width: 175px;"><?php echo options_menu_ap(); ?></td>
<?php } ?>

<td valign="top"><?php
$skin_header = ob_get_clean();

ob_start();
?>

</td></tr>
</table>


</td>
</tr>
<tr>
<td height="24" align="center" class="copyrights">{copyrights}</td>
</tr>
</table>
</td>
</tr>
</table>

</body>
</html>

<?php
$skin_footer = ob_get_clean();
?>