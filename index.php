<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Member JKT48</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap core CSS -->
    <link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid bg-danger" style="padding: 10px;">
            <a class="navbar-brand text-white" href="#" style="font-size: 25px; font-weight:500;">
                Daftar Member
            </a>
        </div>
    </nav>

    <!-- carousel -->
    <div class="container-fluid py-5 mb-5 hero-header" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(Images/po.png);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary"></h4>
                    <h1 class="mb-5 display-3 text-danger" style="font-weight: 500;">JKT48 Official <br> Web</h1>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="Images/banner.home.jkt48v.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                            </div>
                            <div class="carousel-item rounded">
                                <img src="Images/banner.home.flowerfulconcert.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="d-flex">
                    <a href="https://www.facebook.com/official.JKT48?locale=id_ID">
                        <div class="btn btn-danger">facebook</div>
                    </a>
                    <a href="https://www.tiktok.com/@jkt48.official?_t=8iab4vfvUA6&_r=1" style="margin-left: 15px;">
                        <div class="btn btn-danger">tiktok</div>
                    </a>
                    <a href="https://www.instagram.com/jkt48/" style="margin-left: 15px;">
                        <div class="btn btn-danger">instagram</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="container-fluid banner bg-pink my-5" style="background-color: #ffe7e7;">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-danger">About Us!</h1>
                        <p class="fw-normal display-3 text-dark mb-4">in Our Idol</p>
                        <p class="mb-4 text-dark">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                        <a href="https://jkt48.com/" target="_blank" class="web banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">web</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="Images/about_us-removebg-preview.png" class="img-fluid w-70 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-danger rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 40px; color: white;">JKT48</h1>
                            <!-- <div class="d-flex flex-column">
                                <span class="h2 mb-0">50$</span>
                                <span class="h4 text-muted mb-0">kg</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- daftar member -->
    <div>
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4" style="font-weight: 600;">Daftar Member</h1>
                <p>Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
            </div>
            <div class="row g-4">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM table_member");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded" style="background-color: #ffe7e7;">
                            <div class="row align-items-center">
                                <input type="hidden" name="id_produk" value="<?php echo $row['id_member'] ?>">
                                <div class="col-6">
                                    <img src="Admin/assets/img/<?= $row['gambar'] ?>" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="detail.php" class="h5"><?= $row['nama_member'] ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>