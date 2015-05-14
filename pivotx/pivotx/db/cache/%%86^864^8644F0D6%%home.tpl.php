<?php /* Smarty version 2.6.26, created on 2015-05-14 12:02:48
         compiled from home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'hook', 'home.tpl', 9, false),array('function', 'cycle', 'home.tpl', 47, false),array('function', 'date', 'home.tpl', 59, false),array('block', 't', 'home.tpl', 13, false),array('block', 'button', 'home.tpl', 19, false),array('modifier', 'strip_tags', 'home.tpl', 51, false),array('modifier', 'trimlen', 'home.tpl', 51, false),array('modifier', 'hyphenize', 'home.tpl', 51, false),array('modifier', 'intval', 'home.tpl', 56, false),array('modifier', 'trim', 'home.tpl', 110, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div id="container">


    <div class="homeleftcolumn">

    <?php echo smarty_hook(array('name' => "dashboard-top"), $this);?>


    <?php if (! $this->_tpl_vars['config']['hide_dashboard_welcome']): ?>
        <p style='margin: 0 0 12px 0; width: 440px;'>
            <?php $this->_tag_stack[] = array('t', array('escape' => 'no','x' => $this->_tpl_vars['build'])); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Hi, and welcome to %1! Below this bit of text you can see a short overview of the latest <a href='index.php?page=entries'>entries</a> and <a href='index.php?page=pagesoverview'>pages</a>. And perhaps even <a href='index.php?page=comments'>new comments</a> that are in the moderation queue.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </p>
    <?php endif; ?>

    <?php if (! $this->_tpl_vars['config']['hide_dashboard_quicklinks']): ?>
        <p style="margin: 0px 0px 12px;" class="buttons">
            <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=entry",'icon' => "page_white_add.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php if ($this->_tpl_vars['user']['userlevel'] >= 2): ?>
                <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=page",'icon' => "page_white_add.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user']['userlevel'] >= 3): ?>
                <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=configuration",'icon' => "cog.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configuration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['user']['userlevel'] >= 2): ?>
                <?php $this->_tag_stack[] = array('button', array('link' => "index.php?page=media",'icon' => "image.png")); $_block_repeat=true;smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Manage Media<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_button($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </p>
    <?php endif; ?>
    
    <?php echo smarty_hook(array('name' => "dashboard-before-entries"), $this);?>


<?php if (is_array ( $this->_tpl_vars['entries'] ) && count ( $this->_tpl_vars['entries'] ) > 0): ?>
<table class='formclass' cellspacing='0'  style='width: 100%; padding-top: 0;'>
    <tbody>
    <tr>
        <th class="sectiontitle"><a href="index.php?page=entries"><img src="pics/page_white_go.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of entries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of entries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></a><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The latest entries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><img width="16" height="14" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>s" src="pics/comment.png" /></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th colspan="2" style="text-align:right"><a href="index.php?page=entries"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>more<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></th>
    </tr>


    <?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr class='<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
'>

    <?php if ($this->_tpl_vars['item']['editable']): ?>
        <td class='dashboardclip1'><div class="clip" style='width: 260px;'>
            &#8470; <?php echo $this->_tpl_vars['item']['code']; ?>
. <strong><a href="index.php?page=entry&amp;uid=<?php echo $this->_tpl_vars['item']['code']; ?>
" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 26) : smarty_modifier_trimlen($_tmp, 26)); ?>
</a></strong> - <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['excerpt'])) ? $this->_run_mod_handler('hyphenize', true, $_tmp) : smarty_modifier_hyphenize($_tmp)); ?>

        </div></td>
        
        <td class="tabular"><?php $this->assign('username', $this->_tpl_vars['item']['user']); ?><?php if ($this->_tpl_vars['users'][$this->_tpl_vars['username']] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_tpl_vars['username']])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php endif; ?></td>
        <td class="tabular" style="text-align:center;">
            <a href="index.php?page=comments&amp;uid=<?php echo $this->_tpl_vars['item']['code']; ?>
" title=""><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['commcount'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
</a>
        </td>
        <td class="tabular">
        <?php if ($this->_tpl_vars['item']['status'] == 'publish'): ?><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>

        <?php elseif ($this->_tpl_vars['item']['status'] == 'timed'): ?>
        <span title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Timed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="timedpublishindicator"><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['publish_date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
</span>
        <?php else: ?><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Held<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?> </td><!--  -->
        <td width="1" align="left">
            <a href="index.php?page=entry&amp;uid=<?php echo $this->_tpl_vars['item']['code']; ?>
"><img src="pics/page_edit.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" /></a>
        </td>
        <td width="1">
            <a href="#" onclick="return confirmme('index.php?page=entries&amp;del=<?php echo $this->_tpl_vars['item']['code']; ?>
', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you wish to delete this entry?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');"><img src="pics/page_delete.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" /></a>
        </td>
    <?php else: ?>
        <td class='dashboardclip1'><div class="clip" style='width: 260px;'>
            &#8470; <?php echo $this->_tpl_vars['item']['code']; ?>
. <strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 26) : smarty_modifier_trimlen($_tmp, 26)); ?>
</strong> - <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['excerpt'])) ? $this->_run_mod_handler('hyphenize', true, $_tmp) : smarty_modifier_hyphenize($_tmp)); ?>

        </div></td>
        <td class="tabular"><?php $this->assign('username', $this->_tpl_vars['item']['user']); ?><?php if ($this->_tpl_vars['users'][$this->_tpl_vars['username']] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_tpl_vars['username']])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php endif; ?></td>
        <td class="tabular">
            <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['commcount'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>c<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> /
            <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['trackcount'])) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)); ?>
<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>t<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td class="tabular"><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
 </td>
        <td width="1"><img src="pics/page_edit_dim.png" alt="-" height="16" width="16" /></td>
        <td width="1"><img src="pics/page_delete_dim.png" alt="-" height="16" width="16" /></td>  
    <?php endif; ?>    
    </tr>


    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>

    <br />
<?php endif; ?>
    
    <?php echo smarty_hook(array('name' => "dashboard-before-comments"), $this);?>

    
<?php if (count ( $this->_tpl_vars['latestcomments'] ) > 0): ?>
<table class='formclass' cellspacing='0'  style='border: 1px solid #CCC; width: 100%; padding-top: 0;'>
    <tbody>
    <tr>
         <th class="sectiontitle"><a href="index.php?page=comments"><img src="pics/comment-go.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></a><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The latest comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th colspan="2" style="text-align:right"><a href="index.php?page=comments"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>more<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></th>
    </tr>


    <?php $_from = $this->_tpl_vars['latestcomments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
<?php if ($this->_tpl_vars['item']['moderate']): ?> moderate<?php endif; ?><?php if ($this->_tpl_vars['item']['blocked']): ?> blocked<?php endif; ?>' >
        <?php if ($this->_tpl_vars['item']['allowedit']): ?>
        <td class='dashboardclip3'><div class="clip" style='width: 260px;'>
            <strong><a href="index.php?page=comments&amp;uid=<?php echo $this->_tpl_vars['item']['entry_uid']; ?>
" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 16) : smarty_modifier_trimlen($_tmp, 16)); ?>
</a> </strong> -
            <span><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['comment'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 100) : smarty_modifier_trimlen($_tmp, 100)); ?>
</span>
        </div></td>
        <td class="tabular"><span style="color:#666666; font-size:11px;">&#8470; <?php echo $this->_tpl_vars['item']['entry_uid']; ?>
.</span></td>
        <td class="tabular"><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
 </td>
        <td width="1" align="left">    
            <a href="index.php?page=editcomment&amp;uid=<?php echo $this->_tpl_vars['item']['entry_uid']; ?>
&amp;key=<?php echo $this->_tpl_vars['item']['uid']; ?>
&return=dashboard" class="dialog comment" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
                <img src="pics/page_edit.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" />
            </a>
        </td>
        <td width="1" align="left">    
            <a href="#" onclick="return confirmme('index.php?page=comments&amp;uid=<?php echo $this->_tpl_vars['item']['entry_uid']; ?>
&amp;del=<?php echo $this->_tpl_vars['item']['uid']; ?>
&return=dashboard', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete this comment?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');" class="negative">
                <img src="pics/page_delete.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" />
            </a>

        </td>
        <?php else: ?>
        <td class='dashboardclip3'><div class="clip" style='width: 260px;'>
            <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['name'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 16) : smarty_modifier_trimlen($_tmp, 16)); ?>
</strong> - <span><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['comment'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 100) : smarty_modifier_trimlen($_tmp, 100)); ?>
</span>
        </div></td>
        <td class="tabular"><span style="color:#666666; font-size:11px;">&#8470; <?php echo $this->_tpl_vars['item']['entry_uid']; ?>
.</span></td>
        <td class="tabular"><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
 </td>
        <td width="1" align="left">
            <img src="pics/page_edit_dim.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" />
        </td>
        <td width="1" align="left">
            <img src="pics/page_delete_dim.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" />
        </td>
        <?php endif; ?>

  
    </tr>


    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>

    <br />    
<?php endif; ?>    
    
<?php echo smarty_hook(array('name' => "dashboard-before-pages"), $this);?>


<?php if (is_array ( $this->_tpl_vars['pages'] ) && count ( $this->_tpl_vars['pages'] ) > 0): ?>
<table class='formclass' cellspacing='0'  style='border: 1px solid #CCC; width: 100%; padding-top: 0;'>
    <tbody>
    <tr>
         <th class="sectiontitle"><a href="index.php?page=pagesoverview"><img src="pics/page_white_go.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>overview of pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></a><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The latest pages<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Chapter<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th colspan="2" style="text-align:right"><a href="index.php?page=pagesoverview"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>more<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></th>
    </tr>

    <?php $_from = $this->_tpl_vars['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
        <tr class='<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
'>

    <?php if ($this->_tpl_vars['item']['editable'] == 1): ?>
        <td class='dashboardclip2'><div class="clip" style="width: 200px;">
            &#8470; <?php echo $this->_tpl_vars['item']['uid']; ?>
. <strong><a href="index.php?page=page&amp;uid=<?php echo $this->_tpl_vars['item']['uid']; ?>
" title="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit this page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 25) : smarty_modifier_trimlen($_tmp, 25)); ?>
</a></strong> - <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['excerpt'])) ? $this->_run_mod_handler('hyphenize', true, $_tmp) : smarty_modifier_hyphenize($_tmp)); ?>

        </div></td>
        <td class="tabular"><?php $this->assign('username', $this->_tpl_vars['item']['user']); ?><?php if ($this->_tpl_vars['users'][$this->_tpl_vars['username']] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_tpl_vars['username']])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php endif; ?></td>
        <td class="tabular"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['chaptername'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 24) : smarty_modifier_trimlen($_tmp, 24)); ?>
</td>
        <td class="tabular"><?php if ($this->_tpl_vars['item']['status'] == 'publish'): ?><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
<?php else: ?>-<?php endif; ?> </td>
        <td width="1">
            <a href="index.php?page=page&amp;uid=<?php echo $this->_tpl_vars['item']['uid']; ?>
"><img src="pics/page_edit.png" alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" height="16" width="16" /></a>
        </td>
        <td width="1">
            <a href="#" onclick="return confirmme('index.php?page=pagesoverview&amp;delpage=<?php echo $this->_tpl_vars['item']['uid']; ?>
', '<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you wish to delete this page?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');"><img src="pics/page_delete.png"  alt="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>delete<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"  height="16" width="16" /></a>
        </td>
    <?php else: ?>
        <td class='dashboardclip2'><div class="clip" style="width: 200px;">&#8470; <?php echo $this->_tpl_vars['item']['uid']; ?>
. <strong><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trimlen', true, $_tmp, 25) : smarty_modifier_trimlen($_tmp, 25)); ?>
</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['excerpt'])) ? $this->_run_mod_handler('hyphenize', true, $_tmp) : smarty_modifier_hyphenize($_tmp)); ?>
</div></td>
        <td class="tabular"><?php $this->assign('username', $this->_tpl_vars['item']['user']); ?><?php if ($this->_tpl_vars['users'][$this->_tpl_vars['username']] != ""): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_tpl_vars['username']])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['user'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 22) : smarty_modifier_trimlen($_tmp, 22)); ?>
<?php endif; ?></td>
        <td class="tabular"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['chaptername'])) ? $this->_run_mod_handler('trimlen', true, $_tmp, 24) : smarty_modifier_trimlen($_tmp, 24)); ?>
</td>
        <td class="tabular"><?php echo smarty_date(array('date' => $this->_tpl_vars['item']['date'],'format' => "%day%-%month%-'%ye% %hour24%:%minute%"), $this);?>
 </td>
        <td width="1"><img src="pics/page_edit_dim.png" alt="-" height="16" width="16" /></td>
        <td width="1"><img src="pics/page_delete_dim.png" alt="-" height="16" width="16" /></td>        
    <?php endif; ?>
    </tr>


    <?php endforeach; endif; unset($_from); ?>
    </tbody>
</table>
<?php endif; ?>


    </div>

    <div class="homerightcolumn">

        <?php echo smarty_hook(array('name' => "dashboard-before-warnings"), $this);?>

        <?php if (is_array ( $this->_tpl_vars['warnings'] ) && count ( $this->_tpl_vars['warnings'] ) > 0): ?>
            <?php $_from = $this->_tpl_vars['warnings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <div class="warning">
            	<h2 class="sectiontitle"><img src="pics/error.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>
            
                <?php echo $this->_tpl_vars['item']; ?>

            </div>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

        <?php echo smarty_hook(array('name' => "dashboard-before-news"), $this);?>


        <div class="news">
        <h2 class="sectiontitle"><img src="pics/newspaper.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PivotX News<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><span><a href="http://pivotx.net"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Visit the website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></span></h2>
            <div id="newsholder">
                <img src='pics/loadingAnimation.gif' alt='Loading...' width='208' height='13' style='margin: 20px;' />
            </div>
        </div>


        <?php echo smarty_hook(array('name' => "dashboard-before-events"), $this);?>


        <?php if (is_array ( $this->_tpl_vars['events'] ) && count ( $this->_tpl_vars['events'] ) > 0): ?>
            <div class="news" style="margin-top: 16px;">
            
             <h2 class="sectiontitle"><img src="pics/page_white.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The latest events<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h2>

            <?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
                <p class="events"><?php echo $this->_tpl_vars['item']; ?>
</p>
                <?php if ($this->_tpl_vars['key'] == 5): ?>
                <p id='eventsmoreclick'><a onclick='moreEvents();'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show more items<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p><div id='eventsmore'>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

            <?php if ($this->_tpl_vars['key'] >= 5): ?>
                </div>
            <?php endif; ?>

            </div>
        <?php endif; ?>
            

        <?php echo smarty_hook(array('name' => "dashboard-before-forumposts"), $this);?>


        <?php if (! $this->_tpl_vars['config']['hide_forumposts']): ?>
        <div class="news" style="margin-top: 16px;">
        
        <h2 class="sectiontitle"><img src="pics/users_forum.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The latest Forum posts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><span><a href="http://forum.pivotx.net"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Visit the website<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &raquo;</a></span></h2>

            <div id="forumpostholder">
                &nbsp;
            </div>
        </div>
        <?php endif; ?>

    </div>


    <div class="cleaner">&nbsp;</div>

</div>

<?php echo smarty_hook(array('name' => "dashboard-bottom"), $this);?>


<script type="text/javascript">
//<![CDATA[

jQuery(function($) {
    // Fetch the latest news..
    getPivotxNews();
    
    // Check if we have a session cookie.  
    if (!cookieEnabled()) {
        var html = "<div class='warning'><h2><img src='pics/error.png' alt='' height='16' width='16' style='border-width: 0px; margin-bottom: -3px;' />";
        html += "<strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></h2>";
        html += "<p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>PivotX couldn't set the session properly. Try logging out, and logging on again. You could also try clearing your browser's cache, and make sure no software on your computer is interfering with the cookies.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>";
        html += "<p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If the problem persists, ask for help on the forum.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>";
        html += "</div>";
        
        $('.homerightcolumn').prepend(html);
        
    }
    
});

//]]>
</script>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>