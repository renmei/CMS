<?php /* Smarty version 2.6.26, created on 2015-05-14 12:05:47
         compiled from placeholder.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_from = $this->_tpl_vars['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>     <?php if ($this->_tpl_vars['item']['uri'] == $this->_tpl_vars['listing']): ?><?php $this->assign('displaymenu', $this->_tpl_vars['item']); ?><?php endif; ?>
    <?php $_from = $this->_tpl_vars['item']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subitem']):
?>         <?php if ($this->_tpl_vars['subitem']['uri'] == $this->_tpl_vars['listing']): ?><?php $this->assign('displaymenu', $this->_tpl_vars['subitem']); ?><?php endif; ?>
        <?php $_from = $this->_tpl_vars['subitem']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['subsubitem']):
?>             <?php if ($this->_tpl_vars['subsubitem']['uri'] == $this->_tpl_vars['listing']): ?><?php $this->assign('displaymenu', $this->_tpl_vars['subsubitem']); ?><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (is_array ( $this->_tpl_vars['displaymenu']['menu'] )): ?>
    <ul id="placeholder-menu">
    <?php $_from = $this->_tpl_vars['displaymenu']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['submenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['submenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['submenu']['iteration']++;
?>
        <?php if ($this->_tpl_vars['item']['name'] != ""): ?>
            <li>
            <a href='<?php echo $this->_tpl_vars['item']['href']; ?>
'><?php echo $this->_tpl_vars['item']['name']; ?>
</a>
            <p><?php echo $this->_tpl_vars['item']['description']; ?>
</p>
            </li>
        <?php endif; ?>
        
        <?php if ($this->_tpl_vars['item']['is_divider'] != ""): ?>
            <hr size="1" noshade="noshade" style="margin-left: 40px; margin-bottom: 10px; width: 500px;" />
        <?php endif; ?>
        
    <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>