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
                    Beasiswa Dua Sarjana Per Desa
                </h1>
                <p class="mb-4">
                Beasiswa dua sarjana per desa merupakan beasiswa yang ditujukan 
                untuk seluruh mahasiswa/i Bojonegoro yang menempuh pendidikan pada PTN 
                pada semua jurusan diluar program 
                beasiswa scientist. 
                </p>
                <a href="/pkl/public/form2", class="btn btn-primary d-none d-lg-block">Daftar</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid py-5" src="<?= base_url("img/ds.svg"); ?>" alt="" />
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
            3. Mahasiswa yang diterima di perguruan tinggi negeri non kedinasan atau perguruan tinggi swasta di Bojonegoro dan bukan cabang
               perguruan tinggi lain diluar Bojonegoro dengan program studi minimal B.
            4. Memiliki Indeks Prestasi Kumulatif (IPK) minimal 2.75 dan/atau juara 1-3 kejuaraan akademik tingkat provinsi, nasional, dan 
               internasional sesuai bidangnya.
            5. Tidak sedang menerima beasiswa dari sumber lain baik dari pemerintah pusat, pemerintah provinsi, pemerintah kabupaten, Badan 
               Usaha Milik Negara/Daerah dan/atau pihak swasta yang dibuktikan dengan surat pernyataan bermaterari serta diketahui oleh perguruan tinggi.
            6. Mahasiswa berasal dari keluarga tidak mampu, dibuktikan dengan Kartu Program Keluarga Harapan (PKH) atau Kartu Indonesia Pintar (KIP), 
               atau Kartu Petani Mandiri (KPM)
            7. Lulusan SMA sederajat dengan kriteria sebagai berikut : 
                a. Nilai Ujian sekolah rangking tertinggi di desa tempat tinggalnya.
                b. Diterima di Perguruan Tinggi Negeri non kedinasan atau Perguruan Tinggi Swasta di Bojonegoro.
        </pre>   
    </div>
</div>

<div class="container py-5">
    <div class="row g-2 justify-content-evenly px-5">
        <h2 class="m-0 mb-3 text-left">
            Persyaratan Khusus
        </h2>
        <pre class="mb-4">
            1. Surat permohonan mendapatkan beasiswa 
            2. Surat keterangan aktif mahasiswa dari PTN/PTS Bojonegoro 
            3. Foto copy Kartu Keluarga (KK) 
            4. Foto copy Kartu Tanda Penduduk (KTP) 
            5. Foto copy Kartu Tanda Mahasiswa (KTM) 
            6. Foto copy Kartu Hasil Studi (KHS) dari semester awal hingga akhir 
            7. Surat pernyataan tidak menerima beasiswa lainnya bermaterai 10.000 (mengetahui perguruan tinggi) 
            8. Bukti Pembayaran UKT (semester sebelumnya) 
            9. Foto copy akreditasi prodi (Minimal B untuk PTS Bojonegoro) 
            10. Foto copy salah satu kartu : 
                a. Program Keluarga Harapan (PKH)
                b. Kartu Indonesia Pintar (KIP)
                c. Kartu Petani Mandiri (KPM)
            11. Foto copy nila ujian sekolah (maba)
            12. Foto copy bukti dterima di perguruan tinggi (maba)
            13. Surat pernyataan bermaterai tidak sedang bekerja sebagai karyawan swasta maupun negeri  
            14. Foto copy buku rekening Bank Jatim 
        </pre>
    </div>
</div>

<?= $this->endSection(); ?>