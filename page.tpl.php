<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-16 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid16 clearfix">
      <div class="logo grid-4 alpha">
        <?php if ($linked_logo_img): ?>
          <span id="logo"><?php print $linked_logo_img; ?></span>
        <?php endif; ?>
      </div>
      <div class="top_content">
        <div class="top_text">
          <h2>Lorem Ipsum</h2>
          <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis dui eros. Fusce eget dui eu ipsum dignissim elementum vel quis ante. Quisque rutrum imperdiet est id dapibus. In hac habitasse platea dictumst. Curabitur molestie at nulla id ullamcorper. Sed porttitor velit lorem, ut condimentum nisi elementum in. Sed odio tellus, tempor nec lectus sed, adipiscing sagittis tortor.
          </span>
        </div>
        <div class="hero">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/hero.jpg">
        </div>
      </div>
    

    </div>
  </div>



  <div id="main" class="column <?php print ns('grid-16', 2); ?>">
    
    
    
    <?php print $messages; ?>

    <div id="middle">
      <div class="m_container">
        <div class="barchart button">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/barchart.png">
        </div>
        <div class="chat button">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/chat.png">
        </div>
        <div class="mail button">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/mail.png">
        </div>
        <div class="user button">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/user.png">
        </div>
      </div>
      
      <?php print render($page['middle_content']); ?>
    </div>
    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
      <div class="title">
        <h1>Lorem ipsum dolor sit amet</h1>
      </div>
      <div id="blocks">
        <div class="block_1">
          <h2>Lorem ipsum</h2>
          <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis dui eros. Fusce eget dui eu ipsum dignissim elementum vel quis ante. Quisque rutrum imperdiet est id dapibus. In hac habitasse platea dictumst. Curabitur molestie at nulla id ullamcorper.
          </span>
        </div>
        <div class="block_2">
          <h2>Lorem ipsum</h2>
          <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis dui eros. Fusce eget dui eu ipsum dignissim elementum vel quis ante. Quisque rutrum imperdiet est id dapibus. In hac habitasse platea dictumst. Curabitur molestie at nulla id ullamcorper.
          </span>
        </div>
        <div class="block_3">
          <h2>Lorem ipsum</h2>
          <span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis dui eros. Fusce eget dui eu ipsum dignissim elementum vel quis ante. Quisque rutrum imperdiet est id dapibus. In hac habitasse platea dictumst. Curabitur molestie at nulla id ullamcorper.
          </span>
        </div>
      </div>
    </div>

  </div>


  <div id="footer" class="prefix-1 suffix-1">
    
      <div id="footer-region" class="region grid-16 clearfix">
      
        <div class="bottom_image">
          <img src="http://dev-rootstack.gotpantheon.com/sites/all/themes/ninesixty/images/bottom.png">
        </div>
      </div>
    
  </div>

</div>
