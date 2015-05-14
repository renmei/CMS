<?php /* Smarty version 2.6.26, created on 2015-05-14 12:12:24
         compiled from _sub_commentform.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'self', '_sub_commentform.html', 4, false),array('function', 'registered', '_sub_commentform.html', 10, false),array('function', 'remember', '_sub_commentform.html', 10, false),array('function', 'spamquiz', '_sub_commentform.html', 30, false),array('function', 'moderate_message', '_sub_commentform.html', 32, false),array('function', 'weblogid', '_sub_commentform.html', 37, false),array('block', 't', '_sub_commentform.html', 9, false),)), $this); ?>

<form method="post" action="<?php echo smarty_self(array(), $this);?>
#message" id="commentform">
	
<div class="commentform">
	
	<div class="commentform_row">
		<label for="piv_name"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
		<input type="text" name="piv_name" id="piv_name" size="20" class="commentinput <?php echo smarty_registered(array(), $this);?>
" value="<?php echo smarty_remember(array('name' => 'name'), $this);?>
" />
	</div>

	<div class="commentform_row">	
		<label for="piv_email"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
		<input name="piv_email" id="piv_email" type="text" size="30" class="commentinput <?php echo smarty_registered(array(), $this);?>
" value="<?php echo smarty_remember(array('name' => 'email'), $this);?>
" /> <span class="commentform_optional"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(optional field)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
	</div>
	
	<div class="commentform_row">	
		<label for="piv_url"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>URL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
		<input name="piv_url" id="piv_url" type="text" size="30" class="commentinput <?php echo smarty_registered(array(), $this);?>
" value="<?php echo smarty_remember(array('name' => 'url'), $this);?>
" /> <span class="commentform_optional"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(optional field)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>	
    </div>
	
	<div class="commentform_row">	
		<label for="piv_comment"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
 
	
		<textarea name="piv_comment" id="piv_comment" cols="40" rows="7" style="width:98%; margin-bottom:5px;"><?php echo smarty_remember(array('name' => 'comment'), $this);?>
</textarea>
	</div>
	
	<?php echo smarty_spamquiz(array(), $this);?>

	
	<?php echo smarty_moderate_message(array(), $this);?>

	
	<div class="commentform_row">
		<input type="hidden" name="piv_code" value="<?php echo $this->_tpl_vars['entry']['uid']; ?>
" />
		<input type="hidden" name="piv_discreet" value="1" />
		<input type="hidden" name="piv_weblog" value="<?php echo smarty_weblogid(array(), $this);?>
" />
		<input type="submit" name="post" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Post Comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="commentbutton" style="font-weight: bold;" />
		<input type="submit" name="preview" value="<?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preview Comment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" class="commentbutton" />
	</div>

	<div class="privacy_options">

		<div class="commentform_row">	
			<strong><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Remember personal info?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br />
			<input name="piv_rememberinfo" type="checkbox" id="piv_rememberinfo" value="1" <?php echo smarty_remember(array('name' => 'rememberinfo'), $this);?>
 />
			<label for="piv_rememberinfo"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes, give me a cookie and remember me.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
		</div>
	
	</div>
				
	<div class="commentform_row">	
		<small><?php $this->_tag_stack[] = array('t', array('escape' => 'no')); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>Small print:</strong> All html tags except &lt;b&gt; and &lt;i&gt; will be removed from your comment. You can make links by just typing the url or mail-address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></small>
	</div>
	
</div>
</form>