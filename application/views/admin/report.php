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


    <!--docs-->
    <!--    <link id="default" href="http://localhost/crud-ci-bootstrap/css/docs/docs.css" rel="stylesheet">-->
    <link id="default" rel="stylesheet" type="text/css" href="<?php echo $resource_path;?>css/docs/docs.css">
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

                        <div id="form2" class="accordion-body collapse">
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
    <!--/span-->
    <!--content center-->
    <div class="span10">
        <div class="row-fluid">
			<div class="table-wrapper">
                                    <div  align="center">
                                    <div id="testChart" style="width:80%; height:400px;"></div>
                                    </div>
                </div>
			<div class="table-wrapper">
				<ul class="breadcrumb">
				<li>Laporan Jumlah Anggota Persatuan Umat Islam (PUI)</li>
                    <li class="pull-right"><a href="<?php echo $base_url;?>/admin/report/download"><button class="btn btn-primary">Download Excel</button></a></li>
				</ul>
            <br/>
            <?php foreach($data_table as $rows){?>
            <ul class="breadcrumb">
            <li>Di Provinsi <?php echo $rows['nama_prov']; ?></li>
            </ul>
                <table border="5px" class="table table-bordered table-hover table-striped table-condensed">
                    <thead >
                    <td style="text-align: center;font-weight: bold;">No</td>
                    <td style="text-align: center;font-weight: bold;">Nama Kabupaten</td>
                    <td style="text-align: center;font-weight: bold;">Anggota Biasa</td>
					<td style="text-align: center;font-weight: bold;">Anggota Inti</td>
					<td style="text-align: center;font-weight: bold;">Anggota Teras</td>
					<td style="text-align: center;font-weight: bold;">Anggota Kehormatan</td>
                    <td style="text-align: center;font-weight: bold;">Jumlah</td>
                    </thead>
                    <?php $no=0; foreach($rows['data_kabupaten'] as $row){ ?>
					<tr>
						<td style="text-align: center;font-weight: bold;"><?php echo ++$no; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['nama_kab']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['biasa']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['inti']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['teras']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['kehormatan']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $row['total']; ?></td>
					</tr>
                    <?php } ?>
                </table>

				<ul class="breadcrumb">
					<li>Jumlah Keseluruhan Anggota di Provinsi <?php echo $rows['nama_prov']; ?></li>
				</ul>
				<table border="5px" class="table table-bordered table-hover table-striped table-condensed">
                    <thead >
                    <td style="text-align: center;font-weight: bold;">Anggota Biasa</td>
					<td style="text-align: center;font-weight: bold;">Anggota Inti</td>
					<td style="text-align: center;font-weight: bold;">Anggota Teras</td>
					<td style="text-align: center;font-weight: bold;">Anggota Kehormatan</td>
                    <td style="text-align: center;font-weight: bold;">Jumlah</td>
                    </thead>
					<tr>
						<td style="text-align: center;font-weight: bold;"><?php echo $rows['prov_biasa']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $rows['prov_inti']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $rows['prov_teras']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $rows['prov_kehormatan']; ?></td>
						<td style="text-align: center;font-weight: bold;"><?php echo $rows['prov_total']; ?></td>
					</tr>
				</table>

                   <?php } ?>
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
                &copy; 2013 <a href="#">@pui.heyfajrul.com</a>
            </p>
        </div>
        <div class="span4">

        </div>
    </div>
</div>

<script>
    $(function () {
        $('#testChart').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Anggota Nasional'
            },
            xAxis: {
                categories: <?php echo $categories; ?>
            },
            yAxis: {
                title: {
                    text: 'Jumlah Anggota'
                }
            },
            series: <?php echo $series; ?>
        });
    });
</script>

<!--progress knob-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/knob/jquery.knob.js"></script>

<!--standar-->
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo $resource_path;?>js/docs/docs.js"></script>

</body>
</html>



