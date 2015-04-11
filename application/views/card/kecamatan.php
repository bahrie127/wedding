<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamkesda Cards</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/jquery.ui.all.css'); ?>"/>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/jquery.js');?>"></script>

    <style>
        a:link {color:#000000;}    /* unvisited link */
        a:visited {color:#000000;} /* visited link */
        a:hover {color:#000000;}   /* mouse over link */
        a:active {color:#000000;}  /* selected link */
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
<br/><br/><br/>
<div style="margin-left: 10px">
    <br />
   <div style="color: #000000"><?php echo ! empty($pagination) ? '<p id="pagination">' . $pagination . '</p>' : ''; ?></div>
</div>
</body>
</html>

