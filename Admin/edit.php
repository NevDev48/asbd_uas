<?php
require '../dbconnect.php';

$data = mysqli_query($conn, "SELECT * FROM table_member
WHERE id_member = '" . $_GET['id'] . "'");
$panggil = mysqli_fetch_array($data);
$file = $panggil['gambar'];
$nama = $panggil['nama_member'];
$kategori = $panggil['tanggal_member'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>

<body>

    <h1 style="text-align: center;">HALAMAN EDIT:</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td> nama </td>
                <td> : </td>
                <td>
                    <input type="text" name="nama" value="<?php echo $nama ?>">
                </td>
            </tr>
            <tr>
                <td> pilih file </td>
                <td> : </td>
                <td>
                    <input type="hidden" name="img" value="<?php echo $file ?>">
                    <input type="file" name="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><img src="img/<?php echo $file ?>" alt="" width="300px"></td>
            </tr>
            <tr>
                <td> Tanggal Lahir </td>
                <td> : </td>
                <td>
                    <input type="date" name="kategori" value="<?php echo $kategori ?>">
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="kirim" value="update"> </td>
            </tr>
            <?php
            if (isset($_POST['kirim'])) {
                $file = $_FILES['gambar']['name'];
                $nama = $_POST['nama'];
                $kategori = $_POST['kategori'];

                $sumber = $_FILES['gambar']['tmp_name'];
                $folder = 'assets/img';

                if ($file != '') {
                    move_uploaded_file($sumber, $folder . $file);
                    $update = mysqli_query($conn, "UPDATE table_member SET
                        gambar = '" . $file . "',
                        nama_member = '" . $nama . "',
                        tanggal_member = '" . $kategori . "'
                        WHERE id_member = '" . $_GET['id'] . "'
                    ");
                } else {
                    $update = mysqli_query($conn, "UPDATE table_member SET
                        nama_member = '" . $nama . "',
                        tanggal_member = '" . $kategori . "'
                        WHERE id_member = '" . $_GET['id'] . "'
                    ");
                }

                if ($update) {
                    header('location:tables.php');
                } else {
                    echo "gagal update";
                }
            }
            ?>

        </table>
    </form>
</body>

</html>