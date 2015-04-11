<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Keanggotaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--docs-->
    <!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
    <link id="default" rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>/css/docs/docs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/datepicker.css">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico">

    <!--jquery-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.js"></script>
    <!--jquery peity-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/chart/jquery.peity.js"></script>
    <!--jquery cookie-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/docs/jquery.cookie.js"></script>

    <!--jquery highchart-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/highcharts.js"></script>
    <!--jquery exporting-->
    <script type="text/javascript" src="<?php echo $resource_path;?>js/exporting.js"></script>

</head>

<body class="home">
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-search"></span>

            </button>
            <a class="brand" href="#"><img src="<?php echo $resource_path;?>img/logo/logo.png" alt="">Sistem Informasi Keanggotaan PUI</a>

            <div class="nav-collapse collapse">
                <ul class="nav nav-pills pull-right">
                    <li><a href="<?php echo $base_url;?>/pendaftaran">Pendaftaran</a></li>
                    <li><a href="<?php echo $base_url;?>/login">Masuk</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>