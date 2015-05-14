<?php /* Smarty version 2.6.26, created on 2015-05-14 12:05:44
         compiled from widgets.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'widgets.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<p style="margin-top: 0;"><label for='compactviewcheckbox'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Compact view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:<input type='checkbox' id='compactviewcheckbox' value='1' /></label></p>


<div id="widgets">
    <div id="active" class="panel">
        <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active widgets<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <ul class="widgetlist">
        <?php echo $this->_tpl_vars['active']; ?>

        </ul>
    </div>


    <div id="available" class="panel" style="margin-left: 20px;">
        <p><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Available Widgets<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <ul class="widgetlist">
        <?php echo $this->_tpl_vars['inactive']; ?>

        </ul>
    </div>
 </div>
 
<div style="clear: both;">&nbsp;</div>
 
<p class="buttons">
    <a href="#" class="positive" id="savewidgets">
        <img src="./pics/tick.png" alt="" />
        <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
</p>


<script type="text/javascript">
//<![CDATA[

var identifiers = "<?php echo $this->_tpl_vars['identifiers']; ?>
";

jQuery(function($) {

    // Check for extension updates..
    $.ajax({
        type: "GET",
        url: "./ajaxhelper.php",
        data: "function=getExtensionUpdates&ids="+identifiers,
        dataType: "json",
        success: function(data){

            $.each(data, function() {

                var currentversion = $('#update-'+this.id).attr('rel');

                // Only compare versions if we have a version ..
                if (this.version && !versionCompare(this.version, currentversion)) {                
                    $('#update-'+this.id).html("<span class='updateavailable'><a href='http://extensions.pivotx.net/entry/"+ this.uid + "' target='_blank'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update available<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>. <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Version<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> " + this.version + "</a></span>");
                }

            });

        }
    });

    // Make the widgets drag-, drop- and sortable..
    $("ul.widgetlist").sortable({ connectWith: ['ul.widgetlist'] });

    // Bind a 'click' event to save the widgets.
    $("#savewidgets").click(function(){saveWidgets(); return false;});

    // Handle the 'compact view' checkbox..
    $('#compactviewcheckbox').bind('click, change', function(){

        var status = $('#compactviewcheckbox').attr('checked')?1:0;

        // Hide or show content..
        if (status) {
            $('li.widget p').hide();
            var updateas = "set";
        } else {
            $('li.widget p').show();
            var updateas = "clear";
        }

        // Save it in settings.
        $.ajax({
            type: "GET",
            url: "./ajaxhelper.php",
            data: "function=setExtensionCompact&" + updateas + "=1",
            dataType: "json",
            succes: function(data){
                console.log( data );
            }
        });

    });

    // Set the default for 'compact view'..
    if (<?php echo $this->_tpl_vars['compactview']; ?>
) {
        $('li.widget p').hide();
        $('#compactviewcheckbox').attr('checked', true);
    }

});

function saveWidgets(s) {

    serial = $("#active ul.widgetlist").sortable('serialize', { expression: "([a-z0-9-]+)_([a-z0-9-._]+)"}  );
    
    if (serial=="") { serial = "widget=0"; }
    
    self.location = "index.php?page=widgets&" + serial; 

}

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_js_extensions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

//]]>
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>