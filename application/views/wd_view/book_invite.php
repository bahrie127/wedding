<?php
$wd_path=$this->config->item('base_url').$this->config->item('wd_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<html>
<head>
    <script type="text/javascript" src="http://lib.ivank.net/ivank.js"  ></script>
    <script type="text/javascript" src="http://flipr.ivank.net/flipr.js"></script>
    <script type="text/javascript">
        function Go()
        {
            var width  = 580;
            var height = 740;
            var pages  = [
                "<?php echo $image_path.$undangan->cover; ?>",
                "<?php echo $image_path; ?>undangan2.png",
                "<?php echo $image_path; ?>undangan3.png",
                "<?php echo $image_path; ?>undangan4.png",
                "<?php echo $image_path; ?>undangan5.png",
                "<?php echo $image_path; ?>undangan6.png"
            ];
            var book = new Book("c", width, height, pages);
        }

        /*"undangan1.png", "undangan2.png", "undangan3.png", "undangan4.png",
                "undangan5.png","undangan6.png"*/
    </script>
</head>
<body onload="Go();"><canvas id="c"></canvas></body>
</html>