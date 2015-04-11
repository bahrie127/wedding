<?php
$wd_path=$this->config->item('base_url').$this->config->item('wd_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title> Wedding - Home </title>

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- ======================= CSS - stylesheets ======================= -->
    <link href="<?php echo $wd_path;?>style.css" rel="stylesheet" media="all">
    <link href="<?php echo $wd_path;?>css/shortcodes.css" rel="stylesheet" media="all">
    <link href="<?php echo $wd_path;?>css/responsive.css" rel="stylesheet" media="all">
    <link href="<?php echo $wd_path;?>skins/<?php echo $desaign->type_desaign;?>/<?php echo $desaign->type_desaign;?>.css" rel="stylesheet" media="all" id="color_skin_css">

    <link href="<?php echo $wd_path;?>js/isotope/isotope-style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $wd_path;?>js/prettyphoto/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo $wd_path;?>js/layerslider/layerslider.css" type="text/css">

    <!-- ======================= Color Picker ======================= -->
    <!-- <link type="text/css" href="js/controlpanel/control-panel.css" rel="stylesheet"> -->


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ie8-and-down.css">
    <![endif]-->

    <!-- ======================= Favicon ======================= -->
    <link href="<?php echo $wd_path ?>images/love-gold.ico" rel="shortcut icon" type="image/x-icon">


    <!-- ======================= Font Awesome ======================= -->
    <link rel="stylesheet" href="<?php echo $wd_path;?>css/font-awesome.min.css">

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php echo $wd_path;?>css/ie7.css">
    <link rel="stylesheet" href="<?php echo $wd_path;?>css/font-awesome-ie7.min.css">
    <![endif]-->

    <!-- ======================= Google Fonts ======================= -->
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- ======================= wrapper starts ======================= -->
<div class="wrapper">
<!-- ======================= header starts ======================= -->
<header id="header">
    <div class="container">
        <div id="Logo">
            <h2><a href="#home">Wedding</a></h2>
        </div>
    </div>
    <!-- ======================= main-menu-container Starts ======================= -->
    <nav class="main-menu-container" id="menu">
        <div class="container">
            <div class="float-left main-menu" id="LeftNav">
                <ul class="float-right menu">
                    <li class="menu-item current_page_item"><a href="#home">home</a></li>
                    <li class="menu-item"><a href="#ourstory">our story</a></li>
                    <!--<li class="menu-item"><a href="#rsvp">rsvp</a></li>
                    <li class="menu-item"><a href="#registry">registry</a></li>-->
                </ul>
            </div>
            <div class="float-right main-menu" id="RightNav">
                <ul class="float-left menu">
                    <li class="menu-item"><a href="#direction">direction</a></li>
                    <li class="menu-item"><a href="#photo">photo</a></li>
                    <!--<li class="menu-item"><a href="#groomsmen">groomsmen</a></li>
                    <li class="menu-item"><a href="#bridesmaid">bridesmaid</a></li>-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======================= main-menu-container Ends ======================= -->
</header>
<!-- ======================= header Ends ======================= -->
<!-- ======================= home content Starts ======================= -->
<section id="home" class="content">
    <div class="container">
        <div id="wedding">
            <hgroup>
                <h2>Wedding of</h2>
                <h1><?php echo $wedding->nama_panggilan_wanita; ?> &amp; <?php echo $wedding->nama_panggilan_pria; ?></h1>
                <h6>on</h6>
                <h3><?php echo date("d-M-Y H:i", strtotime($wedding->waktu_resepsi)); ?> - <?php echo $wedding->sampai; ?></h3>
                <h6>@</h6>
                <h3><?php echo $wedding->tempat_resepsi; ?></h3>
            </hgroup>
            <span class="invite"><?php echo $wedding->kata_kata; ?></span>
            <div class="hr-grey"></div>
        </div>
        <div class="portfolio">
            <div class="one-half column">
                <figure class="theme-border-big border"><a href="#"><img src="<?php echo $image_path.$wedding->foto_wanita; ?>" alt="" title="" class="border"></a>
				<a href="#"><img src="<?php echo $image_path ?>border_bunga.png" alt="" title="" class="border"></a>
				</figure>
				<div id="bunga">
				<a href="#"></a>
				</div>
                <h3 class="title-bg"><?php echo $wedding->mempelai_wanita; ?></h3>
                <?php echo $wedding->portfolio_wanita; ?>
            </div>
            <div class="one-half column last">
                <figure class="border theme-border-big"><a href="#"><img src="<?php echo $image_path.$wedding->foto_pria; ?>" alt="" title="" class="border"></a></figure>
<!--                <div id="bunga">-->
<!--                    <a href="#"></a>-->
<!--                </div>-->
                <h3 class="title-bg"><?php echo $wedding->mempelai_pria; ?></h3>
                <?php echo $wedding->portfolio_pria; ?>
            </div>
        </div>
    </div>
    <div class="hr_invisible medium"></div>
    <div class="page-bottom-bg"></div>
</section>
<!-- ======================= home content Ends ======================= -->
<!-- ======================= ourstory content Starts ======================= -->
<section id="ourstory" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">ourstory</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <!-- ======================= banner Div Starts ======================= -->
        <!--<div class="banner">
            <div class="container">
                <div id="layerslider" style="width:930px; height: 460px; margin: 0px auto;">
                    <div class="ls-layer" style="slidedirection: bottom; slidedelay: 7000; durationin: 1500; durationout: 1500; delayout: 500;">
                        <img src="http://placehold.it/930x460&text=Banner1" class="ls-bg" height="460" width="930" alt="layerbg1" />
                    </div>
                    <div class="ls-layer" style="slidedirection: right; slidedelay: 7000; durationin: 1500; durationout: 1500;">
                        <img src="http://placehold.it/930x460&text=Banner2" class="ls-bg" height="460" width="930" alt="layerbg2" />
                    </div>
                    <div class="ls-layer" style="slidedirection: top; slidedelay: 7000; durationin: 1500; durationout: 1500; delayout: 500;">
                        <img src="http://placehold.it/930x460&text=Banner3" class="ls-bg" height="460" width="930" alt="layerbg3" />
                    </div>
                </div>
            </div>
        </div>-->
        <!-- ======================= banner Div Ends ======================= -->
        <section class="timeline">
            <?php $a=0; ?>
        <?php $a=1; foreach($stories as $story): $a++?>

            <?php
            if (($a % 2) == 1)
            {?><article class="right event dt-sc-full-width">
                <div class="dt-sc-one-half column first">
                    <div class="post-detail">
                        <h2><?php echo date("d M Y", strtotime($story->tanggal_story)); ?></h2>
                        <?php echo $story->story; ?>
                    </div>
                </div>
                <div class="dt-sc-one-half column">
                    <div class="post-thumb">
                        <figure class="theme-border-big">
                            <a href="#"><img src="<?php echo $image_path.$story->foto_story; ?>" alt="" title="" width="196" height="196"></a>
                        </figure>
                    </div>
                </div>
            </article>

                <?php }?>
        <?php if (($a % 2) == 0)
            {?>
                <article class="left event dt-sc-full-width">

                    <div class="dt-sc-one-half column first">
                        <div class="post-thumb">
                            <figure class="theme-border-big">
                                <a href="#"><img src="<?php echo $image_path.$story->foto_story;?>" alt="" title="" width="196" height="196"></a>
                            </figure>
                        </div>
                    </div>
                    <div class="dt-sc-one-half column">
                        <div class="post-detail">
                            <h2><?php echo date("d M Y", strtotime($story->tanggal_story));?></h2>
                            <?php echo $story->story;?>
                        </div>
                    </div>
                </article>
              <?php } ?>

    <?php endforeach; ?>
        </section>
    </div>
</section>
<!-- ======================= ourstory content Ends ======================= -->
<!-- ======================= rsvp content Starts ======================= -->
<!--<section id="rsvp" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">rsvp</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <header>
                <span class="SectionHead aligncenter-text">Please RSVP before 28 Feb 2013</span>
                <div id="ajax_message"></div>
            </header>
            <form id="frmrsvp" name="frmrsvp" action="js/send.php" class="rsvp" method="post">
                <p class="twocolumn">
                    <label for="fname">Name</label><br>
                    <span><input type="text" value="first name" onFocus="if (this.value == 'first name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'first name';}" id="fname" name="fname"  pattern="[a-zA-Z0-9_-]{6,12}" required=""></span>
                    <span class="last"><input type="text" value="last name" onFocus="if (this.value == 'last name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'last name';}" id="lname" name="lname"></span>
                </p>
                <p>
                    <label for="email">Enter your e-mail</label><br>
                    <span><input type="email" value="e-mail" onFocus="if (this.value == 'e-mail') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'e-mail';}" id="email" name="email" required></span>
                </p>
                <p class="float-right last">
                    <span><textarea cols="20" rows="1" onFocus="if (this.value == 'leave us a message') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'leave us a message';}" id="txtmessage" name="txtmessage" required="">leave us a message</textarea></span>
                </p>
                <div class="custom-radio-wrapper"><label>Will you joining us?</label>
                    <div class="custom-radio">
                        <input type="radio" id="yes" name="rsvp" value="yes" >
                        <label for="yes">yes</label>
                        <input type="radio" id="no" name="rsvp" value="no">
                        <label for="no">No</label>
                    </div>
                </div>
                <div class="custom-select">
                    <p>
                        <label>No of Guests</label>
                                <span>
                                    <select name="cmbguests">
                                        <option value="">Select Number</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </span>
                    </p>
                    <p class="float-right last">
                        <span><textarea cols="20" rows="1" onFocus="if (this.value == 'Names of the Guests') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Names of the Guests';}" id="txtguestnames" name="txtguestnames" required>Names of the Guests</textarea></span>
                    </p>
                </div>
                <p class="submit-bg last">
                    <span><input type="submit" name="submit" value="add rsvp"></span>
                </p>
            </form>
        </div>
    </div>
</section>-->
<!-- ======================= rsvp content Ends ======================= -->
<!-- ======================= registry content Starts ======================= -->
<!--<section id="registry" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">registry</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <header>
                <span class="SectionHead aligncenter-text">We are registered for gifts at these fine retail establishments:</span>
            </header>
            <div class="clients">
                <article class="one-third column">
                    <figure><a href="#" class="client-one"></a></figure>
                    <h5>Create and Barrel</h5>
                    <a href="#">GO TO STORE</a>
                </article>
                <article class="one-third column">
                    <figure><a href="#" class="client-two"></a></figure>
                    <h5>Target</h5>
                    <a href="#">GO TO STORE</a>
                </article>
                <article class="one-third column last">
                    <figure><a href="#" class="client-three"></a></figure>
                    <h5>Bed Bath &amp; Beyond</h5>
                    <a href="#">GO TO STORE</a>
                </article>
            </div>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel laoreet purus. Praesent metus mauris, iaculis vitae cursus sed, gravida sed orci. Etiam vitae dui et dolor posuere ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla ornare dolor id massa sagittis euismod. Maecenas placerat tristique iaculis. Aliquam congue diam at nulla sollicitudin sollicitudin. <br><cite>-wedesignthemes</cite> </blockquote>
            <div class="hr_invisible medium"></div>
        </div>
    </div>
</section>-->
<!-- ======================= registry content Ends ======================= -->
<!-- ======================= direction content Starts ======================= -->
<section id="direction" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">direction</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <div class="one-half column">
                <?php echo $direction->embed_map; ?>
            </div>
            <div class="one-half column last">
                <div class="contact-details">
                    <aside id="address">
                        <h3>Address</h3>
                        <ul>
                            <li> <address class="address"><?php echo $direction->address; ?></address></li>
                            <li> <address class="iphone"><?php echo $direction->telp; ?></address></li>
                            <li> <a href="#" class="mail"><?php echo $direction->email; ?></a></li>
                        </ul>
                    </aside>
                    <aside class="place">
                        <h3>Petunjuk</h3>
                        <?php echo $direction->petunjuk; ?>
                    </aside>
                    <aside>
                        <h3>Lain-lain</h3>
                        <?php echo $direction->lain_lain; ?>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ======================= direction content Ends ======================= -->
<!-- ======================= photo content Starts ======================= -->
<section id="photo" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">photo</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <nav>
                <ul class="category-filter">
                    <li><a href="#" class="active"  data-filter="*"> All</a></li>
                    <li><a href="#" data-filter=".pre-marriage">Pre-Wedding</a></li>
<!--                    <li><a href="#" data-filter=".reception">Reception</a></li>-->
<!--                    <li><a href="#" data-filter=".bachelor">Bachelor Party</a></li>-->
<!--                    <li><a href="#" data-filter=".bridal">Bridal Shower</a></li>-->
                    <li><a href="#" data-filter=".location">Location</a></li>
                </ul>
            </nav>
            <div class="portfolio-container">
                <?php foreach($fotos as $foto) : ?>
                <article class="<?php echo $foto->foto_type; ?>">
                    <figure class="grayscale">
                        <a href="<?php echo $image_path.$foto->foto; ?>" title="<?php echo $foto->header; ?>" class="prettyPhoto">
                            <img src="<?php echo $image_path.$foto->foto; ?>" alt="" title="" width="290" height="205">
                        </a>
                    </figure>
                    <h4><a href="#"><?php echo $foto->header; ?></a></h4>
                    <p><?php echo $foto->keterangan; ?></p>
                </article>
                <?php endforeach; ?>
<!--                <article class="bachelor location">-->
<!--                    <figure  class="grayscale">-->
<!--                        <a href="http://placehold.it/590x395" title="portfolio11" class="prettyPhoto">-->
<!--                            <img src="http://placehold.it/290x205" alt="" title="" width="290" height="205">-->
<!--                        </a>-->
<!--                    </figure>-->
<!--                    <h4><a href="#">Love Gloves</a></h4>-->
<!--                    <p>Consectetur adipiscing elit</p>-->
<!--                </article>-->
<!--                <article class="bridal pre-marriage">-->
<!--                    <figure  class="grayscale">-->
<!--                        <a href="http://placehold.it/590x395" title="portfolio11" class="prettyPhoto">-->
<!--                            <img src="http://placehold.it/290x205" alt="" title="" width="290" height="205">-->
<!--                        </a>-->
<!--                    </figure>-->
<!--                    <h4><a href="#">Bride in her Pride</a></h4>-->
<!--                    <p>Cadipiscing elit</p>-->
<!--                </article>-->
<!--                <article class="reception bachelor">-->
<!--                    <figure class="grayscale">-->
<!--                        <a href="http://placehold.it/590x395" title="portfolio11" class="prettyPhoto">-->
<!--                            <img src="http://placehold.it/290x205" alt="" title="" width="290" height="205">-->
<!--                        </a>-->
<!--                    </figure>-->
<!--                    <h4><a href="#">United in Heaven</a></h4>-->
<!--                    <p>Amet, consectetur adipiscing elit</p>-->
<!--                </article>-->
<!--                <article class="bachelor bridal">-->
<!--                    <figure class="grayscale">-->
<!--                        <a href="http://placehold.it/590x395" title="portfolio11" class="prettyPhoto">-->
<!--                            <img src="http://placehold.it/290x205" alt="" title="" width="290" height="205">-->
<!--                        </a>-->
<!--                    </figure>-->
<!--                    <h4><a href="#">A better view</a></h4>-->
<!--                    <p>Amet, consectetur </p>-->
<!--                </article>-->
<!--                <article class="pre-marriage reception">-->
<!--                    <figure class="grayscale">-->
<!--                        <a href="http://placehold.it/590x395" title="portfolio11" class="prettyPhoto">-->
<!--                            <img src="http://placehold.it/290x205" alt="" title="" width="290" height="205">-->
<!--                        </a>-->
<!--                    </figure>-->
<!--                    <h4><a href="#">Happy Life</a></h4>-->
<!--                    <p>Amet, consectetur adipiscing elit</p>-->
<!--                </article>-->
            </div>
        </div>
    </div>
</section>
<!-- ======================= photo content Ends ======================= -->
<!-- ======================= groomsmen content Starts ======================= -->
<!--<section id="groomsmen" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">Groomsmen</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <article>
                <figure class="float-right entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
                <div class="entry-detail">
                    <h4>Tim Reynolds <span>Best Man</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
            </article>
            <article>
                <figure class="float-left entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
                <div class="entry-detail">
                    <h4>David Jones <span>Best Man</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
            </article>
            <article>
                <figure class="float-right entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
                <div class="entry-detail">
                    <h4>Tim Reynolds <span>Best Man</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
            </article>
        </div>
    </div>
</section>-->
<!-- ======================= Groomsmen Ends ======================= -->
<!-- ======================= Bridesmaid Starts ======================= -->
<!--<section id="bridesmaid" class="content">
    <div class="page-title">
        <div class="parallax-cntr">
            <div class="parallax">
                <h2 class="hr-white">bridesmaid</h2>
            </div>
        </div>
    </div>
    <div class="site-content">
        <div class="container">
            <article>
                <figure class="float-left entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
                <div class="entry-detail">
                    <h4>Taylor Vixen <span>Maid of Honour</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
            </article>
            <article>
                <div class="entry-detail">
                    <h4>Jasmine Penelpope <span>Brides Maid</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
                <figure class="float-right entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
            </article>
            <article>
                <figure class="float-left entry-thumb">
                    <div class="thumb">
                        <a href="#"><img src="http://placehold.it/180x235" alt="" title=""></a>
                        <div class="social">
                            <a href="#" class="icon-facebook"></a>
                            <a href="#" class="icon-twitter"></a>
                        </div>
                    </div>
                </figure>
                <div class="entry-detail">
                    <h4>Julius Mc Carthy <span>Brides Maid</span> </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p> To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? </p>
                </div>
            </article>
        </div>
        <div class="hr_invisible large"></div>
    </div>
</section>-->
<!-- ======================= Bridesmaid Ends ======================= -->
<!-- ======================= footer Starts ======================= -->
<footer>
    <div class="container">
        <div class="aligncenter-text copyright">
            <div class="page-bottom-bg"></div>
            <!--<ul class="social-media">
                <li>Connect</li>
                <li><a href="#">bahrie172@gmail.com</a></li>
                <li>+628640899224</li>
                <li><a href="http://www.facebook.com/bahrieBHE" class="fb" target="_blank"></a></li>
                <li><a href="http://twitter.com/bahrie_bhe" class="twit" target="_blank"></a></li>
                <li><a href="http://www.youtube.com/user/bahrie127" class="you-tube" target="_blank"></a></li>
            </ul>-->
            <p>Site design by samudramutiara.com</p>
        </div>
    </div>
</footer>
<!-- footer div Ends here -->
</div>
<!-- wrapper Div Ends here -->

<!-- ======================= jQuery ======================= -->
<script type="text/javascript" src="<?php echo $wd_path;?>js/jquery.js"></script>

<script src="<?php echo $wd_path;?>js/jquery.visualNav.js"></script>
<script src="<?php echo $wd_path;?>js/jquery.mobilemenu.js"></script>

<script src="<?php echo $wd_path;?>js/jquery-easing-1.3.js" type="text/javascript"></script>
<script src="<?php echo $wd_path;?>js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/customInput.jquery.js"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/isotope/jquery.isotope.min.js"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/prettyphoto/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/jquery.validate.min.js"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/greyScale.min.js"></script>

<script type="text/javascript" src="<?php echo $wd_path;?>js/custom.js"></script>

<!-- <script type="text/javascript" src="js/controlpanel/jquery.cookie.js"></script>
<script type="text/javascript" src="js/controlpanel/control-panel.js"></script> -->

</body>
</html>