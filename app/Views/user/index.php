<?= $this->extend('layout/template_d_user'); ?>

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
    <?php

    foreach ($scientist as $row) {
        ?> 
        <h2 align="center">DATA PENDAFTARAN BEASISWA</h2>
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
                <td><?php echo $row->nama;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Identitas Pribadi (NIK)</p></td>
                <td>:</td>
                <td><?php echo $row->nik;?></td>  
            </tr>
            <tr>
                <td width="200px"><p>Tempat Lahir</p></td>
                <td>:</td>
                <td><?php echo $row->tempatLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Tanggal Lahir</p></td>
                <td>:</td>
                <td><?php echo $row->tanggalLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Jenis Kelamin</p></td>
                <td>:</td>
                <td><?php echo $row->gender;?></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Agama</p></td>
                <td>:</td>
                <td><?php echo $row->agama;?></td>
                
            </tr>
            <tr>
                <td width="200px"><p>Alamat</p></td>
                <td>:</td>
                <td><?php echo $row->alamat;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Email</p></td>
                <td>:</td>
                <td><?php echo $row->email;?></td>
            </tr>
            <tr>
                <td width="200px"><p>No. Handphone</p></td>
                <td>:</td>
                <td><?php echo $row->noHP;?></td>
            </tr>
            <tr>
                <td width="200px"><p>PasFoto (3x4) *pdf </p></td>
                <td>:</td>
                <td><?php echo $row->foto;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARG</b></td>
            </tr>
            <tr>
                <td width="200px"><p>No. KK</p></td>
                <td>:</td>
                <td><?php echo $row->nokk;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Nama Kepala Keluarga</p></td>
                <td>:</td>
                <td><?php echo $row->kepalakel;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Nama Ibu</p></td>
                <td>:</td>
                <td><?php echo $row->ibu;?></td>
            </tr>
        </table>

        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>UNIVERSITAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Universitas</p></td>
                <td>:</td>
                <td><?php echo $row->universitas;?></td>
            </tr>
            <tr>
            <td width="200px"><p>NIM</p></td>
                <td>:</td>
                <td><?php echo $row->nim;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Tahun Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $row->tahun;?></td>
            </tr>
            <td width="200px"><p>Jalur Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $row->jalur;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Fakultas</p></td>
                <td>:</td>
                <td><?php echo $row->fakultas;?></td>
            </tr>
            <td width="200px"><p>Program Studi</p></td>
                <td>:</td>
                <td><?php echo $row->prodi;?></td>
            </tr>
            <td width="200px"><p>Semester</p></td>
                <td>:</td>
                <td><?php echo $row->semester;?></td>
            </tr>
            <td width="200px"><p>IPK</p></td>
                <td>:</td>
                <td><?php echo $row->ipk;?></td>
            </tr>
            <td width="200px"><p>UKT Sebelumnya</p></td>
                <td>:</td>
                <td><?php echo $row->ukt;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BERKAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Permohonan Mendapatkan Beasiswa </p></td>
                <td>:</td>
                <td><?php echo $row->supermohon;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Aktif dari PTN</p></td>
                <td>:</td>
                <td><?php echo $row->suketaktifk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Keluarga </p></td>
                <td>:</td>
                <td><?php echo $row->kk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTP </p></td>
                <td>:</td>
                <td><?php echo $row->ktp;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTM</p></td>
                <td>:</td>
                <td><?php echo $row->ktm;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KHS </p></td>
                <td>:</td>
                <td><?php echo $row->khs;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Pernyataan Tidak Menerima Beasiswa</p></td>
                <td>:</td>
                <td><?php echo $row->supertidakbeasiswa;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti Pembayaran UKT</p></td>
                <td>:</td>
                <td><?php echo $row->buktiukt;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti Jalur Masuk Kuliah </p></td>
                <td>:</td>
                <td><?php echo $row->buktijalur;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Buku Rekening Bank Jatim </p></td>
                <td>:</td>
                <td><?php echo $row->rekening;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>STATUS PENERIMAAN</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Kelengkapan Berkas</p></td>
                <td>:</td>
                <td><?php echo $row->kelengkapan;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Catatan</p></td>
                <td>:</td>
                <td><?php echo $row->catatan;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Status</p></td>
                <td>:</td>
                <td><?php echo $row->status;?></td>
            </tr>
        </table>

        <?php
     }
    
        ?>
</table>

</body>
<?= $this->endSection(); ?>
