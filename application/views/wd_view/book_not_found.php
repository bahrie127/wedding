<?php
$wd_path=$this->config->item('base_url').$this->config->item('wd_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<html>
<head>
    <title>hai</title>
    <style>
        html {
            background: url(<?php echo $image_path; ?>/kayu9.png) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<div align="center">
    <h3 style="margin-top: 100; font-family: Arial;color: #5a5a5a">Undangan Tidak ditemukan.</h3>
</div>
</body>
</html>