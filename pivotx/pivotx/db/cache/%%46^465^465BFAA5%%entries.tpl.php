<?php /* Smarty version 2.6.26, created on 2015-05-14 12:13:43
         compiled from entries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'adminentrylist', 'entries.tpl', 4, false),array('function', 'hook', 'entries.tpl', 6, false),array('function', 'date', 'entries.tpl', 93, false),array('block', 't', 'entries.tpl', 22, false),array('modifier', 'strip_tags', 'entries.tpl', 68, false),array('modifier', 'truncate', 'entries.tpl', 68, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="entriesgrid">
<?php echo smarty_adminentrylist(array(), $this);?>


<?php echo smarty_hook(array('name' => "entry-filter-before",'value' => $this->_tpl_vars['adminentryfilter']), $this);?>

<?php echo smarty_hook(array('name' => "entry-pager-before",'value' => $this->_tpl_vars['adminentrypager']), $this);?>

<?php echo smarty_hook(array('name' => "entry-list-before",'value' => $this->_tpl_vars['adminentrylist']), $this);?>

<?php $this->assign('adminentryextra', '0'); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_adminentryfilter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_adminentrypager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['adminentrylist']): ?>
<form name="entriesgridform" id="entriesgridform" action="" method="post">
<table class='formclass' cellspacing='0'>
    <tr class="sort">
        
        
        <th colspan="3"<?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'status'): ?> class="active"<?php endif; ?> style="text-align: right">
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=status&amp;reverse=1"<?php if ($this->_tpl_vars['adminentrypager']['order'] == 'asc'): ?> class="on"<?php endif; ?>>&uArr;</a>
             <?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'status'): ?><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php else: ?><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=status"<?php if ($this->_tpl_vars['adminentrypager']['order'] != 'asc'): ?> class="on"<?php endif; ?>>&dArr;</a>
        </th>
        <th<?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'title'): ?> class="active"<?php endif; ?> width="300" >
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=title&amp;reverse=1"<?php if ($this->_tpl_vars['adminentrypager']['order'] == 'asc'): ?> class="on"<?php endif; ?>>&uArr;</a>
             <?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'title'): ?><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php else: ?><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=title"<?php if ($this->_tpl_vars['adminentrypager']['order'] != 'asc'): ?> class="on"<?php endif; ?>>&dArr;</a>
        </th>
        <th width="50"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <!-- <a href="?page=entries&amp;sort=category<?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'category'): ?>&amp;reverse=1<?php endif; ?>">category</a> -->
        </th>
        <th<?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'user'): ?> class="active"<?php endif; ?> width="80">
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=user&amp;reverse=1"<?php if ($this->_tpl_vars['adminentrypager']['order'] == 'asc'): ?> class="on"<?php endif; ?>>&uArr;</a>
             <?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'user'): ?><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php else: ?><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=user"<?php if ($this->_tpl_vars['adminentrypager']['order'] != 'asc'): ?> class="on"<?php endif; ?>>&dArr;</a>
        </th>
        <th<?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'date'): ?> class="active"<?php endif; ?> width="80">
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=date&amp;reverse=1"<?php if ($this->_tpl_vars['adminentrypager']['order'] == 'asc'): ?> class="on"<?php endif; ?>>&uArr;</a>
             <?php if ($this->_tpl_vars['adminentrypager']['orderby'] == 'date'): ?><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php else: ?><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
            <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;sort=date"<?php if ($this->_tpl_vars['adminentrypager']['order'] != 'asc'): ?> class="on"<?php endif; ?>>&dArr;</a>
        </th>
        <th width="20"><img src='pics/comment.png' width='16' height='14' alt='#<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>c<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' /></th>
        <th width="20"><img src='pics/trackback.png' width='16' height='14' alt='#<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>t<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>' /></th>
        <th colspan="2">&nbsp;</th>
    </tr>
<?php $_from = $this->_tpl_vars['adminentrylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['entriesgrid'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['entriesgrid']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['entry']):
        $this->_foreach['entriesgrid']['iteration']++;
?>
    <tr id="row-<?php echo $this->_tpl_vars['entry']['uid']; ?>
" class="<?php if (($this->_foreach['entriesgrid']['iteration']-1)%2): ?>even<?php else: ?>odd<?php endif; ?>">
        <td width="1">
            <input type="checkbox" onclick="rowSelect(<?php echo $this->_tpl_vars['entry']['uid']; ?>
)" id="check-<?php echo $this->_tpl_vars['entry']['uid']; ?>
" name="check[ <?php echo $this->_tpl_vars['entry']['uid']; ?>
 ]" />
        </td>
        <td class="tabular" width="1">
            <span><small>&#8470; <?php echo $this->_tpl_vars['entry']['uid']; ?>
.</small></span>
        </td>
              
        <td width="1" class="nowrap">
            <?php if ($this->_tpl_vars['entry']['status'] == 'publish'): ?>
            <a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
" <?php if (! $this->_tpl_vars['config']['front_end_links_same_window']): ?>target="_blank"<?php endif; ?> class="front_end"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Published<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            <?php elseif ($this->_tpl_vars['entry']['status'] == 'timed'): ?>
            <span class="timedpublishindicator"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Timed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            <?php else: ?>
            <span class="unpublishedindicator"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Held<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            <?php endif; ?>
        </td>
        <td class="entriesclip">
            <div class="clip extraclip" style='width: 300px;'>
            <?php if ($this->_tpl_vars['entry']['editable']): ?>
                <a title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['editpage']; ?>
&amp;uid=<?php echo $this->_tpl_vars['entry']['uid']; ?>
"><strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 35) : smarty_modifier_truncate($_tmp, 35)); ?>
</strong></a>
            <?php else: ?>
                <strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 35) : smarty_modifier_truncate($_tmp, 35)); ?>
</strong>
            <?php endif; ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['excerpt'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>

            </div>
        </td>
        <td class="tabular" width="1">
            <span><?php if ($this->_tpl_vars['entry']['categorycount'] == 1): ?>
            <?php echo $this->_tpl_vars['entry']['categorynames']; ?>

            <?php elseif ($this->_tpl_vars['entry']['categorycount'] > 1): ?>
        <acronym title="<?php echo $this->_tpl_vars['entry']['categorynames']; ?>
"><?php echo $this->_tpl_vars['entry']['categorycount']; ?>
 <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></acronym>
        <?php else: ?>
            0 categories
            <?php endif; ?></span>
        </td>
        <td class="tabular" width="1">
            <?php if ($this->_tpl_vars['entry']['author']): ?>
                <?php echo $this->_tpl_vars['entry']['author']; ?>

            <?php else: ?>
                <?php echo $this->_tpl_vars['entry']['user']; ?>

            <?php endif; ?>
        </td>
        <td class="tabular" width="1">
            <span><?php if ($this->_tpl_vars['entry']['status'] == 'publish'): ?>
            <?php echo smarty_date(array('format' => "%day%-%month%-'%ye% %hour24%:%minute%",'date' => $this->_tpl_vars['entry']['date']), $this);?>

            <?php elseif ($this->_tpl_vars['entry']['status'] == 'timed'): ?>
            <span class="timedpublishindicator"><?php echo smarty_date(array('format' => "%day%-%month%-'%ye% %hour24%:%minute%",'date' => $this->_tpl_vars['entry']['publish_date']), $this);?>
</span>
            <?php else: ?>
            -
            <?php endif; ?></span>    
        </td>
        <td class="tabular"><?php if ($this->_tpl_vars['entry']['commeditable'] && $this->_tpl_vars['entry']['commcount'] > 0): ?>
        <a href='index.php?page=comments&amp;uid=<?php echo $this->_tpl_vars['entry']['uid']; ?>
' title="<?php echo $this->_tpl_vars['entry']['commnames']; ?>
"><?php echo $this->_tpl_vars['entry']['commcount']; ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>c<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php else: ?><?php echo $this->_tpl_vars['entry']['commcount']; ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>c<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
        <td class="tabular"><?php if ($this->_tpl_vars['entry']['trackeditable'] && $this->_tpl_vars['entry']['trackcount'] > 0): ?>
        <a href='index.php?page=trackbacks&amp;uid=<?php echo $this->_tpl_vars['entry']['uid']; ?>
'><?php echo $this->_tpl_vars['entry']['trackcount']; ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>t<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php else: ?><?php echo $this->_tpl_vars['entry']['trackcount']; ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>t<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
        
        <?php if ($this->_tpl_vars['entry']['editable']): ?>
        <td width="1">
            <a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['editpage']; ?>
&amp;uid=<?php echo $this->_tpl_vars['entry']['uid']; ?>
"><img height="16" width="16" alt="Edit" src="pics/page_edit.png" /></a>
        </td>
        <td width="1">
            <a onclick="return confirmme('index.php?page=entries&amp;del=<?php echo $this->_tpl_vars['entry']['uid']; ?>
', 'Are your sure you wish to delete this entry?');" href="#"><img height="16" width="16" alt="Delete" src="pics/page_delete.png" /></a>
        </td>
        <?php else: ?>
        <td width="1">
            <img src='pics/page_edit_dim.png' width='16' height='16' alt='-' />
        </td>
        <td width="1">
            <img src='pics/page_delete_dim.png' width='16' height='16' alt='-' />
        </td>
        <?php endif; ?>
    </tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<table id="quickstatusform" class='formclass' cellspacing='0'>
	<tr>
		<th colspan="11">
            <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
" />
            <input type="hidden" name="pivotxsession" value="<?php echo $this->_tpl_vars['adminentrycsrf']; ?>
"/>
			<img height="14" border="0" width="29" alt="" src="pics/arrow_ltr.gif" />
			<a onclick="rowSelectAll(); return false;" href="#"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check All<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> /
			<a onclick="rowSelectNone(); return false;" href="#"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uncheck All<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>With the checked entries, do:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			<select class="input" id="entriesaction" name="action">
				<option selected="selected" value=""><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>- select an option -<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
				<option value="publish"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Set Status to "publish"<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
				<option value="hold"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Set Status to "hold"<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
				<option value="delete"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete them<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
			</select>
            <button type="submit" onclick="return entriesActionSubmit();" class="positive" value="Go!"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
		</th>
	</tr>
</table>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_adminentrypager.tpl", 'smarty_include_vars' => array('extraclass' => 'entriesnavbottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<form name="entriesgridform" id="entriesgridform" action="" method="post">
<table class='formclass' cellspacing='0'>
    <tr>
        <th>&nbsp;</th>
    </tr>
    <tr>
        <td>
            <p class="error">
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No entries found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </p>
            <?php if ($this->_tpl_vars['adminentrysearch'] || $this->_tpl_vars['adminentryfilter']): ?>
            <form name="entriesFilterform" id="entriesFilterform" action="" method="post">
                <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
" />
                <input type="hidden" name="pivotxsession" value="<?php echo $this->_tpl_vars['adminentrycsrf']; ?>
"/>
                <p class="helpful">
                    <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your search or filter settings gave no results.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may reset the filters with the following link:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <button type="submit" name="clear" value="clear" class="button" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reset search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show all<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
                </p>
            </form>
            <?php endif; ?>
            <p class="error">
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can also create a<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <a href="?page=<?php echo $this->_tpl_vars['adminentrytype']['addpage']; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>.
            </p>
        </td>
    </tr>
</table>
</form>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>