<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:54
         compiled from default/_sub_header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'lang', 'default/_sub_header.tpl', 2, false),array('function', 'title', 'default/_sub_header.tpl', 6, false),array('function', 'sitename', 'default/_sub_header.tpl', 6, false),array('function', 'template_dir', 'default/_sub_header.tpl', 9, false),array('function', 'home', 'default/_sub_header.tpl', 19, false),array('function', 'weblogtitle', 'default/_sub_header.tpl', 19, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo smarty_lang(array('type' => 'xml'), $this);?>
 <?php echo smarty_lang(array('type' => 'html'), $this);?>
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
    <?php if ($this->_tpl_vars['pagetype'] == 'entry' || $this->_tpl_vars['pagetype'] == 'page'): ?><?php echo smarty_title(array('strip' => 1), $this);?>
 - <?php echo smarty_sitename(array(), $this);?>

    <?php else: ?><?php echo smarty_sitename(array(), $this);?>
<?php endif; ?>
    </title>
    <link href="<?php echo smarty_template_dir(array('base' => 'true'), $this);?>
pivotx_essentials.css" rel="stylesheet" type="text/css" media="screen" />  
    <link href="<?php echo smarty_template_dir(array(), $this);?>
pivotx_default.css" rel="stylesheet" type="text/css" media="screen" />
    <!--- <link href="<?php echo smarty_template_dir(array(), $this);?>
pivotx_dark.css" rel="stylesheet" type="text/css" media="screen" /> -->
    <!--- <link href="<?php echo smarty_template_dir(array(), $this);?>
pivotx_light.css" rel="stylesheet" type="text/css" media="screen" /> -->
</head>

<body>
    <div id="content">
        <div id="header">
            <h1 class="pagetitleshade pagetitleleft">
        <a href="<?php echo smarty_home(array(), $this);?>
" accesskey="1"><?php echo smarty_weblogtitle(array(), $this);?>
</a>
            </h1>
            <h1 class="pagetitle pagetitleleft">
        <a href="<?php echo smarty_home(array(), $this);?>
"><?php echo smarty_weblogtitle(array(), $this);?>
</a>
            </h1>
        </div>