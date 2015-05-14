<?php /* Smarty version 2.6.26, created on 2015-05-14 12:02:51
         compiled from inc_init_tinymce.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'inc_init_tinymce.tpl', 44, false),)), $this); ?>

<!-- tinyMCE -->
<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
editor_wysi/tiny_mce_gzip.js"></script>
<script type="text/javascript">
//<![CDATA[
tinyMCE_GZ.init({
    plugins : "table,searchreplace,paste,xhtmlxtras,media,fullscreen", // add contextmenu if you don't want Firefox's spellchecker
    themes : 'advanced',
    languages : 'en', // FIXME: select the right language. 
    disk_cache : true,  
    debug : false
}, function() {
    tinyMCE.init({
        theme : "advanced",
        language : "en", // FIXME: select the right language. 
        mode: "specific_textareas",
        editor_selector: "Editor", 
        extended_valid_elements : "a[href|target|name|title|rel|class|id|style],hr[class|width|size|noshade|style],font[face|size|color|style|class]," +
                "span[id|class|align|style],img[class|src|border|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name|style]," +
                "br[class|clear|id|style|title],object[width|height|classid|codebase|id|data|type],param[name|value|_value],embed[name|src|type|wmode|width|height|style|allowScriptAccess|menu|quality|pluginspage],small," + 
                "iframe[id|class|src|width|height|name|align|frameborder|scrolling|style]," +
                "form[name|id|action|method|enctype|accept-charset|onsubmit|onreset|target|style],option[name|id|value]," + 
                "input[id|name|type|value|size|maxlength|checked|accept|src|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|style]," +
                "textarea[id|name|rows|cols|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|style]," + 
                "select[id|name|type|value|size|maxlength|checked|accept|src|width|height|disabled|readonly|tabindex|accesskey|onfocus|onblur|onchange|onselect|length|options|selectedIndex|style]," +
                "audio[controls|autoplay],source[src|type]",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_path_location : "bottom",
        theme_advanced_resizing : true,
        theme_advanced_resize_horizontal : false,
        apply_source_formatting : true,
        theme_advanced_buttons1 : "undo,redo,pastetext,removeformat,fullscreen,|,bold,italic,underline,strikethrough,hr,bullist,numlist,image,|," + 
            "cite,acronym,abbr,|,anchor,link,unlink,|,pivotxImage,pivotxPopup,pivotxDownload,pivotxTag,|,forecolor,backcolor",
        theme_advanced_buttons2 : "formatselect,outdent,indent,justifyleft,justifycenter,justifyright,|," + 
            "tablecontrols,|,charmap,visualaid,code",
            /* recently removed: pasteword, sub,sup  */
        theme_advanced_buttons3 : "",
        debug : false,
        fix_list_elements : true,
        plugins : "table,searchreplace,paste,xhtmlxtras,media,fullscreen", // add contextmenu if you don't want Firefox's spellchecker
        convert_urls : false,
        setup : function(ed) {
            ed.addButton('pivotxImage', { title:'<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Insert PivotX Image<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', image:'editor_wysi/themes/advanced/img/pivotx_image.gif', onclick:function() { openImageWindow(this.id); }  });
            ed.addButton('pivotxPopup', { title:'<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Insert PivotX Popup<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', image:'editor_wysi/themes/advanced/img/pivotx_popup.gif', onclick:function() { openImagePopupWindow(this.id); }  });
            ed.addButton('pivotxDownload', { title:'<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Insert PivotX Download<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', image:'editor_wysi/themes/advanced/img/pivotx_download.gif', onclick:function() { openDownloadWindow(this.id); }  });
            ed.addButton('pivotxTag', { title:'<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Insert PivotX Tag<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>', image:'editor_wysi/themes/advanced/img/pivotx_tag.gif', onclick:function() { openTagWindow(this.id); }  });
        }    
    });

});

<?php echo '

// This function gets called after placing an image..
function doImage(image_name, image_alt, image_title, image_align, name) {

    $(\'#f_image\').val(image_name);

    var text = \'[[image file="\'+image_name+\'" \';
    if (image_alt != "") { text += \'alt="\'+image_alt+\'" \'; }
    if (image_title != "") { text += \'title="\'+image_title+\'" \'; }
    if (image_align != "center") { text += \'align="\'+image_align+\'" \'; }
    text += \' ]]\';

    tinyMCE.execInstanceCommand(name, \'mceInsertContent\', false, text);

    $(\'#dialogframe\').dialog(\'close\');
    
}

// This function gets called after inserting a popupimage..
function doPopupImage(image_name, image_alt, image_align, f_popup_descr, name) {

    $(\'#f_image\').val(image_name);
    $(\'#f_hasthumb\').val(f_popup_descr);

    var text = \'[[popup file="\'+image_name+\'" \';
    if (f_popup_descr != "") { text += \'description="\'+f_popup_descr+\'" \'; }
    if (image_alt != "") { text += \'alt="\'+image_alt+\'" \'; }
    if (image_align != "center") { text += \'align="\'+image_align+\'" \'; }
    text += \' ]]\';

    tinyMCE.execInstanceCommand(name, \'mceInsertContent\', false, text);

    $(\'#dialogframe\').dialog(\'close\');
    
}

// This function gets called after inserting a download..
function doDownload(file_name, f_icon, f_text, f_title, name) {

    if (f_icon == \'icon\') { f_text = \'\'; }
    text = \'[[download file="\'+file_name+\'" icon="\'+f_icon+\'" text="\'+f_text+\'" title="\'+f_title+\'" ]]\';

    tinyMCE.execInstanceCommand(name, \'mceInsertContent\', false, text);
    
    $(\'#dialogframe\').dialog(\'close\');
    
}

// This function gets called after inserting a tag..
function doTag(tagname, link, name) {
	
    if (link == \'\') {
        text = \'[[tt tag="\' + tagname + \'" ]]\';
    } else {
        text = \'[[tt tag="\' + tagname + \'" link="\' + link + \'" ]]\';
    }

    tinyMCE.execInstanceCommand(name, \'mceInsertContent\', false, text);
    
    $(\'#dialogframe\').dialog(\'close\');
    
}

// Function getSel must be defined to get the current selection..
function getSel() {
    return tinyMCE.selectedInstance.selection.getContent();
}

'; ?>

//]]>
</script>
<!-- end of tinyMCE -->
