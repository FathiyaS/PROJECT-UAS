
<?php

include_once("config.php");


$result = mysqli_query($koneksi, "SELECT * FROM  dosen ");

?>

<html>
<head>
    <title>Data User</title>
</head>

<body>
<b>Data Dosen</b><br>
<a href="?url=tambah_dosen" class="btn btn-primary btn-icon-split">
    <span class="text">Tambah Data</span>
</a><br><br>


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Dosen</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

    <tr>
        <th>NIDN</th><th>Nama</th><th>Jabatan</th><th>Aksi</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $user_data['nidn'];?></td>
        <td><?php echo $user_data['nama'];?></td>
        <td><?php echo $user_data['jabatan'];?></td>
        <td align="center"><a href="edit_dosen.php?nidn=<?php echo $user_data['nidn'];?>"><i class="far fa-edit"></i></a> | <a href="hapus_dosen.php?nidn=<?php echo $user_data['nidn'];?>"><i class="fas fa-trash"></i></a></td>
        </tr>

    <?php }?>
</table>
</div>
</div>
</div>
</div>
</body>

</html>
