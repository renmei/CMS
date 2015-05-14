<?php /* Smarty version 2.6.26, created on 2015-05-14 12:13:14
         compiled from weblog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 't', 'weblog.tpl', 5, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div id="tabbedoptions">
        <ul>
            <li><a href="#section-1" tabindex="101"><span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>General<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
            <li><a href="#section-2" tabindex="103"><span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Templates<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
            <li><a href="#section-3" tabindex="104"><span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subweblogs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
            <li><a href="#section-4" tabindex="105"><span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>XML feeds<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
            <li><a href="#section-5" tabindex="106"><span><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Commenting<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a></li>
        </ul>

    
        <div id="section-1" class="fragment">
            <?php echo $this->_tpl_vars['form1']; ?>

        </div>
    
        <div id="section-2" class="fragment">
            <?php echo $this->_tpl_vars['form2']; ?>

        </div>
    
        <div id="section-3" class="fragment">
            <div id="form3">
                <?php echo $this->_tpl_vars['form3']; ?>

            </div>
        </div>
    
        <div id="section-4" class="fragment">
            <?php echo $this->_tpl_vars['form4']; ?>

        </div>
    
        <div id="section-5" class="fragment">
            <?php echo $this->_tpl_vars['form5']; ?>

        </div>
        
    </div>    

<p class="buttons" style="clear: both;">
    <button onclick="saveConfig();" type="button" class="disabled" id="saveButton">
        <img src="./pics/tick.png" alt=""/>
        <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save changes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </button>   
    <a href="index.php?page=weblogs">
        <img src="pics/world.png" alt=""/>
        <?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Back to Weblogs<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </a>
</p>


<script type="text/javascript">
//<![CDATA[

// We make an array, that contains the current values of the forms.
var currentvalues = new Array();

// Store the values that need to be updated. 
var updatequeue = new Array();

jQuery(function($) {

    // Initialize the tabs
    $('#tabbedoptions').tabs();

    // Bind the updateWeblog() function to all fields. 
    $('input, select, textarea').bind('blur', function() { updateWeblog(this); });
    $('input[type=checkbox], select').bind('click', function() { updateWeblog(this); });

    // Fill the currentvalues array with the current values of the fields.
    $('input, select, textarea').each(function(i) {
        currentvalues[ this.id ] = encodeURIComponent($(this).fieldValue());
    });


});



/**
 * After editing a field, add it to the queue to be updated.
 */
function updateWeblog(field) {

    // Make sure form validation is run..
    $(field).valid();

    var key = $(field).attr('name');
    var value = $(field).fieldValue();
    var error = $(field).hasClass('error'); 

    // Only save it later, if the value has changed.
    if ( !error && (encodeURIComponent(String(value)) != String(currentvalues[key])) ) {
        updatequeue[ key ] = encodeURIComponent(value);
        $('#saveButton').removeClass('disabled');
        setOnUnload("<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have unsaved changes. Do you wish to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>");
    }

    if (key=="front_template") { loadSubWeblogs(); }

}




/**
 * Save the updated values in the configuration..
 */ 
function saveConfig() {
    
    var values = "";
    
    // Iterate through the values, building querystring..   
    for ( key in updatequeue ) {
        //console.log(key + ' = ' + updatequeue[key] );
        values += key + "=" + updatequeue[key] + "&";
        currentvalues[ key ] = updatequeue[key];
    }

    // Only save, if there's actually anything to save. 
    if (values != "") {
    
        setMessageLoading();
            
        var csrfcheck =  $.cookie("pivotxsession");
        var weblog = $('#internalname').val();
        
        $.ajax({
            type: "POST",
            url: "ajaxhelper.php",
            data: "function=updateWeblogBatch&" + values + "weblog=" + weblog + "&csrfcheck=" + escape(csrfcheck),
            success: function(fetchedhtml) {
                humanMsg.displayMsg('<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The configuration was successfully updated.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');
                updatequeue = new Array();
                clearOnUnload();
            },
            error: function() {
                humanMsg.displayMsg('<?php $this->_tag_stack[] = array('t', array('escape' => 'js')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The configuration could not be updated.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>');
            }
        });

    }
    
    $('#saveButton').addClass('disabled');
    $('#saveButton').blur();
}


/**
 * Dynamically load the form for the subweblog settings. This is needed, because
 * we need to update this form on the fly, since the contents are dependant
 * on the value for the frontpage template.
 */
function loadSubWeblogs() {

    var weblog = $('#internalname').val();

    $.ajax({
        type: "POST",
        url: "ajaxhelper.php",
        data: "function=loadSubWeblogs&weblog=" + weblog,
        success: function(fetchedhtml) {
                $('#form3').html(fetchedhtml);
                JT_init();
                $('input, select, textarea').bind('blur', function() { updateWeblog(this); });
            },
        error: function() { }
    });


}

//]]>
</script>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>