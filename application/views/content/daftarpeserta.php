
<br/><br/><br/><br/>

<div id="content" align="center">
    <section class="blog">
        <div id="posts">
            <article>
                <div id="comments">
                    <div id="form" class="daf">

                        <h2>Register</h2>
                        <br class="clear"/>
                        <?php /*echo validation_errors(); */?>
                        <form action="<?php echo base_url(); ?>index.php/register/daftar" method="post" id="dform" name="form">
                            <table class="daf" border="0">
                            <tr>
                                <th><label for="username">Username</label> </th>
                                <td><input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>"></td>
                                <th><label for="password">Password</label> </th>
                                <td><input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><?php echo form_error('username','<div style="color: red">', '</div>'); ?></td>
                                <td></td>
                                <td><?php echo form_error('password','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                                <tr>
                                    <th> <label for="name">Nama Lengkap</label></th>
                                    <td colspan="3"> <input type="text" name="name" id="name" class="required span7" value="<?php echo set_value('name'); ?>"/></td>
                                </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('name','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>

                                <th><label for="tempathahir">Tempat Lahir</label></th>
                                <td colspan="3"> <input type="text" name="tempat_lahir" id="tempathahir" class="required" value="<?php echo set_value('tempat_lahir'); ?>"/></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('tempat_lahir','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>

                                <th><label for="name">Tanggal Lahir</label></th>
                                <td colspan="3"><select name="tanggal" id="tanggal">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>

                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>

                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>

                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>

                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                    <select name="bulan" id="bulan">
                                        <option value="01" > januari</option>

                                        <option value="2" > februari</option>
                                        <option value="3" > maret</option>
                                        <option value="4" > april</option>
                                        <option value="5" > mei</option>
                                        <option value="6" > juni</option>

                                        <option value="7" > juli</option>
                                        <option value="8" > agustus</option>
                                        <option value="9" > september</option>
                                        <option value="10" > oktober</option>
                                        <option value="11" > november</option>

                                        <option value="12" > desember</option>
                                    </select>
                                    <select name="tahun" id="tahun">
                                        <option value="1945" >1945</option>
                                        <option value="1946" >1946</option>
                                        <option value="1947" >1947</option>

                                        <option value="1948" >1948</option>
                                        <option value="1949" >1949</option>
                                        <option value="1950" >1950</option>
                                        <option value="1951" >1951</option>
                                        <option value="1952" >1952</option>
                                        <option value="1953" >1953</option>

                                        <option value="1954" >1954</option>
                                        <option value="1955" >1955</option>
                                        <option value="1956" >1956</option>
                                        <option value="1957" >1957</option>
                                        <option value="1958" >1958</option>
                                        <option value="1959" >1959</option>

                                        <option value="1960" >1960</option>
                                        <option value="1961" >1961</option>
                                        <option value="1962" >1962</option>
                                        <option value="1963" >1963</option>
                                        <option value="1964" >1964</option>
                                        <option value="1965" >1965</option>

                                        <option value="1966" >1966</option>
                                        <option value="1967" >1967</option>
                                        <option value="1968" >1968</option>
                                        <option value="1969" >1969</option>
                                        <option value="1970" >1970</option>
                                        <option value="1971" >1971</option>

                                        <option value="1972" >1972</option>
                                        <option value="1973" >1973</option>
                                        <option value="1974" >1974</option>
                                        <option value="1975" >1975</option>
                                        <option value="1976" >1976</option>
                                        <option value="1977" >1977</option>

                                        <option value="1978" >1978</option>
                                        <option value="1979" >1979</option>
                                        <option value="1980" >1980</option>
                                        <option value="1981" >1981</option>
                                        <option value="1982" >1982</option>
                                        <option value="1983" >1983</option>

                                        <option value="1984" >1984</option>
                                        <option value="1985" >1985</option>
                                        <option value="1986" >1986</option>
                                        <option value="1987" >1987</option>
                                        <option value="1988" >1988</option>
                                        <option value="1989" >1989</option>

                                        <option value="1990" >1990</option>
                                        <option value="1991" >1991</option>
                                        <option value="1992" >1992</option>
                                        <option value="1993" >1993</option>
                                        <option value="1994" >1994</option>
                                        <option value="1995" >1995</option>

                                        <option value="1996" >1996</option>
                                        <option value="1997" >1997</option>
                                        <option value="1998" >1998</option>
                                        <option value="1999" >1999</option>
                                        <option value="2000" >2000</option>
                                        <option value="2001" >2001</option>

                                        <option value="2002" >2002</option>
                                        <option value="2003" >2003</option>
                                        <option value="2004" >2004</option>
                                        <option value="2005" >2005</option>
                                        <option value="2006" >2006</option>
                                        <option value="2007" >2007</option>

                                        <option value="2008" >2008</option>
                                        <option value="2009" >2009</option>
                                        <option value="2010" >2010</option>
                                        <option value="2011" >2011</option>
                                    </select>
                                </td>

                            </tr>
                            <tr>

                                <th><label for="gender">Jenis Kelamin</label></th>
                                <td colspan="3">
                                    <input type="radio" name="gender" id="gender" value="1"/>&nbsp;Laki-laki
                                    <input type="radio" name="gender" value="2"/>&nbsp;Perempuan</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('gender','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>
                                <th><label for="agama">Agama</label> </th>
                                <td colspan="3">
                                    <select name="id_agama" id="agama">
                                        <?php foreach ($agama as $row):?>
                                        <option value="<?php echo $row->id_agama;?>">
                                            <?php echo $row->keterangan;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="ktp">No KTP</label> </th>
                                <td colspan="3"><input type="text" id="ktp" name="ktp" value="<?php echo set_value('ktp'); ?>"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('ktp','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                                <tr>

                                    <th><label for="name">Alamat</label></th>
                                    <td colspan="3"> <input type="text" name="alamat" id="alamat" class="required span7" value="<?php echo set_value('alamat'); ?>"/></td>
                                </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('alamat','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>
                                <th><label for="provinsi">Provinsi</label> </th>
                                <td colspan="3">
                                    <select name="id_prov" id="provinsi">
                                    <?php foreach ($provinsi as $row):?>
                                    <option value="<?php echo $row->id_prov;?>">
                                        <?php echo $row->nama_provinsi;?></option>
                                    <?php endforeach;?>
                                        </select>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="kota">Kabupaten/Kota</label> </th>
                                <td colspan="3">
                                    <select name="id_kab" id="kota">
                                        <?php foreach ($kabupaten as $row):?>
                                        <option value="<?php echo $row->id_kab;?>">
                                            <?php echo $row->nm_kab;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="kecamatan">Kecamatan</label> </th>
                                <td colspan="3"><input type="text" id="kecamatan" name="kecamatan" value="<?php echo set_value('kecamatan'); ?>"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('kecamatan','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>
                                <th colspan="1"><label for="email">Email</label></th>
                                <td colspan="3"><input type="text" name="email" id="email" class="required email" value="<?php echo set_value('email'); ?>"/></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('email','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                                <tr>

                                    <th><label for="telepon">Telepon</label></th>
                                    <td colspan="3"> <input type="text" name="telepon" id="telepon" class="required" value="<?php echo set_value('telepon'); ?>"/></td>
                                </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('telepon','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                            <tr>

                                <th><label for="HP">HP</label></th>
                                <td colspan="3"> <input type="text" name="hp" id="HP" class="required" value="<?php echo set_value('hp'); ?>"/></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td colspan="3"><?php echo form_error('hp','<div style="color: red">', '</div>'); ?></td>
                            </tr>
                                <tr>

                                    <th><label for="pendidikan">Pendidikan</label></th>
                                    <td colspan="3">
                                        <select name="id_pendidikan" id="pendidikan">
                                            <?php foreach ($pendidikan as $row):?>
                                            <option value="<?php echo $row->id_pendidikan;?>">
                                                <?php echo $row->keterangan;?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </td>
                                </tr>
                            <tr>

                                <th><label for="status_keanggotaan">Status Keanggotaan</label></th>
                                <td colspan="3">
                                    <select name="id_jab" id="status_keanggotaan">
                                        <?php foreach ($jabatan as $row):?>
                                        <option value="<?php echo $row->id_jab;?>">
                                            <?php echo $row->nama_jabatan;?></option>
                                        <?php endforeach;?>
                                    </select>
                                </td>
                            </tr>
                                <tr>
                                    <td colspan="4" align="center"><input type="submit" name="submit"  class="btn" value="Daftar" id="kirim"/></td>

                                </tr>

                                <div class="clear"></div>
                            </table>

                        </form>

                    </div>
                </div>
            </article>
        </div>
        <aside>

            <div class="tweet block">
                Segala yang saya tulis dalam formulir ini adalah benar adanya. Apabila terdapat hal-hal yang tidak benar dikemudian hari, saya bersedia menanggung akibatnya.
            </div>

        </aside>
        <div class="clear"></div>
    </section>
</div>

