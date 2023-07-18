<?php 
 include_once("config.php");
 ?>
  

<form action="?url=tambah_dosen" method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NIDN</label>
    <input type="text" class="form-control" name="nidn" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <input type="text" class="form-control" name="jabatan">
  </div>

  <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
  <a href="?url=dosen" class="btn btn-danger btn-icon-split">
    <span class="text">Cancel</span>
  </a>
</form>
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $nidn= $_POST['nidn'];
    $nama= $_POST['nama'];
    $jabatan = $_POST['jabatan'];


    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result= mysqli_query($koneksi, "INSERT INTO dosen(nidn,nama,jabatan) VALUES('$nidn','$nama','$jabatan')");

    // Show message when user added
    echo "User added successfully. <a href='?url=dosen'>View data</a>";
}
?>