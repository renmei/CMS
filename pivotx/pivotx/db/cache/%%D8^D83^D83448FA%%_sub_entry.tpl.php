<?php /* Smarty version 2.6.26, created on 2015-05-14 12:12:24
         compiled from default/_sub_entry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'previousentry', 'default/_sub_entry.tpl', 3, false),array('function', 'home', 'default/_sub_entry.tpl', 4, false),array('function', 'nextentry', 'default/_sub_entry.tpl', 5, false),array('function', 'link', 'default/_sub_entry.tpl', 7, false),array('function', 'title', 'default/_sub_entry.tpl', 7, false),array('function', 'subtitle', 'default/_sub_entry.tpl', 8, false),array('function', 'date', 'default/_sub_entry.tpl', 10, false),array('function', 'tags', 'default/_sub_entry.tpl', 11, false),array('function', 'editlink', 'default/_sub_entry.tpl', 12, false),array('function', 'introduction', 'default/_sub_entry.tpl', 14, false),array('function', 'body', 'default/_sub_entry.tpl', 15, false),array('function', 'commcount', 'default/_sub_entry.tpl', 18, false),array('function', 'message', 'default/_sub_entry.tpl', 32, false),array('function', 'commentform', 'default/_sub_entry.tpl', 34, false),array('block', 't', 'default/_sub_entry.tpl', 4, false),array('block', 'comments', 'default/_sub_entry.tpl', 20, false),)), $this); ?>
            <div class="entry">
                <p class="entrynavigation">
            <?php echo smarty_previousentry(array('text' => "&laquo; <a href='%link%'>%title%</a>",'cutoff' => 20), $this);?>
 | 
            <a href="<?php echo smarty_home(array(), $this);?>
"><?php $this->_tag_stack[] = array('t', array()); $_block_repeat=true;smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Home<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_t($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a> | 
            <?php echo smarty_nextentry(array('text' => "<a href='%link%'>%title%</a> &raquo;",'cutoff' => 20), $this);?>

                </p>    
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


      <?php if (( $this->_tpl_vars['entry']['allow_comments'] == 1 )): ?>
                <p class="comments"><?php echo smarty_commcount(array(), $this);?>
</p>
                <div class="commentblock">        
              <?php $this->_tag_stack[] = array('comments', array()); $_block_repeat=true;smarty_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <div class="comment">
                %anchor%
                <img class="gravatar" src="%gravatar%" alt="%name%" />
                <div class="comment-text">
                    %comment%
                  <cite><strong>%name%</strong> %email% %url% - %date% %editlink%</cite>
                        </div>
                    </div>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </div>
                <br />
                <?php echo smarty_message(array(), $this);?>

                <br />
                <?php echo smarty_commentform(array(), $this);?>

      <?php endif; ?>
            </div>