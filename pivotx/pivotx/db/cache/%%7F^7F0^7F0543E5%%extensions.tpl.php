<?php /* Smarty version 2.6.26, created on 2015-05-14 12:02:45
         compiled from extensions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'extensions.tpl', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div id="container">


    <div class="homeleftcolumn">

        <p style="margin: 0;"><label for='compactviewcheckbox'><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Compact view<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:<input type='checkbox' id='compactviewcheckbox' value='1' /></label></p>

        <?php echo $this->_tpl_vars['html']; ?>

        <?php echo $this->_tpl_vars['form']; ?>


    </div>

    <div class="cleaner">&nbsp;</div>



</div><!-- end of 'container' -->


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


    // Handle the 'compact view' checkbox..
    $('#compactviewcheckbox').bind('click, change', function(){

        var status = $('#compactviewcheckbox').attr('checked')?1:0;

        // Hide or show content..
        if (status) {
            $('p.extension-desc, p.extension-metadata').hide();
            var updateas = "set";
        } else {
            $('p.extension-desc, p.extension-metadata').show();
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
        $('p.extension-desc, p.extension-metadata').hide();
        $('#compactviewcheckbox').attr('checked', true);
    }

});


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