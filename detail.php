<?php  

$produk = $_GET['id'];
$file = $_GET['gambar'];
$name = $_GET['nama'];
$price = $_GET['harga'];

require "dbconnect.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="detail.css">
  </head>
  <body class="bg-danger">
    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="images p-3">
                                <div class="text-center p-4"> <img src="Admin/assets/img/<?= $file ?>"  width="350px" /> </div>
                                <!-- <div class="thumbnail text-center"> <img onclick="change_image(this)" src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)" src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span class="ml-1"><a href="index.php" class="text-black" style="text-decoration: none;">Back</a></span> </div> <i class="fa fa-shopping-cart text-muted"></i>
                                </div>
                                <input type="hidden" name="id_produk" value="<?php echo $produk ?>">
                                <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">Orianz</span>
                                    <h5 class="text-uppercase"><?= $name ?></h5>
                                    <div class="price d-flex flex-row align-items-center"> <span class="act-price">Rp.<?= $price ?></span>
                                        <!-- <div class="ml-2"> <small class="dis-price">$59</small> <span>40% OFF</span> </div> -->
                                    </div>
                                </div>
                                <p class="about">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut nihil consequuntur amet numquam autem architecto possimus odio cum. Ducimus ex voluptas porro consectetur? Reiciendis eum, quis ipsum iure voluptate perspiciatis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        function change_image(image){
var container = document.getElementById("main-image");
container.src = image.src;
}
document.addEventListener("DOMContentLoaded", function(event) {
});
    </script>
  </body>
</html>