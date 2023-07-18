<?php 
 include_once("config.php");
 ?>

<form action="?url=tambah_mahasiswa" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nim</label>
    <input type="text" class="form-control" name="nim" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prodi</label>
    <input type="text" class="form-control" name="nama_prodi">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Foto</label>
  <input type="file" name="berkas" />
</div>

  <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
  <a href="?url=mahasiswa" class="btn btn-danger btn-icon-split">
    <span class="text">Cancel</span>
  </a>
</form>
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nim= $_POST['nim'];
    $nama= $_POST['nama'];
    $nama_prodi = $_POST['nama_prodi'];
    $alamat= $_POST['alamat'];
    $foto= $_FILES['berkas']['name'];
    $namaFile = $_FILES['berkas']['name'];
    $namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "uploads/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
} else {
    echo "Upload Gagal!";
}


    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result= mysqli_query($koneksi, "INSERT INTO mahasiswa(foto,nim,nama,nama_prodi,alamat) VALUES('$foto','$nim','$nama','$nama_prodi','$alamat')");

    // Show message when user added
    echo "User added successfully. <a href='?url=mahasiswa'>View Alat</a>";
}
?>