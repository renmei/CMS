<?php /* Smarty version 2.6.26, created on 2015-05-14 12:13:56
         compiled from editentry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'editentry.tpl', 16, false),array('modifier', 'escape', 'editentry.tpl', 17, false),array('function', 'hook', 'editentry.tpl', 48, false),array('function', 'date', 'editentry.tpl', 221, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="container">

    <form id="form1" name="form1" method="post" action="index.php?page=entry&amp;uid=<?php echo $this->_tpl_vars['entry']['code']; ?>
" class="edit-entry">

    <input type="hidden" name="f_image" id="f_image" value="" />
    <input type="hidden" name="f_hasthumb" id="f_hasthumb" value="" />
    <input type="hidden" name="pivotxsession" id="pivotxsession" value="<?php echo $this->_tpl_vars['pivotxsession']; ?>
" />
    <input type="hidden" name="postedfrom" id="postedfrom" value="" />

        <div class="leftcolumn">

            <table border="0" cellspacing="0" class="formclass" width="650">
                <tr class="field-title-and-uri">
                    <td width="140"><label><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></label></td>
                    <td width="510"><input id="title" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="xl lesswide"
                    <?php if ($this->_tpl_vars['entry']['uid'] == 0): ?>onkeyup="setSafename('title','uri','permalink');" onchange="setSafename('title','uri','permalink');"<?php endif; ?> />
                    
                    <p id="permalink-p"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Permalink<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: 
                        <?php echo $this->_tpl_vars['paths']['host']; ?>
<?php echo $this->_tpl_vars['entry']['link']; ?>
<span id="permalink"><?php echo $this->_tpl_vars['entry']['uri']; ?>
</span><?php echo $this->_tpl_vars['entry']['link_end']; ?>

                        <?php if ($this->_tpl_vars['entry']['uri']): ?>
                        <span id="permalink-link">(<a href='#' onclick="$('#permalink-edit').fadeIn();$('#permalink-link').hide();"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>)</span>
                        <?php endif; ?>
                    </p>                    
                    
                    </td>
                </tr>
                    
                <tr id="permalink-edit" class="field-title-andu-uri">
                    <td><label><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Internal Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></label></td>
                    <td><input id="uri" name="uri" type="text" value="<?php echo $this->_tpl_vars['entry']['uri']; ?>
" class="lesswide"
                        onkeyup="setSafename('uri','uri','permalink');" onchange="setSafename('uri','uri','permalink');" />
                    </td>
                </tr>

                <?php if ($this->_tpl_vars['config']['hide_subtitle']): ?>
                <input name="subtitle" type="hidden" value="<?php echo $this->_tpl_vars['entry']['subtitle']; ?>
" />
                <?php else: ?>
                <tr class="field-subtitle">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subtitle<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td><input name="subtitle" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['subtitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
                </tr>
                <?php endif; ?>    

            </table>

            <?php echo smarty_hook(array('name' => "entry-introduction-before",'value' => $this->_tpl_vars['entry']), $this);?>


            <div class="field-introduction">
                <p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Introduction<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
                <textarea name="introduction" id="introduction" class="Editor" rows='50'
                    cols='4'><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['introduction'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
            </div>
    
            <?php echo smarty_hook(array('name' => "entry-body-before",'value' => $this->_tpl_vars['entry']), $this);?>


            <div class="field-body">
                <p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Body<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
                <textarea name="body" id="body" class="Editor" rows='50'
                    cols='4'><?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['body'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>

                <br />
            </div>

            <?php echo smarty_hook(array('name' => "entry-keywords-before",'value' => $this->_tpl_vars['entry']), $this);?>


            <table border="0" cellspacing="0" class="formclass" width="650">
                <tr class="field-keywords">
                    <td width="140"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Keywords<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> / <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tags<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td width="510">
                        <input name="keywords" id="keywords" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
                        <p style='margin-top:0;'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Separate Tags with spaces. E.g., movies jedi starwars (not 'star wars')<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
                        <div id="suggestedtags">&nbsp;</div>
                    </td>
                </tr>
                <?php if ($this->_tpl_vars['config']['show_via_fields']): ?>
                <tr class="field-vialink">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Via Link<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td><input name="vialink" type="text" value="<?php echo $this->_tpl_vars['entry']['vialink']; ?>
" /></td>
                </tr>
                <tr class="field-viatitle">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Via Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td><input name="viatitle" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['viatitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></td>
                </tr>
                <?php else: ?>
                        <input name="vialink" type="hidden" value="<?php echo $this->_tpl_vars['entry']['vialink']; ?>
" />
                        <input name="viatitle" type="hidden" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['viatitle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
                <?php endif; ?>
                <tr class="field-trackback">
                    <td valign="top"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Trackback Ping<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: </strong></td>
                    <td><textarea name="tb_url" id="tb_url" class="resizable" style="width:500px; height: 40px;" cols='50' rows='4'><?php echo $this->_tpl_vars['entry']['tb_url']; ?>
</textarea></td>
                </tr>
            </table>

            <?php echo smarty_hook(array('name' => "entry-bottom",'value' => $this->_tpl_vars['entry']), $this);?>


                        <?php if ($this->_tpl_vars['user']['text_processing'] == 5): ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_init_tinymce.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php else: ?>

                <?php if ($this->_tpl_vars['user']['text_processing'] == 0 || $this->_tpl_vars['user']['text_processing'] == 1): ?>
                
                    <script language="javascript" type="text/javascript">
                    jQuery(function($) {
                        $("#introduction").markItUp(markituphtml);
                        $("#body").markItUp(markituphtml);
                    });
                    </script>

                <?php endif; ?>

                <?php if ($this->_tpl_vars['user']['text_processing'] == 2): ?>

                    <script language="javascript" type="text/javascript">
                    jQuery(function($) {
                        $("#introduction").markItUp(markituptextile);
                        $("#body").markItUp(markituptextile);
                    });
                    </script>

                <?php endif; ?>

                <?php if ($this->_tpl_vars['user']['text_processing'] == 3 || $this->_tpl_vars['user']['text_processing'] == 4): ?>

                    <script language="javascript" type="text/javascript">
                    jQuery(function($) {
                        $("#introduction").markItUp(markitupmarkdown);
                        $("#body").markItUp(markitupmarkdown);
                    });
                    </script>
                    
                <?php endif; ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_init_texteditor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

            <?php endif; ?>

        </div>

        <div class="rightcolumn">

            <table border="0" cellpadding="0" class="formclass">
                <tr class="meta-buttons meta-buttons-right">
                    <td colspan="2" valign="top">

                        <p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post or Preview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>

                        <p class="buttons" style="margin-left: -2px; margin-right: -4px; height: 70px !important;">
                        
                            <button type="submit" class="positive button-post" onclick="clearOnUnload();">
                                <img src="./pics/tick.png" alt=""/>
                                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post Entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </button>

                            <button type="button" onclick="openEntryPreview();" class="button-preview">
                                <img src="./pics/zoom.png" alt=""/>
                                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </button>

                            <br />

                            <button type="button" class="positive button-post-and-continue" onclick="saveEntryAndContinue();" style="margin-top: 4px;">
                                <img src="./pics/arrow_rotate_clockwise.png" alt=""/>
                                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post and Continue Editing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                            </button>

                        </p>
                        <hr size="1" noshade="noshade" />    

                        <?php if ($this->_tpl_vars['entry']['code']): ?>
                        
                        <div class="field-comments-and-trackbacks">
                            <p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View Comments and Trackbacks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
                            
                            <p class="buttons" style="margin-left: -2px; margin-right: -4px; height: 35px !important;">
                                
                                <button type="button" onclick="openEntryExtra('comments',<?php echo $this->_tpl_vars['entry']['code']; ?>
);" class="button-comments">
                                    <img src="./pics/comment_edit.png" alt=""/>
                                    <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                </button>

                                <button type="button" onclick="openEntryExtra('trackbacks',<?php echo $this->_tpl_vars['entry']['code']; ?>
);" class="button-trackbacks">
                                    <img src="./pics/comment_edit.png" alt=""/>
                                    <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Trackbacks<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                </button>

                            </p>
                            <hr size="1" noshade="noshade" />
                        </div>

                        <?php endif; ?>
                    </td>
                </tr>
                    <?php echo smarty_hook(array('name' => "entry-category-before",'value' => $this->_tpl_vars['entry']), $this);?>

                <tr class="field-category">
                    <td valign="top"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td>
                        <select name="categories[]" size="6" multiple="multiple" style="width: 140px;">
                        <option value=""><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(none)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['category']):
?>
                            <option value='<?php echo $this->_tpl_vars['category']['name']; ?>
' <?php if (in_array ( $this->_tpl_vars['category']['name'] , $this->_tpl_vars['entry']['category'] )): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['category']['display']; ?>
</option>
                            <?php endforeach; endif; unset($_from); ?>
                        </select>
                    </td>
                </tr>
                <tr class="field-status">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td><select name="status">
                        <option value="publish" <?php if ($this->_tpl_vars['entry']['status'] == 'publish'): ?>selected="selected"<?php endif; ?> ><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Publish<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                        <option value="timed" <?php if ($this->_tpl_vars['entry']['status'] == 'timed'): ?>selected="selected"<?php endif; ?> ><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Timed Publish<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                        <option value="hold" <?php if ($this->_tpl_vars['entry']['status'] == 'hold'): ?>selected="selected"<?php endif; ?> ><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Hold<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></option>
                    </select></td>
                </tr>
                <tr class="field-publish">
                    <td colspan="2"><p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Publish on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
                        <input name="publish_date1" type="text" class='date-picker input' id="publish_date1"
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['publish_date'],'format' => '%day%-%month%-%year%'), $this);?>
" size="15" />
                        <input name="publish_date2" type="text" class='input' id="publish_date2"
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['publish_date'],'format' => '%hour24%-%minute%'), $this);?>
" size="7" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table border="0" cellpadding="0" cellspacing="0" class="field-allow_comments">
                            <tr>
                                <td style="padding: 0 2px;"><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Allow comments<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: &nbsp;

                                </strong></td>
                                <td style="padding: 0 2px;">
                                    <input name="allow_comments" type="radio" value="1" id="comm_yes" <?php if ($this->_tpl_vars['entry']['allow_comments'] == 1): ?>checked="checked"<?php endif; ?> />
                                </td>
                                <td style="padding: 0 2px;"><label for="comm_yes"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> &nbsp;</td>
                                <td style="padding: 0 2px;">
                                    <input name="allow_comments" type="radio" value="0" id="comm_no" <?php if ($this->_tpl_vars['entry']['allow_comments'] == 0): ?>checked="checked"<?php endif; ?> /></td>
                                    <td style="padding: 0 2px;"><label for="comm_no"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label> &nbsp; </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        <tr class="field-date">
                            <td colspan="2"> <hr size="1" noshade="noshade" /></td>
                        </tr>
                        <tr class="field-date">
                            <td colspan="2"><p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Created on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
                            </strong>
                        </p>
                        <input name="date1" id="date1" type="text" class='input date-picker field-date'
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['date'],'format' => '%day%-%month%-%year%'), $this);?>
" size="15" />
                        <input name="date2" id="date2" type="text" class='input field-date'
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['date'],'format' => '%hour24%-%minute%'), $this);?>
" size="7" />
                    </td>
                </tr>


                <tr class="field-edit_date">
                    <td colspan="2"><p><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last edited on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></p>
                        <input name="edit_date1" type="text" class='input' readonly='readonly'
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['edit_date'],'format' => '%day%-%month%-%year%'), $this);?>
" size="15" />
                        <input name="edit_date2" type="text" class='input' readonly='readonly'
                        value="<?php echo smarty_date(array('date' => $this->_tpl_vars['entry']['edit_date'],'format' => '%hour24%-%minute%'), $this);?>
" size="7" />
                    </td>
                </tr>
                <tr class="field-author">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Author<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td>
                        <?php if ($this->_tpl_vars['user']['userlevel'] >= 4): ?>
                            <select name="author">
                            <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['u']):
?>
                                <option value="<?php echo $this->_tpl_vars['u']['username']; ?>
" <?php if ($this->_tpl_vars['entry']['user'] == $this->_tpl_vars['u']['username']): ?>selected="selected"<?php endif; ?> >
                                    <?php echo $this->_tpl_vars['u']['nickname']; ?>

                                </option>
                            <?php endforeach; endif; unset($_from); ?>    
                            </select>
                        <?php else: ?>
                            <input name="author" type="text" value="<?php echo $this->_tpl_vars['entryuser']['nickname']; ?>
" readonly="readonly" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr class="field-code">
                    <td><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Code<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong></td>
                    <td><input name="code" type="hidden" value="<?php echo $this->_tpl_vars['entry']['code']; ?>
" id="uid" /><?php echo $this->_tpl_vars['entry']['code']; ?>
</td>
                </tr>
                <?php echo smarty_hook(array('name' => "entry-code-after",'value' => $this->_tpl_vars['entry']), $this);?>

            </table>

        </div>




        <div class="cleaner">&nbsp;</div>

        <p class="buttons meta-buttons meta-buttons-bottom">
            <button type="submit" class="positive button-post" onclick="clearOnUnload();">
                <img src="./pics/tick.png" alt=""/>
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post Entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </button>

            <button type="button" class="positive button-post-and-continue" onclick="saveEntryAndContinue();">
                <img src="./pics/arrow_rotate_clockwise.png" alt=""/>
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post and Continue Editing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </button>
            
            <button type="button" onclick="openEntryPreview();" class="button-preview">
                <img src="./pics/zoom.png" alt=""/>
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preview<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </button>            

            <?php if ($this->_tpl_vars['entry']['code']): ?>
            <button type="button" class="negative button-delete" style="margin-left: 30px;" onclick="deleteEntry('<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you wish to delete this entry?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');">
                <img src="./pics/delete.png" alt=""/>
                <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete entry<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </button>
            <?php endif; ?>
            
        </p>

        <div class="cleaner">&nbsp;</div>

    </form>

</div>

<iframe id="posthere" name="posthere" style='width: 1px; height: 1px; display:none; visibility: hidden;'>This hidden frame is here to allow posting the entry or page and continue editing</iframe>


<script type='text/javascript'>
//<![CDATA[

jQuery(function($) {

    $('input:text,input:checkbox,input:radio,textarea,select').one('change',function() {
        setOnUnload("<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have unsaved changes. Do you wish to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>");
    });
});


//]]>
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>