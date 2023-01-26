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
                    Beasiswa Bantuan Tugas Akhir
                </h1>
                <p class="mb-4">
                Beasiswa  bantuan merupakan beasiswa yang ditujukan 
                untuk seluruh mahasiswa/i Bojonegoro yang menempuh sedang menyelesaikan 
                tugas akhir.
                </p>
                <a href="/pkl/public/form3", class="btn btn-primary d-none d-lg-block">Daftar</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid py-5" src="<?= base_url("img/ta.svg"); ?>" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-2 justify-content-evenly px-5">
        <h2 class="m-0 mb-3 text-left">
            Persyaratan Umum
        </h2>
        <pre class="mb-4">
            1. Mahasiswa yang berasal dari Kabupaten Bojonegoro 
            2. Mahasiswa yang sedang menempuh Pendidikan Program Sarjana Strata 1 (S-1) atau Diploma 4 (D-4)
            3. Mahasiswa yang telah menempuh pendidikan pada perguruan tinggi minimal semester 5 (lima) bagi Strata 1.
            4. Memiliki Kartu Petani Mandiri (KPM)
            5. Bagian dari keluarga miskin dibuktikan dengan Surat Keterangan Tidak Mampu (SKTM).
        </pre>   
    </div>
</div>

<div class="container py-5">
    <div class="row g-2 justify-content-evenly px-5">
        <h2 class="m-0 mb-3 text-left">
            Persyaratan Khusus
        </h2>
        <pre class="mb-4">
            1. Surat permohonan mendapatkan bantuan sosial tugas akhir kepada Bupati Bojonegoro 
            2. Surat keterangan aktif mahasiswa dari perguruan tinggi. 
            3. Surat keterangan sedang menyusun tugas akhir. 
            4. Foto copy Kartu Keluarga (KK) 
            5. Foto copy Kartu Tanda Penduduk (KTP) 
            6. Foto copy Kartu Tanda Mahasiswa (KTM) 
            7. Surat keterangan tidak mampu (SKTM) 
            8. Foto copy Kartu Petani Mandiri (KPM)
            9. Foto copy buku rekening Bank Jatim
        </pre>
    </div>
</div>

<?= $this->endSection(); ?>