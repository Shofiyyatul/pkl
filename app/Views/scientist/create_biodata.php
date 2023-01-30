<?= $this->extend('layout/template_d_user'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post_test_2</title>
    <style type = "text/css">
        h1{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-style: italic; */
            font-size: 50px;
            color: black;
        }
        h2{
            font-size: 25px;
            font-family:  sans-serif; 
        }
        h3{
            font-size: 20px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        p{
            font-size: 15px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        jk{
            font-size: 15px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        nb{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=text] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=date] {
            padding-bottom: 5px;
            padding-top: 5px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=number] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=email] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=date] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=submit] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 100px;
            height: 50px;
            background-color: #FFFFF;
            font-family: sans-serif;
        }
        input[type=reset] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 100px;
            height: 50px;
            background-color: #FFFFF;
            font-family: sans-serif;
        }
        input[type=file] {
            font-size: 15px;
            font-family: sans-serif;
        }
        select {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        textarea {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        body {
            background-color: #FFFFF;
        }  
    </style>
</head>

<body>
    <form action="<?= base_url('form/save')?>" method="post">
        <br>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td colspan="3" width="1100px" align="center"><h2><b>BEASISWA SCIENTIST 2023</b></h2></td>
            </tr>
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BIODATA</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Lengkap</p></td>
                <td>:</td>
                <td><input type="text" autofocus placeholder="Gunakan kapital hanya untuk huruf pertama nama " required name="namaku"></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Identitas Pribadi (NIK)</p></td>
                <td>:</td>
                <td><input type="text" placeholder="NIK" required name="nikku"></td>  
            </tr>
            <tr>
                <td width="200px"><p>Tempat Lahir</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Tulis hanya nama kabupaten" required name="tlku"></td>
            </tr>
            <tr>
                <td width="200px"><p>Alamat</p></td>
                <td>:</td>
                <td><textarea cols="39" rows="3" placeholder="Tuliskan alamat lengkap "
                required name="alamatku"></textarea></td>
            </tr>
            <tr>
                <td width="200px"><p>No. Handphone</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 081234567890" required name="hpku"></td>
            </tr>
            <tr></tr>
        </table>
            
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARGA</b></td>
            </tr>      
            <tr>
                <td width="200px"><p>No.KK</p></td>
                <td>:</td>
                <td><input type="text" placeholder="KK" required name="nokkku"></td>  
            </tr>
            <tr>
                <td width="200px"><p>Nama Kepala Keluarga</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Nama Kepala Keluarga" required name="kepalakelku"></td>  
            </tr>
            <tr>
                <td width="200px"><p>Nama Ibu</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Nama Ibu" required name="ibuku"></td>  
            </tr>
        </table>

        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>UNIVERSITAS</b></td>
            </tr>    
            <tr>
                <td width="200px"><p>Nama Universitas</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Nama Universitas" required name ="univku"></td>
            </tr>
            <tr>
            <td width="200px"><p>NIM</p></td>
                <td>:</td>
                <td><input type="text" placeholder="NIM" required name ="nimku"></td>
            </tr>
            <tr>
                <td width="200px"><p>Jalur Masuk Kuliah</p></td>
                <td>:</td>
                <td><input type="text" placeholder="SBMPTN / SNMPTN / SPAN-PTKIN / UM-PTKIN / SNMPN / SBMPN" required name ="jalurku"></td>
            </tr>
            <tr>
            <td width="200px"><p>Fakultas</p></td>
                <td>:</td>
                <td><select required name="fkku">
                    <option selected disabled align="center"> --- Pilih Fakultas ---</option>
                    <option>Teknik</option>
                    <option>Kedokteran</option>
                    <option>Pertanian / Peternakan / Perikanan</option>
                </select></td>
            </tr>
            <tr>
            <td width="200px"><p>Program Studi</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Prodi" required name ="prodiku"></td>
            </tr>
            <td width="200px"><p>Semester</p></td>
                <td>:</td>
                <td><input type="number" placeholder="Semester" required name ="smsku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 1</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips1ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 2</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips2ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 3</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips3ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 4</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips4ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 5</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips5ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 6</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips6ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 7</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips7ku"></td>
            </tr>
            <tr>
            <td width="200px"><p>IPS Semester 8</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 3.03" name ="ips8ku"></td>
            </tr>
           <tr>
            <td width="200px"><p>UKT Sebelumnya</p></td>
                <td>:</td>
                <td><input type="text" placeholder="contoh : 5.000.000" required name ="uktku"></td>
            </tr>
            <tr></tr>
        </table>

        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BERKAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Permohonan Mendapatkan Beasiswa </p></td>
                <td>:</td>
                <td><input type="file" required name="supermohonku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Aktif dari PTN </p></td>
                <td>:</td>
                <td><input type="file" required name="suketaktifku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Keluarga (KK) </p></td>
                <td>:</td>
                <td><input type="file" required name="kkku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Tanda Penduduk (KTP) </p></td>
                <td>:</td>
                <td><input type="file" required name="ktpku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Tanda Mahasiswa (KTM) </p></td>
                <td>:</td>
                <td><input type="file" required name="ktmku"></td>
            </tr>
            <tr>
                <td width="200px"><p> KHS (semester awal sampai saat ini) </p></td>
                <td>:</td>
                <td><input type="file" required name="khsku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Pernyataan Tidak Menerima Beasiswa </p></td>
                <td>:</td>
                <td><input type="file" required name="supertidakbeasiswaku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti Pembayaran UKT </p></td>
                <td>:</td>
                <td><input type="file" required name="buktiuktku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti Jalur Masuk Kuliah </p></td>
                <td>:</td>
                <td><input type="file" required name="buktijalurku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Buku Rekening Bank Jatim </p></td>
                <td>:</td>
                <td><input type="file" required name="rekeningku"></td>
            </tr>
            <tr>
                <td width="100px" align="right" colspan="3">
                    <input type="submit">
                </td>
            </tr> 
        </table>
    </form>
</body>
</html>

<?= $this->endSection(); ?>