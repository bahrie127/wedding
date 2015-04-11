<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamkesda Cards</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/docs.css'); ?>"/>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.js');?>"></script>

    <style>
        a:link {color:#ffffff;}    /* unvisited link */
        a:visited {color:#ffffff;} /* visited link */
        a:hover {color:#ffffff;}   /* mouse over link */
        a:active {color:#ffffff;}  /* selected link */
    </style>
</head>
<body>
<!---->
<div class="container">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- Be sure to leave the brand out there if you want it shown -->
                <a class="brand" href="#">Cetak Kartu Jamkesda</a>

            </div>
        </div>
    </div>
    </div>
<br/>
<div class="row">

    <div style="margin-left: 20px;padding-left: 30px">
    <a href="<?php echo base_url(); ?>sample/carinjp" target="_blank"><button type="button" class="btn btn-info"> Cetak berdasarkan NJP</button></a>
        <a href="<?php echo base_url(); ?>sample/checklist" target="_blank"><button type="button" class="btn btn-info">Cetak berdasarkan Checklist</button></a>
    <a href="<?php echo base_url(); ?>sample/page" target="_blank"><button type="button" class="btn btn-info">Cetak per Record</button></a>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js');?>"></script>
</body>
</html>

