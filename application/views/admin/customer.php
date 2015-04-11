<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$base_url=$this->config->item('base_url')."index.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistem Informasi Keanggotaan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach; ?>
    <!--docs-->
    <!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/docs/docs.css">

    <?php foreach($js_files as $file): ?>
		<script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
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
<!--                <img src="--><?php //echo $resource_path;?><!--img/logo/logo.png" alt="">  Sistem Informasi Keanggotaan</a>-->
                Wedding Admin
            <div class="nav-collapse collapse">
                <ul class="nav nav-pills pull-right">
                    <li><a href="<?php echo $base_url;?>/login/logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ HEADER ///*******************************************-->


<br><br/><br/>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ CONTENT ///*******************************************-->
<div class="container-fluid" id="content">
<div class="row-fluid">
    <!--content left-->
    <div id="content-left" class="span2">

        <div class="table-wrapper sidebar-nav visible-phone visible-tablet">
            <ul class="nav nav-tabs nav-stacked">
                

            </ul>

        </div><!--/.well -->



        <div class="row-fluid">
            <!--list menu-->
            <div class="table-wrapper sidebar-nav">
                <ul class="nav nav-tabs nav-stacked">
                    <li><a href="<?php echo $base_url;?>/admin/dashboard"><i class="icon-home"></i> <span>Home</span></a></li>
                    <li class="sidebar-li-default">
                        <a href="#form" data-toggle="collapse" class="sidebar-a" data-original-title=""><i class="icon-list-alt"></i> <span>Menu</span><i class="icon-caret-down pull-right sidebar-caret"></i> </a>

                        <div id="form" class="accordion-body in collapse">
                            <div class="accordion-inner" style="background-color: #dddddd;">

                                <ul class="nav nav-tabs nav-stacked sidebar-ul">
                                    <li><a href="<?php echo $base_url;?>/admin/customer"><i class="icon-file"></i> <span>Customer</span></a></li>
                                    <li><a href="<?php echo $base_url;?>/admin/even"><i class="icon-file"></i> <span>Event</span></a></li>

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
    <div class="span10">

        <div class="row-fluid">
			<?php echo $output; ?>
        </div>
        <!--/span-->
        <!--content right-->

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
                &copy; 2014 <a href="#">@bahri</a>
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



