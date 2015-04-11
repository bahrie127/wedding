<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<div class="container-fluid" id="footer">
    <div class="row-fluid">
        <div class="span4">

        </div>
        <div class="span4">
            <p>
                &copy; 2013 <a href="#">@pui.heyfajrul.com</a>
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



