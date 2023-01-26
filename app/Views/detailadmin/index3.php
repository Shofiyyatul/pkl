<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<head>
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
<hr />
<table border=1>
    
        <h2 align="center">DATA PENDAFTARAN BEASISWA</h2>
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
                <td><?php echo $tugasakhir->nama;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Identitas Pribadi (NIK)</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->nik;?></td>  
            </tr>
            <tr>
                <td width="200px"><p>No.KK</p></td>
                <td>:</td>
                <td><?php echo$tugasakhir->kk;?></td>  
            </tr>
            <tr>
                <td width="200px"><p>Tempat Lahir</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->tempatLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Tanggal Lahir</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->tanggalLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Jenis Kelamin</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->gender;?></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Agama</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->agama;?></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Alamat</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->alamat;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Kecamatan</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->kecamatan;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Email</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->email;?></td>
            </tr>
            <tr>
                <td width="200px"><p>No. Handphone</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->noHP;?></td>
            </tr>
            <tr>
                <td width="200px"><p>PasFoto (3x4) *pdf </p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->foto;?></td>
            </tr>
        </table>
        
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARG</b></td>
            </tr>
            <tr>
                <td width="200px"><p>No. KK</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->nokk;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Nama Kepala Keluarga</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->kepalakel;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>UNIVERSITAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Universitas</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->universitas;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Jenis Perguruan Tinggi</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->jenispt;?></td>
            </tr>
            <tr>
            <td width="200px"><p>NIM</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->nim;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Tahun Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->tahun;?></td>
            </tr>
            <td width="200px"><p>Jalur Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->jalur;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Fakultas</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->fakultas;?></td>
            </tr>
            <td width="200px"><p>Program Studi</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->prodi;?></td>
            </tr>
            <td width="200px"><p>Semester</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->semester;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BERKAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Permohonan Mendapatkan Beasiswa </p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->supermohon;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Aktif dari PTN / PTS Bojonegoro</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->suketaktifk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Sedang Menyusun Tugas Akhir</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->suketta;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTM</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->ktm;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KPM</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->kpm;?></td>
            </tr>
            <tr>
                <td width="200px"><p> SKTM</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->sktm;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Keluarga </p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->kk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTP </p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->ktp;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Pernyataan Tidak Menerima Beasiswa</p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->supertidakbeasiswa;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Buku Rekening Bank Jatim </p></td>
                <td>:</td>
                <td><?php echo $tugasakhir->rekening;?></td>
            </tr>
        </table>
</table>

</body>
<?= $this->endSection(); ?>
