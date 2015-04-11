<?php
$resource_path=$this->config->item('base_url').$this->config->item('resources_path');
$image_path=$this->config->item('base_url').$this->config->item('image_path');
$base_url=$this->config->item('base_url')."index.php";?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-search"></span>

            </button>
            <a class="brand" href="#"><img src="<?php echo $resource_path;?>img/logo/logo.png" alt="">  Sistem Informasi Keanggotaan</a>
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

<!--******************* view on mobile for view earning ***********************-->


<br><br/><br/>

<!--....................................................................................................-->
<!--....................................................................................................-->
<!--....................................................................................................-->
<!--**********************************\\\ CONTENT ///*******************************************-->
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
                        <?php if($this->session->userdata('level')==1){ ?>
                        <li class="sidebar-li-default">
                            <a href="#form" data-toggle="collapse" class="sidebar-a" data-original-title=""><i class="icon-list-alt"></i> <span>Master</span><i class="icon-caret-down pull-right sidebar-caret"></i> </a>

                            <div id="form" class="accordion-body collapse">
                                <div class="accordion-inner" style="background-color: #dddddd;">

                                    <ul class="nav nav-tabs nav-stacked sidebar-ul">
                                        <li><a href="<?php echo $base_url;?>/admin/jabatan"><i class="icon-file"></i> <span>Jabatan</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/jenis_kegiatan"><i class="icon-file"></i> <span>Jenis Kegiatan</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/kabupaten"><i class="icon-file"></i> <span>kabupaten</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/provinsi"><i class="icon-file"></i> <span>Provinsi</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/profile"><i class="icon-file"></i> <span>Profile</span></a></li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <?php } ?>
                        <?php if($this->session->userdata('level')!=4){ ?>
                        <li><a href="<?php echo $base_url;?>/admin/activity"><i class="icon-edit"></i> <span>Activity</span></a></li>
                        <?php }?>
                        <li><a href="<?php echo $base_url;?>/admin/anggota/add_anggota"><i class="icon-list"></i> <span>Manage Anggota</span></a></li>
                        <?php if($this->session->userdata('level')!=4){ ?>
                        <li><a href="<?php echo $base_url;?>/admin/report"><i class="icon-download-alt"></i> <span>Report</span></a></li>
                        <li class="sidebar-li-default">
                            <a href="#form2" data-toggle="collapse" class="sidebar-a" data-original-title=""><i class="icon-list-alt"></i> <span>Kartu</span><i class="icon-caret-down pull-right sidebar-caret"></i> </a>

                            <div id="form2" class="accordion-body in collapse">
                                <div class="accordion-inner" style="background-color: #dddddd;">

                                    <ul class="nav nav-tabs nav-stacked sidebar-ul">
                                        <li><a href="<?php echo $base_url;?>/admin/kartu/no_induk"><i class="icon-file"></i> <span>No Induk</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/kartu/checklist"><i class="icon-file"></i> <span>Check List</span></a></li>
                                        <li><a href="<?php echo $base_url;?>/admin/kartu/record"><i class="icon-file"></i> <span>Per Record</span></a></li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <?php }?>
                        <?php if($this->session->userdata('level')==1){ ?>
                        <li><a href="<?php echo $base_url;?>/admin/anggota/user"><i class="icon-user"></i> <span>User</span></a></li>
                        <?php }?>
                    </ul>

                </div>
                <!--/.well -->

            </div>

        </div>
        <div class="span10">

            <div class="row-fluid">
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/admin/kartu/cetak" method="POST" target="_blank">

        <div class="control-group">
            <label class="control-label" for="njp">Nomor Induk</label>

            <div class="controls">
                <input type="" class="input-xlarge" id="njp" name="no_induk">
                <?php echo form_error('no_induk','<div style="color: red">', '</div>'); ?>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button class="btn btn-info"><i class="icon-white icon-check"></i>Cetak</button>
            </div>
        </div>
    </form>
            </div>
            <!--/span-->
            <!--content right-->

        </div>


