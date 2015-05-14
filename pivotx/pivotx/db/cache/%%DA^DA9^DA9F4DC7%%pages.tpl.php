<?php /* Smarty version 2.6.26, created on 2015-05-14 12:05:21
         compiled from pages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'pages.tpl', 13, false),array('block', 'button', 'pages.tpl', 57, false),array('function', 'cycle', 'pages.tpl', 23, false),array('function', 'date', 'pages.tpl', 45, false),array('modifier', 'strip_tags', 'pages.tpl', 30, false),array('modifier', 'truncate', 'pages.tpl', 30, false),array('modifier', 'hyphenize', 'pages.tpl', 39, false),array('modifier', 'trimtext', 'pages.tpl', 44, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_pagesbuttons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>

<?php if ($this->_tpl_vars['item']['chaptername'] != ""): ?>
<a name="chapter-<?php echo $this->_tpl_vars['key']; ?>
"></a><h1 style='margin-bottom: 0;'>
    <?php echo $this->_tpl_vars['item']['chaptername']; ?>
 
</h1>
<?php else: ?>
<a name="chapter-orphans"></a><h1 style='margin-bottom: 0;'>
	<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Orphaned Pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp; <em style='font-size: 12px;'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These pages do not belong to any chapter, and will not show up in pagelists or menus.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></em>
</h1>
<?php endif; ?>


<table class='formclass tabular' cellspacing='0' style='margin: 8px 0px; width: 98%;'>
<tr>
<th colspan="4"><?php echo $this->_tpl_vars['item']['description']; ?>
 <?php if ($this->_tpl_vars['item']['sortorder']): ?>(&#8470; <?php echo $this->_tpl_vars['key']; ?>
 - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>order<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['item']['sortorder']; ?>
)<?php endif; ?></th>
<th class="toplink"><a href="#logo" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>back to top<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">&uArr;</a></th></tr>
<?php $_from = $this->_tpl_vars['item']['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['loop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['loop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['pagekey'] => $this->_tpl_vars['page']):
        $this->_foreach['loop']['iteration']++;
?>
    <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even','name' => $this->_tpl_vars['key']), $this);?>
">
        <td class='tabular' width='1'>
            <span><small>&#8470; <?php echo $this->_tpl_vars['page']['uid']; ?>
.</small></span></td>
		<td width='640' class='entriesclip'>
            <strong>
                <?php $this->assign('uid', $this->_tpl_vars['page']['uid']); ?>
                <?php if ($this->_tpl_vars['page']['editable']): ?><a title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" href="index.php?page=page&amp;uid=<?php echo $this->_tpl_vars['uid']; ?>
"><?php endif; ?>
                <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['page']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 35) : smarty_modifier_truncate($_tmp, 35)); ?>
<?php if ($this->_tpl_vars['page']['editable']): ?></a><?php endif; ?>

            </strong>
            <span style="color:#555; font-size: 85%;">
                (<?php echo $this->_tpl_vars['page']['uri']; ?>
 - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>order<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['page']['sortorder']; ?>

                <?php if ($this->_tpl_vars['page']['status'] == 'timed'): ?>- <strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Timed Publish<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php endif; ?>
                <?php if ($this->_tpl_vars['page']['status'] == 'hold'): ?>- <strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Hold<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><?php endif; ?>
                <?php if ($this->_tpl_vars['page']['status'] == 'publish'): ?>- <a href="<?php echo $this->_tpl_vars['page']['link']; ?>
" <?php if (! $this->_tpl_vars['config']['front_end_links_same_window']): ?>target="_blank"<?php endif; ?> class="front_end"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Published<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></a><?php endif; ?>
                )</span><br />
            <div class="clip" style="width: 500px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['excerpt'])) ? $this->_run_mod_handler('hyphenize', true, $_tmp) : smarty_modifier_hyphenize($_tmp)); ?>
</div>
        </td>
        <td width='170' class="nowrap">
            <span style="font-size: 90%;">
                <?php $this->assign('username', $this->_tpl_vars['page']['user']); ?>
                <?php if ($this->_tpl_vars['users'][$this->_tpl_vars['username']] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_tpl_vars['username']])) ? $this->_run_mod_handler('trimtext', true, $_tmp, 18) : trimtext($_tmp, 18)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['user'])) ? $this->_run_mod_handler('trimtext', true, $_tmp, 18) : trimtext($_tmp, 18)); ?>
<?php endif; ?>,
                <?php if ($this->_tpl_vars['page']['status'] == 'publish'): ?><?php echo smarty_date(array('date' => $this->_tpl_vars['page']['date'],'format' => "%day%-%month%-'%ye%"), $this);?>
<?php else: ?>-<?php endif; ?>
            </span><br />
            <span style="font-size: 90%;">
                <?php if ($this->_tpl_vars['page']['template'] != "-"): ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['page']['template'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35) : smarty_modifier_truncate($_tmp, 35)); ?>

                <?php else: ?>
                    <em>(<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>default template<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</em>
                <?php endif; ?>
            </span>
        </td>
        <td width='70' align='right' class="buttons_small" style="padding: 2px 4px;">
            <?php if ($this->_tpl_vars['page']['editable']): ?>
                <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=page&uid=".($this->_tpl_vars['uid']),'icon' => "page_white_edit.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                &nbsp;
            <?php endif; ?>
        </td>

        <td width='70' align='right' class="buttons_small" style="padding: 2px 4px;">
            <?php if ($this->_tpl_vars['page']['editable']): ?>
            <a href="#" onclick="return confirmme('index.php?page=pagesoverview&amp;delpage=<?php echo $this->_tpl_vars['uid']; ?>
', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you wish to delete this Page?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');"  class="negative">
               <img src="pics/page_white_delete.png" alt="" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </a>
            </td>
            <?php endif; ?>

    </tr>

<?php endforeach; endif; unset($_from); ?>



<?php if ($this->_tpl_vars['item']['chaptername'] != ""): ?>
<tr><td colspan="5">
<p style="margin: 8px 0px;" class="buttons">
    <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=page&chapter=".($this->_tpl_vars['key']),'icon' => "page_white_add.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Write a new Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

    <?php if ($this->_tpl_vars['item']['editable']): ?>
    <a href="index.php?page=chapter&amp;id=<?php echo $this->_tpl_vars['key']; ?>
" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="dialog chapter">
        <img src="pics/book_edit.png" alt="" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </a>

     <a href="#" onclick="return confirmme('index.php?page=pagesoverview&amp;del=<?php echo $this->_tpl_vars['key']; ?>
', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you wish to delete this Chapter?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="negative">
        <img src="pics/book_delete.png" alt="" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </a>
    <?php endif; ?>
</p>
</td></tr>
<?php endif; ?>




</table>
<br />
<?php endforeach; endif; unset($_from); ?>


<?php if ($this->_tpl_vars['item']['editable']): ?>
<p style="margin: 16px 0px">

    <span class="buttons">
    <a href="index.php?page=chapter&amp" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="dialog chapter">
        <img src="pics/book_add.png" alt="" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> </a>
    </span>
</p>
<br />
<br />
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>