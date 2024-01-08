<?php

require "../dbconnect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    E-Commerce
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                  </path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="./sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="container mt-4">
            <h2>Daftar Member</h2>
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProductModal">Tambah
              Member</button>

            <!-- Tabel Produk -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Tanggal Lahir</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php
                $query = mysqli_query($conn, "SELECT * FROM table_member");
                while ($row = mysqli_fetch_array($query)) {
                ?>


                  <tr class="">

                    <th scope="row"><?php echo $i++; ?></th>
                    <td><img src="./assets/img/<?php echo $row['gambar'] ?>" alt="" width="100px"></td>
                    <td><?php echo $row['nama_member'] ?></td>
                    <td><?php echo $row['tanggal_member'] ?></td>
                    <td>
                      <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $row ['id_member'] ?>">Edit</a>
                      <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id_member'] ?>">Hapus</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
                <!-- Lorem hjqvfawjsbshjf -->
              </tbody>
            </table>
          </div>

          <!-- <div class="container-fluid py-4">
            <div class="row">
              <div class="col-12">
                <div class="container mt-4">
                  <h2>Penjualan</h2>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">username</h5>
                      <table>
                        <tr>
                          <td>Baju</td>
                          <td>:Fly T-shirt</td>
                        </tr>
                        <tr>
                          <td>ukr</td>
                          <td>:xl</td>
                        </tr>
                        <tr>
                          <td>jumlah</td>
                          <td>:1</td>
                        </tr>
                        <tr>
                          <td>Alamat:</td>
                          <td> Lorem ipsum dolor</td>
                        </tr>
                      </table>
                      <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editProductModal">Konfirmasi</button>
                      <button class="btn btn-danger btn-sm">Dibatalkan</button>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Modal Tambah Produk -->
            <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Form tambah produk -->
                    <form method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="productGambar">Gambar:</label>
                        <input type="file" class="form-control" id="productGambar" name="productGambar" required>
                      </div>
                      <div class="form-group">
                        <label for="productName">Nama Member:</label>
                        <input type="text" class="form-control" id="productName" name="productName" required>
                      </div>
                      <div class="form-group">
                        <label for="productKategori">Tanggal Lahir:</label>
                        <input type="date" class="form-control" id="productKategori" name="productKategori" required>
                      </div>
                      <input type="submit" class="btn btn-primary" name="kirim" value="kirim">
                    </form>

                    <?php
                    if (isset($_POST["kirim"])) {
                      $gambar = $_FILES["productGambar"]["name"];
                      $namaProduk = $_POST["productName"];
                      $kategori = $_POST["productKategori"];
                      $sumber = $_FILES['productGambar']['tmp_name'];
                      $folder = 'assets/img/';

                      move_uploaded_file($sumber, $folder . $gambar);

                      // Mengasumsikan $conn adalah objek koneksi ke database
                      $insert = mysqli_query($conn, "INSERT INTO table_member VALUES(NULL, '$gambar', '$namaProduk', '$kategori')");

                      if ($insert) {
                        echo "Data berhasil dimasukkan";
                      } else {
                        echo "Data gagal dimasukkan";
                      }
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Edit Produk -->
            <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Form edit produk -->
                    <form method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id">
                      <div class="form-group">
                        <label for="editProductName">Gambar:</label>
                        <input type="hidden" name="img" value="<?php echo $file ?>">
                        <input type="file" name="gambar" required>
                      </div>
                      <div class="form-group">
                        <label for="editProductName">Nama Produk:</label>
                        <input type="text" class="form-control" id="editProductName" name="editProductName" value="<?php echo $nama ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="editProductPrice">Kategori:</label>
                        <input type="text" class="form-control" id="editProductPrice" name="editKategori" value="<?php echo $kategori ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="editProductPrice">Harga:</label>
                        <input type="text" class="form-control" id="editProductPrice" name="editProductPrice" value="<?php echo $harga ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="editProductStock">Stok:</label>
                        <input type="text" class="form-control" id="editProductStock" name="editProductStock" value="<?php echo $stok ?>" required>
                      </div>
                      <input type="submit" class="btn btn-primary" name="kirim" value="kirim">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>