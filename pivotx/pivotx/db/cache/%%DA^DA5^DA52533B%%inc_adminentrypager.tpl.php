<?php /* Smarty version 2.6.26, created on 2015-05-14 12:13:43
         compiled from inc_adminentrypager.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'inc_adminentrypager.tpl', 5, false),)), $this); ?>
<?php if ($this->_tpl_vars['adminentrypager']['numpages'] > 1): ?>
<table class="entriesnav <?php echo $this->_tpl_vars['extraclass']; ?>
" cellspacing='0'><tr>
    <td class="entriespager ep-first">
        <ul class="ep">
            <?php if ($this->_tpl_vars['adminentrypager']['currentpage'] > 1): ?><li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=first">&laquo; <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>first<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li><?php endif; ?>
            <?php if ($this->_tpl_vars['adminentrypager']['currentpage'] > 1): ?><li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=<?php echo $this->_tpl_vars['adminentrypager']['currentpage']-1; ?>
">&lsaquo; <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>previous<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></li><?php endif; ?>
        </ul>
    </td>
	
    <td class="entriespager">
        <ul class="ep">
        <?php unset($this->_sections['pg']);
$this->_sections['pg']['name'] = 'pg';
$this->_sections['pg']['loop'] = is_array($_loop=$this->_tpl_vars['adminentrypager']['numpages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pg']['show'] = true;
$this->_sections['pg']['max'] = $this->_sections['pg']['loop'];
$this->_sections['pg']['step'] = 1;
$this->_sections['pg']['start'] = $this->_sections['pg']['step'] > 0 ? 0 : $this->_sections['pg']['loop']-1;
if ($this->_sections['pg']['show']) {
    $this->_sections['pg']['total'] = $this->_sections['pg']['loop'];
    if ($this->_sections['pg']['total'] == 0)
        $this->_sections['pg']['show'] = false;
} else
    $this->_sections['pg']['total'] = 0;
if ($this->_sections['pg']['show']):

            for ($this->_sections['pg']['index'] = $this->_sections['pg']['start'], $this->_sections['pg']['iteration'] = 1;
                 $this->_sections['pg']['iteration'] <= $this->_sections['pg']['total'];
                 $this->_sections['pg']['index'] += $this->_sections['pg']['step'], $this->_sections['pg']['iteration']++):
$this->_sections['pg']['rownum'] = $this->_sections['pg']['iteration'];
$this->_sections['pg']['index_prev'] = $this->_sections['pg']['index'] - $this->_sections['pg']['step'];
$this->_sections['pg']['index_next'] = $this->_sections['pg']['index'] + $this->_sections['pg']['step'];
$this->_sections['pg']['first']      = ($this->_sections['pg']['iteration'] == 1);
$this->_sections['pg']['last']       = ($this->_sections['pg']['iteration'] == $this->_sections['pg']['total']);
?>
            <?php if ($this->_sections['pg']['iteration'] == $this->_tpl_vars['adminentrypager']['currentpage']-5): ?>
            <li><span>...</span></li><?php endif; ?>
            <?php if ($this->_sections['pg']['iteration'] > $this->_tpl_vars['adminentrypager']['currentpage']-5 && $this->_sections['pg']['iteration'] < $this->_tpl_vars['adminentrypager']['currentpage']+5): ?>
            <?php if ($this->_tpl_vars['adminentrypager']['currentpage'] == $this->_sections['pg']['iteration']): ?>
            <li><span><?php echo $this->_sections['pg']['iteration']; ?>
</span></li>
            <?php else: ?>
            <li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=<?php echo $this->_sections['pg']['iteration']; ?>
"><?php echo $this->_sections['pg']['iteration']; ?>
</a></li>
            <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_sections['pg']['iteration'] == $this->_tpl_vars['adminentrypager']['currentpage']+5): ?>
            <li><span>...</span></li>
            <li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=<?php echo $this->_tpl_vars['adminentrypager']['numpages']; ?>
"><?php echo $this->_tpl_vars['adminentrypager']['numpages']; ?>
</a></li>
			<?php endif; ?>
        <?php endfor; endif; ?>
        </ul>
	</td>

    <td class="entriespager ep-last">
        <ul class="ep">
            <?php if ($this->_tpl_vars['adminentrypager']['currentpage'] < $this->_tpl_vars['adminentrypager']['numpages']): ?><li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=<?php echo $this->_tpl_vars['adminentrypager']['currentpage']+1; ?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &rsaquo;</a></li><?php endif; ?>
            <?php if ($this->_tpl_vars['adminentrypager']['currentpage'] < $this->_tpl_vars['adminentrypager']['numpages']): ?><li><a href="index.php?page=<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
&amp;go=last"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>last<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></li><?php endif; ?>
        </ul>
    </td>
</tr></table>
<?php else: ?>
<table class="entriesnav <?php echo $this->_tpl_vars['extraclass']; ?>
" cellspacing='0'><tr><td>&nbsp;</td></tr></table>
<?php endif; ?>

