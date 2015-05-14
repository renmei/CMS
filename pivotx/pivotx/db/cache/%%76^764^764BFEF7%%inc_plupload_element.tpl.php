<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:03
         compiled from inc_plupload_element.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'inc_plupload_element.tpl', 37, false),)), $this); ?>

<?php $this->assign('multiple', false); ?>
<?php if (( $this->_tpl_vars['upload_type'] == 'files' ) || ( $this->_tpl_vars['upload_type'] == 'images' )): ?>
    <?php $this->assign('multiple', true); ?>
<?php endif; ?>

<script type="text/javascript">

// Custom example logic for <?php echo $this->_tpl_vars['upload_var']; ?>
 - <?php echo $this->_tpl_vars['input_selector']; ?>

//
var <?php echo $this->_tpl_vars['upload_var']; ?>
;
var timer_<?php echo $this->_tpl_vars['upload_var']; ?>
 = false;
var <?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history = [];

function <?php echo $this->_tpl_vars['upload_var']; ?>
_start()
{
    <?php echo $this->_tpl_vars['upload_var']; ?>
.start();

    <?php if ($this->_tpl_vars['upload_dialog'] != ''): ?>
    $('<?php echo $this->_tpl_vars['upload_dialog']; ?>
').dialog({
            bgiframe: true, 
            resizable: false,
            modal: true,
            draggable: false, 
            width: 540,
            height: 220,
            title: "<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uploading<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>",
            overlay: { opacity: 0.75, background: "#789" },
            close: function() {
                var loc = new String(document.location);
                var pos = loc.indexOf('#');
                if (pos > 0) {
                    loc = loc.substring(0,pos);
                }
                loc = loc.replace(/([?&]del=[^&]*)/,'');
                loc = loc.replace(/([?&]file=[^&]*)/,'');
                loc = loc.replace(/([?&]pivotxsession=[^&]*)/,'');
                loc = loc.replace(/([?&]answer=[^&]*)/,'');
                document.location = loc;
            }
    });
    <?php endif; ?>
}

