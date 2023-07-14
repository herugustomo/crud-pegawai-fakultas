<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Home</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">

    <nav class="navbar navbar-expand-lg" style="background-color: #3f51b5">
        <div class="container-fluid">
            <a class="navbar-brand text-white h1" href="../index.php">FakTek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Info Pegawai</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="pengajar.php">Staff Pengajar</a></li>
                        <li><a class="dropdown-item" href="administrasi.php">Staff Administrasi</a></li>
                        <li><a class="dropdown-item" href="teknisi.php">Staff Teknisi</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    
    <div class="text-center bg-image rounded-3" style="background-image: url(''); height: 230px;">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="d-flex justify-content-center align-items-center h-100 p-5">
        <div class="text-white">
            <h1 class="mb-3">Fakultas Teknik</h1>
            <h4 class="mb-3">Info Pegawai</h4>
        </div>
        </div>
    </div>
    </div>

    <div class="container mb-5">
        <div class="row text-center">
            <div class="col border border-light-subtle">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quis nesciunt asperiores, temporibus dolor veritatis eligendi optio porro obcaecati quas in possimus sequi distinctio, adipisci necessitatibus cumque harum reiciendis enim at inventore, alias praesentium autem quam itaque! Magnam quos nostrum esse architecto, eum atque aut? Consequatur maxime esse reprehenderit, quod dolore magnam beatae inventore officia. Consectetur blanditiis expedita deserunt earum provident ab asperiores! Excepturi, molestiae consectetur, facilis, voluptates sequi quo magnam explicabo at nobis consequuntur qui. Obcaecati temporibus quae explicabo tenetur nemo? Eius natus hic, sequi odit, eligendi consequuntur amet et excepturi perspiciatis cum tempore. Labore doloribus quisquam debitis non!</p>
            </div>
            <div class="col border border-light-subtle">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, aliquam! Eaque eligendi quisquam hic, adipisci sit ut in, quia voluptatem non quo incidunt labore distinctio itaque fuga. Modi architecto asperiores aliquid officia ipsum eligendi possimus non praesentium quam saepe. Totam dicta recusandae fuga! Sed, earum nihil suscipit, ducimus eligendi ullam modi facere, nemo quam facilis amet optio perspiciatis qui ratione cumque dolorum. Impedit nisi perferendis ad odit odio mollitia? Minima adipisci dolorem velit eligendi possimus vitae architecto nesciunt magni natus.</p>
            </div>
        </div>
    </div>

    <footer class="text-center text-white" style="background-color: #3f51b5">
        <div class="container">
            <section class="mt-3">
                <div class="row text-center d-flex justify-content-center pt-5">
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">About us</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Products</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Awards</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Help</a>
                        </h6>
                    </div>
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white">Contact</a>
                        </h6>
                    </div>
                </div>
            </section>
        <hr class="my-5" />
        <section class="mb-3">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                    distinctio earum repellat quaerat voluptatibus placeat nam,
                    commodi optio pariatur est quia magnam eum harum corrupti
                    dicta, aliquam sequi voluptate quas.
                    </p>
                </div>
            </div>
        </section>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2023 Copyright: Heru Gustomo</div>
    </footer>

</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>