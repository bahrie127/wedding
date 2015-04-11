<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jamkesda Cards</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap-responsive.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/css/jquery.ui.all.css'); ?>"/>
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
<br/><br/><br/>
<div style="margin-left: 10px">

    <div class="row-fluid">
        <table class="table">
            <thead>
            <tr>
                <th>
                    <label class="checkbox">
                        <input onclick="toggleCheckedTables1(this.checked)" type="checkbox">
                    </label>
                </th>
                <th>Username</th>
                <th>Email</th>

                <th class="center">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="checkbox-tables1" type="checkbox">
                    </label>
                </td>
                <td>John Doe</td>
                <td>example@example.com</td>

                <td class="center">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-mini" title="view">view</button>
                        <button type="button" class="btn btn-mini btn-success" title="approve">approve</button>
                        <button type="button" class="btn btn-mini btn-danger" title="delete">delete</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="checkbox-tables1" type="checkbox">
                    </label>
                </td>
                <td>Jane Doe</td>
                <td>example@example.com</td>
                <td class="center">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-mini" title="view">view</button>
                        <button type="button" class="btn btn-mini btn-success" title="approve">approve</button>
                        <button type="button" class="btn btn-mini btn-danger" title="delete">delete</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="checkbox">
                        <input class="checkbox-tables1" type="checkbox">
                    </label>
                </td>
                <td>Jenny Doe</td>
                <td>example@example.com</td>
                <td class="center">
                    <div class="btn-group" data-toggle="buttons-radio">
                        <button type="button" class="btn btn-mini" title="view">view</button>
                        <button type="button" class="btn btn-mini btn-success" title="approve">approve</button>
                        <button type="button" class="btn btn-mini btn-danger" title="delete">delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/docs.js');?>"></script>
</div>
</body>
</html>

