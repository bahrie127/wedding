<html>
<head><title>cetak kartu</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/style.css"/>
</head>
<body>
<?php
//$originalDate = $penerima->tanggal_lahir;
//$newDate = date("d-m-Y", strtotime($originalDate));
?>

        <div class="cetak">
            <div class="nomor">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $anggota->id_ang; ?></div>

            <table border="0" style="width: 415px">
                <tr>
                    <td style="vertical-align:top;"><div style="text-align: left;font-family: Lucida;font-size: 14px;font-weight: bold;padding-left: 25px">
                        Nama&nbsp&nbsp&nbsp : <?php echo $anggota->full_name; ?></div></td>

                </tr>
            </table>
            <div class="alamat">Alamat : <?php echo $anggota->alamat; ?></div>
            <div class="lahir">Lahir&nbsp&nbsp&nbsp : <?php echo $anggota->tempat_lahir; ?></div>

            <!--    <div class="barcode"><img src="--><?php //echo base_url(); ?><!--/index.php/sample/barcode/--><?php //echo $penerima->NPJ; ?><!--" /></div>-->

        </div>
</body>
</html>