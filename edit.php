<?php
    include 'koneksi.php';

    $nama           = '';
    $jenis_kelamin  = '';
    $anggaran       = '';
    $nominal        = '';
    if (isset($_GET['edit'])){
        $no = $_GET['edit'];

        $query = "SELECT * FROM tb_anggaran WHERE no = '$no';";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);
            $nama           = $result['nama'];
            $jenis_kelamin  = $result['jenis_kelamin'];
            $anggaran       = $result['anggaran'];
            $nominal        = $result['nominal'];
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
    <form method="POST" action="proses.php">
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
                    <h1>EDIT DATA</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    CRUD <cite title="Source Title">Sederhana</cite>
                </figcaption>
            </figure>
        </div>
        <input type="text" value="<?php echo $no; ?>" name="no">
        <div class="container">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="jenis_kelamin">
                        <option selected>-- Pilih --</option>
                        <option <?php if($jenis_kelamin = 'Laki-Laki'){echo "selected";} ?> value="Laki-Laki">Laki Laki</option>
                        <option <?php if($jenis_kelamin = 'Perempuan'){echo "selected";} ?> value="perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Anggaran</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="anggaran" id="anggaran" value="<?php echo $anggaran; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-3">
                    <input type="number" class="form-control" name="nominal" id="nominal" value="<?php echo $nominal; ?>">
                </div>
            </div>
            <div>
                <button type="submit" name="edit" value="edit" class="btn btn-primary">Edit Data</button>
                <a href="uts.php" type="reset" class="btn btn-light">Cancel</button>
            </div>
        </div>
    </form>
</body>
</html>
