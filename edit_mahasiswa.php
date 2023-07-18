<?php 
 include_once("config.php");

 // Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $nim= $_POST['nim'];
    $nama= $_POST['nama'];
    $nama_prodi= $_POST['nama_prodi'];
    $alamat= $_POST['alamat'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE mahasiswa SET  nim='$nim, 'nama='$nama', nama_prodi='$nama_prodi', alamat='$alamat' WHERE nim=$nim");

}
?>


<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $nim= $user_data['nim'];
    $nama= $user_data['nama'];
    $nama_prodi= $user_data['nama_prodi'];
    $alamat= $user_data['alamat'];
}
?>
<html>
    <head>
        <body>
        <form action="?url=edit_mahasiswa" method="post" enctype="multipart/form-data">
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nim</label>
    <input type="text" class="form-control" name="nama" value=<?php echo $nim;?>>
  </div>
        <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" value=<?php echo $nama;?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prodi</label>
    <input type="text" class="form-control" name="nama_prodi" value=<?php echo $nama_prodi;?>>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value=<?php echo $alamat;?>>
  </div>

  <button type="Submit" name="update" class="btn btn-primary">Submit</button>
  <a href="?url=mahasiswa" class="btn btn-danger btn-icon-split">
    <span class="text">Cancel</span>
  </a>
</form>
        </body>
    </head>
</html>


