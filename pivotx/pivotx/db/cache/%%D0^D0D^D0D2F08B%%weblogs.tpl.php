<?php /* Smarty version 2.6.26, created on 2015-05-14 12:12:56
         compiled from weblogs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'weblogs.tpl', 7, false),array('function', 'cycle', 'weblogs.tpl', 23, false),array('function', 'category', 'weblogs.tpl', 28, false),array('function', 'count', 'weblogs.tpl', 28, false),array('modifier', 'wordwrap', 'weblogs.tpl', 26, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if (count ( $this->_tpl_vars['weblogs'] ) > 7): ?>
<p class="buttons">
    <a href="index.php?page=weblognew">
        <img src="pics/world_add.png" alt=""/>
        <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Weblog<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
</p>
<?php endif; ?>

<table class='formclass' cellspacing='0'>
    <tr>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Weblog Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>

    <?php $_from = $this->_tpl_vars['weblogs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['weblog']):
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
'>
        <td valign="top" ><strong><a href="index.php?page=weblogedit&amp;weblog=<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_tpl_vars['weblog']['name']; ?>
</a></strong>
            <span style="color:#555; font-size: 85%;"> (<?php echo $this->_tpl_vars['key']; ?>
 - <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>order<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['weblog']['sortorder']; ?>
)</span><br />
            <div style='padding-top: 4px; font-size: 11px'><?php echo ((is_array($_tmp=$this->_tpl_vars['weblog']['payoff'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 60, "<br />\n") : smarty_modifier_wordwrap($_tmp, 60, "<br />\n")); ?>
</div></td>
        <td valign="top" >
            <?php if (count ( $this->_tpl_vars['weblog']['categories'] ) > 5): ?> <acronym title="<?php echo smarty_category(array('name' => $this->_tpl_vars['weblog']['categories']), $this);?>
"><?php echo smarty_count(array('array' => $this->_tpl_vars['weblog']['categories']), $this);?>
 <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></acronym> <?php else: ?><?php echo smarty_category(array('name' => $this->_tpl_vars['weblog']['categories']), $this);?>
<?php endif; ?>
            &nbsp;
        </td>

        <td valign="top" class="buttons_small" style="padding: 2px 0px">
            <a href="<?php echo $this->_tpl_vars['weblog']['link']; ?>
" <?php if (! $this->_tpl_vars['config']['front_end_links_same_window']): ?>target="_blank"<?php endif; ?> class="front_end">
                <img src="pics/world.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>
        <td valign="top" class="buttons_small" style="padding: 2px 0px">
            <a href="index.php?page=weblogedit&amp;weblog=<?php echo $this->_tpl_vars['key']; ?>
" style="margin-left: 7px">
                <img src="pics/world_edit.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>
        <td valign="top" class="buttons_small" style="padding: 2px 0px">
            <a href="#" onclick="return confirmme('index.php?page=weblogs&amp;del=<?php echo $this->_tpl_vars['key']; ?>
', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js','1' => $this->_tpl_vars['weblog']['name'])); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You are about to delete weblog %1. Are you sure?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="negative" style="margin-left: 7px">
                <img src="pics/world_delete.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>
        <td valign="top" class="buttons_small" style="padding: 2px 4px 2px 0px;">
            <a href="index.php?page=weblogs&amp;export=<?php echo $this->_tpl_vars['key']; ?>
" style="margin-left: 7px">
                <img src="pics/cog_go.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Export as theme<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        </td>

    </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>


<p class="buttons">
    <a href="index.php?page=weblognew">
        <img src="pics/world_add.png" alt=""/>
        <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Weblog<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
</p>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>