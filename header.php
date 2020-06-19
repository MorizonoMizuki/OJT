<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <title>American Village</title>

  <?php wp_head();?>
</head>

<body>
<header>

<div class="nav">
  
  <nav>
    <?php wp_nav_menu( array(
            'theme_location'=>'mainmenu', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap'    =>'<ul id="main-nav">%3$s</ul>'));
    ?>
  </nav>

</div>

<div class="imglogo-div">
  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="imglogo">
</div>
<div class="imgmain-div">
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt=""  class="imgmain pc">
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" alt=""  class="imgmain sp">
</div>
<div class="imgcarset-div">
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt=""  class="imgcharset">
</div>
<div class="imgcarset_sp-div">
  <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" alt="" class="imgcharset_sp">
  </div>


<div class="explanation">
   <p>進化し続ける「街」<span class="br">アメリカンビレッジマガジ</span>ン</p>
</div>
</header>