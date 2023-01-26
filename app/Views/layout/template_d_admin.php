<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beasiswa | <?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url("css/styles.css"); ?>">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top" >
        <div class="container justify-content-between">
            <img class="img-fluid pb-1" style="height: 50px;" src="<?= base_url("img/logo.png"); ?>" alt="" />
            <a class="navbar-brand" href="/">Dinas Pendidikan Kabupaten Bojonegoro</a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent"></div>
            
            <div id="navbarMenu">
                <ul class="nav">
                    <!-- <li class="nav-item"><a href="/sipm/public/login" class="nav-link text-black"><i class="bi bi-bell fs-5"></i></a></li>
                    <li class="nav-item"><a href="/sipm/public/admin/setting" class="nav-link text-black"><i class=" bi bi-gear fs-5"></i></a></li> -->
                    <li class="nav-item dropdown">
                        <a href="/" class="nav-link text-black dropdown-toggle" id=" navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5">&nbsp</i>Zilvi Azus</i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!-- <li><a class="dropdown-item" href="<?= base_url("admin/index"); ?>"><i class="bi bi-layout-text-sidebar-reverse"></i> My
                                    Dashboard</a></li>
                            <li> -->
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="<?= base_url('validate/logout')?>" method="post">
                                    <button type="submit" class="dropdown-item" href="<?= base_url("/pkl/public/login"); ?>"><i class="bi bi-box-arrow-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="pt-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link <?= $title === 'User' ? 'bg-primary text-white' : 'active' ?>" href="<?= base_url("admin"); ?>">
                                <i class="bi bi-journals fs-4"></i> Scientist
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $title === 'Kelas' ? 'bg-primary text-white' : 'active' ?>" href="<?= base_url("duasarjanahasil"); ?>">
                                <i class="bi bi-journals fs-4"></i> Dua Sarjana Per Desa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $title === 'Bab' ? 'bg-primary text-white' : 'active' ?>" href="<?= base_url("tugasakhirhasil"); ?>">
                                <i class="bi bi-journals fs-4"></i> Bantuan Tugas Akhir
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?= $this->renderSection('content'); ?>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>