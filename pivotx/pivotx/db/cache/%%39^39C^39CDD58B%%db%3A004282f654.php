<?php /* Smarty version 2.6.26, created on 2015-05-14 12:11:44
         compiled from db:004282f654 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'title', 'db:004282f654', 2, false),array('function', 'link', 'db:004282f654', 4, false),array('function', 'date', 'db:004282f654', 6, false),array('function', 'editlink', 'db:004282f654', 7, false),array('function', 'introduction', 'db:004282f654', 9, false),array('function', 'more', 'db:004282f654', 10, false),array('function', 'user', 'db:004282f654', 13, false),array('function', 'permalink', 'db:004282f654', 14, false),array('function', 'category', 'db:004282f654', 15, false),array('function', 'commentlink', 'db:004282f654', 18, false),array('function', 'tags', 'db:004282f654', 20, false),)), $this); ?>
                    
        <!-- entry '<?php echo smarty_title(array(), $this);?>
' -->
        <div class="entry">
                <h2><a href="<?php echo smarty_link(array('hrefonly' => 1), $this);?>
"><?php echo smarty_title(array(), $this);?>
</a></h2>
          <span class="date">
            <?php echo smarty_date(array(), $this);?>

            <?php echo smarty_editlink(array('format' => 'Edit','prefix' => " - "), $this);?>

          </span>
          <?php echo smarty_introduction(array(), $this);?>
 
          <?php echo smarty_more(array(), $this);?>

          <div class="entryfooter">
                    <span class="meta">
                <?php echo smarty_user(array('field' => 'emailtonick'), $this);?>
 | 
              <?php echo smarty_permalink(array('text' => "&para;",'title' => "Permanent link to '%title%' in the archives"), $this);?>
 |
              <?php echo smarty_category(array('link' => true), $this);?>
 
            </span>
      <?php if (( $this->_tpl_vars['entry']['allow_comments'] == 1 )): ?>
            <span class="comments"><?php echo smarty_commentlink(array(), $this);?>
</span> 
      <?php endif; ?>
            <span class="tags"><?php echo smarty_tags(array(), $this);?>
</span>
          </div>
        </div>
                