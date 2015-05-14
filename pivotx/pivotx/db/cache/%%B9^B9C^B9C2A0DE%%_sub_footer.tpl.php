<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:54
         compiled from default/_sub_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'default/_sub_footer.tpl', 6, false),array('function', 'tagcloud', 'default/_sub_footer.tpl', 7, false),array('function', 'category_list', 'default/_sub_footer.tpl', 14, false),array('function', 'link_list', 'default/_sub_footer.tpl', 21, false),array('function', 'search', 'default/_sub_footer.tpl', 27, false),)), $this); ?>
<div id="secondary2">

    <div class="block">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['templatedir'])."/_sub_about.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <h3><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tag Cloud<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <?php echo smarty_tagcloud(array(), $this);?>

    </div>

  <div class="block">
      

        <h3><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
      <ul><?php echo smarty_category_list(array('format' => "<li><a href='%url%'>%display%</a></li>"), $this);?>
</ul>
    </div>

    <div class="block">
        

    <h3><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Links<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <?php echo smarty_link_list(array(), $this);?>

    </div>

    <div class="block">
      <?php if ($this->_tpl_vars['pagetype'] != 'search'): ?>
            <h3><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php echo smarty_search(array(), $this);?>

      <?php endif; ?>

    
    </div>

    <div style="clear:both">&nbsp;</div>
</div>
<br />
</body>
</html>