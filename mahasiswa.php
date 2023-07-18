<style>
    th{
        text-align: center;
    }
    .tengah{
        text-align:center;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM  mahasiswa ");

?>

<html>
<head>
    <title>Data User</title>
</head>

<body>
<b>Data Mahasiswa</b><br>
<a href="?url=tambah_mahasiswa" class="btn btn-primary btn-icon-split">
    <span class="text">Tambah Data</span>
</a><br><br>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <tr>
        <th>Nim</th><th>Foto</th><th>Nama</th> <th>Prodi</th> <th>Alamat</th> <th>Aksi</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $user_data['nim'];?></td>
        <td align="center"><img width="100" height="200" src="uploads/<?php echo $user_data['foto'];?>"></td>
        <td><?php echo $user_data['nama'];?></td>
        <td><?php echo $user_data['nama_prodi'];?></td>
        <td><?php echo $user_data['alamat'];?></td>
        <td class="tengah"><a href="edit_mahasiswa.php?nim=<?php echo $user_data['nim'];?>"><i class="far fa-edit"></i></a> | <a href="hapus_mahasiswa.php?nim=<?php echo $user_data['nim'];?>"><i class="fas fa-trash"></i></a></td>
        </tr>

    <?php }?>
</table>
</div>
</div>
</div>
</div>
</body>

</html>
