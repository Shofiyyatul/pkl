<?= $this->extend('layout/template_guest'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="my-4 row row-cols-1 g-2 row-cols-2 justify-content-center">
        <div class="col">
            <div class="shadow-sm rounded overflow-hidden p-4">
                <div class="pb-4 text-center fw-bold fs-3">Buat Akun</div>
                <?php
                if (session()->has('notFound')) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= session('notFound'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
                ?>
                <form action="<?= base_url('register/save')?>" method="post">
                    <div class="mb-4">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label fw-bold">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="user@gmail.com" >
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                    </div>
                    <div class="mb-4">
                        <label for="konfirmasipassword" class="form-label fw-bold">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="konfirmasipassword" name="konfirmasipassword" placeholder="Ulangi Password" >
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 g-2 row-cols-2 justify-content-center">
        <div class="col">
            <div class="shadow-sm rounded overflow-hidden p-4 text-center">
                <span>Sudah punya akun? <a href="<?= base_url("login"); ?>" class="text-decoration-none fw-bold">Login</a>.</span>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>