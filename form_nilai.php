<?php 
require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .form-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f7f7f7;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
        font-weight: bold;
    }
    .form-input {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .form-button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <div class="form-container">
    <form method="post" action="proses.php">
        <div class="form-group">
        <label class="form-label" for="nama">Nama Mahasiswa:</label>
        <input class="form-input" type="text" id="nama" name="nama">
      
        <label class="form-label" for="nim">Nim:</label>
        <input class="form-input" type="text" id="nim" name="nim">
        
        <label class="form-label" for="jurusan">Prodi:</label>
        <input class="form-input" type="text" id="jurusan" name="jurusan">
        
        <label class="form-label" for="semester">Semester:</label>
        <input class="form-input" type="number" id="semester" name="semester">
        </div>
        <input class="form-button" type="submit" name="proses" type="submit" value="Simpan"/>
    </form>
    </div>
</body>
</html>
