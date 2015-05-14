<?php /* Smarty version 2.6.26, created on 2015-05-14 12:13:43
         compiled from inc_adminentryfilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'inc_adminentryfilter.tpl', 10, false),array('modifier', 'trimtext', 'inc_adminentryfilter.tpl', 19, false),)), $this); ?>
<!--
 TODO: disable the search form when the filter form is active, and vice versa
-->

<div id="entriessearchfilter">
    <form name="entriesFilterform" id="entriesFilterform" action="" method="post">
        <input type="hidden" name="page" value="<?php echo $this->_tpl_vars['adminentrytype']['listpage']; ?>
" />
        <input type="hidden" name="pivotxsession" value="<?php echo $this->_tpl_vars['adminentrycsrf']; ?>
"/>
        <fieldset>
            <legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter on:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
            <select class="input" name="filterCategory" id="filterCategory">
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>       
                <option disabled="disabled" value="*">----------</option>            
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>all categories<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                <option disabled="disabled" value="*">----------</option>        
                <?php $_from = $this->_tpl_vars['adminentryfilter']['filtercategory']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
                <option value="<?php echo $this->_tpl_vars['cat']['name']; ?>
"
                    <?php if ($this->_tpl_vars['adminentryfilter']['filtercategory']['selected'] == $this->_tpl_vars['cat']['name']): ?>selected="selected"<?php endif; ?>
                ><?php echo ((is_array($_tmp=$this->_tpl_vars['cat']['display'])) ? $this->_run_mod_handler('trimtext', true, $_tmp, 14) : trimtext($_tmp, 14)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php if ($this->_tpl_vars['adminentryfilter']['filterauthor']): ?>
            <select class="input" name="filterAuthor" id="filterAuthor">
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option> 
                <option disabled="disabled" value="*">----------</option>               
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>all authors<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                <option disabled="disabled" value="*">----------</option>      
                <?php $_from = $this->_tpl_vars['adminentryfilter']['filterauthor']['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
                <option value="<?php echo $this->_tpl_vars['author']['username']; ?>
"
                    <?php if ($this->_tpl_vars['adminentryfilter']['filterauthor']['selected'] == $this->_tpl_vars['author']['username']): ?>selected="selected"<?php endif; ?>
                ><?php echo ((is_array($_tmp=$this->_tpl_vars['author']['nickname'])) ? $this->_run_mod_handler('trimtext', true, $_tmp, 14) : trimtext($_tmp, 14)); ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <?php endif; ?>
            <select class="input" name="filterStatus" id="filterStatus">
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>       
                <option disabled="disabled" value="*">----------</option>        
                <option value="*"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>all statuses<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                <option disabled="disabled" value="*">----------</option>      
                <?php $_from = $this->_tpl_vars['adminentryfilter']['filterstatus']['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                <option value="<?php echo $this->_tpl_vars['status']['status']; ?>
"
                    <?php if ($this->_tpl_vars['adminentryfilter']['filterstatus']['selected'] == $this->_tpl_vars['status']['status']): ?>selected="selected"<?php endif; ?>
                ><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['status']['displaystatus']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                <?php endforeach; endif; unset($_from); ?>
            </select>
            <button type="submit" name="filtergo" class="positive" value="Go!"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>      
        </fieldset>
        <hr />
        <fieldset>
            <legend><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search for:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
            <input type="text" onfocus="this.select();" class="input" value="<?php echo $this->_tpl_vars['adminentryfilter']['filtersearch']['search']; ?>
" name="search" id="search" />
            <button type="submit" name="searchgo" class="positive" value="Go!"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Go!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button> 
        </fieldset>
        <hr />
        <fieldset>
            <button type="submit" name="clear" value="clear" class="button" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reset search<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show all<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></button>
        </fieldset>
    </form>
</div>