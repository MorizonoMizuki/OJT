<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <title>American Village</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

  <?php wp_head();?>
</head>

<body>
<header>
<ul class="nav">
  <li><a href="#">Menu01</a></li>
  <li><a href="#">Menu02</a></li>
  <li><a href="#">Menu03</a></li>
  <li><a href="#">Menu04</a></li>
</ul>
<div class="imglogo-div">
  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="imglogo">
</div>
<div class="imgmain-div">
<?php echo do_shortcode('[smartslider3 slider="2"]');?>
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