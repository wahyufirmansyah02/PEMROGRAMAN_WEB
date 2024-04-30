<?php
    include 'koneksi.php'; 

    $query = "SELECT * FROM tb_anggaran";
    $sql = mysqli_query($conn, $query);

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
              <h1>DATA TAMPIL</h1>
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
                while($result = mysqli_fetch_assoc($sql)){
            ?>
            <tr>
                <th scope="row">
                    <?php echo $result['no'];?>
                </th>
                <td>
                    <?php echo $result['nama'];?>
                </td>
                <td>
                    <?php echo $result['jenis_kelamin'];?>
                </td>
                <td>
                    <?php echo $result['anggaran'];?>
                </td>
                <td>
                    <?php echo $result['nominal'];?>
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
        </table>
        </div>
      
</body>
</html>