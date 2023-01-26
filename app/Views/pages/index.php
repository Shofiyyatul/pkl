<?= $this->extend('layout/template_guest'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h4 class="mb-3 pt-5">
                    Halo! Selamat Datang
                </h4>
                <h1 class="display-3 fw-bold mb-3">
                    Beasiswa Bojonegoro
                </h1>
                <p class="mb-4">
                Kabar Gembira untuk para Mahasiswa Bojonegoro, Pemerintah 
                Kabupaten Bojonegoro tetap berkomitmen untuk memajukan SDM 
                asal Bojonegoro semakin unggul, Pendaftaran Beasiswa Bojonegoro 
                untuk para Sarjana Kembali dibuka.
                </p>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid py-5" src="<?= base_url("img/buku.png"); ?>" />
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-2 justify-content-evenly px-5">
        <h3 class="m-0 mb-3 text-center">
            Berita dan Pengumuman
        </h3>
        <h5 class="mb-4 text-center">
            Lihat berita dan pengumuman terbaru dari Beasiswa Bojonegoro.
        </h5>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/ds.svg"); ?>" alt="" />
                <div class="container-fluid">
                    <div class="container">
                        <a href="/pkl/public/homeduasarjana" class="btn btn-secondary mt-3 mb-4"><i></i>Beasiswa Dua Sarjana Per Desa</a>
                        <?= $this->renderSection('content'); ?>
                    </div>
                </div>
                <!-- <h5 class="py-2">
                    Beasiswa Dua Sarjana Per Desa
                </h5> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/scientist.svg"); ?>" alt="" />
                <div class="container-fluid">
                    <div class="container">
                        <a href="/pkl/public/homescientist" class="btn btn-secondary mt-3 mb-4"><i></i>Beasiswa Scientist</a>
                        <?= $this->renderSection('content'); ?>
                    </div>
         </div>
                <!-- <h5 class="py-2">
                    Beasiswa Scientist
                </h5> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-4 m-0">
            <div class="px-2 py-4 h-100 text-center">
                <img class="img-fluid pb-1" style="height: 200px;" src="<?= base_url("img/ta.svg"); ?>" alt="" />
                <div class="container-fluid">
                    <div class="container">
                        <a href="/pkl/public/hometugasakhir" class="btn btn-secondary mt-3 mb-4"><i></i>Beasiswa Bantuan Tugas Akhir </a>
                        <?= $this->renderSection('content'); ?>
                    </div>
        </div>
                <!-- <h5 class="py-2">
                    Beasiswa Bantuan Tugas Akhir
                </h5> -->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-light">
    <div class="container p-5">
        <h3 class="mb-2 text-center">
            Jadwal
        </h3>
        <h5 class="mb-4 text-center">
        Tanggal penting jadwal pendaftaran dan penutupan Pengajuan Beasiswa Bojonegoro 2023
        </h5>
        <table bgcolor="#D6D2C4" align="center">
                        <tr>
                            <td rowspan="2" width="350px" valign="top" align="middle">
                                <b>Nama Beasiswa</b> 
                            </td>    
                            <td colspan="2" width="350px" valign="top" align="center">
                                <b>Tahap 1</b> 
                            </td>
                            <td colspan="2" width="350px" valign="top" align="center">
                                <b>Tahap 2</b> 
                            </td>
                        </tr>
                        <tr>
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <b>Tanggal Dibuka</b> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <b>Tanggal Ditutup</b> 
                            </td>
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <b>Tanggal Dibuka</b> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <b>Tanggal Ditutup</b> 
                            </td>
                        </tr>
                        <tr bgcolor=white> 
                            <td  width="350px" valign="top" align="center">
                                <p>Beasiswa Scientist</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Januari 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Maret 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>gatau kapan</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Agustus 2023</p> 
                            </td>
                        </tr>
                        <tr bgcolor=white>
                            <td  width="350px" valign="top" align="center">
                                <p>Beasiswa Dua Sarjana Per Desa</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Januari 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Maret 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>gatau kapan</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Agustus 2023</p> 
                            </td>
                        </tr>
                        <tr bgcolor=white>
                            <td  width="350px" valign="top" align="center">
                                <p>Beasiswa Bantuan Tugas Akhir</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Januari 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Maret 2023</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>gatau kapan</p> 
                            </td>
                            <td  width="350px" valign="top" align="center">
                                <p>1 Agustus 2023</p> 
                            </td>
                        </tr>
        </table>
    </div>
</div>
<div>
    <h3 class="mb-4 text-center">
            Kontak
    </h3>
    
    <table align="center">
        <tr>
            <td align="center"><img class="img-fluid pb-1" style="height: 30px;" src="<?= base_url("img/lokasi.png"); ?>" alt="" /></td>
            <td align="center"><img class="img-fluid pb-1" style="height: 30px;" src="<?= base_url("img/telpon.png"); ?>" alt="" /></td>
        </tr>
        <tr>
            <td align="center" width="300px">Jl. Patimura No. 9 Bojonegoro</td>
            <td align="center" width="300px">085230829008</td>
        </tr>
    </table>
</div>

<footer class="bg-light py-3 mt-5">
    <div class="container text-center">
        <p class="font-italic text-muted mb-0">&copy; Copyrights BeasiswaBojonegoro.com All rights reserved.</p>
    </div>
</footer>

<?= $this->endSection(); ?>