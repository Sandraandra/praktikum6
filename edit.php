<?php
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    $sql = "SELECT * FROM mahasiswa WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    $row = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 0 auto;
        }
        label {
            margin-bottom: 5px;
        }
        input, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="proses.php">
        <label for="nama">Nama Mahasiswa:</label>
        <input id="nama" name="nama" type="text" value="<?= $row['nama'] ?>">

        <label for="nim">Nim:</label>
        <input id="nim" name="nim" type="text" value="<?= $row['nim'] ?>">

        <label for="jurusan">Prodi:</label>
        <input id="jurusan" name="jurusan" type="text" value="<?= $row['jurusan'] ?>">

        <label for="semester">Semester:</label>
        <input id="semester" name="semester" type="text" value="<?= $row['semester'] ?>">

        <?php $button = (empty($_idedit)) ? "Simpan" : "Update"; ?>
        <input type="submit" name="proses" type="submit" value="<?= $button ?>" />
        <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
    </form>
</body>
</html>
