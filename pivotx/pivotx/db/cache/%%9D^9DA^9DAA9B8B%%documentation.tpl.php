<?php /* Smarty version 2.6.26, created on 2015-05-14 12:04:15
         compiled from documentation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'documentation.tpl', 7, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" id="documentation">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="robots" content="noindex, nofollow" />
<link rel="stylesheet" type="text/css" href="templates_internal/assets/pivotx_docs.css"/>
<title><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Documentation<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> - <?php echo $this->_tpl_vars['title']; ?>
</title>
</head>
<body>
<?php if ($this->_tpl_vars['title'] != ""): ?>
    <div id="header">
        <h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
    </div>
<?php endif; ?>
<div id="docs">

    <?php if ($this->_tpl_vars['toc']): ?>
    <div id="toc">
        <strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Table of Contents<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
        <?php echo $this->_tpl_vars['toc']; ?>

    </div>
    <?php endif; ?>

    <?php echo $this->_tpl_vars['html']; ?>


-- 
</div>
</body>
</html>