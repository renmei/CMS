<?php /* Smarty version 2.6.26, created on 2015-05-14 12:03:54
         compiled from default/_sub_page.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'link', 'default/_sub_page.tpl', 2, false),array('function', 'title', 'default/_sub_page.tpl', 2, false),array('function', 'subtitle', 'default/_sub_page.tpl', 3, false),array('function', 'date', 'default/_sub_page.tpl', 5, false),array('function', 'tags', 'default/_sub_page.tpl', 6, false),array('function', 'editlink', 'default/_sub_page.tpl', 7, false),array('function', 'introduction', 'default/_sub_page.tpl', 9, false),array('function', 'body', 'default/_sub_page.tpl', 10, false),)), $this); ?>
    <div class="entry">
        <h2><a href="<?php echo smarty_link(array('hrefonly' => 1), $this);?>
"><?php echo smarty_title(array(), $this);?>
</a></h2>
            <h3><?php echo smarty_subtitle(array(), $this);?>
</h3>
      <span class="date">
        <?php echo smarty_date(array(), $this);?>

        <?php echo smarty_tags(array(), $this);?>

        <?php echo smarty_editlink(array('format' => 'Edit','prefix' => " - "), $this);?>

      </span>     
            <?php echo smarty_introduction(array(), $this);?>
 
      <?php echo smarty_body(array(), $this);?>

        </div>