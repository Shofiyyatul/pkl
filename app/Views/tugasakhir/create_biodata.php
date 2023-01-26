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
    <form action="<?= base_url('form3/save')?>" method="post">
        <br>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td colspan="3" width="1100px" align="center"><h2><b>BEASISWA BANTUAN TUGAS AKHIR 2023</b></h2></td>
            </tr>
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BIODATA</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Lengkap</p></td>
                <td>:</td>
                <td><input type="text" autofocus placeholder="Nama Lengkap" required name="namaku"></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Identitas Pribadi (NIK)</p></td>
                <td>:</td>
                <td><input type="text" placeholder="NIK" required name="nikku"></td>  
            </tr>
            <tr>
                <td width="200px"><p>Tempat Lahir</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Tempat Lahir" required name="tlku"></td>
                <!-- <td width="200px"><p>Provinsi</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Provinsi" required></td> -->
            </tr>
            <tr>
                <td width="200px"><p>Tanggal Lahir</p></td>
                <td>:</td>
                <td><input type="date" placeholder="Tanggal Lahir" required name="tglku"></td>
                <!-- <td width="200px"><p>Kabupaten/Kota</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Kabupaten/Kota" required></td> -->
            </tr>
            <tr>
                <td width="200px"><p>Jenis Kelamin</p></td>
                <td>:</td>
                <td><select required name="jkku">
                    <option selected disabled align="center"> --- Pilih Gender ---</option>
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select></td>
            </tr>
            <tr>
                <td width="200px"><p>Agama</p></td>
                <td>:</td>
                <td><select required name="agamaku">
                    <option selected disabled align="center"> --- Pilih Agama ---</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Khonghucu</option>
                </select></td>
            </tr>
            <tr>
                <td width="200px"><p>Alamat</p></td>
                <td>:</td>
                <td><textarea cols="39" rows="3" placeholder="Alamat" required name="alamatku"></textarea></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Kecamatan</p>
                </td>
                <td>:</td>
                <td><select required name="kecamatanku">
                        <option selected disabled align="center"> --- Pilih Kecamatan ---</option>
                        <option>Balen</option>
                        <option>Baureno</option>
                        <option>Bojonegoro</option>
                        <option>Bubulan</option>
                        <option>Dander</option>
                        <option>Gayam</option>
                        <option>Gondang</option>
                        <option>Kalitidu</option>
                        <option>Kapas</option>
                        <option>Kasiman</option>
                        <option>Kadewan</option>
                        <option>Kedungadem</option>
                        <option>Kepohbaru</option>
                        <option>Margomulyo</option>
                        <option>Malo</option>
                        <option>Ngambon</option>
                        <option>Ngasem</option>
                        <option>Ngraho</option>
                        <option>Padangan</option>
                        <option>Purwosari</option>
                        <option>Sekar</option>
                        <option>Sugihwaras</option>
                        <option>Sukosewu</option>
                        <option>Sumberejo</option>
                        <option>Tambakrejo</option>
                        <option>Temayang</option>
                        <option>Trucuk</option>
                    </select></td>
            </tr>
            <tr>
                <td width="200px"><p>Email</p></td>
                <td>:</td>
                <td><input type="email" placeholder="Email" required name="emailku"></td>
            </tr>
            <tr>
                <td width="200px"><p>No. Handphone</p></td>
                <td>:</td>
                <td><input type="text" placeholder="No. Handphone" required name="hpku"></td>
            </tr>
            <tr>
                <td width="200px"><p>Pas Foto (3x4)  </p></td>
                <td>:</td>
                <td><input type="file" required name="fotoku"></td>
            </tr>
            <tr></tr>
            <!-- <tr>
                <td colspan="3" align="right" ><input type="submit" value="SIMPAN">&nbsp&nbsp<input type="reset" value="RESET" ></td>
            </tr> -->
        </table>

        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARGA</b></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>No.KK</p>
                </td>
                <td>:</td>
                <td><input type="text" placeholder="KK" required name="nokkku"></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Nama Kepala Keluarga</p>
                </td>
                <td>:</td>
                <td><input type="text" placeholder="Nama Kepala Keluarga" required name="kepalakel"></td>
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
                <td width="200px">
                    <p>Jenis Perguruan Tinggi</p>
                </td>
                <td>:</td>
                <td><select required name="jenisptku">
                        <option selected disabled align="center"> --- Pilih Jenis Perguruan Tinggi ---</option>
                        <option>Perguruan Tinggi Negeri</option>
                        <option>Perguruan Tinggi Swasta</option>
                    </select></td>
            </tr>
            <tr>
            <td width="200px"><p>NIM</p></td>
                <td>:</td>
                <td><input type="text" placeholder="NIM" required name ="nimku"></td>
            <tr>
            <td width="200px"><p>Tahun Masuk Kuliah</p></td>
                <td>:</td>
                <td><input type="number" placeholder="Tahun Masuk Kuliah" required name ="thnku"></td>
            </tr>
            <td width="200px"><p>Jalur Masuk Kuliah</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Jalur Masuk Kuliah" required name ="jalurku"></td>
            </tr>
            <tr>
            <td width="200px"><p>Fakultas</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Fakultas" required name ="fkku"></td>
            </tr>
            <td width="200px"><p>Program Studi</p></td>
                <td>:</td>
                <td><input type="text" placeholder="Prodi" required name ="prodiku"></td>
            </tr>
            <td width="200px"><p>Semester</p></td>
                <td>:</td>
                <td><input type="number" placeholder="Semester" required name ="smsku"></td>
            </tr>
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
                <td width="200px"><p> Surat Keterangan Aktif dari PTN / PTS Bojonegoro </p></td>
                <td>:</td>
                <td><input type="file" required name="suketaktifku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan sedang menyusun tugas akhir </p></td>
                <td>:</td>
                <td><input type="file" required name="sukettaku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Tanda Mahasiswa (KTM) </p></td>
                <td>:</td>
                <td><input type="file" required name="ktmku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Petani Mandiri (KPM) </p></td>
                <td>:</td>
                <td><input type="file" required name="kpmku"></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Tidak Mampu (SKTM) </p></td>
                <td>:</td>
                <td><input type="file" required name="sktmku"></td>
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
                <td width="200px"><p> Surat Pernyataan Tidak Menerima Beasiswa </p></td>
                <td>:</td>
                <td><input type="file" required name="supertidakbeasiswaku"></td>
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