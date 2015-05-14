<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:54
         compiled from db:0c2ee6b892 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'title', 'db:0c2ee6b892', 2, false),array('function', 'link', 'db:0c2ee6b892', 5, false),array('function', 'introduction', 'db:0c2ee6b892', 7, false),array('function', 'more', 'db:0c2ee6b892', 8, false),array('function', 'commentlink', 'db:0c2ee6b892', 12, false),array('function', 'editlink', 'db:0c2ee6b892', 15, false),)), $this); ?>

    <!-- entry '<?php echo smarty_title(array(), $this);?>
' -->
  <div class="linkdumpentry">
    <span class="title">
        &raquo; <a href="<?php echo smarty_link(array('hrefonly' => 1), $this);?>
"><?php echo smarty_title(array(), $this);?>
</a>
        </span>
        <?php echo smarty_introduction(array(), $this);?>

        <?php echo smarty_more(array(), $this);?>

        &nbsp;
        <span class="linkdumpcomments">
      <?php if (( $this->_tpl_vars['entry']['allow_comments'] == 1 )): ?>
            <?php echo smarty_commentlink(array(), $this);?>
 |
        <?php endif; ?>
      <?php echo smarty_link(array('text' => "&para;",'title' => "Permanent link to entry '%title%'"), $this);?>

      <?php echo smarty_editlink(array('format' => 'Edit','prefix' => " - "), $this);?>

        </span>
    </div>