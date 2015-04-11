<html>
<head><title>cetak kartu</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/resources/css/style.css"/>
</head>
<body>


<table>
<tr>

    <?php $a=0; ?>
    <?php foreach($anggota as $data): $a++ ?>
    <td>
        <div class="cetak">
            <div class="nomor">No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo $data->id_ang; ?></div>

            <table border="0" style="width: 415px">
                <tr>
                    <td style="vertical-align:top;"><div style="text-align: left;font-family: Lucida;font-size: 14px;font-weight: bold;padding-left: 25px">
                        Nama&nbsp&nbsp&nbsp : <?php echo $data->full_name; ?></div></td>

                </tr>
            </table>
            <div class="alamat">Alamat : <?php echo $data->alamat; ?></div>
            <div class="lahir">Lahir&nbsp&nbsp&nbsp : <?php echo $data->tempat_lahir; ?></div>

            <!--    <div class="barcode"><img src="--><?php //echo base_url(); ?><!--/index.php/sample/barcode/--><?php //echo $penerima->NPJ; ?><!--" /></div>-->

        </div>
    </td>
        <?php if($a%2==0){ ?>
        </tr><tr>
        <?php }?>
    <?php endforeach;?>
</tr>

</table>



</body>
</html>