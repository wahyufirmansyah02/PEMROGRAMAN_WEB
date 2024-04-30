
<?php
    include 'koneksi.php'; 
    $jenis_kelamin  = '';
    $data_laki_laki = '';
    $query = "SELECT * FROM tb_anggaran WHERE jenis_kelamin = '$jenis_kelamin';";
    $sql = mysqli_query($conn, $query);

    if (mysqli_num_rows($sql) > 0) {
        // Mengambil setiap baris data dan menyimpannya dalam array
        $data_laki_laki = array();
        while ($row = mysqli_fetch_assoc($sql)) {
            $data_laki_laki[] = $row;
        }
    } else {
        echo "Tidak ada data laki-laki yang ditemukan.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Website Iuran</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="uts.php">
            <img src="gambar1.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            UTS PEMROGRAMAN WEB
          </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
              <h1>DATA LAKI LAKI</h1>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD <cite title="Source Title">Sederhana</cite>
            </figcaption>
          </figure>
      </div>
      <div class="container">

        <a href="tambah.php" type="button" class="btn btn-primary">Tambah Data</a>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="data_lakilaki.php" type="button" class="btn btn-primary">Laki Laki</a>
            <a href="data_perempuan.php" type="button" class="btn btn-primary">Perempuan</a>
        </div>

      </div>
      
      <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Anggaran</th>
                <th scope="col">Nominal</th>
                <th scope="col">Opsi</th>
            </tr>
            </thead>
            <tbody>
            <?php
                if (mysqli_num_rows($sql) > 0) {
                    // Mengambil setiap baris data dan menyimpannya dalam array
                    $data_laki_laki = array();
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $data_laki_laki[] = $row;
                    }
            ?>
            <tr>
                <th scope="row">
                    <?php echo $data_laki_laki['no'];?>
                </th>
                <td>
                    <?php echo $data_laki_laki['nama'];?>
                </td>
                <td>
                    <?php echo $data_laki_laki['jenis_kelamin'];?>
                </td>
                <td>
                    <?php echo $data_laki_laki['anggaran'];?>
                </td>
                <td>
                    <?php echo $data_laki_laki['nominal'];?>
                </td>
                <td>
                    <form method="GET" action="">
                    <a href="edit.php?edit=<?php echo $result['no'];?>" type="button" class="btn btn-warning">Edit</a>
                    <form method="GET" action="proses.php">
                    <a href="proses.php?hapus=<?php echo $result['no']; ?>" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            <?php
                }
            ?>
            </tbody>
            <div class="container">
            <h1>TIDAK TAMPIL DATA DENGAN JENIS PEREMPUAN, TOLONG SOLUSINYA SUHU!!!!</h1>
            </div>
        </table>
        </div>
      
</body>
</html>