<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:03
         compiled from /home/www/zetrov.pl/extranet/pivotx/pivotx/extensions/gallery/upload_images.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', '/home/www/zetrov.pl/extranet/pivotx/pivotx/extensions/gallery/upload_images.tpl', 97, false),array('function', 'upload_create_button', '/home/www/zetrov.pl/extranet/pivotx/pivotx/extensions/gallery/upload_images.tpl', 127, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_window_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
//<![CDATA[

var imagearray = new Array();

//We need to submit this to the opener, that is to the editor
function do_submit(){

    var f_image = trim($(\'#f_image\').val());
    var f_image_alt = trim($(\'#f_image_alt\').val());
    var f_image_title = trim($(\'#f_image_title\').val());

    var found = false;
    for(var i=0; i < imagearray.length; i++) {
        if (imagearray[i] == f_image) {
            found = true;
            break;
        }
    }

    if (!found) {
        if (f_image) {
            imagearray[ imagearray.length ] = f_image + "###" + f_image_title + "###" + f_image_alt;
        } else {
            f_image = imagearray[ imagearray.length-1 ];
            imagearray[ imagearray.length-1 ] = f_image + "###" + f_image_title + "###" + f_image_alt;
        }
    }
    
    for(var i=0; i < imagearray.length; i++) {
        values = imagearray[i].split(/###/);
        if (values.length < 3) {
            imagearray[i] = imagearray[i] + \'###\' + f_image_title + \'###\' + f_image_alt;
        }
    }


    // If window.opener is unknown, we\'ve opened the image inserter as a Dialog. then 
    /// we can use top.frames[0]
    if (window.opener==null) {
        top.addToGallery(imagearray);
    } else {
        window.opener.addToGallery(imagearray);
        window.close();
    }

}



// Submitting and cancelling..
jQuery(function($) {

    // Attach event for \'insert image\' button.
    $("#button_submit").click(function(event, data, formatted) {
        do_submit();
    });

    // Attach event for \'cancel\' button.
    $("#button_cancel").click(function(event, data, formatted) {
        if (window.opener==null) {
            top.$(\'#dialogframe\').dialog(\'close\');
        } else {
            self.close();
        }
    });

    // Make sure the window is on top..
    self.focus();

});

/**
 * End of Javascript for dynamic uploader..
 */



//]]>
</script>
'; ?>

</head>
<body style="margin: 0 12px 0 0; background-image: none; background-color: #FFF;">

<?php if ($this->_tpl_vars['msg'] != ""): ?>
    <p style="background-color:#FFF6BF; border-bottom:1px solid #FFD324; border-top:1px solid #FFD324; margin-bottom:6px;   min-height:16px; padding:6px;"><?php echo $this->_tpl_vars['msg']; ?>
</p>
<?php endif; ?>

<table border="0" cellspacing="0" cellpadding="2" class="formclass" style="border:0px;">


    <tr>
        <td class="nowrap">
            <b><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</b>
        </td>
        <td colspan="2"><div id="upload-container">


        <form style="clear:both;">
        
            <p style="margin: 2px 0px;" class="buttons">
    

                <span id="spanButtonPlaceHolder">
                    <a href="#" id="upload-button">
                        <img src="../../pics/page_lightning.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload an image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
                        <span style="font-size: 7pt;">(<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>2 MB Max<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span>
                    </a>                    
                    
                    
                    
                </span>
                <!--  
                <p><small><strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tip<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</strong> 
                    <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use 'ctrl' to to select multiple images.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></small>
                </p>
                -->
        
            </p>

        </form>
		<div id="divFileProgressContainer" style="width:330px; clear:both;"></div>

        <?php echo SmartyUpload::smarty_upload_create_button(array('browse_button' => 'upload-button','container' => 'upload-container','progress_selector' => '#divFileProgressContainer','input_selector' => '#f_image','filters' => 'image','upload_type' => 'images'), $this);?>


        <a href="#" id="btnCancel"  onclick="swfu.cancelQueue();"></a> 

        </div></td>
    </tr>

    <tr>
        <td class="nowrap">
            <b><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Image name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</b>
        </td>
        <td>
            <input type='text' name='f_image' id='f_image' size='25' value='<?php echo $this->_tpl_vars['imagename']; ?>
' class='input' style='width: 230px;' />
        </td>
        <td class="buttons_small">
            <a href="#" onclick="top.openFileSelector('<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select an image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', $('#f_image'), 'gif,jpg,jpeg,png');">
                <img src='../../pics/page_lightning.png' alt="" /> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </a>

        </td>
    </tr>

    <tr>
        <td class="nowrap">
            <b><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Alternate text<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</b>
        </td>
        <td colspan="3">
            <input type='text' name='f_image_alt' id='f_image_alt' size='25' value='' class='input' />
       </td>
    </tr>

         <tr>
        <td class="nowrap">
            <b><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:</b>
        </td>
        <td colspan="3">
            <input type='text' name='f_image_title' id='f_image_title' size='25' value='' class='input' />
       </td>
    </tr>

    <tr>
        <td colspan="3">

            <input type='hidden' name='f_target' id='f_target' value='<?php echo $this->_tpl_vars['target']; ?>
' />

            <p style="margin: 8px 0px;" class="buttons">

            <a href="#" class="positive" id='button_submit'>
            <img src="../../pics/tick.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add to gallery!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>

            <a href="#" class="negative" id='button_cancel'>
            <img src="../../pics/delete.png" alt="" /><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancel<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            </p>

        </td>
    </tr>

</table>
</form>




</body>
</html>