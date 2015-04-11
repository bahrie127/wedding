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

        <div class="span9" >
        <form action="<?php echo base_url(); ?>index.php/admin/kartu/cetak_check" method="POST" target="_blank">

    <table class="table table-bordered table-hover">
    <thead>
    <td>No</td>
    <td>No Induk</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Lahir</td>
    <td style="text-align: center"><label class="checkbox">
        <input onclick="toggleCheckedTables1(this.checked)" type="checkbox"> All
    </label></td>
    </thead>
        <tbody>
        <?php $no=0; foreach($anggota as $data): $no++ ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data->id_ang; ?></td>
            <td><?php echo $data->full_name; ?></td>
            <td><?php echo $data->alamat; ?></td>
            <td><?php echo $data->tempat_lahir; ?></td>
            <td style="text-align: center"><label class="checkbox">
                <input class="checkbox-tables1" name="ctk[]" value="<?php echo $data->id_ang; ?>" type="checkbox">
            </label></td>
        </tr>
            <?php endforeach;?>
        </tbody>


    </table>
    <table class="table">
        <tr>
            <td>
                <?php echo ! empty($pagination) ? '<p id="pagination">' . $pagination . '</p>' : ''; ?>
        </td>
            <td style="text-align: right; vertical-align: middle">
                <button class="btn btn-info"><i class="icon-white icon-check"></i>Cetak</button>
            </td>
        </tr>
    </table>
</form>

    </div>