function <?php echo $this->_tpl_vars['upload_var']; ?>
_reloadbutton()
{
    if (<?php echo $this->_tpl_vars['upload_var']; ?>
.total.queued == 0) {
        $('<?php echo $this->_tpl_vars['upload_dialog']; ?>
 .buttons').show();
    }
    else {
        setTimeout('<?php echo $this->_tpl_vars['upload_var']; ?>
_reloadbutton();',250);
    }
}

function <?php echo $this->_tpl_vars['upload_var']; ?>
_setprogress(name,percent)
{
    var width = $("<?php echo $this->_tpl_vars['progress_selector']; ?>
").width();
    var height = $("<?php echo $this->_tpl_vars['progress_selector']; ?>
").height();

    var pwidth = Math.round((percent * (width - 20)) / 100);
    if (pwidth > width) {
        pwidth = width;
    }
    var pheight = height;
    if (pheight < 2) {
        pheight = 2;
    }
    if (pheight > 2) {
        pheight = 2;
    }

    var html = '';
    html += '<div style="border: 1px solid #888; margin: 4px; padding: 4px; color: #444">';

<?php if ($this->_tpl_vars['upload_type'] == 'images'): ?>
    if (<?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history.length > 0) {
        for(var i=0; i < <?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history.length; i++) {
            html += '<strong>' + <?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history[i] + '</strong> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>uploaded<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.<br/>';
        }
        html += '<br/>';
    }
<?php endif; ?>

    html += '<strong>' + name + '</strong><br/>';
    if (percent < 100) {
        html += '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uploading<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/>';
    }
    else {
        html += '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Uploaded<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br/>';
    }
    html += '<div style="display:block;margin:4px 0 0 0;padding:0;width:'+pwidth+'px;height:'+pheight+'px;background-color:#888">&#160;</div>';
    html += '</div>';

    $("<?php echo $this->_tpl_vars['progress_selector']; ?>
").show();
    $("<?php echo $this->_tpl_vars['progress_selector']; ?>
").html(html);
}

jQuery(function($) {
    <?php echo $this->_tpl_vars['upload_var']; ?>
 = new plupload.Uploader({
        runtimes : '<?php echo $this->_tpl_vars['runtimes']; ?>
',
        browse_button : '<?php echo $this->_tpl_vars['browse_button']; ?>
',
        container : '<?php echo $this->_tpl_vars['container']; ?>
',
        max_file_size : '<?php echo $this->_tpl_vars['max_file_size']; ?>
',
        <?php if ($this->_tpl_vars['path'] == ''): ?>
        url : '<?php echo $this->_tpl_vars['url']; ?>
?type=<?php echo $this->_tpl_vars['upload_type']; ?>
&sess=<?php echo $this->_tpl_vars['sessionid']; ?>
',
        <?php else: ?>
        url : '<?php echo $this->_tpl_vars['url']; ?>
?type=<?php echo $this->_tpl_vars['upload_type']; ?>
&sess=<?php echo $this->_tpl_vars['sessionid']; ?>
&path=<?php echo $this->_tpl_vars['path']; ?>
',
        <?php endif; ?>
        flash_swf_url : '<?php echo $this->_tpl_vars['jsdir']; ?>
/plupload.flash.swf',
        silverlight_xap_url : '<?php echo $this->_tpl_vars['jsdir']; ?>
/plupload.silverlight.xap',
        <?php if (count ( $this->_tpl_vars['filters'] ) > 0): ?>
        filters : [
        <?php $this->assign('first', true); ?>
        <?php $_from = $this->_tpl_vars['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['filter']):
?>
            <?php if (! $this->_tpl_vars['first']): ?>,<?php endif; ?><?php $this->assign('first', false); ?>

            {title : "<?php echo $this->_tpl_vars['filter']['title']; ?>
", extensions : "<?php echo $this->_tpl_vars['filter']['extensions']; ?>
"}
        <?php endforeach; endif; unset($_from); ?>
        ],
        <?php endif; ?>
        <?php if ($this->_tpl_vars['multiple']): ?>
        multi_selection: true,
        <?php else: ?>
        multi_selection: false,
        <?php endif; ?>
        unique_names: false,
        urlstream_upload: true
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('Init', function(up, params){
        var log = 'plupload runtime used is "' + params.runtime + '"';
        var url = '<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
ajaxhelper.php?function=logDebug&log='+escape(log);
        $.ajax({ 'url': url });
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('QueueChanged', function(up){
        <?php if (! $this->_tpl_vars['multiple']): ?>
        while (up.files.length > 1) {
            ret = up.removeFile(up.files[0]);
        }
        <?php endif; ?>
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('FilesAdded', function(up, files){
        if (timer_<?php echo $this->_tpl_vars['upload_var']; ?>
) {
            clearTimeout(timer_<?php echo $this->_tpl_vars['upload_var']; ?>
);
            timer_<?php echo $this->_tpl_vars['upload_var']; ?>
 = false;
        }

        //console.log('filesadded');
        <?php if (! $this->_tpl_vars['multiple']): ?>
        var first = true;
        $.each(files, function(i, file) {
            if (!first) {
                up.removeFile(file);
            }
            first = false;
        });
        <?php endif; ?>
 
        up.refresh(); // Reposition Flash/Silverlight

        if (files.length > 0) {
            setTimeout('<?php echo $this->_tpl_vars['upload_var']; ?>
_start();',500);
        }
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('UploadProgress', function(up, file) {
        if (file.percent < 100) {
            var name = new String(file.name);
            // this replacement *has* to be the same as the fileupload.php one
            name = name.replace(/[^a-zA-Z0-9_. -]+/,' ',name);
            <?php echo $this->_tpl_vars['upload_var']; ?>
_setprogress(name,file.percent);
            //$('#' + file.id + " b").html(file.percent + "%");
        }
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('Error', function(up, err) {
        var log = 'File upload error. Code=' + err.code;
        var url = '<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
ajaxhelper.php?function=logDebug&log='+escape(log);
        $.ajax({ 'url': url });

        var message = '';
        if (err.code === plupload.FILE_EXTENSION_ERROR) {
            message = '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>File extension error<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>';
        }
        else if (err.code === plupload.FILE_SIZE_ERROR) {
            message = '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload too big<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>';
        }
        else if (err.code == plupload.INIT_ERROR) {
            message = '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload init error<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>';
        }
        else {
            message = '<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload error<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>';
        }

        if (message != '') {
            if ($('<?php echo $this->_tpl_vars['progress_selector']; ?>
').is(':visible') == false) {
                alert(message);
            }
            else {
                $('<?php echo $this->_tpl_vars['progress_selector']; ?>
').append(message);
            }
        }
 
        up.refresh(); // Reposition Flash/Silverlight
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.bind('FileUploaded', function(up, file) {
        var name = new String(file.name);
        // this replacement *has* to be the same as the fileupload.php one

        // determine the actual filename on the server, by calling the upload-script and asking for the 'last filename'
        var realname = name;
        $.ajax({
            async: false,
            url: '<?php echo $this->_tpl_vars['paths']['pivotx_url']; ?>
fileupload.php?path=<?php echo $this->_tpl_vars['path']; ?>
&type=<?php echo $this->_tpl_vars['upload_type']; ?>
&name='+escape(file.name)+'&act=filename',
            data: {},
            success: function(data){
                realname = data;
            },
            dataType: 'html'
        });
        name = realname;


    <?php if ($this->_tpl_vars['upload_type'] == 'image' || $this->_tpl_vars['upload_type'] == 'file' || $this->_tpl_vars['upload_type'] == 'images'): ?>
        name = "<?php echo $this->_tpl_vars['upload_path']; ?>
" + name;
    <?php endif; ?>

    <?php if ($this->_tpl_vars['input_selector'] != ''): ?>
        $('<?php echo $this->_tpl_vars['input_selector']; ?>
').val(name);
    <?php endif; ?>
        <?php echo $this->_tpl_vars['upload_var']; ?>
_setprogress(name,100);

        var cmd = "<?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history=[]; $('<?php echo $this->_tpl_vars['progress_selector']; ?>
').hide('slow')";
        timer_<?php echo $this->_tpl_vars['upload_var']; ?>
 = setTimeout(cmd,3000);

    <?php if ($this->_tpl_vars['upload_type'] == 'image'): ?>
        updatePreview(name);
    <?php endif; ?>

    <?php if ($this->_tpl_vars['upload_dialog'] != ''): ?>
        var el = $('<?php echo $this->_tpl_vars['upload_dialog']; ?>
 .files');
        var html = el.html();
        if (el.hasClass('default')) {
            el.removeClass('default');
            html = '';
        }
        html += '<strong>' + file.name + '</strong> <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>uploaded<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.<br/>';
        $('<?php echo $this->_tpl_vars['upload_dialog']; ?>
 .files').html(html);

        setTimeout('<?php echo $this->_tpl_vars['upload_var']; ?>
_reloadbutton();',100);
    <?php endif; ?>

    // getting the length of an array with a variable name is not easy to do....
    var temp_upl_hist = <?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history;
    temp_upl_hist[temp_upl_hist.length] = file.name;
    <?php echo $this->_tpl_vars['upload_var']; ?>
_upload_history = temp_upl_hist;

    <?php if ($this->_tpl_vars['upload_type'] == 'images'): ?>
        if (imagearray) {
            imagearray[imagearray.length] = name;
        }
    <?php endif; ?>
    });

    <?php echo $this->_tpl_vars['upload_var']; ?>
.init();
});
</script>