<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>

<head>
    <style type="text/css">
        h1 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-style: italic; */
            font-size: 50px;
            color: black;
        }

        h2 {
            font-size: 25px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 20px;
            font-family: sans-serif;
            padding-left: 10px;
        }

        p {
            font-size: 15px;
            font-family: sans-serif;
            padding-left: 10px;
        }

        jk {
            font-size: 15px;
            font-family: sans-serif;
            padding-left: 10px;
        }

        nb {
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
    <form action="<?= base_url('scientist/detail_proses') ?>" method="post">
        <h2 align="center">DATA PENDAFTARAN BEASISWA</h2>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td colspan="3" width="1100px" align="center">
                    <h2><b>BEASISWA SCIENTIST 2023</b></h2>
                </td>
                           
            </tr>
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BIODATA</b></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Nama Lengkap</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->nama; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Identitas Pribadi (NIK)</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->nik; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Tempat Lahir</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->tempatLahir; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Alamat</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->alamat; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>No. Handphone</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->noHP; ?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARG</b></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>No. KK</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->nokk; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Nama Kepala Keluarga</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->kepalakel; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Nama Ibu</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->ibu; ?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>UNIVERSITAS</b></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Nama Universitas</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->universitas; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>NIM</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->nim; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Jalur Masuk Kuliah</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->jalur; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p>Fakultas</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->fakultas; ?></td>
            </tr>
            <td width="200px">
                <p>Program Studi</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->prodi; ?></td>
            </tr>
            <td width="200px">
                <p>Semester</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->semester; ?></td>
            </tr>
            <td width="200px">
                <p>IPS Semester 1</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips1; ?></td>
            </tr>
            </tr>
            <td width="200px">
                <p>IPS Semester 2</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips2; ?></td>
            </tr>
            </tr>
            <td width="200px">
                <p>IPS Semester 3</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips3 ?></td>
            </tr>
            </tr>
            <td width="200px">
                <p>IPS Semester 4</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips4; ?></td>
            </tr>
            <td width="200px">
                <p>IPS Semester 5</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips5; ?></td>
            </tr>
            <td width="200px">
                <p>IPS Semester 6</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips6; ?></td>
            </tr>
            </tr>
            <td width="200px">
                <p>IPS Semester 7</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips7; ?></td>
            </tr>
            </tr>
            <td width="200px">
                <p>IPS Semester 8</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ips8; ?></td>
            </tr>
            <td width="200px">
                <p>UKT Sebelumnya</p>
            </td>
            <td>:</td>
            <td><?php echo $scientist->ukt; ?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BERKAS</b></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Surat Permohonan Mendapatkan Beasiswa </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->supermohon; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Surat Keterangan Aktif dari PTN</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->suketaktif; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Kartu Keluarga </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->kk; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> KTP </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->ktp; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> KTM</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->ktm; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> KHS </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->khs; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Surat Pernyataan Tidak Menerima Beasiswa</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->supertidakbeasiswa; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Bukti Pembayaran UKT</p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->buktiukt; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Bukti Jalur Masuk Kuliah </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->buktijalur; ?></td>
            </tr>
            <tr>
                <td width="200px">
                    <p> Buku Rekening Bank Jatim </p>
                </td>
                <td>:</td>
                <td><?php echo $scientist->rekening; ?></td>
            </tr>
        </table>
        <form action="<?= base_url('form/update') ?>" method="post">
            <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
                <tr>
                    <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>STATUS PENERIMAAN</b></td>
                </tr>
                <tr>
                    <td width="200px">
                        <p>Kelengkapan Berkas</p>
                    </td>
                    <td>:</td>
                    <td><select required name="kelengkapanku" value="<?php echo $scientist->kelengkapan; ?>">
                            <option selected disabled align="center"> --- Lengkap/Tidak ---</option>
                            <option>Lengkap</option>
                            <option>Tidak Lengkap</option>
                        </select></td>
                </tr>
                <tr>
                    <td width="200px">
                        <p>Catatan</p>
                    </td>
                    <td>:</td>
                    <td><textarea cols="39" rows="3" placeholder="Berikan catatan kekurangan/kesalahan" name="alamatku" value="<?php echo $scientist->catatan; ?>"></textarea></td>
                </tr>
                <tr>
                    <td width="200px">
                        <p>Status</p>
                    </td>
                    <td>:</td>
                    <td><select required name="kelengkapanku" value="<?php echo $scientist->kelengkapan; ?>">
                            <option selected disabled align="center"> --- Lolos/Tidak ---</option>
                            <option>Lolos</option>
                            <option>Tidak Lolos</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" value="ubah"></td>
                </tr>
            </table>
        </form>
</body>
<?= $this->endSection(); ?>