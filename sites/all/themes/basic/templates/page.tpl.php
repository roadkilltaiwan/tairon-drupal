<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    
    <title><?php print $head_title; ?></title>
    <?php print $head; ?>
    <?php print $styles; ?>
    <link type="text/css" rel="stylesheet" media="all" href="http://taieol.dev.netivism.com.tw/sites/all/themes/vigor/css/external.css" />
    <?php print $scripts; ?>
    <script type="text/javascript">
      $(document).ready(function (){
        if($('#admin-menu').length){
          $('body.admin-menu').css('marginTop', '0px !important');
          $('#admin-menu').hide();
        }
        $('a').attr('target', '_blank');
      });
    </script>
  </head>

  <body class="<?php print $body_classes; ?>">
    <div id="page">
    <!-- ______________________ MAIN _______________________ -->

    <div id="main" class="clearfix">
    
      <div id="content">
        <div id="content-inner" class="inner column center">
          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

          <?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>

          </div>
        </div> <!-- /content-inner /content -->
      </div> <!-- /main -->
    </div> <!-- /page -->
    <?php print $closure; ?>
  </body>
</html>
