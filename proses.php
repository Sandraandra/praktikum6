<?php 
require_once 'dbkoneksi.php';
?>
<?php 
   $_nama = $_POST['nama'];
   $_nim = $_POST['nim'];
   $_jurusan = $_POST['jurusan'];
   $_semester = $_POST['semester'];
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama;
   $ar_data[]=$_nim;
   $ar_data[]=$_jurusan;
   $ar_data[]=$_semester;

   if($_proses == "Simpan"){

    $sql = "INSERT INTO mahasiswa (nama,nim,jurusan,semester) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];
    $sql = "UPDATE mahasiswa SET nama=?,nim=?,jurusan=?,
    semester=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php');
?>