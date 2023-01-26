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
                    Beasiswa Scientist
                </h1>
                <p class="mb-4">
                Beasiswa  Scientist merupakan beasiswa yang ditujukan 
                untuk seluruh warga Bojonegoro yang menempuh pendidikan 
                pada Perguruan Tinggi Negeri dengan jurusan dan program 
                studi scientist. 
                </p>
                <a href="/pkl/public/form", class="btn btn-primary d-none d-lg-block">Daftar</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end">
                <img class="img-fluid py-5" src="<?= base_url("img/scientist.svg"); ?>" alt="" />
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
            2. Mahasiswa yang sedang menempuh Pendidikan Program Sarjana Strata 1 (S-1) atau Diploma-4 (D-4)
            3. Mahasiswa yang diterima di perguruan tinggi melalui jalur selain jalur mandiri
            4. Memiliki Indeks Prestasi Kumulatif (IPK) minimal 3.00 sejak semester 1 dan/atau juara 1-3 kejuaraan akademik tingkat provinsi, nasional, 
               dan internasional sesuai bidangnya.
            5. Tidak sedang menerima beasiswa dari sumber lain baik dari pemerintah pusat, pemerintah provinsi, pemerintah kabupaten, Badan Usaha 
               Milik Negara/Daerah dan/atau pihak swasta yang dibuktikan dengan surat pernyataan bermaterari serta diketahui oleh perguruan tinggi.
            6. Mahasiswa dari program studi : 
                a. Fakultas Teknik Prodi Teknik Sipil
                b. Fakultas Teknik Prodi Teknik Arsitektur
                c. Fakultas Teknik Prodi Teknik Planoligi
                d. Fakultas Teknik Prodi Teknik Geologi/Geodesi
                e. Fakultas Teknik Prodi Teknik Limbah
                f. Fakultas Teknik Prodi Teknik Lingkungan
                g. Fakultas Teknik Prodi Teknik Mesin
                h. Fakultas Teknik Prodi Teknik Kimia
                i. Fakultas Teknik Prodi Teknik Informatika atau Teknik Komputer
                j. Fakultas Teknik Prodi Teknik Elektro
                k. Fakultas Teknik Prodi Teknik Perminyakan
                l. Fakultas Teknik Prodi Teknik Pengairan
                m. Fakultas Pertanian, Peternakan, dan Perikanan
                n. Fakultas Kedokteran Prodi Kedokteran Umum
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
            2. Surat keterangan aktif mahasiswa dari PTN 
            3. Foto copy Kartu Keluarga (KK) 
            4. Foto copy Kartu Tanda Penduduk (KTP) 
            5. Foto copy Kartu Tanda Mahasiswa (KTM)
            6. Foto copy Kartu Hasil Studi (KHS) dari semester awal hingga akhir 
            7. Surat pernyataan tidak menerima beasiswa lainnya bermaterai 10.000 (mengetahui perguruan tinggi) 
            8. Bukti Pembayaran UKT (semester sebelumnya) 
            9. Bukti jalur masuk kuliah di PTN 
            10. Foto copy buku rekening Bank Jatim
        </pre>
    </div>
</div>

<?= $this->endSection(); ?>