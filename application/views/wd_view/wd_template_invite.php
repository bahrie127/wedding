<?php
$wd_path=$this->config->item('base_url').$this->config->item('wd_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<html>
<head>
    <title>Undangan</title>
    <link href="<?php echo $wd_path ?>images/love-gold.ico" rel="shortcut icon" type="image/x-icon">
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
    <iframe bgcolor=#FFFFFF frameborder=0 vspace=0 hspace=0 marginwidth=0 marginheight=0 src="<?php echo $base_url.'/happy/get_view_invite/'.$name?>" style="width:75%; height:770px; margin-top:-140px;"></iframe>
</div>
</body>
</html>