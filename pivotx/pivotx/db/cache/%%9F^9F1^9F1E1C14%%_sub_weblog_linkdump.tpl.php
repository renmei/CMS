<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:54
         compiled from default/_sub_weblog_linkdump.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pagelist', 'default/_sub_weblog_linkdump.tpl', 1, false),array('function', 'widgets', 'default/_sub_weblog_linkdump.tpl', 5, false),array('block', 't', 'default/_sub_weblog_linkdump.tpl', 6, false),array('block', 'subweblog', 'default/_sub_weblog_linkdump.tpl', 8, false),)), $this); ?>
        <?php echo smarty_pagelist(array('chapterbegin' => "<h3>%chaptername%</h3><small>%description%</small><ul>",'pages' => "<li><a href='%link%' title='%subtitle%'>%title%</a></li>",'chapterend' => "</ul>"), $this);?>

        <?php echo smarty_widgets(array(), $this);?>

        <h3><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Linkdump<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <!-- begin of weblog 'linkdump' -->
      <?php $this->_tag_stack[] = array('subweblog', array('name' => 'linkdump')); $_block_repeat=true;smarty_weblog($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
    <!-- entry \'[[title]]\' -->
  <div class="linkdumpentry">
    <span class="title">
        &raquo; <a href="[[ link hrefonly=1 ]]">[[ title ]]</a>
        </span>
        [[ introduction ]]
        [[ more ]]
        &nbsp;
        <span class="linkdumpcomments">
      [[ if ($entry.allow_comments == 1) ]]
            [[ commentlink ]] |
        [[ /if ]]
      [[ link text="&para;" title="Permanent link to entry \'%title%\'" ]]
      [[ editlink format="Edit" prefix=" - " ]]
        </span>
    </div>
'; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_weblog($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>