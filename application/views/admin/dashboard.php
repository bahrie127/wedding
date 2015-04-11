<?php
$wd_path=$this->config->item('base_url').$this->config->item('wd_path');
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wedding System Invitation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--docs-->
<!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
		<link id="default" rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/docs/docs.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/datepicker.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="<?php echo $wd_path ?>images/lovelav.ico" rel="shortcut icon" type="image/x-icon">

    <!--jquery-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.js"></script>
    <!--jquery peity-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/chart/jquery.peity.js"></script>
    <!--jquery cookie-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.cookie.js"></script>


</head>

<body class="home">
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->

<!--**********************************\\\ NAVBAR TOP ///*******************************************-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-search"></span>

            </button>
            <a class="brand" href="#">
                Weeding Admin
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills pull-right">
                    <li><a href="<?php echo $base_url;?>/login/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--......................................
<br>

<!--....................................................................................................-->
<!--**********************************\\\ CONTENT ///*******************************************-->
<br/><br/><br/>
<div class="container-fluid" id="content">
<div class="row-fluid">
<!--content left-->
<div id="content-left" class="span2">

    <div class="row-fluid">
        <!--list menu-->
        <div class="table-wrapper sidebar-nav">
            <ul class="nav nav-tabs nav-stacked">
                <!-------------------->
                <li><a href="<?php echo $base_url;?>/admin/dashboard"><i class="icon-home"></i> <span>Home</span></a></li>

                <li class="sidebar-li-default">
                    <a href="#form" data-toggle="collapse" class="sidebar-a" data-original-title=""><i class="icon-list-alt"></i> <span>Menu</span><i class="icon-caret-down pull-right sidebar-caret"></i> </a>

                    <div id="form" class="accordion-body collapse">
                        <div class="accordion-inner" style="background-color: #dddddd;">

                            <ul class="nav nav-tabs nav-stacked sidebar-ul">
                                <li><a href="<?php echo $base_url;?>/admin/even"><i class="icon-file"></i> <span>Event</span></a></li>
                                <li><a href="<?php echo $base_url;?>/admin/story"><i class="icon-file"></i> <span>Our Story</span></a></li>
                                <li><a href="<?php echo $base_url;?>/admin/foto"><i class="icon-file"></i> <span>Foto</span></a></li>
                                <li><a href="<?php echo $base_url;?>/admin/direction"><i class="icon-file"></i> <span>Direction</span></a></li>
                                <li><a href="<?php echo $base_url;?>/admin/design"><i class="icon-file"></i> <span>Design</span></a></li>
                                <li><a href="<?php echo $base_url;?>/admin/invite"><i class="icon-file"></i> <span>Invite</span></a></li>
                            </ul>

                        </div>
                    </div>
                </li>


			</ul>
			

        </div>
        <!--/.well -->
        
    </div>

</div>
<!--/span-->
<!--content center-->
<div id="content-center" class="span7">

    <!--chart-->
    <div class="row-fluid">
        <div class="table-wrapper">
            <ul class="breadcrumb">
                <li class="">Home </li>
                <p>
                    welcome
				</p>
                <p>
                     <a style="color: red" href="<?php echo $base_url ?>/<?php echo $link->link; ?>" target="_blank">Your Link</a>
                </p>
            </ul>
        </div>
    </div>
	<div class="row-fluid">
        <div class="table-wrapper sidebar-nav">
<!--            <ul class="breadcrumb">-->
<!--				<li><a rel="tooltip" class="pull-left" href="#"><img src="--><?php //echo $image_path;?><!----><?php //echo $pegawai->foto;?><!--" class="img-gallery-wrapper img-polaroid" alt="" width="100"></a></li>-->
<!--                -->
<!--            </ul>-->
<!--			<ul>-->
<!--				<li class="">Detail Biodata: </li>-->
<!--                <li class="">Nama   : --><?php //echo $pegawai->full_name; ?><!--</li>-->
<!--                <li class="">Alamat : --><?php //echo $pegawai->alamat; ?><!--</li>-->
<!--                <li class="">Jabatan: --><?php //echo $pegawai->nama_jabatan; ?><!--</li>-->
<!---->
<!--			</ul>-->
        </div>
    </div>


</div>
<!--/span-->
<!--content right-->
<!--content right-->
<div id="content-right" class="span3">

<div class="sidebar-nav" id="sidebar">

</div>
</div>
</div>
</div>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ FOOTER ///*******************************************-->
<div class="container-fluid" id="footer">
    <div class="row-fluid">
        <div class="span4">

        </div>
        <div class="span4">
            <p>
                &copy; 2014 <a href="#">@bahri </a>
            </p>
        </div>
        <div class="span4">

        </div>
    </div>
</div>


<!--progress knob-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/knob/jquery.knob.js"></script>


<!--standar-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/docs.js"></script>


</body>
</html>



